<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('headADM.php'); ?>
    <title>Lista de Usuários</title>
</head>
<body>

<!-- NAVBAR -->   
<?php require('navbarADM.php'); ?>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>LISTA DE USUÁRIOS</b></h2>
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
                <th scope="col"class="titulo-tabela linha-foto">Foto</th>
                <th scope="col"class="titulo-tabela">Nome</th>
                <th scope="col"class="titulo-tabela colunasInvisiveis">Email</th>
                <th scope="col"class="titulo-tabela colunasInvisiveis">Senha</th>
                <th scope="col"class="titulo-tabela larguraAcao">Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($usuarios as $usuario) : ?>
            <tr>
                <th scope="row"><img src="../../../public/img/<?= $usuario->foto; ?>" alt="Foto do Usuário" class="foto-tabela"></th>
                <td class="align-middle"><?= $usuario->nome; ?></td>
                <td class="align-middle colunasInvisiveis"><?= $usuario->email; ?></td>
                <td class="align-middle colunasInvisiveis"><?= $usuario->senha; ?></td>
                <td class="align-middle">
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar<?= $usuario->id ?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir<?= $usuario->id ?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<?php foreach ($usuarios as $usuario) : ?>
<!-- MODAL -->
<div class="modal fade" id="modalExcluir<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Exclusão de Usuário</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem certeza que deseja excluir este usuário?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
          <form action="/usuarios/delete" method="POST">
            <input type="hidden" value="<?= $usuario->id ?>" name="id">
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
                <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Usuário</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/usuarios">
                    <div class="form-group">
                        <label for="inputEmail4">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="validationCustom01" placeholder="Nome" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" required> 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Foto:</label>
                        <input name="foto" type="text" class="form-control" id="validationCustom01" placeholder="Foto" required>
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

<div class="modal fade" id="modalEditar<?= $usuario->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Usuário</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/usuarios/update" method="POST">
                    <div class="form-group">
                        <label for="inputEmail4">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="<?= $usuario->nome ?>" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input name="email" type="email" class="form-control" id="inputEmail4" placeholder="Email" value="<?= $usuario->email ?>" required> 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input name="senha" type="password" class="form-control" id="inputPassword4" placeholder="Senha" value="<?= $usuario->senha ?>" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Foto:</label>
                        <input name="foto" type="text" class="form-control" id="validationCustom01" placeholder="Foto" value="<?= $usuario->foto ?>" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" value="<?= $usuario->id ?>" name="id">
                    <button type="submit" class="btn cor-botoes">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- SCRIPTS -->
<?php require('scripts.php'); ?>

</body>
</html>