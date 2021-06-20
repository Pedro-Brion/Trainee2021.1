<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../../../public/css/css-produtos.css">
    <title>Nossos Produtos</title>
</head>
<body>

<!-- NAVBAR -->
<?php require('navbar.php'); ?>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>NOSSOS PRODUTOS</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- FILTRO -->
    <div class="container">
        <div class="row filtro-pesquisa">
            <div class="col-sm-6 col-auto mx-auto mt-4 p-0">
                <div class="btn-group">

                    <button class="btn btn dropdown-toggle shadow-lg cor-botoes" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">CATEGORIAS</button>
                    <div class="dropdown-menu">
                        <li> <span> &#8287; </span> <input type="checkbox" aria-label="Chebox para permitir input text"> <span class="categoria-estilo">Categoria 1</span> </li>
                        <li> <span> &#8287; </span> <input type="checkbox" aria-label="Chebox para permitir input text"> <span class="categoria-estilo">Categoria 2</span> </li>
                        <li> <span> &#8287; </span> <input type="checkbox" aria-label="Chebox para permitir input text"> <span class="categoria-estilo">Categoria 3</span> </li>
                    </div>
                    <button type="button" class="btn btn-md ml-3 shadow-lg cor-botoes">Filtrar</button>

                </div>
            </div>

<!-- PESQUISA -->
            <div class="col-sm-6 col-auto mx-auto mt-4 p-0">
                <nav class="navbar navbar-light flex-row justify-content-end p-0">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 shadow-lg" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn my-2 my-sm-0 cor-botoes lupa shadow-lg" type="submit"><i class="fa fa-search"></i></button> 
                    </form>
                </nav>
            </div>
        </div>  
    </div>  

<!-- CONTEÚDO PRINCIPAL-->
    <div class="container shadow-lg mt-5 mb-5 p-5"> 
        <div class="row">
        
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3" >
                    <img class="card-img-top" src="../../../public/img/drink5.png" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title">Drink Genérico</h5>
                        <p class="card-text">R$ XX,XX</p>
                        <p class="card-text">Categoria Genérica</p>
                        <a href="/produto" type="button" class="btn card-botao">VER PRODUTO</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3" >
                    <img class="card-img-top" src="../../../public/img/drink5.png" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title">Drink Genérico</h5>
                        <p class="card-text">R$ XX,XX</p>
                        <p class="card-text">Categoria Genérica</p>
                        <a href="/produto" type="button" class="btn card-botao">VER PRODUTO</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3" >
                    <img class="card-img-top" src="../../../public/img/drink5.png" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title">Drink Genérico</h5>
                        <p class="card-text">R$ XX,XX</p>
                        <p class="card-text">Categoria Genérica</p>
                        <a href="/produto" type="button" class="btn card-botao">VER PRODUTO</a>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3" >
                    <img class="card-img-top" src="../../../public/img/drink5.png" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title">Drink Genérico</h5>
                        <p class="card-text">R$ XX,XX</p>
                        <p class="card-text">Categoria Genérica</p>
                        <a href="/produto" type="button" class="btn card-botao">VER PRODUTO</a>
                    </div>
                </div>
            </div>
    

    
        </div>      
    </div>

<!-- PAGINAÇÃO -->
    <nav aria-label="Navegação da página de produtos" class="filtro-pesquisa mb-5">
        <ul class="pagination justify-content-center">
          <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item">
            <a class="page-link" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </li>
        </ul>
    </nav>

<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>