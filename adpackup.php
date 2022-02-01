
<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |
<a href="adminpack.php"> packages</a>|
<br>


<br>
<?php
$n=$us="";
session_start();
		
		if(session_id()==$_SESSION['sid'])
		{
		
		$u=$_SESSION['u'];
		echo'welcome '.$u.'<br>';
		
		include"dbcon.php";
		$us=$_POST['n'];
		$uid=$_POST['i'];
		
		
		
$sv="update apackage set package='".$us."' where id='".$uid."'";

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