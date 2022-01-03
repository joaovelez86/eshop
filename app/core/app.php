<?php
class App
{
    //os metodos estão protegidos  para serem usados na private function
    protected $controller = "home";
    protected $method = "index";
    protected $params;

    //este constuctor corre imediatamente quando é inicializado (na pagina index.php)
    public function __construct()
    {
        $url = $this->parseURL();

        $url[0] = str_replace("-","_",$url[0]);

        /*se o ficheiro existir converte to lowercase e faz concatenação para substituir
        o controller do url (neste caso o "home" [0] ) e depois destroi o url com unset() */
        if (file_exists("../app/controllers/" . strtolower($url[0]) . ".php")) {
            $this->controller = strtolower($url[0]);
            unset($url[0]);
        }

        //e com require vai instanciar a nova variavel de forma dinamica (controllers>home.php)
        require "../app/controllers/" . $this->controller . ".php";
        $this->controller = new $this->controller;

        /*se a variavel $url[1] existir converte to lowercase e se o method_exists
        destroi o url com unset() */
        if (isset($url[1])) {

            $url[1] = strtolower($url[1]);
            
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        //aqui o array pode ser mostrado como controller home ou o que for dado pelo usuário
        $this->params = (count($url) > 0) ? $url : ["home"];

        //
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    private function parseURL()
    {
        $url = isset($_GET['url']) ? $_GET['url'] : "home";

        //ao executar o Filter_var e o tri da $url com o /,sanitiza o url no browser
        return explode("/", filter_var(trim($url, "/"), FILTER_SANITIZE_URL));
    }
}
