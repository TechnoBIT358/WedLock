<a href="venlog.php"> logout </a> |
<a href="showven.php"> vender main page </a> |
<a href="updateven.php"> vender update main page </a> |
<a href="showven.php"> vender main page </a> |
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
	echo'<form action="venup.php" method="POST">';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<br>id<input type="text" name="i"readonly value='.$r[0].'>';
			echo '<br>name<input type="text" name="n"readonly value='.$r[1].'>';
			echo '<br>email<input type="text" name="v"readonly value='.$r[2].'>';
			echo '<br>phone<input type="text" name="a" value='.$r[3].'>';
			echo '<br>password<input type="text" name="p" value='.$r[4].'>';
			
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
header("location:venlog.php");
}


?>