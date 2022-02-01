<?php
    namespace Src\Models;

use Exception;
use PDOException;
use Src\Utils\Model\Model;

class Jornalista extends Model

{       private int $id;
        private string $nome;
        private string $email;
        private string $senha;
        private string $foto;
        private string $permissao;
        private string $primeiro_acesso;

        
        public function __get($attribute){
            return $this->$attribute;
        }
        public function __set($attribute,$value){
            $this->$attribute = $value;
        }

        public function auth()
        {
            try{
                $query = "SELECT id,nome,email,senha,permissao,primeiro_acesso FROM jornalistas WHERE email = :email;";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':email', $this->__get('email'));
               // $stmt->bindValue(':senha', $this->__get('senha'));

               $stmt->execute();
                $jornalista = $stmt->fetch(\PDO::FETCH_ASSOC);
    
                if($jornalista['id'] != '' && $jornalista['email'] != '' && $jornalista['permissao'] !='' ){
                    $this->__set('id',$jornalista['id'] );
                    $this->__set('nome', $jornalista['nome']);
                    $this->__set('senha', $jornalista['senha']);
                    $this->__set('email',$jornalista['email'] );
                    $this->__set('permissao',$jornalista['permissao'] );
                    $this->__set('primeiro_acesso', $jornalista['primeiro_acesso']);
    
                }
                return $this;
              
              
    
             

            }catch(\PDOException $e){
                echo "ERRO:". $e->getMessage();
            }
        }

        protected function getPass()
        {
            $query = "SELECT id,email,senha FROM jornalistas;";
            $stmt= $this->db->prepare($query);
            $stmt->execute();

            $jornalista = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $jornalista;
        }

        public function getAcess()
        {

            $query = "SELECT id,primeiro_acesso FROM jornalistas;";
            $stmt= $this->db->prepare($query);
            $stmt->execute();

            $jornalista = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $jornalista;
        }

        public function authAcess()
        {

            try{
            $query = "UPDATE jornalistas set nome = :nome, email = :email ,senha = :senha , primeiro_acesso = :primeiro_acesso WHERE id = :id;";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id',$this->__get('id'));
            $stmt->bindValue(':nome',$this->__get('nome'));
            $stmt->bindValue(':email',$this->__get('email'));
            $stmt->bindValue(':senha',$this->__get('senha'));
            $stmt->bindValue(':primeiro_acesso',$this->__get('primeiro_acesso'));
            $stmt->execute();

            return $this;
            }catch(\PDOException $erro){
                echo "ERROR:".$erro->getMessage();
            }
        }

        public function createJornalista()
        {
           
                $query = "INSERT INTO jornalistas(nome,email,senha,foto,permissao) VALUES(:nome, :email ,:senha,:foto,:permissao);";
                $stmt = $this->db->prepare($query);
                $stmt->bindValue(':nome', $this->__get('nome'));
                $stmt->bindValue(':email', $this->__get('email'));
                $stmt->bindValue(':senha', $this->__get('senha'));
                $stmt->bindValue(':foto', $this->__get('foto'));
                $stmt->bindValue(':permissao', $this->__get('permissao'));
    
                $stmt->execute();
    
                return $this;
          }

        public function listJournalist()
        {
            $query = "SELECT * FROM jornalistas";
            $stmt = $this->db->prepare($query);
            $stmt->execute();

            $journalist = $stmt->fetchAll(\PDO::FETCH_ASSOC);

            return $journalist;
        }

        public function listJournalistFindOne()
        {
            $query = "SELECT id,nome,email,senha,foto,permissao,primeiro_acesso FROM jornalistas WHERE id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id', $this->__get('id'));
            $stmt->execute();

            $jornalista = $stmt->fetch(\PDO::FETCH_ASSOC);

            return $jornalista;
        }

        public function editJornalista()
        {
            $query = "UPDATE jornalistas SET nome = :nome,email = :email,foto = :foto,permissao = :permissao,primeiro_acesso = :primeiro_acesso WHERE id = :id ";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':nome',$this->__get('nome'));
            $stmt->bindValue(':email',$this->__get('email'));
            $stmt->bindValue(':foto',$this->__get('foto'));
            $stmt->bindValue(':permissao',$this->__get('permissao'));
            $stmt->bindValue(':primeiro_acesso',$this->__get('primeiro_acesso'));
            $stmt->bindValue(':id',$this->__get('id'));

            $stmt->execute();

            return $this;

        }
        public function jornalistaDelete()
        {
            $query = "DELETE FROM jornalistas where id = :id";
            $stmt = $this->db->prepare($query);
            $stmt->bindValue(':id',$this->__get('id'));
            $stmt->execute();
        }
 


        
}