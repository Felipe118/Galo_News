<?php
    namespace Src\Controllers;

    use Src\Utils\Controller\Controller;

    class IndexController extends Controller
    {
        public function home(){
            return $this->view('home.home');
        }


    }