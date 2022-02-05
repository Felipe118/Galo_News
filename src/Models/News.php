<?php
 namespace Src\Models;

 use Src\Utils\Model\Model;

 class News extends Model
 {
    private int $id;
    private string $titulo;
    private string $resumo;
    private string $noticia;
    private  string $imagem;
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
         $query = "INSERT INTO materias(titulo,resumo,imagem,noticia,tag,fk_jornalista) VALUES(:titulo,:resumo,:imagem,:noticia,:tag,:fk_jornalista);";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':titulo',$this->__get('titulo'));
         $stmt->bindValue(':resumo',$this->__get('resumo'));
         $stmt->bindValue(':imagem',$this->__get('imagem'));
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
         $query = "SELECT id,titulo,resumo,imagem,noticia,tag,fk_jornalista,data FROM materias WHERE id = :id";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':id',$this->__get('id'));
         $stmt->execute();

         $news = $stmt->fetch(\PDO::FETCH_ASSOC);

         return $news;
     }

     public function editNews()
     {
         $query = "UPDATE materias SET titulo = :titulo,resumo = :resumo, noticia = :noticia, tag = :tag WHERE id = :id ";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':id',$this->__get('id'));
         $stmt->bindValue(':titulo',$this->__get('titulo'));
         $stmt->bindValue(':resumo',$this->__get('resumo'));
         $stmt->bindValue(':noticia',$this->__get('noticia'));
         $stmt->bindValue(':tag',$this->__get('tag'));
         $stmt->execute();

         return $this;
     }
     public  function deleteNews()
     {
         $query = "DELETE FROM materias WHERE id = :id";
         $stmt = $this->db->prepare($query);
         $stmt->bindValue(':id',$this->__get('id'));
         $stmt->execute();
     }

     public function listNewsAll()
     {
         $query = 'SELECT * FROM materias';
         $stmt = $this->db->prepare($query);
         $stmt->execute();

         $news = $stmt->fetchAll(\PDO::FETCH_ASSOC);

         return $news;
     }



 }



