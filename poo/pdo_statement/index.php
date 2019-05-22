<?php
require 'Users.php';

$users = new Users();

$info = $users->select(7);
// $user = $users->insertUser("Fulano", "fulano@gmail.com", "123");
// $updateUser = $users->updateUser("Fulano de Tal", "fulano@hotmail.com", "1234", 7);
$delete = $users->delete(7);

echo ($delete) ? 'Deletado com sucesso' : 'Erro';
