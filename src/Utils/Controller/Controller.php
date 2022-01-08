<?php
    namespace Src\Utils\Controller;

   class Controller
   {
        public function view(String $page, array $params = [] )
        {
            $page = str_replace('.','/',$page);
            $page .= '.twig.php'; 
            $loader = new \Twig\Loader\FilesystemLoader('./src/Views/');
            $twig = new \Twig\Environment($loader);

            echo $twig->render($page,$params);
        }

        public function viewDates(String $page, array $params = [] )
        {
            $page = str_replace('.','/',$page);
            $page .= '.twig.php'; 
            $loader = new \Twig\Loader\FilesystemLoader('./src/Views/');
            $twig = new \Twig\Environment($loader);

           // echo $twig->render($page,$params);
        }
    }