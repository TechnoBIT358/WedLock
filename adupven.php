<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |
<a href="adminpack.php"> packages</a>|

<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sida'])
		{
		$ua=$_SESSION['v'];
		echo'welcome '.$ua.'<br>';
		
		include"dbcon.php";
		$ve=$_POST['v'];
		$a=$_POST['a'];
		$p=$_POST['p'];
		
$sv="update ven set phone=".$a." , password='".$p."' where email='".$ve."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
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
header("location:venlog.php");
}


?>