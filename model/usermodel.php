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
        $sql = "INSERT INTO $this->tablename (name,contact) VALUES('$this->name','$this->contact')";
         if ( $this->db->execute($sql) == 1){
        return true;
       }else{
           return false;
       }
    }
    public function update($id){
        $sql= "UPDATE $this->tablename SET contact='$this->contact' WHERE id=$id";

        if ( $this->db->execute($sql) == 1){
            return true;
        }else{
            return false;
        }
   }
    

    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->db->execute($sql);
    }

    public function delete($id){
        $sql = "DELETE FROM $this->tablename WHERE id =$id";
        if ($this->db->execute($sql) == 1) {
            return true;
        }
            else{
                return false;
            }
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