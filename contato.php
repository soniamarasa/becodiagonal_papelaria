<?php  
$msg=0;
@$msg= $_REQUEST['msg'];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Beco Diagonal - Papelaria</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <script src="https://kit.fontawesome.com/a9b0ab3116.js" crossorigin="anonymous"></script>
    <link rel="icon" href="media/bdicon.png">


    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="lib/slick-1.8.1/slick-1.8.1/slick/slick.css" />
    <!-- Add the slick-theme.css if you want default styling -->
    <link rel="stylesheet" type="text/css" href="lib/slick-1.8.1/slick-1.8.1/slick/slick-theme.css" />

</head>

<body>

    <header>
        <nav class="navbar navbar-expand-md navbar-light fixed-top navbar-background">


            <div id="divBusca">
                <input type="text" id="txtBusca" placeholder="Buscar produtos" />
                <i class="fas fa-search search"></i>
            </div>


            <button class="navbar-toggler" data-toggle="collapse" data-target="#nav-principal">
                <i class="fas fa-bars text-white"></i>
            </button>

            <div class="collapse navbar-collapse" id="nav-principal">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="sobre.html" class="nav-link">SOBRE</a>
                    </li>

                    <li class="nav-item">
                        <a href="contato.php" class="nav-link">CONTATO</a>
                    </li>

                    <li class="nav-item divisor"></li>


                    <li class="nav-item">
                        <a href="minhaconta.index" class="nav-link">MINHA CONTA</a>
                    </li>

                    <li class="nav-item">
                        <a href="login.html" class="nav-link">ENTRAR/CADASTRAR</a>
                    </li>
                </ul>
            </div>


        </nav>


        <div id="imagemcab">
            <a href="index.html" class="imagembd"> <img src="media/BD C.png" alt="Beco Diagonal Papelaria"
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
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Marcadores Artisticos </a>
                        </li>
                        <li class="nav-item"> <a class="nav-link js-scroll-trigger" href="#">Marca-Texto </a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Papeis</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Post-it</a>
                </li>

                <li class="nav-item">
                    <a href="" class="nav-link">Washi tapes</a>
                </li>
            </ul>
        </div>
    </nav>


    <article>
        <h2> Entre em contato conosco </h2>
       
        <div class="container" id="container">

            <img src="media/contato.jpg">


            <div id="cadastroc">

                <form action="processaForm.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="nome">Seu Nome</label>
                            <input type="text" style="text-transform: capitalize" name="nome" class="form-control"
                                id="nomeCompleto" aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="email">Seu email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                aria-describedby="emailHelp" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="assunto">Assunto</label>
                            <input type="text" name="assunto" maxlength="100" class="form-control" id="assunto"
                                aria-describedby="emailHelp" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="phonenumber">Tel./Cel.</label>
                            <input type="tel" class="form-control telefone" name="phonenumber" id="phonenumber"
                                aria-describedby="emailHelp">
                        </div>

                    </div>

                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="mensagem">Digite aqui a sua mensagem</label>
                            <textarea maxlength="1000" name="mensagem" class="form-control"
                                id="exampleFormControlTextarea1" rows="5" required> </textarea>
                        </div>
                    </div>
                    <div class="button">
                        <button type="submit" class="btn btn-info"> Enviar </button>
                    </div>
                </form>
                <br>

                <?php if($msg=="enviado"): ?>

                <div class="alert alert-success button" role="alert">
                    Mensagem enviada com sucesso!
                </div>

                <?php endif; ?>


                <?php if($msg=="não_enviado"): ?>

                <div class="alert alert-danger" role="alert">
                    Mensagem não enviada!
                </div>

                

                <?php endif; ?>
            </div>
        </div>

    </article>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-3 rodape">
                    <img src="media/beco-diagonal2.png" class="imgfooter">
                </div>


                <div class="col-md-3 rodape">
                    <h5>REDES SOCIAIS</h5>

                    <div class="redessociais">
                        <a href=""><i class="fab fa-facebook-square"></i></a>
                        &nbsp;
                        <a href=""> <i class="fab fa-instagram-square"></i> </a>
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
                    <img src="media/bandeirascartoes.png" class="imgfooter">
                </div>

            </div>


            <div id="footer1"> Copyright © Beco Diagonal Papelaria - Todos os direitos reservados <br>
                Design by Sônia Mara de Sá </div>

        </div>
    </footer>


    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
        crossorigin="anonymous"></script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


    <script>

        jQuery("input.telefone")
            .mask("(99) 9999-9999?9")
            .focusout(function (event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if (phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });


    </script>

</body>

</html>