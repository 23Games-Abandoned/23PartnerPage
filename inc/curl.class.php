<?php
 /**
 * 23PartnerPage
 *
 * @author      Paweł Otlewski <otlet@jest.guru>
 * @copyright   2015 PanOtlet
 * @link        http://panotlet.tk/23PartnerPage
 * @license     http://panotlet.tk/23PartnerPage/LICENSE
 */

namespace Siewo;


class curl {

    public function __construct($url){

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_TIMEOUT, 3);
        curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_HEADER, false);

        curl_setopt($curl, CURL_HTTP_VERSION_1_1, true);
        curl_setopt($curl, CURLOPT_ENCODING, "gzip, deflate");
        curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.9.0.3) Gecko/2008092417 Firefox/3.0.3");

        $return = curl_exec($curl);
        curl_close($curl);
        return $return;
    }

}