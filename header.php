<div id='header'>
<div id='left'>
<b>Kütüphane otomasyonu</b>
</div>
<div id='right'>
    <a href='index.php'>Anasayfa</a>
	<?php
	if(loggedin())
	{
	?>
	<a href='profile.php'>Profil</a>
	<a href='logout.php'>Çýkýþ</a>
	<?php
	} else{
	?>
    <a href='login.php'>Giriþ</a>
    <a href='register.php'>Kayýt Ol</a>
	 <?php
	}
	?>
  
</div>
<div class='clear'></div>
</div>