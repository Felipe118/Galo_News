<?php
namespace Src\Route;

use Src\Utils\Init\Bootstrap;

class Routes extends Bootstrap{
    

   


    public function InitRoutes(){
        $route['home'] = [
            'route' => '/',
            'controller' => 'IndexController',
            'action' => 'home'
        ];
        $route['homeLogado'] = [
            'route' => '/homeLogado',
            'controller' => 'IndexController',
            'action' => 'homeLogado'
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
        $route['authFirst'] = [
            'route' => '/auth-first',
            'controller' => 'AuthController',
            'action' => 'authFirstAcess'
        ];
        $route['authFirstPost'] = [
            'route' => '/auth-first-save',
            'controller' => 'AuthController',
            'action' => 'authFirstAcessPost'
        ];
        $route['logout'] = [
            'route' => '/logout',
            'controller' => 'AuthController',
            'action' => 'logout'
        ];


        $this->setRoutes($route);

    }

   
    

}