<?php
namespace Cyber\Dependecies;

use Slim\Views\Twig;
use Slim\Views\TwigMiddleware;
use Illuminate\Database\Capsule\Manager as Capsule;
use Slim\Factory\AppFactory;
use Cyber\Config\Config;


class Dependeces extends Config{
   
    public static function createApp()
    {
        $app = AppFactory::create();
        $app->addRoutingMiddleware();
        
        $twig = self::configureTwig();
        $app->add(TwigMiddleware::create($app, $twig));

        self::configureEloquent();
        
        return $app;
    }

    protected static function configureTwig()
    {
       
       $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . './../../public/view');
       $twig = new Twig($loader, [
           'cache' => false,
       ]);

       return $twig;
    
    }

    protected static function configureEloquent()
    {
        $capsule = new Capsule;
        $capsule->addConnection(self::connectionDb());

        // Adicione outras configurações do Eloquent, se necessário

        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $capsule->getConnection();
    }
}



