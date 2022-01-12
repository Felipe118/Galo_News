<?php

namespace Src\Controllers;

use Src\Utils\Controller\Controller;

class NoticiasController extends Controller
{
    public  function  materias()
    {
        return $this->view('news.news');
    }
}