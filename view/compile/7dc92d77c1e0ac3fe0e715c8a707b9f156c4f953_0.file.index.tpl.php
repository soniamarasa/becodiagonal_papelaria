<?php
/* Smarty version 3.1.36, created on 2020-06-07 04:33:22
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edc51f2daca57_27552707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7dc92d77c1e0ac3fe0e715c8a707b9f156c4f953' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\index.tpl',
      1 => 1591497201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edc51f2daca57_27552707 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title><?php echo $_smarty_tpl->tpl_vars['TITULO_SITE']->value;?>
</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/css/estilo2.css">
    <?php echo '<script'; ?>
 src="https://kit.fontawesome.com/a9b0ab3116.js" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <link rel="icon" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/media/bdicon.png">

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../lib/node_modules/@popperjs/core/dist/umd/popper.min.js"><?php echo '</script'; ?>
>


    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../lib/Croppie-master/croppie.css" />


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../lib/slick-1.8.1/slick-1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/../lib/slick-1.8.1/slick-1.8.1/slick/slick-theme.css" />

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-background">


            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="Buscar produtos" />
                <i class="fas fa-search search"></i>
            </div>


            <div id="carrinho">
                <a href="carrinho.html"><i class="fas fa-shopping-cart"></i></a>
            </div>


            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_SOBRE']->value;?>
" class="nav-link">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_CONTATO']->value;?>
" class="nav-link">CONTATO</a>
                    </li>

                    <li class="nav-item divisor"></li>


                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_MINHACONTA']->value;?>
" class="nav-link">MINHA CONTA</a>
                    </li>

                    <li class="nav-item">
                        <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_LOGIN']->value;?>
" class="nav-link">ENTRAR/CADASTRAR</a>
                    </li>
                </ul>
            </div>


        </nav>


        <div id="imagemcab">
            <a href="<?php echo $_smarty_tpl->tpl_vars['GET_HOME']->value;?>
" class="imagembd"> <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/media/BDP.png" alt="Beco Diagonal Papelaria"
                    class="imagembd"></a>

        </div>

    </header>


    <nav class="categorias navbar navbar-expand-md navbar-cat " id="categoria">

        <div >
            <span>
                CATEGORIAS:
            </span>
        </div>

        <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-categoria">
            <i class="fas fa-bars text-white"></i>
        </button>

        <div class="collapse navbar-collapse" id="nav-categoria">
            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="" class="nav-link">Adesivos</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Caderno Inteligente</a>
                </li>

                <li class="dropdown nav-item">
                    <a data-toggle="dropdown" class="dropdown-toggle nav-link js-scroll-trigger">Canetas</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Brush Pen</a></li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Esferográficas</a></li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Gel</a></li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Hidrográficas</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Cadernetas</a>
                </li>

                <li class="dropdown nav-item">
                    <a data-toggle="dropdown" class="dropdown-toggle nav-link js-scroll-trigger">Marcadores</a>
                    <ul class="dropdown-menu">
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Marcadores Artísticos </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Marca-Texto </a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Papéis</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Post-it</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Washi Tapes</a>
                </li>
            </ul>
        </div>
    </nav>


    <article>

        <?php 
        Rotas::get_Pagina();
    
        ?>

    </article>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 rodape">
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/media/beco-diagonal2.png" class="imgfooter">
                </div>


                <div class="col-md-3 rodape">
                    <div>
                        <h5>REDES SOCIAIS</h5>

                        <div class="redessociais">
                            <a href=""><i class="fab fa-facebook-square"></i></a>
                            &nbsp;
                            <a href=""> <i class="fab fa-instagram-square"></i> </a>
                        </div>
                    </div>

                    <div>
                        <h5>INSTITUCIONAL</h5>
                        <ul id="listfooter">
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_DUVIDAS']->value;?>
"> Dúvidas </a></li>
                            <li> <a href="<?php echo $_smarty_tpl->tpl_vars['PAG_ADM']->value;?>
"> Area Administrativa </a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 rodape">
                    <h5>ONDE ESTAMOS</h5>
                    <p>Rua Florentina Murad, 151 <br>
                        Jardim das Oliveiras<br>
                        15047-034
                        São José do Rio Preto/SP<br>
                        Telefone: (17) 3237-6231<br>
                        contato@bdpapelaria.com</p>
                </div>

                <div class="col-md-3 rodape">
                    <h5>FORMAS DE PAGAMENTO</h5>
                    <p>Débito, Crédito, boleto, depósito bancário</p>
                    <img src="<?php echo $_smarty_tpl->tpl_vars['GET_TEMA']->value;?>
/media/bandeirascartoes.png" class="imgfooter">
                </div>

            </div>


            <div id="footer1"> Copyright © Beco Diagonal Papelaria - Todos os direitos reservados <br>
                Design by Sônia Mara de Sá  - 17 99187 3463</div>

        </div>
    </footer>

 

   <!-- BUG CROPPIE <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"><?php echo '</script'; ?>
> --->


    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"><?php echo '</script'; ?>
>






</body>

</html><?php }
}
