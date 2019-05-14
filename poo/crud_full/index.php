<?php
require('app/Contacts.class.php');
include('header.php');
$allContacts = $contact->getAll();
?>


<div class="container">

  <a href="newContact.php" class="btn btn-outline-primary btn-sm">
    <i class="fas fa-plus-square"></i> Adicionar novo contato
  </a>
  <h1>Contatos</h1>

  <table class="table">

    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>E-mail</th>
      <th>Ações</th>
    </tr>

    <!-- Listando Contatos -->
    <?php foreach ($allContacts as $key => $value): ?>
    <tr>
      <td><?php echo $value['id']; ?>
      </td>
      <td><?php echo $value['name']; ?>
      </td>
      <td><?php echo $value['email']; ?>
      </td>
      <td>
        <!-- Actions -->
        <a href="editContact.php?id=<?php echo $value['id'];?>"
          class="btn btn-outline-primary btn-sm"><i class="fas fa-edit"></i> Editar</a>
        <a href="app/delete.php?id=<?php echo $value['id'];?>"
          class="btn btn-outline-danger btn-sm"><i class="fas fa-trash-alt"></i> Delete</a>
      </td>
    </tr>
    <?php endforeach; ?>
  </table>

</div>
<?php include("footer.php");
