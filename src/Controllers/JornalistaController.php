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
        $jornalista = Container::getModel('Jornalista');

        // $jornalista->__set('nome','');
        // $jornalista->__set('email','');
        // $jornalista->__set('senha','');
        // $jornalista->__set('foto','');
        // $jornalista->__set('permissao','');
        return $this->view('jornalista.create');
    }
    }
    