<html>
<head>
<title>Kay�t Ol</title>
<link rel='stylesheet' href='css/style.css'/>
</head>
<body>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'header.php'; ?>

<div id='body'>
<b>Kay�t Ol</b>
<br/><br/>
<form method='post'>
<?php
  if(isset($_POST['submit']))
  {
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  if(empty($username)or empty($password))
	  {
		 $message="Bo� b�rak�lamaz!"; 
	  }else{
	   mysql_query("INSERT INTO users VALUES('','$username','".md5($password)."')");
     	$message="Kay�t Oldun";
	  }
	  echo "<div id='box'>$message</div>";
	  
  }

?>
Kullan�c� Ad�:<br/>
<input type='text' name='username'/>
<br/><br/>
�ifre:<br/>
<input type='password' name='password'/>
<br/><br/>
<input type='submit' name='submit' value='Kay�t Ol'/>
</form>
</div>

</body>
</html>