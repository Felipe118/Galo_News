<?php
    namespace Src\Controllers;

    use Src\Models\News;
    use Src\Utils\Controller\Controller;
    use Src\Utils\Model\Container;

    class IndexController extends Controller
    {
        public function home()
        {
            //session_start();
            $news = Container::getModel('News');
            $new = $news->listNewsRecents();
            return $this->view('home.home', [
                'news' => $new,
                'capaOne' => $new[0],
                'capaTwo' =>  $new[1],
                'capaTree' => $new[2],
            ]);
        }
        public function homeLogado()
        {
            session_start();
            $news = Container::getModel('News');
            $new = $news->listNewsAll();
            if($_SESSION['permissao'] === 'admin'){
                return $this->view('home.homeLogado', [
                    'sessao' => $_SESSION['permissao'],
                    'news' => $new
                ]);
           }
            return $this->view('home.homeLogado',[
                'news' => $new
            ]);
        }


    }