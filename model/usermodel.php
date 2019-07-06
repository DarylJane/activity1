<?php
require("../database/database.php");
class UserModel{
    public $name;
    public $email;
    public $address;
    public $contact;
    private $db;
    private $tablename = "person";

    public function __construct(){
        $this->db = new database();
    }
    public function insert(){
        $sql = "INSERT INTO $this->tablename (name, email,address,contact) VALUES('$this->name','$this->email','$this->address', '$this->contact')";
        $this->db->execute($sql);
    }
    public function update(){
        $sql = "UPDATE INTO $this->tablename (name,email,address,contact) SET('$this->name') WHERE('$this->id)";
        $this->db->execute($sql);
    }

    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }

    public function delete(){
        $sql = "DELETE FROM $this->tablename (name,email,address,contact) WHERE('$this->id)";
    }
    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>