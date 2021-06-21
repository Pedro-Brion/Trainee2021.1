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
<?php foreach ($produtos as $produto) : ?>
    <h2 class="titulo-pagina mt-5"><<?= $produto->nome ?></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- BOTÃO VOLTAR -->
    <div class="container mb-5">
        <a href="/produtos" type="button" class="btn cor-botoes">Voltar</a>
    </div>

<!-- CONTEÚDO PRINCIPAL -->

    <div class="container p-0 mb-5" id="<?=$produto->id?>">
            <div class="d-md-flex">
                <img class="text-center shadow-lg img-produto" img src="../../../public/img/<?= $produto->foto ?>" alt="Imagem do Produto">
                <div class="shadow-lg descricao-produto borda-vertical">
                    <h3 class="text-left w-100 titulos-descricao">DESCRIÇÃO:<span class="texto-descricao"> <?= $produto->descricao ?></span></h3>
                    <h3 class="text-left w-100 titulos-descricao">CATEGORIA:<span class="texto-descricao"> <?= $produto->categoria ?></span></h3>
                    <h3 class="text-left w-100 titulos-descricao">PREÇO:<span class="texto-descricao"><?= $produto->preco ?></span></h3>
                    <form action="/produto" method="POST">
            <input type="hidden" name ="id" value="<?=$produto->id ?>">
                </div>
            </div>
    </div>
    <?php endforeach; ?>
<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>