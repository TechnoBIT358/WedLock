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
$sa="select *from rec";

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
			
			
			
			$saq=mysqli_query($cnt,$sa);
			echo'<form action="adminup.php" method="POST">';
	echo'<br><br>select any <select name="au">';
			while($r=mysqli_fetch_row($saq))
			{
			echo '<option value="'.$r[1].'">'.$r[1].'</option>';
			
			}
			echo'</select>';
			echo'<input type="submit" name="usp" value="update">';
			echo'<input type="submit" name="del"value="delete">';
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