<?php
    namespace Src\Controllers;

use Src\Utils\Controller\Controller;

class AuthController extends Controller
    {
        public function auth()
        {
           
                return $this->view('auth.auth');
          
        }
    }