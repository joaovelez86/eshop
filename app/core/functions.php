<?php
//cria esta function para usar em toda a app
function show($data)
{
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

//se existir erros faz echo ao utilizador e a seguir faz unset da _SESSION 
function check_error()
{

	if(isset($_SESSION['error']) && $_SESSION['error'] != "")
	{
		echo $_SESSION['error'];
		unset($_SESSION['error']);
	}
}

//cria esta function para usar em toda a app
function esc($data){
	return addslashes($data);
}