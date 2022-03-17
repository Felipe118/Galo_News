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
            $first_news = array_splice($new,3,-3);
        //    echo '<pre>';
        //     print_r($first_news[0]['titulo']);
        //     echo '</pre>';
         
            //die;
            return $this->view('home.home', [
                'news' => $new,
                'capaOne' => $first_news[0],
                'capaTwo' =>  $first_news[1],
                'capaTree' => $first_news[2],
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