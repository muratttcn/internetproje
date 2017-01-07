<?php
@$connect=mysql_connect('localhost','root','');
if($connect)
{
	mysql_select_db('kullanici');
	
}
else
{
echo "Host Connecting Error!";	
	
}

?>