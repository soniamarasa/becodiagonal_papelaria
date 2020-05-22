<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h2 id="login">CLIENTE NOVO</h2>

            <div id="container">
                <a href="cadastro"><img src="{$GET_TEMA}/../view/imagens/perfilcriar.png"> </a>
                
                <div>
                    Ainda não possui cadastro na loja? Crie <a href="cadastro">AQUI</a> a sua conta.
                    Caso já possua, é só fazer o login ao lado :)
                </div>
            </div>




        </div>

        <div class="col-md-6">

            <h2>LOGIN</h2>

            <div id="container">
                <img src="{$GET_TEMA}/../view/imagens/perfil.png">

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
</div>