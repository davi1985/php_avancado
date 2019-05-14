<?php
require('Contacts.class.php');

if (!empty($_POST['id'])) {
    $id = $_POST['id'];
    $email = $_POST['email'];
    $name = $_POST['name'];

    if (!empty($email)) {
        $contact->edit($name, $email, $id);
    }
    header('Location: ../index.php');
}
