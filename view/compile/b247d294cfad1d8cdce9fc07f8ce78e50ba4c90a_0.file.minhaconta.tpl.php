<?php
/* Smarty version 3.1.36, created on 2020-05-23 01:25:45
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\minhaconta.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5ec85f79e2c755_00550614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b247d294cfad1d8cdce9fc07f8ce78e50ba4c90a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\minhaconta.tpl',
      1 => 1590187441,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ec85f79e2c755_00550614 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <aside class="col-md-3 principalmc">
            <ul class="list-group">
                <li class="list-group-item ulmyaccount"><a href="">MEUS DADOS </a></li>
                <li class="list-group-item ulmyaccount"><a href="">MEUS PEDIDOS</a></li>
                <li class="list-group-item ulmyaccount"><a href="">MEUS ENDEREÇOS</a></li>
                <li class="list-group-item ulmyaccount"><a href="">ALTERAR DADOS</a> </li>
            </ul>
        </aside>
        <section class="col-md-9 principalmc" id="info">
            <h2 id="titulo"> MEUS DADOS </h2>


            <div>



                <form action="processaCadastro.php" method="POST">

                    <div id="containerperfil">
                        <div id="containerimg">

                            <!-- <img id="fotoperfil" src="media/perfil.png"> -->
                            <div id="uploaded_image"> </div>

                            <div id="inputimg">
                                <label data-toggle="tooltip" data-placement="top" title="Carregar uma foto">
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
                                <div class="form-group col-md-8">
                                    <label for="nomeCompleto">Nome completo</label>
                                    <input type="text" class="form-control" id="nomeCompleto"
                                        aria-describedby="emailHelp" name="nome">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="nomeCompleto">CPF</label>
                                    <input type="number" class="form-control" id="cpf" aria-describedby="emailHelp"
                                        name="cpf" placeholder="Somente números">
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
                                    <input type="tel" class="form-control telefone" id="phonenumber"
                                        aria-describedby="emailHelp" name="phonenumber">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="celnumber">Celular</label>
                                    <input type="tel" class="form-control telefone" id="celnumber"
                                        aria-describedby="emailHelp" name="celnumber">
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
                                <div class="form-group col-md-4">
                                    <label for="email">Email Atual</label>
                                    <input type="email" class="form-control" name="email" id="email"
                                        aria-describedby="emailHelp" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Novo email</label>
                                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                        required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="email">Confirme o email</label>
                                    <input type="email" autocomplete="none" class="form-control" id="emailconf"
                                        aria-describedby="emailHelp" required>
                                </div>

                            </div>


                            <div class="form-row">

                                <div class="form-group col-md-4">
                                    <label for="password">Senha Atual</label>
                                    <input type="password" maxlength="12" class="form-control" name="password"
                                        id="password" placeholder="Deve conter de 6 à 12 caracteres" required>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="password">Digite uma nova senha</label>
                                    <input type="password" maxlength="12" class="form-control" name="password"
                                        id="password" placeholder="Deve conter de 6 à 12 caracteres" required>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="password">Confirme a senha</label>
                                    <input type="password" maxlength="12" class="form-control" id="passwordconf"
                                        required>
                                </div>
                            </div>
                        </fieldset>

                        <div class="button">
                            <button type="submit" class="btn btn-primary"> ENVIAR ALTERAÇÕES </button> <br>
                        </div>

                </form>




            </div>



        </section>
    </div>
</div><?php }
}
