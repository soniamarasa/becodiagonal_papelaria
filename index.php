<?php

require './lib/autoload.php';

$smarty = new Template();
//Rotas::get_pagina();


//valores para o template
$smarty->assign('NOME', 'SONIA MARA DE SÁ');
$smarty->assign('TITULO_SITE', Config::SITE_NOME);
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());
$smarty->assign('GET_HOME', Rotas::get_SiteHOME());
$smarty->assign('PAG_ADM', Rotas::pag_Adm());
$smarty->assign('PAG_CADASTRO', Rotas::pag_Cadastro());
$smarty->assign('PAG_CLIENTES', Rotas::pag_Clientes());
$smarty->assign('PAG_CONTATO', Rotas::pag_Contato());
$smarty->assign('PAG_LOGIN', Rotas::pag_Login());
$smarty->assign('PAG_MINHACONTA', Rotas::pag_MinhaConta());
$smarty->assign('PAG_SOBRE', Rotas::pag_Sobre());
$smarty->assign('PAG_PRODUTOS', Rotas::pag_produtos());
$smarty->assign('PAG_PRODUTOSINFO', Rotas::pag_ProdutosInfo());
$smarty->assign('PAG_DUVIDAS', Rotas::pag_duvidas());


$dados = new Conexao();
$sql =  "SELECT * FROM categorias";
$dados->ExecuteSQL ($sql);




//echo Rotas::get_SiteTEMA() . '<br>';

$smarty->display('index.tpl');

?>