<?php 
$host="Localhost";
$user="root";
$pass="Hussain@Ahmed";
$dbname="QaClick";
$connect=mysqli_connect($host,$user,$pass,$dbname);


?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<title> Email List</title>
</head>
<body>
<?php if(isset($_GET['msg']))
		echo $_GET['msg'];
?>	
<div class="container" align="center">
  	
  
	<form method="POST" action="getEmails.php" id="login" name="login">
  <div class="form-group row">
  <div class="col-md-4">
    <label for="exampleInputEmail1">Username</label>
	</div>
	<div class="col-md-4">
    <input type="text" class="form-control" name="username" aria-describedby="emailHelp" required></div>
   
  </div>
  <div class="form-group row">
  <div class="col-md-4">
    <label for="exampleInputEmail1">Password</label>
	</div>
	<div class="col-md-4">
    <input type="text" class="form-control" name="password" required></div>
   
  </div>
  
 
  <button type="submit" class="btn btn-primary" name="log_user">Login</button>
</form>

</div></body>
</html>
