<a href="venlog.php"> logout </a> |
<a href="showven.php"> vender main page </a> |
<a href="updateven.php">  vender update main page </a> |
<a href="venpkform.php"> Add vender details </a>|
<a href="vensershow.php">  vender services </a>|
<a href="updatevenser.php">  up services </a>|


<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidv'])
		{
		$ve=$_SESSION['v'];
		echo'welcome '.$ve.'<br>';
		
		include"dbcon.php";
$sv1="select *from vender where email='".$ve."'";

$svq1=mysqli_query($cnt,$sv1);
if($svq1)
	{
	if(mysqli_fetch_row($svq1)>0)
	{
	$svq1=mysqli_query($cnt,$sv1);
	echo'<table border="2" width="500"><tr><th>id</th><th>name</th><th>email</th><th>city</th><th>service</th><th>description</th><th>rate</th><th>photo</th></tr>';
			while($r=mysqli_fetch_row($svq1))
			{
			echo '<tr><th>'.$r[0].'</th>';
			echo ' <th> '.$r[1].'</th>';
			echo '<th>'.$r[2].'</th>';
			echo ' <th>'.$r[3].'</th>';
			echo ' <th>'.$r[4].'</th>';
			echo ' <th>'.$r[5].'</th>';
			echo ' <th>'.$r[6].'</th>';
			echo ' <th><img src="'.$r[7].'" width="50" height="50"></th>';
			echo'</tr>';
			}
			echo'</table>';
		
		
		$svq1=mysqli_query($cnt,$sv1);
			echo'<form action="venserup1.php" method="POST">';
	echo'<br><br>select any <select name="au">';
			while($r=mysqli_fetch_row($svq1))
			{
			echo '<option value="'.$r[0].'">'.$r[0].'</option>';
			
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