<?php
require ("usermodel.php");


 $userModel = new UserModel();

//case 1
 //$userModel->name = "Daryl Jane";
 //$userModel->contact = "091234567";
//var_dump ($userModel->insert());

 //case 2
//$id="31";
//$userModel->contact = "094546411";
//var_dump ($userModel->update($id));


//case 4
//$id="1";
//var_dump ($userModel->delete($id));

//case 6
//$id="s";
//$userModel->contact = "asda";
//var_dump ($userModel->update('a'));

//case 7
$id='sd';
var_dump($userModel->delete('ss'));
?>
