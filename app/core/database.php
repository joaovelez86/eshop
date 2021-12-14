<?php

#esta é a DB class
class Database
{


    public static $connection;
    //na func __construct tenta correr a BD (app>core>config.php) e se não der faz die. 
    public function __construct()
    {
        try {
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
            self::$connection = new PDO($string, DB_USER, DB_PASS);
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$connection) {

            return self::$connection;
        }

        return $instance = new self();
    }

    // read da Database. function read faz prepare ,depois executa , faz fetch e depois retorna. (function read se estiver á espera de info de volta.)
    public function read($query, $data = array())
    {
        $statment = self::$connection->prepare($query);
        $result = $statment->execute($data);

        if ($result) {
            $data = $statment->fetchAll(PDO::FETCH_OBJ);

            if (is_array($data)) {
                return $data;
            }
        }

        return false;
    }

    // write da Database. function write se não estiver á espera de nenhuma info de volta (delete por exemplo). 
    public function write($query, $data = array())
    {
        $statment = self::$connection->prepare($query);
        $result = $statment->execute($data);

        if ($result) {

            return true;
        }
        return false;
    }
}
