<?php
/* Smarty version 3.1.36, created on 2020-06-06 04:49:24
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edb04344b0b13_22321579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5b6feaddf5f3d31a3691ea027d33553ab4a23a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\produtos_info.tpl',
      1 => 1591410349,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edb04344b0b13_22321579 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<body>
    <div class="container principalproduto">

        <div class="row ">
            <div class="col-md-5 col-sm-4">
                <div class="slider-for">
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-amarela.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-azul.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-laranja.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-rosa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-roxa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-verde.jpg"> </div>
                </div>
                <br>

                <div class="slider-nav produtosslider">
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-amarela.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-azul.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-laranja.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-rosa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-roxa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-verde.jpg"> </div>
                </div>


            </div>

            <div class="col-md-7 col-sm-6">
                <div>
                    <h3> NOME PRODUTO </h3>
                    <h6> Cógido: 000000 </h6>

                </div>

                <div>
                    <div> </div>
                    <h3 class="text-primary"> R$ 00,00</h3>

                    <form>
                        <label> Qtd.</label>
                        <input width="1em" value="1" type="number">
                        <button class="btn btn-primary" type="submit"> Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div>
                    <dl>
                        <dt> Descrição do Produto </dt>
                        <dd> Detalhes do produto</dd>
                        <dt> Ficha Técnica </dt>
                        <dd> Especificação técnica do produto. </dd>
                    </dl>

                </div>


            </div>

        </div>


    </div>


    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    <?php echo '</script'; ?>
>
    
    <?php echo '<script'; ?>
 type="text/javascript" src="lib/slick-1.8.1/slick-1.8.1/slick/slick.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
    $('.slider-for').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.slider-nav'
    });
    $('.slider-nav').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.slider-for',
        dots: true,
        centerMode: true,
        focusOnSelect: true
    });
    <?php echo '</script'; ?>
>
</body>


</html><?php }
}
