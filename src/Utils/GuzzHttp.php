<?php
namespace Cyber\Utils;

use Cyber\Header\Header;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
class GuzzHttp
{

    public static function clientHttp()
    {
        try {
            $urlEndpoint = $_ENV['BASE_URL'];
        
           return new Client([
                'base_uri' => $urlEndpoint,
                'verify' => false,
                'headers' => [
                    'Content-Type' => 'application/x-www-form-urlencoded'
                ],
            ]);
           
        } catch (\Throwable $th) {
            return Header::validateRequest((int) 500, $th->getMessage());
        }
    }
}
