<?php

$para= "soniamaradesa@gmail.com";
$nome= $_REQUEST['nome'];
$email= $_REQUEST['email'];
$assunto= $_REQUEST['assunto'];
$telefone= $_REQUEST['phonenumber'];
$msg= $_REQUEST['mensagem'];



$corpo = "<strong> Mensagem de Contato</strong><br><br>";
$corpo .= "<strong> Nome: </strong> $nome";
$corpo .= "<br><strong> Email: </strong> $email";
$corpo .= "<br><strong> Telefone: </strong> $telefone";
$corpo .= "<br><strong> Mensagem: </strong> $msg";


$header= "Content-Type: text/html; charset= utf-8\n";
$header.= "From: $email Reply-to: $email\n";

@mail($para,$assunto,$corpo,$header);

header("location:contato.php?msg=enviado");


?>