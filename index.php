<?php

require './lib/autoload.php';

$smarty = new Template();
//Rotas::get_pagina();


//valores para o template
$smarty->assign('NOME', 'SONIA MARA DE SÁ');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());


//echo Rotas::get_SiteTEMA() . '<br>';

$smarty->display('index.tpl');

?>