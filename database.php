<?php
$cnt=mysqli_connect('localhost:3306','root','ruchi');
if(!$cnt)
{
echo'<br> error number '.mysqli_connect_errno();
echo'<br> error number '.mysqli_connect_error();
}
else
{
	$dc="create database d";
	$sdc=mysqli_query($cnt,$dc);
	if($sdc)
	{
			echo'<br> created successfully db ';
		}
		else
		{
		echo' error in creating db ';
		}
}

?>