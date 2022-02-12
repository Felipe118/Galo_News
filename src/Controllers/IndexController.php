<?php
    namespace Src\Controllers;

    use Src\Models\News;
    use Src\Utils\Controller\Controller;
    use Src\Utils\Model\Container;

    class IndexController extends Controller
    {
        public function home()
        {
            return $this->view('home.home');
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