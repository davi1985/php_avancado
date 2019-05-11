<?php
require 'Contacts.class.php';
$contact = new Contacts();
$contact->add('davisilvaphoto@gmail.com', 'Davi Silva');
$contact->add('teste@gmail.com');

$email = 'davisilvaphoto@gmail.com';
$name = $contact->getName($email);
echo $name.'<br/>';

$allContacts = $contact->getAll();
echo '<pre>';
print_r($allContacts);
echo '<br>';

$contact->edit('Testador', 'teste@gmail.com');
$deleteContact = $contact->delete('teste2@gmail.com');
$info = ($deleteContact) ? 'Dados Excluidos' : 'Dados Inválidos';

echo $info;
