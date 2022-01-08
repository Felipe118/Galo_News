<?php   
    namespace Src\Utils\Model;

    class Model
    {
         protected $db;

         public function __construct(\PDO $db)
         {
             $this->db = $db;
         }
    }