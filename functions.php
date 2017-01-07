<?php
session_start();

function loggedin()
{
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
		
	}	
	
}
function getuser($field, $user_id){
$query=mysql_query("SELECT $field FROM users WHERE id='$user_id'");	
$run=mysql_fetch_array($query);
return $run[$field];	
}

?>