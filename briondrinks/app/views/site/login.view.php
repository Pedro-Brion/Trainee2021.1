<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../css/css-login.css">
    <title>Login</title>
</head>
<body>
<?php if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if (isset($_SESSION['usuario'])) {
		
      header('Location: /usuarios');
    }
    ?>
<!-- NAVBAR -->
<?php require('navbar.php'); ?>

<!-- LOGIN -->  
    <div class="text-center mt-5 mb-5 pr-3 pl-3">
        <form style="max-width: 300px;margin:auto;" class="shadow-lg pr-5 pl-5 pb-5 borda-login" action="/logar" method="GET">
          <img class="mb-2" src="../../../public/img/6.png" height="200" alt="logo">
          <h1 class="h3 mb-3 font-weight-normal titulo-pagina "><strong>LOGIN</strong></h1>
            <input  type="text" name="email" id="email" class="form-control mb-3" placeholder="E-mail" required autofocus>
            <input  type="password" name="senha" id="senha" placeholder="Senha" class="form-control">
          <div class="checkbox mt-3">
          </div>
          <div class="mt-3">
            <button  type="submit" class="btn cor-botoes btn-block form-control"> LOGIN</button>
          </div>
        </form>
    </div>

<!-- FOOTER -->
<?php require('footer.php'); ?>

  </body>
</html>