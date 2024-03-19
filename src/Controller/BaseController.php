<?php
namespace Cyber\Controller;
use Slim\Views\Twig;
use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;


class BaseController {
    protected $request;
    protected $response;

    protected $view;
   
  

    public function __construct(Request $request, Response $response, Twig $view)
    {
        $this->request = $request;
        $this->response = $response;
        $this->view = $view;
       
    }
}