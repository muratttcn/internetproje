<div id='header'>
<div id='left'>
<b>K�t�phane otomasyonu</b>
</div>
<div id='right'>
    <a href='index.php'>Anasayfa</a>
	<?php
	if(loggedin())
	{
	?>
	<a href='profile.php'>Profil</a>
	<a href='logout.php'>��k��</a>
	<?php
	} else{
	?>
    <a href='login.php'>Giri�</a>
    <a href='register.php'>Kay�t Ol</a>
	 <?php
	}
	?>
  
</div>
<div class='clear'></div>
</div>