<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../../../public/css/css-produtos.css">
    <title>Nossos Produtos</title>
</head>
<body>

<?php $buscar = $_GET['buscar'] ?? ''; ?>


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
                    <form action="/produtos" method="GET">
                    <div class="dropdown-menu">
                    <?php foreach ($categorias as $categoria) : ?>
                        <li> <span> &#8287; </span> 
                        <input value="<?= $categoria->categoria ?>" name="categoria[]" type="checkbox" aria-label="Chebox para permitir input text"> 
                        <span class="categoria-estilo"><?= $categoria->categoria ?></span> 
                        </li>
                    <?php endforeach; ?>
                    </div>
                    <!--<button type="submit" class="btn btn-md ml-3 shadow-lg cor-botoes">Filtrar</button>
                    </form>-->
                </div>
            </div>

<!-- PESQUISA -->
            <div class="col-sm-6 col-auto mx-auto mt-4 p-0">
                <nav class="navbar navbar-light flex-row justify-content-end p-0">
                    <div class="form-inline">
                        <input class="form-control mr-sm-2 shadow-lg" type="search" id="buscar" name="buscar" value="<?= $buscar; ?>" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn my-2 my-sm-0 cor-botoes lupa shadow-lg" type="submit"><i class="fa fa-search"></i></button> 
                    </div>
                    </form>
                </nav>
            </div>
        </div>  
    </div>  

<!-- CONTEÚDO PRINCIPAL-->
    <div class="container shadow-lg mt-5 mb-5 p-5"> 
        <div class="row">
        
            <?php 
                $inicio = $paginacao->inicio + 1;
                if ($inicio > $paginacao->totalProdutos)
                    $inicio = $paginacao->totalProdutos;
                $fim = $paginacao->inicio + $paginacao->produtosPorPagina;
                if ($fim > $paginacao->totalProdutos)
                    $fim = $paginacao->totalProdutos;

            ?>
            <?php if(count($produtos) < 1):?>
                <div class="col justify-content-center mt-3 mb-1">
                    <p class="align-middle text-center aviso">Nenhum produto foi encontrado!</p>
                </div>
            <?php endif; ?>
            <?php foreach ($produtos as $produto) :?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card text-center shadow-p card-borda card-produto mt-3 mb-3" >
                    <img class="card-img-top" src="../../../public/img/<?= $produto->foto ?>" alt="Imagem do drink">
                    <div class="card-body">
                        <h5 class="card-title"><?= $produto->nome ?></h5>
                        <p class="card-text"><?= $produto->preco ?></p>
                        <p class="card-text"><?= $produto->categoria ?></p>
                        <form action="/produto" method="GET">
                            <input type="hidden" name ="id" value="<?=$produto->id ?>">
                            <button type="submit" class="btn card-botao">VER PRODUTO</button>
                        </form>
                   
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>      
    </div>
<!-- PAGINAÇÃO -->
    <?php
        $totalPaginas = ceil($paginacao->totalPaginas);
        if ($paginacao->pagina > $totalPaginas)
            $paginacao->pagina = $totalPaginas;
    ?>           

    <nav aria-label="Navegação da página de produtos" class="filtro-pesquisa mb-5">
        <?php
            $anterior = $paginacao->pagina -1;
            $proximo = $paginacao->pagina +1;
        ?>
        <ul class="pagination justify-content-center">
          <li class="page-item ">
            <a class="page-link" href="/produtos?pagina=<?= $anterior ?>" tabindex="-1"><i class="fa fa-arrow-left" aria-hidden="true"></i></a>
          </li>
            <?php
                
                for($i = 1; $i < $totalPaginas + 1; $i++) { ?>
                    <li class="page-item"><a class="page-link" href="/produtos?pagina=<?= $i ?>"><?= $i ?></a></li>
            <?php } ?>
          <li class="page-item">
            <a class="page-link" href="/produtos?pagina=<?= $proximo ?>"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </li>
        </ul>
    </nav>

<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>