<?php
namespace CYber\HttpRequest;
use Exception;
use Cyber\Header\Header;
class HttpRequest
{

    public static function convertCoins($response, $valuecoin)
    {

        $API_KEY = $_ENV['API_KEY'];
        $BASE_CURRENCY= $_ENV['BASE_CURRENCY'];
        $BASE_URL = $_ENV['BASE_URL'];
        $TARGET_CURRENCY = $_ENV['TARGET_CURRENCY'];
        $req_url = "$BASE_URL/$API_KEY/latest/$BASE_CURRENCY";
        $response_json = file_get_contents($req_url);
            try {
                $data = json_decode($response_json);
                if ('success' === $data->result) {
                
                $BRL = round($valuecoin * $data->conversion_rates->$TARGET_CURRENCY, 2);
                $EUR = round($valuecoin * $data->conversion_rates->EUR, 2);
                $GBP = round($valuecoin * $data->conversion_rates->GBP, 2);
                $JPY = round($valuecoin * $data->conversion_rates->JPY, 2);

                $coins = array('BRL' => $BRL, 'EUR' => $EUR, 'GBP' => $GBP, 'JPY' => $JPY);
                  
                return $coins;
                }else{
                return  ['message' => 'Não foi possivel conveter']; 
                }

            } catch (Exception $e) {
               return Header::validateRequest($response, '200', $e->getMessage());
            }
    }
}