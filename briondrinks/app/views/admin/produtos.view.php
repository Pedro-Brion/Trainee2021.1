<!DOCTYPE html>
<html lang="pt-br">
<head>
<<<<<<< HEAD
    <?php require('headADM.php'); ?>
    <title>Lista de Produtos</title>
</head>
<body>

<!-- NAVBAR -->
<?php require('navbarADM.php'); ?>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>LISTA DE PRODUTOS</b></h2>
    <div class="linhaHorizontal mb-5"></div>

=======
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/css-adm.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abhaya+Libre:wght@400;700&display=swap" rel="stylesheet">
    <link rel="icon" type="imagem/png" href="../img/logo.png" />
    <link rel="stylesheet" href="../../../public/css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Produtos</title>
</head>
<body>
<!-- NAVBAR -->
    <div id="navbar" class="navbar cor-navbar">
        <div class="logo-esq">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
        
        <ul>
            <li><a href="view_adm_usuarios.html">Usuários</a></li>
            <li><a href="admprodutos.html">Produtos</a></li>
            <li><a href="view_adm_categoria.html">Categorias</a></li>
            <li><a href="view_login">Sair</a></li>
            <li id="menu-icon" class="menu-icon" onclick="openNav()">&#x1F378; Menu</li>
        </ul>

        <div class="logo-dir">
            <img src="../../../public/img/5.png" alt="Logo da empresa Brion Drinks e Coquetelaria">
        </div>
    </div>


    <h2 class="titulo-pagina mt-5"><b>LISTA DE PRODUTOS</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- PHP -->


>>>>>>> main
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
                <th scope="col"class="titulo-tabela colunasInvisiveis">Descrição</th>
                <th scope="col"class="titulo-tabela colunasInvisiveis">Preço(R$)</th>
                <th scope="col"class="titulo-tabela colunasInvisiveis">Categoria</th>
                <th scope="col"class="titulo-tabela larguraAcao">Ação</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($produtos as $produto) : ?>
            <tr>
                
<<<<<<< HEAD
                <th scope="row"><img src="../../../public/img/<?= $produto->foto ?>" alt="Foto do Usuário" class="foto-tabela"></th>
=======
                <th scope="row"><img src="../../../public/img/batida.png" alt="Foto do Usuário" class="foto-tabela"></th>
>>>>>>> main
                <td class="align-middle"><?= $produto->nome ?></td>
                <td class="align-middle colunasInvisiveis"><?= $produto->descricao ?></td>
                <td class="align-middle colunasInvisiveis"><?= $produto->preco ?></td>
                <td class="align-middle colunasInvisiveis"><?= $produto->categoria ?></td>
                <td class="align-middle">
                    <div class="btn-group d-flex justify-content-center" role="group">
                        <button type="button" class="btn btn-success border" data-toggle="modal" data-target="#modalEditar<?=$produto->id?>"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                        <button type="button" class="btn btn-danger border" data-toggle="modal" data-target="#modalExcluir<?=$produto->id?>"><i class="fa fa-trash" aria-hidden="true"></i></button>
                    </div>        
                </td>
            </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>

<!-- MODAL -->

<?php foreach ($produtos as $produto) : ?>
<div class="modal fade" id="modalExcluir<?=$produto->id?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><strong>Exclusão de Produto</strong></h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem certeza que deseja excluir este produto?
        </div>
        <div class="modal-footer">
            <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
            <form action="/produtos-adm/delete" method="POST">
            <input type="hidden" name ="id" value="<?=$produto->id ?>">
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
                <h5 class="modal-title" id="exampleModalLabel"><strong>Adicionar Produto</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="/produtos-adm">
                    <div class="form-group">
                   
                        <label for="campo1">Nome:</label>
                        <input type="text" name="nome" class="form-control" id="campo1" placeholder="Nome" required>
                    
                
                    </div>
                    <div class="form-group">
                            <label for="campo1">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" id="campo2" placeholder="Descrição" required>
                        </div>
                    <div class="form-row">
                        <div class="form-group col-md-6"> 
                        <label for="campo3">Categoria:</label>
                        <select name="categoria" class="custom-select" id="inputGroupSelect03" aria-label="Exemplo de select com botão addon">
                            <?php foreach ($categorias as $categoria) : ?>
                            <option><?= $categoria->categoria ?></option>
                            <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="campo3">Preço:</label>
                            <input type="text" name="preco" class="form-control" id="campo3" placeholder="Preço" required>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Foto:</label>
                        <input name="foto" type="text" class="form-control" id="validationCustom01" placeholder="Foto" required>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" value="<?= $produto->id ?>" name="id">
                    <button type="submit" class="btn cor-botoes">Salvar Alterações</button>    
                </div>
                </form>
        </div>
    </div>
</div>


<div class="modal fade" id="modalEditar<?= $produto->id ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel"><strong>Editar Produto</strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="/produtos-adm/update" method="POST">
                    <div class="form-group">
                        <label for="inputEmail4">Nome:</label>
                        <input name="nome" type="text" class="form-control" id="validationCustom01" placeholder="Nome" value="<?=$produto->nome ?>" required>
                    </div>
                    <div class="form-group">
                            <label for="campo1">Descrição:</label>
                            <input type="text" name="descricao" class="form-control" id="campo2" placeholder="Descrição" value="<?=$produto->descricao ?>" required>
                        </div>
                        <div class="form-row">
                        <div class="form-group col-md-6"> 
                            <label for="campo4">Categoria:</label> 
                            <input type="text" name="categoria" class="form-control" id="campo4" placeholder="Categoria" value="<?=$produto->categoria ?>" required> 
                        </div>
                   
                    <div class="form-group col-md-6">
                            <label for="campo3">Preço:</label>
                            <input name="preco" type="text" class="form-control" id="campo3" placeholder="Preço" value="<?=$produto->preco ?>" required>
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="inputEmail4">Foto:</label>
                        <input name="foto" type="text" class="form-control" id="validationCustom01" placeholder="Foto" value="<?= $produto->foto ?>" required>
                    </div>
               
            </div>
                <div class="modal-footer">
                <button type="button" class="btn" data-dismiss="modal">Cancelar</button>
                    <input type="hidden" value="<?= $produto->id ?>" name="id">
                    <button type="submit" class="btn cor-botoes">Salvar Alterações</button>    
                </div>
                </form>
        </div>
    </div>
</div>
<?php endforeach; ?>

<!-- SCRIPTS -->
<?php require('scripts.php'); ?>

</body>
</html>  