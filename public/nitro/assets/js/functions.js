function isEmpty (str)
{
    if (typeof str === "string")
        str = str.trim();

    return (!str || 0 === str.length);
}

function chr (n)
{
    if (n < 128)
        return String.fromCharCode(n);
    else
        return "ÇüaâäaåçêëeïîìÄÅaæÆôöòûùÿÖÜ¢£¥₧ƒáíóúñÑªº¿⌐¬½¼¡«»░▒▓│┤╡╢╖╕╣║╗╝╜╛┐└┴┬├─┼╞╟╚╔╩╦╠═╬╧╨╤╥╙╘╒╓╫╪┘┌█▄▌▐▀αßΓπΣσµτΦΘΩδ∞φε∩≡±≥≤⌠⌡÷≈°∙·√ⁿ²■ "[n - 128];
}

function number_format (number, decimals, dec_point, thousands_point)
{
    if (number === null || !isFinite(number))
        throw new TypeError("number is not valid");

    if (!decimals)
    {
        var len = number.toString().split('.').length;
        decimals = len > 1 ? len : 0;
    }

    if (!dec_point)
        dec_point = ".";

    if (!thousands_point)
        thousands_point = ",";

    number = parseFloat(number).toFixed(decimals);

    number = number.replace(".", dec_point);

    var splitNum = number.split(dec_point);
    splitNum[0] = splitNum[0].replace(/\B(?=(\d{3})+(?!\d))/g, thousands_point);
    number = splitNum.join(dec_point);

    return number;
}

function parse_str (str, array)
{
    var strArr = String(str).replace(/^&/, '').replace(/&$/, '').split('&'),
        sal = strArr.length,
        i, j, ct, p, lastObj, obj, lastIter, undef, chr, tmp, key, value,
        postLeftBracketPos, keys, keysLen,
        fixStr = function (str)
        {
            return decodeURIComponent(str.replace(/\+/g, '%20'));
        };

    if (!array)
        array = this.window;

    for (i = 0; i < sal; i++)
    {
        tmp = strArr[i].split('=');
        key = fixStr(tmp[0]);
        value = (tmp.length < 2) ? '' : fixStr(tmp[1]);

        while (key.charAt(0) === ' ')
        {
            key = key.slice(1);
        }

        if (key.indexOf('\x00') > -1)
            key = key.slice(0, key.indexOf('\x00'));

        if (key && key.charAt(0) !== '[')
        {
            keys = [];
            postLeftBracketPos = 0;
            for (j = 0; j < key.length; j++)
            {
                if (key.charAt(j) === '[' && !postLeftBracketPos)
                    postLeftBracketPos = j + 1;
                else if (key.charAt(j) === ']')
                {
                    if (postLeftBracketPos)
                    {
                        if (!keys.length)
                            keys.push(key.slice(0, postLeftBracketPos - 1));

                        keys.push(key.substr(postLeftBracketPos, j - postLeftBracketPos));
                        postLeftBracketPos = 0;

                        if (key.charAt(j + 1) !== '[')
                            break;
                    }
                }
            }

            if (!keys.length)
                keys = [key];

            for (j = 0; j < keys[0].length; j++)
            {
                chr = keys[0].charAt(j);
                if (chr === ' ' || chr === '.' || chr === '[')
                    keys[0] = keys[0].substr(0, j) + '_' + keys[0].substr(j + 1);

                if (chr === '[')
                    break;
            }

            obj = array;
            for (j = 0, keysLen = keys.length; j < keysLen; j++)
            {
                key = keys[j].replace(/^['"]/, '').replace(/['"]$/, '');
                lastIter = j !== keys.length - 1;
                lastObj = obj;
                if ((key !== '' && key !== ' ') || j === 0)
                {
                    if (obj[key] === undef)
                        obj[key] = {};

                    obj = obj[key];
                }
                else
                {
                    // To insert new dimension
                    ct = -1;
                    for (p in obj)
                    {
                        if (obj.hasOwnProperty(p))
                        {
                            if (+p > ct && p.match(/^\d+$/g))
                                ct = +p;
                        }
                    }
                    key = ct + 1;
                }
            }
            lastObj[key] = value;
        }
    }
}