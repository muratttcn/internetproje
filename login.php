<html>
<head>
<title>Giri�</title>
<link rel='stylesheet' href='css/style.css'/>
</head>
<body>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'header.php'; ?>

<div id='body'>
<b>Giri� Yap</b>
<br/><br/>
<form method='post'>
<?php
  if(isset($_POST['submit']))
  {
	  $username=$_POST['username'];
	  $password=$_POST['password'];
	  if(empty($username)or empty($password))
	  {
		 $message="Bo� b�rakt�n�z!"; 
	  }else{
	   $check=mysql_query("SELECT id FROM users WHERE username='$username'AND password='".md5($password)."'");
     	if(mysql_num_rows($check==0))
		{
			$message="Kullan�c� ad� veya �ifre yanl��";
		}
		else{
			$run=mysql_fetch_array($check);
		$id=$run['id'];
		$_SESSION['user_id']=$id;
		header('location:index.php');
			
		}
		
		
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
<input type='submit' name='submit' value='Giri�'/>
</form>
</div>

</body>
</html>