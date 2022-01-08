<?php
namespace Src\Route;

use Src\Utils\Init\Bootstrap;

class Routes extends Bootstrap{
    

   


    public function InitRoutes(){
        $route['/'] = [
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'home'
        ];
        $route['auth'] = [
            'route' => '/auth',
            'controller' => 'AuthController',
            'action' => 'auth'
        ];
        $route['authPost'] = [
            'route' => '/authPost',
            'controller' => 'AuthController',
            'action' => 'authPost'
        ];


        $this->setRoutes($route);

    }

   
    

}