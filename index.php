<html>
<head>
<title> Kütüphane otomasyonu</title>
<link rel='stylesheet' href='css/style.css'/>
</head>

<body>
<?php include 'connect.php'; ?>
<?php include 'functions.php'; ?>
<?php include 'header.php'; ?> 



<div id='body'>

<img src="images/resim2.png" alt="resim2.png" width="725" height="520"/>
<input name="button" type="submit" value="UYE ISLEMLERI" width="50"; height="50"; onclick="window.location ='Uyeislemleri.php'" <br>
<input name="button" type="submit" value="UYE LISTESI" width="50"; height="50"; onclick="window.location ='uyeekleme.php'" <br>
<input name="button" type="submit" value="KITAP ISLEMLERI" width="50"; height="50"; onclick="window.location ='kitapislemleri.php'" </br>
<input name="button" type="submit" value="KITAP KIRALAMA" width="50"; height="50"; onclick="window.location ='kitapkiralama.php'" </br>
<input name="button" type="submit" value="KITAP TESLIM ALMA" width="50"; height="50"; onclick="window.location ='kitapteslimalma.php'"

</div>


</body>
</html>