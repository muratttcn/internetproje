<html>
<head>
<title> Kütüphane Otomasyonu</title>
<link rel='stylesheet' href='css/style.css'/>
</head>
<body>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'header.php'; ?>

<div id='body'>
<?php 
$my_id=$_SESSION['user_id'];
if(isset($_GET['u_id'])&&!empty($_GET['u_id'])){
$u_id=$_GET['u_id'];
}else{
$u_id=$_SESSION['user_id'];	
}
echo '<b>'.getuser('username',$u_id).'</b>';
?>
<hr/>
<br/>



</body>
</html>