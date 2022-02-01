<a href="login.php"> LOGOUT </a> |
<a href="showusernew.php"> MY PROFILE</a> |
<a href="updateuser2.php"> EDIT PROFILE </a> |
<a href="bookven.php"> book vender </a> |
<a href="bookshow.php"> show booking </a> |
<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidu'])
		{
		$us=$_SESSION['u'];
		echo'welcome '.$us.'<br>';
		
		include"dbcon.php";
		$a=$_POST['a'];
		$p=$_POST['p'];
		
$sa="update rec set phone=".$a." , password='".$p."' where email='".$us."'";

$saq=mysqli_query($cnt,$sa);
if($saq)
	{
	echo' update successfully';
	
	}
		else
		{
		echo' error ';
		}
 

 }
 else
{
header("location:login.php");
}


?>