<?php 

$smarty = new Template();

$produtos = new Produtos();
$produtos->GetProdutos();


$smarty->assign('PRO', $produtos->GetItens());
$smarty->assign('PRO_INFO', Rotas::pag_ProdutosInfo());

$smarty->display('produtos.tpl');

?>