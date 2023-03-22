<?php

// Informacoes obrigatorias para enviar email
$to      = 'usuario.sobrenome@dominio.com';
$subject = 'Teste';
$message = 'Ola';

// Envia o email para o servidor
$send = mail($to, $subject, $message);

// Verifica se foi enviado
if($send) {
	echo "E-mail enviado.";
}
else {
	echo "E-mail NÃO enviado.";
}

?>