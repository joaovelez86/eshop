<?php
    define("WEBSITE_TITTLE", 'PROJECTO JOÃO VELEZ | BACK-END ESHOP');

    //nome da BD
    define('DB_NAME', "eshop_db");
    define('DB_USER', "root");
    define('DB_PASS', "");

    //ao ser usado quando faz o upload do site não aparecer erros nenhuns
    define('DEBUG', true); #true ou false

    if(DEBUG){
        #ini_set — Define o valor de uma opção de configuração (www.php.net)
        ini_set('display_errors', 1);
    } else {
        ini_set('display_errors', 0);
    }