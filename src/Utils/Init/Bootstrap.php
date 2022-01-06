<?php
    namespace Src\Ultils;

    abstract class Bootstrap{
        private $routes;

        public abstract function initRoutes();

        public function __construct()
        {
            $this->InitRoutes();
            $this->run($this->getUrl());
        }
    
        public function getRoutes() :array
        {
            return $this->routes;
        }
        public function setRoutes(Array $routes){
            $this->routes = $routes;
        }

        protected function run($url){
            foreach ($this->getRoutes() as $routes)
            {
                if($url == $routes['route']){
                    $class = "Src\\Controllers\\".ucfirst($routes['controller']);
                    $controller = new $class;
                    $action = $routes['action'];
                    $controller->$action();
                }else{
                    echo "ERRO";
                }
            }
        }
        protected function getUrl(){
            return str_replace('/News_Galo', '',parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH));
        }
    }