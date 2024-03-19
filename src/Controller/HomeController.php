<?php

namespace Cyber\Controller;
use Cyber\Controller\BaseController;
use Cyber\HttpRequest\HttpRequest;
use Slim\Views\Twig;

 class  HomeController extends BaseController{
public function  __construct($request, $response, Twig $view) {
    parent::__construct($request, $response, $view);
}

public function home(){
    try {
        
            $data = HttpRequest::convertCoins($this->request, $this->response);
            return $this->view->render($this->response, 'index.twig', [
                'data' => $data
            ]);
       
        
    } catch (\Throwable $th) {
      
    }
}
}