<?php
    namespace Src\Controllers;

    use Src\Utils\Controller\Controller;

    class IndexController extends Controller
    {
        public function home()
        {
            return $this->view('home.home');
        }
        public function homeLogado()
        {
            session_start();
            
            if($_SESSION['permissao'] === 'admin'){
                return $this->view('home.homeLogado', [
                    'sessao' => $_SESSION['permissao']
                ]);
           }
            return $this->view('home.homeLogado');
        }


    }