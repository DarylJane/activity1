<?php 
require("../model/usermodel.php");


class userControl{
    private $userModel;

   public function __construct(){
       $this->userModel = new userModel();
   }

   public function adduser($name, $email, $address, $contact){
       $this->$userModel->name=$name;
       $this->$userModel->email=$email;
       $this->$userModel->address=$address;
       $this->$userModel->contact=$contact;
       $this->$userModel->insert();
   }



   public function __destruct(){
    unset($this->usercontrol);
}


}
?>