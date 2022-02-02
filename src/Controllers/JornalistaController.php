<?php
    namespace Src\Controllers;
    use Src\Utils\Controller\Controller;
    use Src\Utils\Model\Container;

class JornalistaController extends Controller
{
    public function homeJornalista()
    {
        $this->verifyUserLogged();
        $jornalista = Container::getModel('Jornalista');
        $jor = $jornalista->listJournalist();

        return $this->view('jornalista.homeJornalista', [
            'jornalista' => $jor
        ]);
    }

    public function createJornalista()
    {
        $this->verifyUserLogged();
        return $this->view('jornalista.create');
    }
    public function createJornalistaPost()
    {
        $this->verifyUserLogged();
        $jornalista = Container::getModel('Jornalista');
       
        if(($_FILES['foto']['name'] != '')){
            print_r($_FILES['foto']['name']);
            $image = $_FILES['foto'];
            $pasta = "./assets/img/img-perfil";
            $nameImage = $image['name'];
            $newNameImage = $_POST['nome'].uniqid();
            $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));
            $path = $pasta."/".$newNameImage.".".$extension;

          

            if($extension != 'jpg' && $extension != 'png'){
                die("Tipo de arquivo não aceito, apenas jpg e png são aceitos!");
            }
            $img = move_uploaded_file($image['tmp_name'],$path);
            $jornalista->__set('foto',$path);
        }else{
            $jornalista->__set('foto', 'null');
        }

       

        $password_hash = password_hash($_POST['senha'], PASSWORD_BCRYPT);

        $jornalista->__set('nome',$_POST['nome']);
        $jornalista->__set('email',$_POST['email']);
        $jornalista->__set('senha',$password_hash);
        $jornalista->__set('permissao',$_POST['permissao']);

        $jornalista->createJornalista();
        $jor = $jornalista->listJournalist();
        return $this->view('jornalista.homeJornalista',[
            'jornalista' => $jor
        ]);
    }

    public function editJornalista()
    {

        $this->verifyUserLogged();
        $jornalista = Container::getModel('Jornalista');
        $id = (integer)$_GET['registro'];
        $jornalista->__set('id',$id);
        $jornalistas = $jornalista->listJournalistFindOne();

//        echo '<pre>';
//        print_r($jornalistas);
//        echo '</pre>';

        if($jornalistas['id'] == $id){
            return $this->view('jornalista.edit',[
                'jornalistas' => $jornalistas
            ]);
        }else{
            return $this->view('jornalista.edit', [
                'message' => 'Erro essá matéria não foi cadastrada por você'
            ]);
        }


    }
    public function editJornalistaPost()
    {
        $this->verifyUserLogged();
        $jornalista = Container::getModel('Jornalista');
//        echo '<pre>';
//        print_r($_FILES);
//        print_r($_POST);
//        echo '</pre>';
//        die();
        if(($_FILES['foto']['name'] != ''))
        {
            //print_r($_FILES['foto']['name']);
            $image = $_FILES['foto'];
            $pasta = "./assets/img/img-perfil";
            $nameImage = $image['name'];
            $newNameImage = $_POST['nome'].'-'.uniqid();
            $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));
            $path = $pasta."/".$newNameImage.".".$extension;



            if($extension != 'jpg' && $extension != 'png'){
                die("Tipo de arquivo não aceito, apenas jpg e png são aceitos!");
            }
            $img = move_uploaded_file($image['tmp_name'],$path);
            $jornalista->__set('foto',$path);
        }else{
            $jornalista->__set('foto', 'null');
        }

        //$password_hash = password_hash($_POST['senha'], PASSWORD_BCRYPT);

        $jornalista->__set('nome',$_POST['nome']);
        $jornalista->__set('id',$_POST['id']);
        $jornalista->__set('email',$_POST['email']);
        $jornalista->__set('permissao',$_POST['permissao']);
        $jornalista->__set('primeiro_acesso',$_POST['primeiro_acesso']);

        $jornalista->editJornalista();
        $jor = $jornalista->listJournalist();

        return $this->view('jornalista.homeJornalista',[
            'message' => 'Jornalista editado com sucesso',
            'jornalista' => $jor
        ]);
        
    }
    public function jornalistaDelete()
    {
        $this->verifyUserLogged();
        $jornalista = Container::getModel('Jornalista');
        $jornalista->__set('id',$_POST['id']);
        $jornalista->jornalistaDelete();

        return header("Location: /News_Galo/jornalista");
      
    }
    public function verifyUserLogged()
    {
        session_start();
        if($_SESSION['autenticado'] == false){
            header("location:/News_Galo/");
        }
       
    }


    }
    