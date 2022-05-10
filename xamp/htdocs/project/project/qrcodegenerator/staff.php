<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fontawesome/ 4.7.0/css/font-awesome.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://rawgit.com/schmich/instascan-builds/master/instascan.min.js"></script>
</head>
<body>
  <style>
    button
    {
width: 5%;
height: 1000%;
font-size:20px;
margin-border:black;
background: lightblue;
color: black;
    }
    input{
      width: 5%;
height: 1000%;
font-size:20px;
margin-border:black;
background: lightblue;
color: black;
    }
    body{
  background-image: linear-gradient(rgba(0,0,0,0.1),rgba(0,0,0,0.1)),url(vaccine1.png);
  background-position:cover,right;
  background-size:cover;
}
  </style>
<center>
<h1> Click the button to start scanning</h1></center>
<video id="preview"></video>
<button type="button" id="scan" onclick="scanit()">Scan </button>
<form action="#" method="post">
<input type="text" id="inputed" name="inputed" />
<input type="submit" id="search" name="search" value="Search"/>
	</form>
<h3 id="demo"></h3>
<script>
   function scanit() {
let scanner = new Instascan.Scanner({video: document.getElementById('preview') });
      scanner.addListener('scan', function (content) {
     document.getElementById('inputed').value = content;
      scanner.stop();
      });
      Instascan.Camera.getCameras().then(function (cameras) {
        if (cameras.length > 0) {
          scanner.start(cameras[0]);
          scanner.stop();
        } else {
          console.error('No cameras found.');
        }
      }).catch(function (e) {
        console.error(e);
      });

   	}
</script>
</body>
</html>
<!DOCTYPE html>
<head>
  <style>
  .btn{
      /*margin: 20px;*/
  padding: 10px;
  width: 70%;
  height:40px;
  border: none;
  cursor: pointer;
  border-radius: 10px;
  position: center;
  background-color:lightgreen;
  font-size: 20px;
  font-weight: bold;
  color: black;
  /*float: left;*/
    }
  </style>
  <style>
  th{
color:black;
background:lightgreen;
}
</style>
  <style>
    table {
  border-collapse: collapse;
}
th,
td,input {
  border: 1px solid black;
  padding: 20px 15px;
  margin-color: black;
}</style>
</head>
<html>
<body>
<table border="1">
<tr>
<th style="width:130px">Name </th>
<th style="width:100px">Age</th>
<th style="width:150px">Occupation</th>
<th style="width:200px">Address</th>
<th style="width:150px">Email</th>
<th style="width:150px">PhoneNumber</th>
<th style="width:150px">AadharNumber</th>
<th style="width:150px">Status </th>
<th style="width:300px">Updation</th>
</tr>
<?php
$conn=mysqli_connect("localhost","root","","sample");
if (isset($_POST['search']))
 {
  $value = $_POST['inputed'];
$records = mysqli_query($conn,"select * from details where name= '$value'");
while($data= mysqli_fetch_array($records)){  

?>
<tr>
<td><?php echo $data['name'];?></td>
<td><?php echo $data['age'];?></td>
<td><?php echo $data['occupation'];?></td>
<td><?php echo $data['address'];?></td>
<td><?php echo $data['email'];?></td>
<td><?php echo $data['mobileno'];?></td>
<td><?php echo $data['ano'];?></td>
<td><?php echo $data['status'];?></td>
<form method=post action=update.php>
<input type="hidden" name="var" id="var" value='<?php echo "$value"; ?>'/>
<td><input type="submit" name="update" class="btn" value="Update Status"/></td>
</form>

</tr>
<?php  }}
?>


</table>
</body>
</html>