<?php
// require('app/Contacts.class.php');
include('header.php');
?>

<div class="container newContact">
	<a href="index.php">
		<i class="fas fa-angle-double-left"></i>
		Voltar
	</a>
	<h2>Novo Contato</h2>

	<form action="app/add.php" method="POST">
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" class="form-control">
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control">
		</div>
		<input type="submit" value="Cadastrar" class="btn btn-outline-primary">
	</form>

</div>

<?php include('footer.php');
