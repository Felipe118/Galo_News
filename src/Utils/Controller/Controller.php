<?php
    namespace App\Utils\Controller;



    

    class Controller{
        public function view(String $page, array $params = [] ){
            $page = str_replace('.','/',$page);
            $page .= '.twig.php'; 
            $loader = new \Twig\Loader\FilesystemLoader('../Projetos/App/views/');
            $twig = new \Twig\Environment($loader);

            echo $twig->render($page,$params);
        }
    }