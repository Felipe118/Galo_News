<?php
 namespace Src\Models;

 use Src\Utils\Model\Model;

 class News extends Model
 {
    private int $id;
    private string $titulo;
    private string $resumo;
    private string $noticia;
    private string $tag;
    private  int $fk_jornalista;

     public function __get($attribute){
         return $this->$attribute;
     }
     public function __set($attribute,$value){
         $this->$attribute = $value;
     }

     public function createNews()
     {
         $query = "INSERT INTO materias(titulo,resumo,noticia,tag,fk_jornalista) VALUES(:titulo,:resumo,:noticia,:tag,:fk_jornalista);";
     }



 }



