<a href="venlog.php"> logout </a> |
<a href="showven.php"> vender main page </a> |
<a href="updateven.php">  vender update main page </a> |
<a href="venpkform.php"> Add vender details </a>

<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidv'])
		{
		$ve=$_SESSION['v'];
		echo'welcome '.$ve.'<br>';
		
		include"dbcon.php";
$sv="select *from ven where email='".$ve."'";

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