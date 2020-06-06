<?php
/* Smarty version 3.1.36, created on 2020-06-06 01:27:39
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\cadastro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edad4ebc9ab90_88803059',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3fdb92ee4f97a6adb395ecfd9450fc0480ebd0cb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\cadastro.tpl',
      1 => 1591398390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edad4ebc9ab90_88803059 (Smarty_Internal_Template $_smarty_tpl) {
?><html>



<head>

    <?php echo '<script'; ?>
 src="lib/node_modules/@popperjs/core/dist/umd/popper.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="lib/Croppie-master/croppie.css" />
</head>

<body>
    <div class="containercad">
        <h2><?php echo $_smarty_tpl->tpl_vars['CADASTRO']->value;?>
</h2>

        <div id="container">

            <form action="processaCadastro" method="POST">

                <div id="containerperfil">
                    <div id="containercadimg" style="background-image: url(media/perfil.png)">

                       
                        <div id="uploaded_image"> </div>

                        <div id="inputimgcad">
                            <label data-toggle="tooltip" data-placement="bottom" title="Carregar uma foto">
                                <input type="file" accept="image/*" name="img" id="img">
                                <i class="fas fa-upload"></i>
                            </label>
                        </div>
                    </div>
                </div>

                <div id="cadastroc">

                    <fieldset>
                        <legend>DADOS PESSOAIS</legend>
                        <div class="form-row">
                            <div class="form-group col-md-5">
                                <label for="nomeCompleto">Nome completo</label>
                                <input type="text" class="form-control" id="nomeCompleto" name="nome" autofocus
                                    required>
                            </div>

                            <div class="form-group col-md-4 cpf">
                                <label for="nomeCompleto">CPF</label>
                                <input type="text" class="form-control" id="cpf" name="cpf"
                                    placeholder="Somente números" maxlength="11" required>
                            </div>

                            <div class="form-group col-md-3 cpfclean">
                                <button type="button" class="btn btn-primary limpar"> Limpar </button>

                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="dataNasc">Data de Nascimento</label>
                                <input type="date" class="form-control" id="dataNasc" name="dataNasc"
                                    aria-describedby="emailHelp" placeholder="DD/MM/AAAA" required>
                            </div>

                            <div class="form-group col-md-5">

                                <label>Genero: </label><br>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="genero1" name="genero" class="custom-control-input"
                                        value="F">
                                    <label class="custom-control-label" for="genero1">Feminino</label>
                                </div>
                                <div class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" id="genero2" name="genero" class="custom-control-input"
                                        value="M">
                                    <label class="custom-control-label" for="genero2">Masculino</label>
                                </div>
                            </div>

                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="phonenumber">Telefone</label>
                                <input type="tel" class="form-control telefone" id="phonenumber" name="phonenumber"
                                    required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="celnumber">Celular</label>
                                <input type="tel" class="form-control telefone" id="celnumber" name="celnumber"
                                    required>
                            </div>
                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>ENDEREÇO</legend>

                        <div class="form-row">
                            <div class="form-group col-md-4">
                                <label for="cep">CEP</label>
                                <input id="cep" type="text" class="form-control" required name="cep">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="logradouro">Logradouro</label>
                                <input id="logradouro" type="text" class="form-control" name="logradouro" required>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-md-2">
                                <label for="numero">Número</label>
                                <input id="numero" type="text" class="form-control" name="numerores" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="bairro">Bairro</label>
                                <input id="bairro" type="text" class="form-control" name="bairro" required>
                            </div>

                            <div class="form-group col-md-4">
                                <label for="complemento">Complemento</label>
                                <input id="complemento" type="text" class="form-control" name="complemento">
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="cidade">Cidade</label>
                                <input id="cidade" type="text" class="form-control" name="cidade" required>
                            </div>
                            <div class="form-group col-md-3">
                                <label for="uf">Estado</label>
                                <select id="uf" class="form-control" name="uf" required>
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PA">Pará</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>
                            </div>

                            <div class="form-group col-md-3">
                                <label for="cidade">País</label>
                                <input id="pais" type="text" class="form-control" name="pais" required>
                            </div>

                        </div>
                    </fieldset>

                    <fieldset>
                        <legend>DADOS DE LOGIN</legend>

                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>

                            <div class="form-group col-md-6">
                                <label for="email">Confirme o email</label>
                                <input type="email" autocomplete="none" class="form-control" id="emailconf" required>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="password">Digite uma senha</label>
                                <input type="password" maxlength="12" class="form-control" name="password" id="password"
                                    placeholder="Deve conter de 6 à 12 caracteres" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Confirme a senha</label>
                                <input type="password" maxlength="12" class="form-control" id="passwordconf" required>
                            </div>
                        </div>
                    </fieldset>

                    <div class="button">
                        <button type="submit" class="btn btn-primary">CADASTRAR </button> <br>
                    </div>

            </form>
        </div>
    </div>
    </div>


    <!-- MODAL CROP IMAGEM -->
    <div id="uploadimageModal" class="modal" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #d1ab66;">
                    <span id="modal" class="modal-title">Cortar Foto</span>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8 text-center">
                            <div id="image_demo" style="width:350px; margin-top:30px"></div>
                        </div>
                        <div class="col-md-4" style="align-items: center; display: flex; justify-content: center;">
                            <br />
                            <br />
                            <br />
                            <button class="btn btn-success crop_image">Cortar e Enviar</button>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <!-- SCRIPTS JS -->

    <?php echo '<script'; ?>
 type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 src="//cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.2/croppie.min.js"><?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
>
    $(document).ready(function() {

        $image_crop = $('#image_demo').croppie({
            enableExif: true,
            viewport: {
                width: 200,
                height: 200,
                type: 'square' //circle
            },
            boundary: {
                width: 300,
                height: 300
            }
        });

        $('#img').on('change', function() {
            var reader = new FileReader();
            reader.onload = function(event) {
                $image_crop.croppie('bind', {
                    url: event.target.result
                }).then(function() {
                    console.log('jQuery bind complete');
                });
            }
            reader.readAsDataURL(this.files[0]);
            $('#uploadimageModal').modal('show');
        });

        $('.crop_image').click(function(event) {
            $image_crop.croppie('result', {
                type: 'canvas',
                size: 'viewport',

            }).then(function(response) {
                $.ajax({
                    url: "upload.php",
                    type: "POST",
                    data: {
                        "image": response
                    },
                    success: function(data) {
                        $('#uploadimageModal').modal('hide');
                        var html1 = '<img src="' + response + '" />';
                        $('#uploaded_image').html(html1);
                    }
                });
            })
        });

    });
    <?php echo '</script'; ?>
>




    <!-- TELEFONES FORMATAÇÃO -->
    <?php echo '<script'; ?>
>
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
    <?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
>
    function setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                } else {
                    this.value = "";
                }
            });
        });
    }

    setInputFilter(document.getElementById("cpf"), function(value) {
        this.formatar('###.###.###-##', value);
        return /^-?\d*$/.test(value);
    });


    function formatar(mascara, documento) {
        var primeiro = documento.substring(0, 3);
        var segundo = documento.substring(3, 6);
        var terceiro = documento.substring(6, 9);
        var quarto = documento.substring(9, 12);

        var cpf = primeiro + "." + segundo + "." + terceiro + "-" + quarto;

        if (documento.length === 11) {
            document.getElementById("cpf").value = cpf;
        }
    }



    $('button.limpar').on('click', function() {

        $('div.cpf').find('input').val('');

    });
    <?php echo '</script'; ?>
>


    <?php echo '<script'; ?>
 type="text/javascript">
    $("#cep").focusout(function() {
        //Início do Comando AJAX
        $.ajax({
            //O campo URL diz o caminho de onde virá os dados
            //É importante concatenar o valor digitado no CEP
            url: 'https://viacep.com.br/ws/' + $(this).val() + '/json/unicode/',
            //Aqui você deve preencher o tipo de dados que será lido,
            //no caso, estamos lendo JSON.
            dataType: 'json',
            //SUCESS é referente a função que será executada caso
            //ele consiga ler a fonte de dados com sucesso.
            //O parâmetro dentro da função se refere ao nome da variável
            //que você vai dar para ler esse objeto.
            success: function(resposta) {
                //Agora basta definir os valores que você deseja preencher
                //automaticamente nos campos acima.
                $("#logradouro").val(resposta.logradouro);
                $("#complemento").val(resposta.complemento);
                $("#bairro").val(resposta.bairro);
                $("#cidade").val(resposta.localidade);
                $("#uf").val(resposta.uf);
                //Vamos incluir para que o Número seja focado automaticamente
                //melhorando a experiência do usuário
                $("#numero").focus();
            }
        });
    });
    <?php echo '</script'; ?>
>

</body>

</html><?php }
}
