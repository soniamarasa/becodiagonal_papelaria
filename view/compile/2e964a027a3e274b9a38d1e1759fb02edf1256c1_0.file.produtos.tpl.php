<?php
/* Smarty version 3.1.36, created on 2020-06-06 04:57:54
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\produtos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edb063207b2c2_12252362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2e964a027a3e274b9a38d1e1759fb02edf1256c1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\produtos.tpl',
      1 => 1591412048,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edb063207b2c2_12252362 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<body>

    <section>
        <h4> MAIS VENDIDOS</h4>
        <div class="container">
            <div class="responsive produtosslider">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PRO']->value, 'P');
$_smarty_tpl->tpl_vars['P']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['P']->value) {
$_smarty_tpl->tpl_vars['P']->do_else = false;
?>
                <div>
                    <a href="<?php echo $_smarty_tpl->tpl_vars['PRO_INFO']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_id'];?>
/<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_slug'];?>
" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_img'];?>
" class="imgpro">
                        <p style="text-transform: uppercase;"> <?php echo $_smarty_tpl->tpl_vars['P']->value['pro_nome'];?>
</p>
                        <h3>R$<?php echo $_smarty_tpl->tpl_vars['P']->value['pro_valor'];?>
 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>

        </div>
    </section>

    <section>
        <h4> DESTAQUE</h4>
        <div class="container">
            <div class="responsive produtosslider">
                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/brush-carandache.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/marcadores-magiccolor.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/marcatexto-pastelstabilo.jpg"
                            class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/canetas-stabilo.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/Adesivo3-Plantas.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/marcadores-faber.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/washitape5.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/papel-branco.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <h4> PRODUTOS NOVOS</h4>
        <div class="container">
            <div class="responsive produtosslider">
                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/cadernetaspiral.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/washitape3.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/canetas-gelcis.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/brush-newpen.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/washitape2.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img
                            src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/marcador-magic-color-ouro-estojo-12-cores-intermediarias-i-642-o.jpg"
                            class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/postit3.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

                <div>
                    <a href="" class="imgpro"><img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../media/adesivos1-simplegirl.jpg" class="imgpro">
                        <p> DESCRIÇÃO PRODUTOS </p>
                        <h3> R$ 30,00 </h3>
                        <h6>À vista ou 2x no cartão</h6>
                    </a>
                    <div class="button">
                        <button type="button" class="btn btn-primary">Adicionar ao
                            carrinho</button>
                    </div>
                </div>

            </div>

        </div>
    </section>

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
    $('.responsive').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 2,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
        ]
    });
    <?php echo '</script'; ?>
>



</body>

</html><?php }
}
