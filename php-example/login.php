<?php
 
// Inicia a sessao
session_start();

// Verifica se o login foi preenchido no formulario 
if(isset($_POST["Login"])) {
 
    // Armazena o login na sessao
    $_SESSION["user"] = $_POST["Login"];  
 
    // Armazena data e horário atual do inicio da sessao (timestamp em segundos)
    $_SESSION["login_time_stamp"] = time();
    // Redireciona para a pagina onde ja esta logado 
    header("Location:homepage.php");
}
?>