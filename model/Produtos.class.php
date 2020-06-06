<?php 

Class Produtos extends Conexao{
    function __construct(){
        parent::__construct();
    }

    function GetProdutos(){
    $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c On p.pro_categoria = c.cat_id";

    $query .= " ORDER BY pro_id DESC";

        $this->ExecuteSQL($query);

        $this->GetLista();
}


function GetProdutosID($id){
    $query = "SELECT * FROM {$this->prefix}produtos p INNER JOIN {$this->prefix}categorias c On p.pro_categoria = c.cat_id";

    $query .= " AND pro_id = {$id}";

        $this->ExecuteSQL($query);

        $this->GetLista();
}






function GetLista(){
    $i = 1;
    while($lista = $this->ListarDados()):
    $this->itens[$i] = array (
        'pro_id' => $lista['pro_id'],
        'pro_nome' => $lista['pro_nome'],
        'pro_desc' => $lista['pro_desc'],
        'pro_peso' => $lista['pro_peso'],
        'pro_valor' => $lista['pro_valor'],
        'pro_altura' => $lista['pro_altura'],
        'pro_largura' => $lista['pro_largura'],
        'pro_comprimento' => $lista['pro_comprimento'],
        'pro_img' => Rotas::ImageLink($lista['pro_img'], 250, 250),
        'pro_slug' => $lista['pro_slug'],
        'pro_ref' => $lista['pro_ref'],
        'cat_nome' => $lista['cat_nome'],
        'cat_id' => $lista['cat_id']
    );

    $i++;
    endwhile;

}


}
?>