<?php
/**
 * OriginPHP Framework
 * Copyright 2018 - 2021 Jamiel Sharief.
 *
 * Licensed under The MIT License
 * The above copyright notice and this permission notice shall be included in all copies or substantial
 * portions of the Software.
 *
 * @copyright   Copyright (c) Jamiel Sharief
 * @link        https://www.originphp.com
 * @license     https://opensource.org/licenses/mit-license.php MIT License
 */
declare(strict_types = 1);
namespace Origin\Socket;

use InvalidArgumentException;
use Origin\Socket\Exception\SocketException;
use Origin\Socket\Exception\SocketTimeoutException;

class Socket
{
    /**
     * Holds the configuration
     *
     * @var array
     */
    protected $config = [];

    /**
     * Holds the socket connection
     *
     * @var resource|null
     */
    protected $connection = null;

    /**
     * Holds the last error
     *
     * @var string
     */
    protected $lastError = null;

    /**
     * @var array
     */
    protected $errors = [];

    /**
     * Encryption methods
     *
     * @internal sslv2 not supported . e.g SSLv2 unavailable in this PHP version
     * @see https://www.php.net/manual/en/function.stream-socket-enable-crypto.php
     * @var array
     */
    protected $encryptionMethods = [
        'ssl' => STREAM_CRYPTO_METHOD_SSLv23_CLIENT,
        'sslv2' => STREAM_CRYPTO_METHOD_SSLv2_CLIENT,
        'sslv23' => STREAM_CRYPTO_METHOD_SSLv23_CLIENT,
        'sslv3' => STREAM_CRYPTO_METHOD_SSLv3_CLIENT,
        'tls' => STREAM_CRYPTO_METHOD_TLS_CLIENT,
        'tlsv1' => STREAM_CRYPTO_METHOD_TLSv1_0_CLIENT,
        'tlsv11' => STREAM_CRYPTO_METHOD_TLSv1_1_CLIENT,
        'tlsv12' => STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT,
    ];
    
    public function __construct(array $options = [])
    {
        $options += [
            'host' => 'localhost',
            'protocol' => 'tcp',
            'port' => 80,
            'timeout' => 30,
            'persistent' => false,
            'context' => null // an array
        ];
        $this->config = $options;
    }

    /**
     * Connects to the socket, is a connection is already connected then it will be disconnected
     * first.
     *
     * @return bool
     */
    public function connect() : bool
    {
        if ($this->connection) {
            $this->disconnect();
        }

        set_error_handler([$this, 'errorHandler']);
        $this->connection = stream_socket_client(
            $this->socketAddress(),
            $errorNumber,
            $errorMessage,
            $this->config['timeout'],
            $this->config['persistent']  ? STREAM_CLIENT_PERSISTENT : STREAM_CLIENT_CONNECT, // flags
            stream_context_create($this->config['context'])
        );
        restore_error_handler();

        if (! empty($errorNumber) || ! empty($errorMessage)) {
            $this->lastError("{$errorNumber}:{$errorMessage}");
            throw new SocketException($errorMessage);
        }
    
        /**
         * Throw exception on ErrorHandler errors (can be multiple)
         */
        if (! $this->connection && $this->errors) {
            throw new SocketException(implode("\n", $this->errors));
        }

        $connected = is_resource($this->connection);
        if ($connected) {
            stream_set_timeout($this->connection, $this->config['timeout']);
        }

        return $connected;
    }

    /**
     * Enables Encryption
     *
     * @see https://www.php.net/manual/en/function.stream-socket-enable-crypto.php
     * @param string $type ssl,sslv2,sslv23,sslv3,tls,tlsv1,tlsv11,tlsv12
     * @return boolean
     */
    public function enableEncryption(string $type) : bool
    {
        return $this->enableCrypto($type, true);
    }

    /**
     * Disables Encryption
     *
     * @see https://www.php.net/manual/en/function.stream-socket-enable-crypto.php
     * @param string $type ssl,sslv2,sslv23,sslv3,tls,tlsv1,tlsv11,tlsv12
     * @return boolean
     */
    public function disableEncryption(string $type) : bool
    {
        return $this->enableCrypto($type, false);
    }

    /**
     * Enables (or disables crypto) on a socket
     *
     * @see https://www.php.net/manual/en/function.stream-socket-enable-crypto.php
     * @param string $encryptionMethod ssl,sslv2,sslv23,sslv3,tls,tlsv1,tlsv11,tlsv12
     * @param boolean $enable
     * @return boolean
     */
    private function enableCrypto(string $encryptionMethod, bool $enable = true) : bool
    {
        if (! array_key_exists($encryptionMethod, $this->encryptionMethods)) {
            throw new InvalidArgumentException('Invalid Encryption method.');
        }

        try {
            $result = stream_socket_enable_crypto(
                $this->connection,
                $enable,
                $this->encryptionMethods[$encryptionMethod]
            );
        } catch (\Exception $exception) {
            throw new SocketException($exception->getMessage());
        }

        // returns true, false or 0
        return $result !== 0;
    }

    /**
     * Reads data from the socket
     *
     * @param integer $bytes
     * @return string|null
     * @throws \Origin\Socket\Exception\SocketTimeoutException
     */
    public function read(int $bytes = 1024) : ?string
    {
        if (! $this->connection) {
            return null;
        }
        $buffer = null;
        if (! feof($this->connection)) {
            $buffer = fread($this->connection, $bytes);
            $info = stream_get_meta_data($this->connection);
            if ($info['timed_out']) {
                throw new SocketTimeoutException('Connection timed out.');
            }
        }

        return $buffer;
    }

    /**
    * Writes data to the socket
    *
    * @param string $data
    * @return int
    */
    public function write(string $data) :int
    {
        if (! $this->connection) {
            return 0;
        }

        $bytes = fwrite($this->connection, $data);

        return ($bytes === false) ? 0 : $bytes;
    }

    /**
     * Gets the hostname of the connection
     *
     * @return string
     */
    public function host() : string
    {
        $ipAddress = $this->config['host'];
        if (filter_var($ipAddress, FILTER_VALIDATE_IP) === false) {
            $ipAddress = $this->address();
        }

        return gethostbyaddr($ipAddress);
    }

    /**
     * Gets the IP address of the connection
     *
     * @return string
     */
    public function address() : string
    {
        $ipAddress = $this->config['host'];
        if (filter_var($ipAddress, FILTER_VALIDATE_IP) === false) {
            $ipAddress = gethostbyname($ipAddress);
        }

        return $ipAddress;
    }

    /**
     * Disconnects the current connection
     *
     * @return boolean
     */
    public function disconnect() : bool
    {
        if (is_resource($this->connection) && fclose($this->connection)) {
            $this->connection = null;
        }

        return ($this->connection === null);
    }

    /**
     * Last error setter and getter
     *
     * @param string $error
     * @return string|null
     */
    public function lastError(string $error = null) : ?string
    {
        if ($error === null) {
            return $this->lastError;
        }

        $this->lastError = $error;

        return null;
    }

    /**
     * The error handler used when creating the connection
     *
     * @param int $code
     * @param string $message
     * @return void
     */
    public function errorHandler(int $code, string $message) : void
    {
        $this->errors[] = $message;
    }

    /**
     * Builds the socket address
     *
     * @return string
     */
    private function socketAddress() : string
    {
        $scheme = $this->config['protocol'] ?  $this->config['protocol'] . '://' : null;

        return $scheme . $this->config['host'] . ':' . $this->config['port'];
    }
}
