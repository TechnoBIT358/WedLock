<a href="login.php"> logout </a> |
<a href="showall.php"> admin main page </a> |

<br>
<?php

session_start();
		
		if(session_id()==$_SESSION['sida'])
		{
		$ua=$_SESSION['u'];
		echo'welcome '.$ua.'<br>';
		$ue=$_POST['au'];
		include"dbcon.php";
		if(isset($_POST['usp']))
		{
$sa="select *from rec where email='".$ue."'";

$saq=mysqli_query($cnt,$sa);
if($saq)
	{
	if(mysqli_fetch_row($saq)>0)
	{
	$saq=mysqli_query($cnt,$sa);
	echo'<form action="adup.php" method="POST">';
			while($r=mysqli_fetch_row($saq))
			{
			echo '<br>id<input type="text" name="i"readonly value='.$r[0].'>';
			echo '<br>email<input type="text" name="u"readonly value='.$r[1].'>';
			echo '<br>phone<input type="text" name="a" value='.$r[2].'>';
			echo '<br>password<input type="text" name="p" value='.$r[3].'>';
			
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
 $sa="delete from rec where email='".$ue."'";

$saq=mysqli_query($cnt,$sa);
if($saq)
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
header("location:login.php");
}

 }
 else
{
header("location:login.php");
}


?>