<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];

$to = 'pedroborgespedro176@gmail.com';
$subject = 'Nova mensagem do formulário de contato';
$message = "Nome: $nome\n\nE-mail: $email\n\nMensagem:\n$mensagem";
$headers = "From: $email";

mail($to, $subject, $message, $headers);

echo 'Obrigado por entrar em contato!';
?>