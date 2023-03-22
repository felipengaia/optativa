<?php
 
session_start();
 
// Verifica se o nome do usuario esta armazenado na sessao
if(isset($_SESSION["user"]))
{
	// Verifica se a sessão já expirou
    if(time() - $_SESSION["login_time_stamp"] >600) 
    {
        session_unset();
        session_destroy();
        header("Location:login.php");
    }
}
else
{
    header("Location:login.php");
}
?>