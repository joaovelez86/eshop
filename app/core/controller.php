<?php
class Controller
{

    public function view($path, $data = [])
    {
        //caso o file_exists/$path mostra a view e se não mostrar mostra o 404.php
        if (file_exists("../app/views/" . THEME . $path . ".php")) {

            include "../app/views/" . THEME . $path . ".php";
        }else {
            include "../app/views/" . THEME . "404.php";
        }
    }

    public function load_model($model)
    {
        //caso o file_exists/$model mostra o models e retorna new model ou então retorna falso (se algo não correr bem)
        if (file_exists("../app/models/" .strtolower($model)  . ".class.php")) {

            include "../app/models/" . strtolower($model) . ".class.php";

            return $a = new $model();
        }

        return false;
    }
}

