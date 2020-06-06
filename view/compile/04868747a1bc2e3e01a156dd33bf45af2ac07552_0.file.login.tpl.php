<?php
/* Smarty version 3.1.36, created on 2020-06-06 01:00:29
  from 'C:\xampp\htdocs\becodiagonal_papelaria\view\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5edace8dab1832_86533533',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '04868747a1bc2e3e01a156dd33bf45af2ac07552' => 
    array (
      0 => 'C:\\xampp\\htdocs\\becodiagonal_papelaria\\view\\login.tpl',
      1 => 1591398011,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5edace8dab1832_86533533 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="container">
    <div class="row">
        <div class="col-md-6">

            <h2 id="login">CLIENTE NOVO</h2>

            <div id="container">
                <a href="cadastro"><img src="media/perfilcriar.png"> </a>
                
                <div>
                    Ainda não possui cadastro na loja? Crie <a href="cadastro">AQUI</a> a sua conta.
                    Caso já possua, é só fazer o login ao lado :)
                </div>
            </div>




        </div>

        <div class="col-md-6">

            <h2>LOGIN</h2>

            <div id="container">
                <img src="media/perfil.png">

                <form>
                    <div class="form-group">
                        <label for="email">Endereço de email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp"
                            placeholder="Digite seu e-mail">
                    </div>
                    <div class="form-group">
                        <label for="password">Senha</label>
                        <input type="password" class="form-control" id="password"
                            placeholder="Digite sua senha">
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="lembrarSenha">
                        <label class="form-check-label" for="lembrarSenha">Lembrar senha</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button> <br>
                    <small> Esqueceu a sua senha? <a href="">Clique aqui</a></small>
                </form>
            </div>

        </div>


    </div>
</div><?php }
}
