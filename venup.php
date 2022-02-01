<a href="venlog.php"> logout </a> |
<a href="showven.php"> vender main page </a> |
<a href="updateven.php"> vender update main page </a> |
<a href="venpkform.php"> Add vender details </a>



<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidv'])
		{
		$ve=$_SESSION['v'];
		echo'welcome '.$ve.'<br>';
		
		include"dbcon.php";
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