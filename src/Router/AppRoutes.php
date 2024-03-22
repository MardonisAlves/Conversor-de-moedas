<?php
namespace Cyber\Router;
use Slim\Views\Twig;
use Illuminate\Database\Capsule\Manager as Capsule;
use Cyber\Config\Config;
use Slim\Views\TwigMiddleware;
use Slim\Factory\AppFactory;
use Cyber\Controller\HomeController;


class AppRoutes extends Config
{
    private $app;

    protected $view;
    public function __construct()
    {
        $this->app = self::createApp();
        $this->configureRoutes();
    }

    private function configureRoutes()
    {
        $this->configureHomeRoutes();
        $this->app->addErrorMiddleware(true, true, true);
        $this->app->run();
    }


    public static function createApp()
    {
        $app = AppFactory::create();
        $app->addRoutingMiddleware();
        $twig = self::configureTwig();
        $app->add(TwigMiddleware::create($app, $twig));
        self::configureEloquent();
        return $app;
    }

    protected static function configureEloquent()
    {
        $capsule = new Capsule;
        $capsule->addConnection(self::connectionDb());
        $capsule->setAsGlobal();
        $capsule->bootEloquent();
        $capsule->getConnection();
    }

    protected static function configureTwig()
    {
       $loader = new \Twig\Loader\FilesystemLoader(__DIR__ . './../../src/view');
       $twig = new Twig($loader, [
           'cache' => false,
       ]);
       return $twig;
    
    }

    private function configureHomeRoutes()
    {
        $this->app->get('/', function ($request, $response) {
            $homeControler = new HomeController($request, $response, self::configureTwig() );
            return $homeControler->home();
        });

        $this->app->post('/convert', function ($request, $response) {
            $homeControler = new HomeController($request, $response, self::configureTwig() );
            return $homeControler->convert();
        });
    }
}




