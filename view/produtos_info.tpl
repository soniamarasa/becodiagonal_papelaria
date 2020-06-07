<html>

<body>
    <div class="container principalproduto">

{foreach from=$PRO item=P}
        <div class="row ">

        
            <div class="col-md-5 col-sm-4">
                <div class="slider-for">
                    <div> <img class="imgprodmenu" src="{$P.pro_img_g}"> </div>
               </div>
                <br>

                <div class="slider-nav produtosslider">
                    <div> <img class="imgprodmenu" src="{$P.pro_img_g}"> </div>
                    <div> <img class="imgprodmenu" src="{$P.pro_img_g}"> </div>
                    <div> <img class="imgprodmenu" src="{$P.pro_img_g}"> </div>
                    <div> <img class="imgprodmenu" src="{$P.pro_img_g}"> </div>
                </div>


            </div>

            <div class="col-md-7 col-sm-6">
                <div>
                    <h3> {$P.pro_nome} - Modelo:{$P.pro_modelo}</h3>
                    <h6> Ref: {$P.pro_ref}</h6>
                    <br>
                </div>

                <div>
                    <dl>
                        <dt> Descrição do Produto </dt>
                        <dd> {$P.pro_desc}</dd>
                    </dl>
                </div>

                <div>
                   <form>
                        <h3 class="text-primary"> R$ {$P.pro_valor}</h3>
                        <label> Qtd.</label>
                        <input width="1em" value="1" type="number">
                        <button class="btn btn-success" type="submit"> Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div>
                    <dl>
                    
                        <dt> Informações Adicionais </dt>
                        <dd> {$P.pro_infotec}</dd>
                        <dd> Altura e Largura: {$P.pro_altura}cm X {$P.pro_largura}cm</dd>
                        <dd> Peso: {$P.pro_peso} kg </dd>
                    </dl>

                </div>


            </div>

            
        </div>
{/foreach}

    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>


    <script>
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
    </script>
</body>


</html>