<?php

namespace Cyber\Controller;
use Cyber\Controller\BaseController;
use Cyber\HttpRequest\HttpRequest;
use Slim\Views\Twig;
use Cyber\Header\Header;


 class  HomeController extends BaseController{
public function  __construct($request, $response, Twig $view) {
    parent::__construct($request, $response, $view);
}

public function home(){
    try {
            return $this->view->render($this->response, 'index.twig', [
                'data' => []
            ]);
    } catch (\Throwable $e) {
        return Header::validateRequest($this->response, '500', $e->getMessage());
    }
}

public function convert(){
    try {
        $formData = $this->request->getParsedBody();
        $valueCoin =$formData['moeda'];

        $data = HttpRequest::convertCoins($this->response, $valueCoin);
       
        return $this->view->render($this->response, 'index.twig', ['data' => $data, 'valuecoin' => $valueCoin]);
    } catch (\Throwable $e) {
        return Header::validateRequest($this->response, '500', $e->getMessage());
    }
    }
}
