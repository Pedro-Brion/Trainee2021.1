<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('headADM.php'); ?>
    <title>Lista de Categorias</title>
</head>
<body>

<!-- NAVBAR -->
<?php require('navbarADM.php'); ?>

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

<!-- SCRIPTS -->
<?php require('scripts.php'); ?>

</body>
</html>