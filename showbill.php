<a href="login.php"> logout </a> |
<a href="showuser.php"> user main page </a> |
<a href="updateuser.php"> userupdate main page </a> |
<a href="bookvenshw.php"> book vender </a> |
<a href="showbill.php"> bill </a> |



<?php
session_start();
		
		if(session_id()==$_SESSION['sidu'])
		{
		$us=$_SESSION['u'];
		echo'welcome '.$us.'<br>';
		
		include"dbcon.php";
$sv="select *from vender where email='".$us."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
	echo'<table border="2" width="500"><tr><th>id</th><th>user email</th><th>vender email</th><th>service</th><th>amount</th></tr>';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<tr><th>'.$r[0].'</th>';
			echo ' <th> '.$r[1].'</th>';
			echo '<th>'.$r[2].'</th>';
			echo ' <th>'.$r[4].'</th>';
			echo ' <th>'.$r[6].'</th>';
			echo'</tr>';
			}
			echo'</table>';
		
		
		$svq=mysqli_query($cnt,$sv);
			echo'<form action="cancelbook.php" method="POST">';
	echo'<br><br>select any <select name="au">';
			while($r=mysqli_fetch_row($svq1))
			{
			echo '<option value="'.$r[0].'">'.$r[0].'</option>';
			
			}
			echo'</select>';
			echo'<input type="submit" name="del"value="cancel">';
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