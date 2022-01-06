<?php
namespace Src\Route;

use App\Utils\Init\Bootstrap;

class Routes extends Bootstrap{
    

   


    public function InitRoutes(){
        $route['/'] = [
            'route' => '',
            'controller' => '',
            'action' => ''
        ];

        $this->setRoutes($route);

    }

   
    

}