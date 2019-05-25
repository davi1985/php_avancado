<?php
require("Users.php");

// Add new User;
// $user = new Users();
// $user->setName("Sarah Emilly");
// $user->setEmail("sarah@gmail.com");
// $user->setPassword("123");
// $user->save();
// echo "Usuario ADICIONADO com Sucesso";

// Update User
// $user = new Users(3);
// $user->setName("Sarah Emilly Braga da Silva");
// $user->save();

// echo "Usuário atualizado com Sucesso";


// Delete Users;
$user = new Users(3);
$user->delete();

echo "Usuario deletado com sucesso.";
var_dump($user);
