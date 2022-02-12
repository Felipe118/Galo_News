<?php
    namespace Src\Controllers;

use Src\Utils\Controller\Controller;
use Src\Utils\Model\Container;
use Throwable;

class AuthController extends Controller
    {
        public function auth()
        {
            return $this->view('auth.auth');
        }
        public function authPost()
        {

            $jornalista = Container::getModel('Jornalista');
            $jornalista->__set('email', $_POST['email']);
            $jornalista->Auth();
            $pass =  $jornalista->__get('senha');

            if ( password_verify($_POST['senha'], $pass) ) {
                session_start();
                $_SESSION['id'] = $jornalista->__get('id');
                $_SESSION['nome']  = $jornalista->__get('nome');
                $_SESSION['email']  = $jornalista->__get('email');
                $_SESSION['permissao']  = $jornalista->__get('permissao');
                $_SESSION['autenticado'] = true;
            
                if ($jornalista->__get('primeiro_acesso') == 'sim') {
                    return header('Location: /News_Galo/auth-first');
                }

               return header('Location: /News_Galo/homeLogado');
            
            } else {
                header('Location: /News_Galo/auth?erro=login');
            }
            // return $this->view('auth.auth');
          
        }
        public  function authFirstAcess()
        {
            return $this->view('auth.auth_first');
        }

        public function authFirstAcessPost()
        {
            session_start();
    
            //confirmação de senhas iguais
            $password = md5($_POST['senha']);
            $confirmpassword = md5($_POST['confirmsenha']);
    
            if ($password != $confirmpassword) {
                return header('Location:/News_Galo/auth-first?error=confirmpassword');
            }
    
            $password_hash =   password_hash($_POST['senha'], PASSWORD_BCRYPT);
            $id = $_SESSION['id'];
            $email = $_SESSION['email'];
            $nome = $_SESSION['nome'];
            $first_acess = 'nao';
            $jornalista = Container::getModel('jornalista');
    
    
            $jornalista->__set('nome', $nome);
            $jornalista->__set('email', $email);
            $jornalista->__set('senha', $password_hash);
            $jornalista->__set('primeiro_acesso', $first_acess);
            $jornalista->__set('id', $id);
            $jornalista->authAcess();
    
            header('Location: /News_Galo/auth?confirmpass=sucess');
        }

        
    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /News_Galo/');
    }
    }