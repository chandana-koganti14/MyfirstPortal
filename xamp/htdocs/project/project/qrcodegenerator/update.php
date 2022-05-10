<?php
//include 'connect.php';
$connect=mysqli_connect("localhost","root","","sample");

if(isset($_POST['var'])){
$name=$_POST['var'];
//echo $name;
$status="Vaccinated";
$s = "UPDATE details SET status='$status' WHERE  name='".$name."'";//my query
if (mysqli_query($connect,$s)){
	echo "updated successfully";
}
}
mysqli_close($connect);

?>
