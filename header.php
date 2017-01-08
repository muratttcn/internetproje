<div id='header'>
<div id='left'>
<img src="images/logo.png" alt="logo.png" width="200"/>
</div>
<div id='right'>

    <a href='index.php'>ANASAYFA</a>
	<?php
	if(loggedin())
	{
	?>
	<a href='profile.php'>PROFIL</a>
	<a href='logout.php'>CIKIS </a>
	<?php
	} else{
	?>
    <a href='login.php'>GIRIS</a>
    <a href='register.php'>KAYIT OL</a>
	 <?php
	}
	?>
</div>
<div class='clear'></div>
</div>