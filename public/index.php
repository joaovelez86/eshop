<?php
//echo "Teste! esta é a minha homepage<br>";

// print_r($_GET['url']);

session_start();

$path = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF'];

//str_replace para retirar o index.php do link da pagina e ficar vazio ou c/ variavel path
$path = str_replace("index.php", "", $path);

//maneira de criar constantes/variaveis que dê para mudar posteriormente,caso seja necessário
define('ROOT', $path);
define('ASSETS', $path . "assets/"); #mudei as rotas no href app>views>index.php  <?php echo ASSETS> de forma a ficar dinamico

include "../app/init.php";

// Iniciei a app aqui para correr
$app = new App();
