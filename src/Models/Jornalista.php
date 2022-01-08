<?php
    namespace Src\Models;

use Src\Utils\Model\Model;

class Jornalista extends Model

{   
        private string $nome;
        private string $email;
        private string $senha;
        private string $foto;
        private string $permissao;

        
        public function __get($attribute){
            return $this->$attribute;
        }
        public function __set($attribute,$value){
            $this->$attribute = $value;
        }



        
}