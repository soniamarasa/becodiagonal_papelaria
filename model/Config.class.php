<?php

Class Config{ 

//informações básicas do site
const SITE_URL = "http://localhost";
const SITE_PASTA = "becodiagonal_papelaria";
const SITE_NOME = "Beco Diagonal Papelaria";
const SITE_EMAIL_ADM = "projetosdesa@gmail.com";


//Informações do Banco de Dados
const BD_HOST = "http://localhost",
      BD_USER = "root",
      BD_SENHA = "http://localhost",
      BD_BANCO = "bdpapelaria";

//Informações MAILLER
    const EMAIL_HOST = "smtp.gmail.com";
    const EMAIL_USER = "projetosdesa@gmail.com";
    const EMAIL_NOME = "Contato Beco Diagonal Papelaria";
    const EMAIL_SENHA = "sonia121";
    const EMAIL_PORTA = 587;
    const EMAIL_SMTPAUTH = true;
    const EMAIL_SMTPSECURE = "tls";
    const EMAIL_COPIA = "projetosdesa@gmail.com";


}
?>