<?php

class User
{
    private $error = "";

    public function signup($POST)
    {
        $data = array();
        $db = Database::getInstance();
        $data['full_name'] = trim($POST['full_name']);
        $data['email'] = trim($POST['email']);
        $data['password'] = trim($POST['password']);
        $password2 = trim($POST['password2']);


        if (empty($data['email']) || !filter_var($POST["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error .= "Please enter a valid email <br>";
        }

        if (empty($data['full_name']) || $data['full_name'] < 8 && $data['full_name'] > 59  || !preg_match("/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u", $data['full_name'])) {
            $this->error .= "Please enter a valid name <br>";
        }

        if ($data['password'] !== $password2) {
            $this->error .= "Passwords do not match <br>";
        }

        if (strlen($data['password']) < 8) {
            $this->error .= "Password be at least 8 characters long <br>";
        }

        //checka se email já existe
        $sql = "select * from users where email = :email limit 1";
        $arr['email'] = $data['email'];
        $check = $db->read($sql, $arr);

        if (is_array($check)) {
            $this->error .= "That email is already in use <br>";
        }

        $data['url_address'] = $this->get_random_string_max(60);

        //checka se o url_address existe
        $arr = false;
        $sql = "select * from users where url_address = :url_address limit 1";
        $arr['url_address'] = $data['url_address'];
        $check = $db->read($sql, $arr);

        if (is_array($check)) {

            $data['url_address'] = $this->get_random_string_max(60);
        }


        if ($this->error == "") {
            //save rank,url,data e faz tambem a encriptação da password.
            $data['rank'] = "customer";
            $data['url_address'] = $this->get_random_string_max(60);
            $data['date'] = date("Y-m-d H:i:s");
            $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

            $query = "insert into users (url_address,full_name,email,password,date,rank) values(:url_address,:full_name,:email,:password,:date,:rank)";

            $result = $db->write($query, $data);

            if ($result) {
                header("Location: " . ROOT . "login");
                die;
            }
        }

        //mostrar ao utilizador os erros. (função check_error() está na app>core>functions.php)
        $_SESSION['error'] = $this->error;
    }

    public function login($POST)
    {
        //falta descobrir o porquê de não fazer login!!!
        $data = array();
        $db = Database::getInstance();

        $data['email'] = trim($POST['email']);
        $data['password'] = trim($POST['password']);

        if (empty($data['email']) || !filter_var($POST["email"], FILTER_VALIDATE_EMAIL)) {
            $this->error .= "Please enter a valid email <br>";
        }
        //Se tiver menos que 8 caract dá erro
        if (strlen($data['password']) < 8) {
            $this->error .= "Password must be atleast 8 characters long <br>";
        }

        //se o erro estiver vazio,
        if ($this->error == "") {
            //show($POST); 
            //checka se email já existe na BD
            $sql = "select * from users where email = :email limit 1";
            $result = $db->read($sql,['email'=> $data['email']]);

            //se a pass inserida pelo user $_POST for igual a pass encriptada
            if (!empty($result) && password_verify($data['password'], $result[0]->password)) {
                
                $_SESSION['user_url'] = $result[0]->url_address;
                header("Location: " . ROOT . "home");
                die;

            } else {
                $this->error .= "Wrong email or password <br>";
            }
        }
        //para mostrar ao utilizador os erros. 
        $_SESSION['error'] = $this->error;
    }

    public function get_user($url)
    {
    }


    private function get_random_string_max($length)
    {

        $array = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z');
        $text = "";

        $length = rand(4, $length);

        for ($i = 0; $i < $length; $i++) {

            $random = rand(0, 61);

            $text .= $array[$random];
        }

        return $text;
    }

    public function check_login($redirect = false, $allowed = array())
    {
        if (count($allowed) > 0) {
            
        } else {
            header("Location: " . ROOT . "login");
            die;
        }

        if (isset($_SESSION['user_url'])) {
            $arr['url'] = $_SESSION['user_url'];
            $query = "select * from users where url_address = :url limit 1";
            $db = Database::getInstance();

            $result = $db->read($query, $arr);

            if (is_array($result)) {
                return $result[0];
            }
        }
        if ($redirect) {
         header("Location: " . ROOT . "login");
         die;
        }
        return false;
    }

    public function logout()
    {
        if (isset($_SESSION['user_url'])) {
            unset($_SESSION['user_url']);
        }

        header("Location: " . ROOT . "home");
        die;
    }
}
