<html>

<body>
    <div class="container principalproduto">

        <div class="row ">
            <div class="col-md-5 col-sm-4">
                <div class="slider-for">
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-amarela.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-azul.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-laranja.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-rosa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-roxa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-verde.jpg"> </div>
                </div>
                <br>

                <div class="slider-nav produtosslider">
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-amarela.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-azul.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-laranja.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-rosa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-roxa.jpg"> </div>
                    <div> <img class="imgprodmenu" src="media/imagens/cadernetaspiral-verde.jpg"> </div>
                </div>


            </div>

            <div class="col-md-7 col-sm-6">
                <div>
                    <h3> NOME PRODUTO </h3>
                    <h6> Cógido: 000000 </h6>

                </div>

                <div>
                    <div> </div>
                    <h3 class="text-primary"> R$ 00,00</h3>

                    <form>
                        <label> Qtd.</label>
                        <input width="1em" value="1" type="number">
                        <button class="btn btn-primary" type="submit"> Adicionar ao Carrinho</button>
                    </form>
                </div>

                <div>
                    <dl>
                        <dt> Descrição do Produto </dt>
                        <dd> Detalhes do produto</dd>
                        <dt> Ficha Técnica </dt>
                        <dd> Especificação técnica do produto. </dd>
                    </dl>

                </div>


            </div>

        </div>


    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    
    <script type="text/javascript" src="lib/slick-1.8.1/slick-1.8.1/slick/slick.min.js"></script>


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