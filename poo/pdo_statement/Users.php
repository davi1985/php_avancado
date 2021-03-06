<?php

/**
 * Class Users
 * @author Davi Silva
 */
class Users
{
    private $db;
  
    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:dbname=blog;host=localhost', 'root', '');
        } catch (PDOExeption $e) {
            echo 'ERRO:'.$e->getMessage();
        }
    }
    /**
    * @args $id
    */
    public function select($id)
    {
        $sql = $this->db->prepare('SELECT * FROM users WHERE id = :id');
        $sql->bindValue(':id', $id);
        $sql->execute();

        $data = array();
        if ($sql->rowCount() > 0) {
            $data = $sql->fetch();
        }
        return $data;
    }

    /**
     * @args $name, $email, $password, $id
     */
    public function insertUser($name, $email, $password)
    {
        $sql = $this->db->prepare('INSERT INTO users SET name = :name, email = :email, password = :password ');
        $sql->bindParam(':name', $name);
        $sql->bindParam(':email', $email);
        $sql->bindValue(':password', md5($password));
        $sql->execute();
    }

    /**
     * @args $name, $email, $password, $id
     */
    public function updateUser($name, $email, $password, $id)
    {
        $sql = $this->db->prepare('UPDATE users SET name = ?, email = ?, password = ? WHERE id = ?');
        $sql->execute(array($name, $email, md5($password), $id));
    }
    /**
     * Without args
     */
    public function delete()
    {
        $sql = $this->db->prepare('DELETE FROM users WHERE id = ?');
        $sql->bindValue(1, $id);
        $sql->execute();

        return true;
    }
}
