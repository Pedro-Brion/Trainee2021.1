<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../../../public/css/css-produto.css">
    <title>PRODUTO GENÉRICO</title>
</head>
<body>

<!-- NAVBAR -->
<?php require('navbar.php'); ?>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>PRODUTO GENÉRICO</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- BOTÃO VOLTAR -->
    <div class="container mb-5">
        <a href="/produtos" type="button" class="btn cor-botoes">Voltar</a>
    </div>

<!-- CONTEÚDO PRINCIPAL -->
    <div class="container p-0 mb-5">
            <div class="d-md-flex">
                <img class="text-center shadow-lg img-produto" src="../../../public/img/drink5.png" alt="Imagem do Produto">
                <div class="shadow-lg descricao-produto borda-vertical">
                    <h3 class="text-left w-100 titulos-descricao">DESCRIÇÃO:<span class="texto-descricao"> Este produto genérico tem origem genérica e é produzido com ingredientes genéricos por profissionais genéricos.</span></h3>
                    <h3 class="text-left w-100 titulos-descricao">CATEGORIA:<span class="texto-descricao"> Categoria Genérica</span></h3>
                    <h3 class="text-left w-100 titulos-descricao">PREÇO:<span class="texto-descricao"> R$XX,XX</span></h3>
                </div>
            </div>
    </div>

<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>