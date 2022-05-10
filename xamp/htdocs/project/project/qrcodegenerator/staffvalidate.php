<?php 
$id=$_POST['staffid'];
$password=$_POST['password'];
//$checkstaff= "SELECT * FROM staff WHERE staffid='$id'";
$checkpassword= "SELECT password FROM staff WHERE staffid='$id'";
//if ($checkstaff) {
    if($checkpassword['password']==$password){
echo $password;
// index.php
//header("Location: staff.php");
//exit();
}
?>