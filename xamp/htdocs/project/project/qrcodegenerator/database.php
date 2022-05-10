<?php 
$name=$_POST['name'];
$age=$_POST['age'];
$occupation=$_POST['occupation'];
$address=$_POST['address'];
$email=$_POST['email'];
$mobileno=$_POST['mobile'];
$ano=$_POST['ano'];
$status="not vaccinated";

$connection=mysqli_connect('localhost','root','','sample');
$sql="INSERT INTO details(name,age,occupation,address,email,mobileno,ano,status) VALUES ('".$name."','".$age."','".$occupation."','".$address."','".$email."','".$mobileno."','".$ano."','".$status."')";
if(mysqli_query($connection,$sql)){
	echo "inserted";}
	//echo '$occupation';

?>
<?php 
// Include the qrlib file 
include 'phpqrcode/qrlib.php'; 
$text = $_POST['name'];
$path = 'images/'; 
$file = $path.uniqid().".png"; 
$ecc = 'L'; 
$pixel_Size = 10; 
$frame_Size = 10; 
QRcode::png($text, $file, $ecc, $pixel_Size, $frame_Size); 
echo "<center><img src='".$file."'></center>"; ?>
<!DOCTYPE html>
<html>
<body>
<style>
button{
font-size:25px;
font-weight: 700;
   color: black;
   text-transform: uppercase;
    background-color:lightgreen;
 
   border-radius: 4px 4px 4px 4px;
   padding: 10px 20px ;
   position: fixed;
   left:45%;
   top:50%;
}
</style>
<button><a href="<?php echo $file ?>">Download</a></button>
</body>
</html>
