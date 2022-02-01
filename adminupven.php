<html>
<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |

<br>
<?php

session_start();
		
		if(session_id()==$_SESSION['sida'])
		{
		$ua=$_SESSION['v'];
		echo'welcome '.$ua.'<br>';
		$ue=$_POST['au'];
		include"dbcon.php";
		if(isset($_POST['usp']))
		{
			
$sv="select *from ven where email='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
	echo'<form action="adupven.php" method="POST">';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<br>id<input type="text" name="i"readonly value='.$r[0].'>';
			echo '<br>name<input type="text" name="n"readonly value='.$r[1].'>';
			echo '<br>email<input type="text" name="v"readonly value='.$r[2].'>';
			echo '<br>phone<input type="text" name="a" value='.$r[3].'>';
			echo '<br>password<input type="text" name="p" value='.$r[4].'>';
			
			}
			echo'<input type="submit" name="usp" value="update">';
			
			echo'<br></form>';
			
		}
		
	
	else
	{
		echo' no record found ';
	}
}
		else
		{
		echo' error ';
		}
 }
 else if(isset($_POST['del']))
 {
	 
 $sv="delete from ven where email='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	echo'deleted successfully ';
 }
 else
		{
		echo' error ';
		}
 
 }
  else
{
header("location:showallvennew.php");
}

 }
 else
{
header("location:showallvennew.php");
}


?>