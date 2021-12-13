<?php
class Controller
{

    public function view($path, $data = [])
    {
        //caso o file_exists/path mostra a view e se não mostrar mostra o 404.php
        if (file_exists("../app/views/" . THEME . $path . ".php")) {

            include "../app/views/" . THEME . $path . ".php";
        }/*else {
            //include "../app/views/" . THEME . "404.php";
        } */
    }
}
