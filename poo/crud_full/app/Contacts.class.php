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
            $name = filter_var($name, FILTER_SANITIZE_STRING);
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
    public function getInfo($id)
    {
        $sql = 'SELECT * FROM contacts WHERE id = :id';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();

        return ($sql->rowCount() > 0) ? $sql->fetch() : array();
    }

    // Read all data
    public function getAll()
    {
        $sql = 'SELECT * FROM contacts';
        $sql = $this->pdo->query($sql);

        return ($sql->rowCount() > 0) ? $sql->fetchAll() : array();
    }

    // Update
    public function edit($name, $email, $id)
    {
        if (!$this->isThereEmail($email)) {
            $sql = 'UPDATE contacts SET name = :name, email = :email WHERE id = :id';
            $sql = $this->pdo->prepare($sql);
            $sql->bindValue(':name', $name);
            $sql->bindValue(':email', $email);
            $sql->bindValue(':id', $id);
            $sql->execute();
            return true;
        } else {
            return false;
        }
    }

    // Delete
    public function delete($id)
    {
        $sql = 'DELETE FROM contacts WHERE id = :id';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue(':id', $id);
        $sql->execute();
    }

    // Auxiliary method to verify if is there an email in database
    private function isThereEmail($email)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        $sql = 'SELECT * FROM contacts WHERE email = :email';
        $sql = $this->pdo->prepare($sql);
        $sql->bindValue('email', $email);
        $sql->execute();

        return ($sql->rowCount() > 0) ? true : false;
    }
}
$contact = new Contacts();
