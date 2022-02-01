<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |

<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sida'])
		{
		$ua=$_SESSION['v'];
		echo'welcome '.$ua.'<br>';
include"dbcon.php";
$sv="select *from ven";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
	echo'<table border="2" width="500"><tr><th>id</th><th>name</th><th>email</th><th>phone</th><th>password</th></tr>';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<tr><th>'.$r[0].'</th>';
			echo ' <th> '.$r[1].'</th>';
			echo '<th>'.$r[2].'</th>';
			echo ' <th>'.$r[3].'</th>';
			echo ' <th>'.$r[4].'</th>';
			echo'</tr>';
			}
			echo'</table>';
			
			
			
			$svq=mysqli_query($cnt,$sv);
			echo'<form action="adminupven.php" method="POST">';
	echo'<br><br>select any <select name="au">';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<option value="'.$r[2].'">'.$r[2].'</option>';
			
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
header("location:venlog.php");
}

 ?>