<?php

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