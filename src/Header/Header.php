<?php
 namespace Cyber\Header;

 class Header{
    public static function validateRequest($response, $status, $message){
        $response->getBody()->write(json_encode(['message' => $message]));
        return $response->withHeader('Content-Type', CONTENT_TYPE_JSON)->withStatus((int)$status);
    }


    public static function headerToArray($data, $response, $status, $message){
        $response->getBody()->write(json_encode(['data' => $data, 'message' => $message]));
        return $response->withHeader('Content-Type', CONTENT_TYPE_JSON)->withStatus((int)$status);
    }
}
 