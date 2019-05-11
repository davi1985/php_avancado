<?php
/**
 * Simple CRUD
 */
class Contacts
{
    private $pdo;
    public function __construct()
    {
        $this->pdo = new PDO('mysql:dbname=crud_poo;host=localhost', 'root', '');
    }

    // Create
    public function add($email, $name = '')
    {
        // using auxiliary method isThereEmail()
        if ($this->isThereEmail($email) == false) {
            $sql = 'INSERT INTO contacts (name, email) VALUES (:name, :email)';
            // $name = filter_var($name, FILTER_SANITIZE_STRING);
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }
    // Read one data
    public function getName($email)
    {
        $sql = 'SELECT name FROM contacts WHERE email = :email';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':email', $email);
        $sql->execute();

        if ($sql->rowCount() > 0) {
            $info = $sql->fetch();
            return $info['name'];
        } else {
            return '';
        }
    }

    // Read all data
    public function getAll()
    {
        $sql = 'SELECT * FROM contacts';
        $sql = $this->pdo->query($sql);

        return ($sql->rowCount() > 0) ? $sql->fetchAll() : array();
    }

    // Update
    public function edit($name, $email)
    {
        if ($this->isThereEmail($email)) {
            $sql = 'UPDATE contacts SET name = :name WHERE email = :email';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    // Delete
    public function delete($email)
    {
        if ($this->isThereEmail($email)) {
            $sql = 'DELETE FROM contacts WHERE email = :email';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':email', $email);
            $sql->execute();

            return true;
        } else {
            return false;
        }
    }

    // Auxiliary method to verify if is there an email in database
    private function isThereEmail($email)
    {
        // $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $sql = 'SELECT * FROM contacts WHERE email = :email';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue('email', $email);
        $sql->execute();

        return ($sql->rowCount() > 0) ? true : false;
    }
}
