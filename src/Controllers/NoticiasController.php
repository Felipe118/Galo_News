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
}