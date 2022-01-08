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
}