<?php
    namespace Src\Controllers;
    use Src\Utils\Controller\Controller;
    use Src\Utils\Model\Container;

class JornalistaController extends Controller
{
    public function homeJornalista()
    {
        $jornalista = Container::getModel('Jornalista');
        $jor = $jornalista->listJournalist();

        return $this->view('jornalista.homeJornalista', [
            'jornalista' => $jor
        ]);
    }

    public function createJornalista()
    {
        return $this->view('jornalista.create');
    }
    public function createJornalistaPost()
    {

        $jornalista = Container::getModel('Jornalista');
       
        if(($_FILES['foto']['name'] != '')){
            print_r($_FILES['foto']['name']);
            echo 'imagem poreenchida';
            // $image = $_FILES['foto'];
            // $pasta = "./assets/img/img-perfil";
            // $nameImage = $image['name'];
            // $newNameImage = $_POST['nome'].uniqid();
            // $extension = strtolower(pathinfo($nameImage, PATHINFO_EXTENSION));
            // $path = $pasta."/".$newNameImage.".".$extension;

          

            // if($extension != 'jpg' && $extension != 'png'){
            //     die("Tipo de arquivo não aceito, apenas jpg e png são aceitos!");
            // }
            // $img = move_uploaded_file($image['tmp_name'],$path);
            // $jornalista->__set('foto',$path);
        }else{
            echo 'imagem vazia';
        }

        $password_hash = password_hash($_POST['senha'], PASSWORD_BCRYPT);

        $jornalista->__set('nome',$_POST['nome']);
        $jornalista->__set('email',$_POST['email']);
        $jornalista->__set('senha',$password_hash);
        $jornalista->__set('permissao',$_POST['permissao']);

        //$jornalista->createJornalista();

        //return $this->view('jornalista.create');
    }


    }
    