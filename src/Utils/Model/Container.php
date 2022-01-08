<?php
    namespace Src\Utils\Model;

    use Src\DB\Conn;

    class Container
    {
        public static function getModel($model)
        {
            $class = "Src\\Models\\".ucfirst($model);
            $conn = Conn::getDB();
            return new $class($conn);
        }
    }