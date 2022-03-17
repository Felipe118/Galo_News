<?php

namespace Src\Controllers;

use Src\Utils\Controller\Controller;
use Src\Utils\Model\Container;

class NoticiasController extends Controller
{
    public  function  materias()
    {
        $this->verifyUserLogged();
        $session = $this->permissao();
        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);
        $news = $listNews->listNews();

        return $this->view('news.news',[
            'news' => $news,
            'session' => $session
        ]);
    }

    public function createMaterias()
    {
        $this->verifyUserLogged();
        return $this->view('news.create');
    }

    public function createMateriasPost()
    {
        $this->verifyUserLogged();
        $noticias = Container::getModel('News');

        if(($_FILES['imagem']['name'] != '')){

            $image = $_FILES['imagem'];
            $pasta = "./assets/img/img-materias";
            $nameImage = $image['name'];
            $newNameImage = uniqid();
            $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));
            $path = $pasta."/".$newNameImage.".".$extension;

            if($extension != 'jpg' && $extension != 'png'){
                die("Tipo de arquivo não aceito, apenas jpg e png são aceitos!");
            }
            $img = move_uploaded_file($image['tmp_name'],$path);
            $noticias->__set('imagem',$path);
        }else{
            $noticias->__set('imagem', 'null');
        }


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
        $this->verifyUserLogged();
        $noticias = Container::getModel('News');

        $noticias->__set('id',$_POST['id']);
        $noticias->deleteNews();
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
        $this->verifyUserLogged();
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
        $this->verifyUserLogged();
        $new = Container::getModel('News');
        $id = $_POST['id'];
        $new->__set('id',$id);

        $listNews = Container::getModel('News');
        $listNews->__set('fk_jornalista',$_SESSION['id']);

        $news = $listNews->listNews();

        $listOne = Container::getModel('News');
        $listOne->__set('id',$id);
        $new_one = $listOne->listNewsOneEdit();

        if(($_FILES['imagem']['name'] != '')){

            if(empty($new_one['imagem'])){
                //echo 'Imagem Vazia';
                $image = $_FILES['imagem'];
                $pasta = "./assets/img/img-materias";
                $nameImage = $image['name'];
                $newNameImage = uniqid();
                $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));
                $path = $pasta."/".$newNameImage.".".$extension;

                if($extension != 'jpg' && $extension != 'png'){
                    die("Tipo de arquivo não aceito, apenas jpg e png são aceitos!");
                }
                $img = move_uploaded_file($image['tmp_name'],$path);
                $new->__set('imagem',$path);
            }
        }else{

            if(!empty($new_one['imagem'])){
                $new->__set('imagem', $new_one['imagem']);
            }else{
                $new->__set('imagem', 'null');
            }
        }

        $new->__set('titulo',$_POST['titulo']);
        $new->__set('resumo',$_POST['resumo']);
        $new->__set('noticia',$_POST['noticia']);
        $new->__set('tag',$_POST['tag']);


        $new->editNews();

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

    public function renderNew()
    {
        $id = $_GET['new'];
        $listNews = Container::getModel('News');
        $listNews->__set('id',$id);
        $new = $listNews->listNewsOneEdit();


        $jorna = Container::getModel('Jornalista');
        $jornalista_id = $new['fk_jornalista'];
        $jorna->__set('id',$jornalista_id);
        $jornalista = $jorna->listJournalistFindOne();

        return $this->view('news.renderNew',[
            'news' => $new,
            'jornalista' => $jornalista
        ]);

    }

    public function verifyUserLogged()
    {
        session_start();
        if($_SESSION['autenticado'] == false){
            header("location:/News_Galo/");
        }

    }

    public function permissao()
    {
        if($_SESSION['permissao'] === 'admin'){
            $sessao = $_SESSION['permissao'];

            return $sessao;
        }
    }


}