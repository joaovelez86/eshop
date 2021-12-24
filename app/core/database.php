<?php

#esta é a DB class
class Database
{


    public static $con;
    //na func __construct tenta correr a BD (app>core>config.php) e se não der faz die. 
    public function __construct()
    {
        try {
            $string = DB_TYPE . ":host=" . DB_HOST . ";dbname=" . DB_NAME;
            self::$con = new PDO($string, DB_USER, DB_PASS);
        } catch (PDOException $e) {

            die($e->getMessage());
        }
    }

    public static function getInstance()
    {
        if (self::$con) {

            return self::$con;
        }

        return $instance = new self();
    }

    public static function newInstance()
    {
      
        return $instance = new self();
    }


    // read da Database. function read faz prepare ,depois executa , faz fetch e depois retorna. (function read se estiver á espera de info de volta.)
    public function read($query, $data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if ($result) {
            $data = $stm->fetchAll(PDO::FETCH_OBJ);
            //conta quantos items tem dentro deste array e retorna um numero
            if (is_array($data) && count($data) > 0) {

                //se for 0 vem para aqui
                return $data;
            }
        }
      //se não for 0 para aqui
        return false;
    }

    // write da Database. function write se não estiver á espera de nenhuma info de volta (delete por exemplo). 
    public function write($query, $data = array())
    {
        $stm = self::$con->prepare($query);
        $result = $stm->execute($data);

        if ($result) {

            return true;
        }
        return false;
    }
}
