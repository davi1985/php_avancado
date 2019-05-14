<?php
require('app/Contacts.class.php');
include('header.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $info= $contact->getinfo($id);
        
    if (empty($info['email'])) {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
}
?>
<div class="container">
	<h2>Editar</h2>

	<form action="app/edit.php" method="POST">
		<input type="hidden" name="id"
			value="<?php echo $info['id'];?>" />
		<div class="form-group">
			<label for="name">Nome</label>
			<input type="text" name="name" id="name" class="form-control"
				value="<?php echo $info['name'];?>" />
		</div>
		<div class="form-group">
			<label for="email">Email</label>
			<input type="email" name="email" id="email" class="form-control"
				value="<?php echo $info['email'];?>" />
		</div>
		<input type="submit" value="Atualizar" class="btn btn-outline-primary">
	</form>

</div>

<?php include('footer.php');
