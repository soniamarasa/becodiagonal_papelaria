<?php
/* Smarty version 3.1.36, created on 2020-06-07 05:36:02
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\produtos_info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edc60a27730a6_28889923',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4b5b6feaddf5f3d31a3691ea027d33553ab4a23a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\produtos_info.tpl',
      1 => 1591500952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edc60a27730a6_28889923 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<body>
    <div class="container principalproduto">

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
        <div class="row ">

        
            <div class="col-md-5 col-sm-4">
                <div class="slider-for">
                    <div> <img class="imgprodmenu" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
"> </div>
               </div>
                <br>

                <div class="slider-nav produtosslider">
                    <div> <img class="imgprodmenu" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
"> </div>
                    <div> <img class="imgprodmenu" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
"> </div>
                    <div> <img class="imgprodmenu" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
"> </div>
                    <div> <img class="imgprodmenu" src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img_g'];?>
"> </div>
                </div>


            </div>

            <div class="col-md-7 col-sm-6">
                <div>
                    <h3> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
 - Modelo:<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_modelo'];?>
</h3>
                    <h6> Ref: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_ref'];?>
</h6>
                    <br>
                </div>

                <div>
                    <dl>
                        <dt> Descrição do Produto </dt>
                        <dd> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_desc'];?>
</dd>
                    </dl>
                </div>

                <div>
                   <form>
                        <h3 class="text-primary"> R$ <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
</h3>
                        <label> Qtd.</label>
                        <input width="1em" value="1" type="number">
                        <button class="btn btn-success" type="submit"> Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div>
                    <dl>
                    
                        <dt> Informações Adicionais </dt>
                        <dd> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_infotec'];?>
</dd>
                        <dd> Altura e Largura: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_altura'];?>
cm X <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_largura'];?>
cm</dd>
                        <dd> Peso: <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_peso'];?>
 kg </dd>
                    </dl>

                </div>


            </div>

            
        </div>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

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
 type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"><?php echo '</script'; ?>
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
