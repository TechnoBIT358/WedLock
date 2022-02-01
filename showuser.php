<a href="logout.php"> LOGOUT </a> |
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
	echo'<table border="2" width="500"><tr><th>id</th><th>email</th><th>phone</th><th>password</th></tr>';
			while($r=mysqli_fetch_row($saq))
			{
			echo '<tr><th>'.$r[0].'</th>';
			echo ' <th> '.$r[1].'</th>';
			echo '<th>'.$r[2].'</th>';
			echo ' <th>'.$r[3].'</th>';
			echo'</tr>';
			}
			echo'</table>';
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