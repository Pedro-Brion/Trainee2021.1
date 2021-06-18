<!DOCTYPE html>
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
    <title>Lista de Usuários</title>
</head>
<body>
<!-- NAVBAR -->
    <div id="navbar" class="navbar cor-navbar">
        <div class="logo-esq">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
        
        <ul>
            <li><a href="view-adm-usuarios.html">Usuários</a></li>
            <li><a href="view-adm-produtos.html">Produtos</a></li>
            <li><a href="view-adm-categorias.html">Categorias</a></li>
            <li><a href="view_login.html">Sair</a></li>
            <li id="menu-icon" class="menu-icon" onclick="openNav()">&#x1F378; Menu</li>
        </ul>

        <div class="logo-dir">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
    </div>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>LISTA DE USUÁRIOS</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- BOTÃO ADICIONAR -->
<div class="container botao-adicionar mb-3" data-toggle="modal" data-target="#modalAdicionar">
    <button type="button" class="btn cor-botoes">Adicionar</button>
</div>

<!-- CONTEÚDO PRINCIPAL -->
    <div class="container table-responsive mb-5 conteudo-principal">
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
                <th scope="row"><img src="../../../public/img/barney.jpg" alt="Foto do Usuário" class="foto-tabela"></th>
                <td class="align-middle"><?= $usuario->nome; ?></td>
                <td class="align-middle colunasInvisiveis"><?= $usuario->email; ?></td>
                <td class="align-middle colunasInvisiveis">brocode69</td>
                <td class="align-middle">
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            <?php endforeach; ?>
            <tr>
                <th scope="row"><img src="../../../public/img/ted.jpg" alt="Foto do Usuário" class="foto-tabela"></th>
                <td class="align-middle">Ted Mosby</td>
                <td class="align-middle colunasInvisiveis">ted.architect@himym</td>
                <td class="align-middle colunasInvisiveis">soqueroumamor1978</td>
                <td class="align-middle">
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            <tr>
                <th scope="row"><img src="../../../public/img/marshall.jpg" alt="Foto do Usuário" class="foto-tabela"></th>
                <td class="align-middle">Marshall Eriksen</td>
                <td class="align-middle colunasInvisiveis">marshallandlilly@himym</td>
                <td class="align-middle colunasInvisiveis">lillypads2</td>
                <td class="align-middle">
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            </tbody>
        </table>
    </div>

<!-- MODAL -->
<div class="modal fade" id="modalExcluir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Escolher foto</label>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn cor-botoes">Salvar Alterações</button>
            </div>
                </form>
        </div>
    </div>
</div>

<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Usuário</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="inputEmail4">Nome:</label>
                        <input type="text" class="form-control" id="validationCustom01" placeholder="Nome" required>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Email</label>
                            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" required> 
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputPassword4">Senha</label>
                            <input type="password" class="form-control" id="inputPassword4" placeholder="Senha" required>
                        </div>
                    </div>
                    <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Escolher foto</label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                <button type="button" class="btn cor-botoes">Salvar Alterações</button>
            </div>
        </div>
    </div>
</div>

<!-- SCRIPTS -->
    <script type="text/javascript" src="../js/scripts.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>