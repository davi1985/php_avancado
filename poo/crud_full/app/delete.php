<?php
require('Contacts.class.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];
    $contact->delete($id);
}
header('Location: ../index.php');
