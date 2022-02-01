<a href="login.php"> logout </a> |
<a href="showall.php"> admin main page </a> |

<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sida'])
		{
		$ua=$_SESSION['u'];
		echo'welcome '.$ua.'<br>';
		
		include"dbcon.php";
		$us=$_POST['u'];
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