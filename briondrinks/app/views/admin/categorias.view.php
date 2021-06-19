﻿<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/css-adm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../../../public/img/logo.png" />
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Categorias</title>
</head>
<body>
<!-- NAVBAR-->
    <div id="navbar" class="navbar cor-navbar">
        <div class="logo-esq">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
  
        <ul>
            <li><a href="/usuarios">Usuários</a></li>
            <li><a href="/produtos">Produtos</a></li>
            <li><a href="/categorias">Categorias</a></li>
            <li><a href="/login">Sair</a></li>
            <li id="menu-icon" class="menu-icon" onclick="openNav()">&#x1F378; Menu</li>
        </ul>

        <div class="logo-dir">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
    </div>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>LISTA DE CATEGORIAS</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- BOTÃO ADICIONAR -->
    <div class="container botao-adicionar mb-3">
        <button type="button" class="btn cor-botoes" data-toggle="modal" data-target="#modalAdicionar">Adicionar</button>
    </div>

<!-- CONTEÚDO PRINCIPAL -->
    <div class="container table-responsive conteudo-principal mb-5">
        <table class="table table-bordered table-hover shadow">
            <thead>
            <tr>
                <th scope="col"class="titulo-tabela">Categoria</th>
                <th scope="col"class="titulo-tabela larguraAcao">Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($categorias as $categoria) : ?>
            <tr>
                <td class="align-middle larguraCategoria"><?= $categoria->categoria?></td>
                <td>
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar<?= $categoria->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir<?= $categoria->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php foreach ($categorias as $categoria) : ?>
<!-- MODAL -->
<div class="modal fade" id="modalExcluir<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Exclusão de Categoria</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem certeza que deseja excluir esta categoria?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
          <form action="/categorias/delete" method="POST">
            <input type="hidden" value="<?= $categoria->id ?>" name="id">
            <button type="submit" class="btn btn-danger">Excluir</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalAdicionar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Categoria</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form method="POST" action="/categorias">
              <div class="form-group">
                <label for="inputEmail4">Nome:</label>
                <input name="categoria" type="text" class="form-control" id="inputEmail4" placeholder="Categoria" required>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn cor-botoes">Adicionar</button>
        </div>
          </form>
      </div>
    </div>
  </div>

  <div class="modal fade" id="modalEditar<?= $categoria->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Categoria</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="/categorias/update" method="POST">
              <div class="form-group">
                <label for="inputEmail4">Nome:</label>
                <input name="categoria" type="text" class="form-control" id="inputEmail4" placeholder="Categoria" value="<?= $categoria->nome ?>" required>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
          <input type="hidden" value="<?= $categoria->id ?>" name="id">
          <button type="submit" class="btn cor-botoes">Salvar Alterações</button>
        </div>
        </form>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<!-- SCRIPTS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>