<?php
require('Contacts.class.php');
if (isset($_POST['email']) && !empty($_POST['email'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    
    $contact->add($email, $name);
    header('Location: ../index.php');
}
