<?php
    namespace Src\DB;

    use PDO;
    use PDOException;

class Conn{
        public static function getDB(){
            try{
                $conn = new \PDO(
                    'mysql:host=127.0.0.1;dbname=db_news;charset=utf8',
                    "root",
                    "root"
                );

                return $conn;
            }catch(\PDOException $e){
                echo "ERRO: ".$e->getMessage();
            }
            
        }
    }