<?php
    namespace Src\Controllers;

use Src\Utils\Controller\Controller;
use Throwable;

class AuthController extends Controller
    {
        public function auth()
        {
           
                return $this->view('auth.auth');
          
        }
        public function authPost()
        {
            try{

            }catch(Throwable $erro){
                echo "ERRO:".$erro->getMessage();
            }
           
                // return $this->view('auth.auth');
          
        }
    }