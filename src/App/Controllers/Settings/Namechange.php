<?php
namespace Cosmic\App\Controllers\Settings;

use Cosmic\App\Config;
use Cosmic\App\Core;

use Cosmic\App\Models\Core as Settings;
use Cosmic\App\Models\Ban;
use Cosmic\App\Models\Player;
use Cosmic\App\Models\Room;
use Cosmic\App\Models\Log;

use Cosmic\System\LocaleService;
use Cosmic\System\ViewService;
use Cosmic\System\ValidationService;

use Cosmic\App\Library\HotelApi;

use stdClass;

class Namechange
{
    private $settings;

    public function __construct()
    {
        $this->settings = Settings::settings();
    }

    public function validate()
    {
        $amount = Player::getCurrencys(request()->player->id)[$this->settings->namechange_currency_type]->amount;
        if ($amount < $this->settings->namechange_price) {
            response()->json(["status" => "error", "message" => LocaleService::get('core/notification/not_enough_points')]);
        }
      
        HotelApi::execute('changeusername', array('user_id' => request()->player->id));
        HotelApi::execute('givepoints', array('user_id' => request()->player->id, 'points' => - $amount + $amount - $this->settings->namechange_price, 'type' => $this->settings->namechange_currency_type));
      
        response()->json(["status" => "success", "replacepage" => "/client"]);
    }

    public function availability()
    {
        $username = input('username');

        $userCheck = preg_replace('/[^a-zA-Z0-9\d\-\?!@:\.,]/i', '', $username);
        $player = Player::getDataByUsername($username, array('id'));

        if ($userCheck != $username || !empty($player)) {
            response()->json(["status" => "unavailable"]);
        }
    
        response()->json(["status" => "available"]);
    }



    public function index()
    {
        $currency = Settings::getCurrencyByType($this->settings->namechange_currency_type)->currency;
      
        ViewService::renderTemplate('Settings/namechange.html', [
            'title' => LocaleService::get('core/title/settings/namechange'),
            'page'  => 'settings_namechange',
            'currency' => $currency,
            'price' => $this->settings->namechange_price
        ]);
    }
}
