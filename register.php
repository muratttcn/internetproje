<html>
<head>
<title>Kayýt Ol</title>
<link rel='stylesheet' href='css/style.css'/>
</head>
<body>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'header.php'; ?>

<div id='body'>
<b>Kayýt Ol</b>
<br/><br/>
<form method='post'>
<?php
  if(isset($_POST['submit']))
  {
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  if(empty($username)or empty($password))
	  {
		 $message="Boþ býrakýlamaz!"; 
	  }else{
	   mysql_query("INSERT INTO users VALUES('','$username','".md5($password)."')");
     	$message="Kayýt Oldun";
	  }
	  echo "<div id='box'>$message</div>";
	  
  }

?>
Kullanýcý Adý:<br/>
<input type='text' name='username'/>
<br/><br/>
Þifre:<br/>
<input type='password' name='password'/>
<br/><br/>
<input type='submit' name='submit' value='Kayýt Ol'/>
</form>
</div>

</body>
</html>