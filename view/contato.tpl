<!DOCTYPE html>
<html lang="pt-br">

<head>

</head>

<body>



    <article>
        <h2> Entre em contato conosco </h2>

        <div class="container" id="container">

            <img src="media/contato.jpg">


            <div id="cadastroc">

                <form action="envio" method="post">
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
                                aria-describedby="emailHelp" required>
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

            
            </div>
        </div>

    </article>





    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>


    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>


    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>


    <script>
    jQuery("input.telefone")
        .mask("(99) 9999-9999?9")
        .focusout(function(event) {
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