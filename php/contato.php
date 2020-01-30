<?php

ini_set('display_errors', 1);

error_reporting(E_ALL);

$email = $_POST['email'];
$to = "lucasandrade.lf87@gmail.com";

$from = $email;


$name = $_POST['nome'];
$message = $_POST['mensagem'];
$telefone = $_POST['telefone'];
$body = "Nome: ".$name."\n"."email: ".$email."\n"."telefone: ".$telefone."\n"."mensagem: ".$message;


$headers = "De:". $from;
$subject = "Contato - ".$name;
mail($to, $subject, $body, $headers);

header('Location: https://aguiaretavares.com.br/');

?>