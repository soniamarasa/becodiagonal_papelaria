<?php 
$to      = Config::EMAIL_USER;
$telefone= $_REQUEST['phonenumber'];
$subject = $_REQUEST['assunto'];
$message = 'Email de '.$_REQUEST['nome']. "\r\n" .$_REQUEST['mensagem'];
$mail = $_REQUEST['email'];
$headers = "From: " .$mail;


mail($to, $telefone, $subject, $message, $headers);
?>

<script>
    alert('Email enviado com Sucesso!')
</script>
<meta http-equiv="refresh" content="0; url=contato">