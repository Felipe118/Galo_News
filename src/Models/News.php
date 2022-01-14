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
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':titulo',$this->__get('titulo'));
         $stmt->bindValue(':resumo',$this->__get('resumo'));
         $stmt->bindValue(':noticia',$this->__get('noticia'));
         $stmt->bindValue(':tag',$this->__get('tag'));
         $stmt->bindValue(':fk_jornalista',$this->__get('fk_jornalista'));

         $stmt->execute();

         return $this;
     }

     public function listNews()
     {
         $query = "SELECT id,titulo,resumo,noticia,tag,fk_jornalista FROM materias where fk_jornalista = :fk_jornalista";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':fk_jornalista',$this->__get('fk_jornalista'));
         $stmt->execute();

         $news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

         return $news;
     }
     public  function  listNewsOneEdit()
     {
         $query = "SELECT id,titulo,resumo,noticia,tag,fk_jornalista FROM materias WHERE id = :id";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':id',$this->__get('id'));
         $stmt->execute();

         $news = $stmt->fetch(\PDO::FETCH_ASSOC);

         return $news;
     }
     public  function deleteNews()
     {
         $query = "DELETE FROM materias WHERE id = :id";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':id',$this->__get('id'));
         $stmt->execute();
     }



 }



