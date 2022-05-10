<?php 
$name=$_POST['name'];?>
<!DOCTYPE html>
<html>
<body>
<form action="qrcodegenerateanddownload.php" method="POST">
	<input type="hidden" value="<?php echo $name?>" name="user">
	<input type="submit" value="submit">
</form>
</body>
</html>


 