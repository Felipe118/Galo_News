<?php

namespace Src\Controllers;

use Src\Utils\Controller\Controller;
use Src\Utils\Model\Container;

class NoticiasController extends Controller
{
    public  function  materias()
    {   session_start();
        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $this->view('news.news',[
            'news' => $news
        ]);
    }

    public function createMaterias()
    {
        return $this->view('news.create');
    }

    public function createMateriasPost()
    {
        session_start();

        $noticias = Container::getModel('News');
        $noticias->__set('titulo',$_POST['titulo']);
        $noticias->__set('resumo',$_POST['resumo']);
        $noticias->__set('noticia',$_POST['noticia']);
        $noticias->__set('tag',$_POST['tag']);
        $noticias->__set('fk_jornalista',$_SESSION['id']);
        $noticias->createNews();

        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $this->view('news.news',[
                'message' => 'Matéria cadastrada com sucesso',
                'news' => $news
            ]);

    }

    public function deleteNews()
    {

        $noticias = Container::getModel('News');
        $noticias->__set('id',$_POST['id']);
        $noticias->deleteNews();
        session_start();
        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $this->view('news.news',[
            'message' => 'Matéria deletada com sucesso',
            'news' => $news
        ]);
    }

    public function editNews()
    {
        session_start();
        $listNews = Container::getModel('News');
        $id = $_GET['registro'];
        $listNews->__set('id',$id);
        $new = $listNews->listNewsOneEdit();

        if($new['fk_jornalista'] == $_SESSION['id']){
            return $this->view('news.edit', [
                'news' => $new
            ]);
        }else{
            return $this->view('home.homeLogado', [
                'message' => 'Erro essa matéria não foi cadastrada por você'
            ]);
        }


        //return $this->view('news.edit');
    }

    public function editNewsPost()
    {
        session_start();
        $news = Container::getModel('News');
        $id = $_POST['id'];
        $news->__set('id',$id);
        $news->__set('titulo',$_POST['titulo']);
        $news->__set('resumo',$_POST['resumo']);
        $news->__set('noticia',$_POST['noticia']);
        $news->__set('tag',$_POST['tag']);

//        echo '<pre>';
//        var_dump($news);
//        echo '</pre>';

        $news->editNews();

        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $this->view('news.news',[
            'message' => 'Matéria editada com sucesso',
            'news' => $news
        ]);

    }

    public  function  listNewsForJornalist()
    {
        session_start();
        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $news;
    }

    public function verifyUserLogged()
    {
        session_start();
        if($_SESSION['autenticado'] == false){
            header("location:/News_Galo/");
        }

    }
}