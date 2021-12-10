<?php
class App
{
    //os metodos estão protegidos  para serem usados na private function
    protected $controller = "home";
    protected $method = "index";

    //este constuctor corre imediatamente quando é inicializado (na pagina index.php)
    public function __construct()
    {
        $url = $this->parseURL();
        show($url);
    }

    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";

        //ao executar o Filter_var e o tri da $url com o /,sanitiza o url no browser
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL)); 
    }
}
