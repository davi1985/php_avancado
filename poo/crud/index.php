<?php
require 'Contacts.class.php';
$contact = new Contacts();

// New Contact
$contact->add('davisilvaphoto@gmail.com', 'Davi Silva');
$contact->add('teste@gmail.com');

// Show a contact
$email = 'davisilvaphoto@gmail.com';
$name = $contact->getName($email);
echo $name.'<br/>';

// Show all contacts
echo '<pre>';
print_r($contact->getAll());

// Edit contact
$contact->edit('Testador', 'teste@gmail.com');

// Delete contact
$deleteContact = $contact->delete('teste@gmail.com');

echo ($deleteContact) ? 'Dados Excluidos' : 'Dados Inválidos';
