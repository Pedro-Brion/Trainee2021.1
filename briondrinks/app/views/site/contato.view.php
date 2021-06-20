<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php require('head.php'); ?>
    <link rel="stylesheet" href="../../../public/css/view_contato.css">
    <title>Contato</title>
</head>
<body>

<!-- NAVBAR -->
<?php require('navbar.php'); ?>

<!-- TÍTULO DA PÁGINA -->
    <h2 class="titulo-pagina mt-5"><b>CONTATO</b></h2>
    <div class="linhaHorizontal mb-5"></div>

<!-- CONTEÚDO PRINCIPAL -->
    <div class="container shadow-lg mb-5 p-4">
		<form>
			<div class="form-row">
			  <div class="col-md-6 mb-3">
				<label for="validationDefault01">Nome</label>
				<input type="text" class="form-control" id="validationDefault01" placeholder="Nome" required>
			  </div>
			<div class="col-md-6 mb-3">
				  <label for="validationDefault01">Telefone</label>
				  <input type="text" class="form-control" id="validationDefault01" placeholder="Telefone" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-12">
				  <label for="inputEmail4">Email</label>
				  <input type="email" class="form-control" id="inputEmail4" placeholder="Email">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12 mb-3">
				  <label for="validationDefault01">Assunto</label>
				  <input type="text" class="form-control" id="validationDefault01" placeholder="Assunto" required>
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-12 mb-3">
					<label for="imputTextarea">Mensagem</label>
					<textarea class="form-control" id="validationTextarea" placeholder="Escreva sua mensagem aqui" required></textarea>  
				</div>
			</div>
			<button class="btn cor-botoes" type="submit">Enviar</button>
		  </form>
    </div>

<!-- SEGUNDO TÍTULO DA PÁGINA -->
	<h2 class="titulo-pagina mt-5"><b>LOCALIZAÇÃO</b></h2>
	<div class="linhaHorizontal mb-5"></div>

<!-- MAPA -->
	<div class="container">
		<iframe class="mapa mb-5 p-0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237205.19866992076!2d-43.52260915145847!3d-21.728680945435038!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989c43e1f85da1%3A0x6236b026b3a0a468!2sJuiz%20de%20Fora%2C%20MG!5e0!3m2!1spt-BR!2sbr!4v1621447748204!5m2!1spt-BR!2sbr" width="300" height="225" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
	</div>

<!-- FOOTER -->
<?php require('footer.php'); ?>

</body>
</html>