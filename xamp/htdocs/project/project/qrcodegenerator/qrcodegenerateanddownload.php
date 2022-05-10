<?php 
// Include the qrlib file 
include 'phpqrcode/qrlib.php'; 
$text = $_POST['user'];
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
<button><a href="<?php echo $file ?>">Download</a></button>
</body>
</html>
