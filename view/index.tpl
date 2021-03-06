<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>{$TITULO_SITE}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/estilo.css">
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/css/estilo2.css">
    <script src="https://kit.fontawesome.com/a9b0ab3116.js" crossorigin="anonymous"></script>
    <link rel="icon" href="{$GET_TEMA}/media/bdicon.png">

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <script src="{$GET_TEMA}/../lib/node_modules/@popperjs/core/dist/umd/popper.min.js"></script>


    <link rel="stylesheet" href="{$GET_TEMA}/../lib/Croppie-master/croppie.css" />


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/../lib/slick-1.8.1/slick-1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="{$GET_TEMA}/../lib/slick-1.8.1/slick-1.8.1/slick/slick-theme.css" />

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
                        <a href="{$PAG_SOBRE}" class="nav-link">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a href="{$PAG_CONTATO}" class="nav-link">CONTATO</a>
                    </li>

                    <li class="nav-item divisor"></li>


                    <li class="nav-item">
                        <a href="{$PAG_MINHACONTA}" class="nav-link">MINHA CONTA</a>
                    </li>

                    <li class="nav-item">
                        <a href="{$PAG_LOGIN}" class="nav-link">ENTRAR/CADASTRAR</a>
                    </li>
                </ul>
            </div>


        </nav>


        <div id="imagemcab">
            <a href="{$GET_HOME}" class="imagembd"> <img src="{$GET_TEMA}/media/BDP.png" alt="Beco Diagonal Papelaria"
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

        {php}
        Rotas::get_Pagina();
    
        {/php}

    </article>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 rodape">
                    <img src="{$GET_TEMA}/media/beco-diagonal2.png" class="imgfooter">
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
                            <li> <a href="{$PAG_DUVIDAS}"> Dúvidas </a></li>
                            <li> <a href="{$PAG_ADM}"> Area Administrativa </a></li>
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
                    <img src="{$GET_TEMA}/media/bandeirascartoes.png" class="imgfooter">
                </div>

            </div>


            <div id="footer1"> Copyright © Beco Diagonal Papelaria - Todos os direitos reservados <br>
                Design by Sônia Mara de Sá  - 17 99187 3463</div>

        </div>
    </footer>

 

   <!-- BUG CROPPIE <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script> --->


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>






</body>

</html>