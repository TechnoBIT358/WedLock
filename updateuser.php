<a href="login.php"> LOGOUT </a> |
<a href="showuser.php"> MY PROFILE</a> |
<a href="updateuser.php"> EDIT PROFILE </a> |
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
$sa="select *from rec where email='".$us."'";

$saq=mysqli_query($cnt,$sa);
if($saq)
	{
	if(mysqli_fetch_row($saq)>0)
	{
	$saq=mysqli_query($cnt,$sa);
	echo'<form action="userup.php" method="POST">';
			while($r=mysqli_fetch_row($saq))
			{
			echo '<br>id<input type="text" name="i"readonly value='.$r[0].'>';
			echo '<br>email<input type="text" name="u"readonly value='.$r[1].'>';
			echo '<br>phone<input type="text" name="a" value='.$r[2].'>';
			echo '<br>password<input type="text" name="p" value='.$r[3].'>';
			
			}
			echo'<input type="submit" name="usp">';
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
 else
{
header("location:login.php");
}


?>