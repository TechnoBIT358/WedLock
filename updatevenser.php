<a href="venlog.php"> logout </a> |
<a href="showven.php"> vender main page </a> |
<a href="updateven.php"> vender update main page </a> |
<a href="venpkform.php"> Add vender details </a>|
<a href="vensershow.php">  vender services </a>|


<br>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidv'])
		{
		$ve=$_SESSION['v'];
		echo'welcome '.$ve.'<br>';
		$idd=$_POST['au'];
		
		include"dbcon.php";
$sv3="select *from vender where id='".$idd."'";

$svq3=mysqli_query($cnt,$sv3);
if($svq3)
	{
	if(mysqli_fetch_row($svq3)>0)
	{
	$svq3=mysqli_query($cnt,$sv3);
	echo'<form action="venserup.php" method="POST" enctype="multipart/form-data">';
			while($r=mysqli_fetch_row($svq3))
			{
			echo '<br>id<input type="text" name="au"readonly value='.$r[0].'>';
			echo '<br>name<input type="text" name="n"readonly value='.$r[1].'>';
			echo '<br>email<input type="text" name="v"readonly value='.$r[2].'>';
			echo '<br>city<input type="text" name="c" value='.$r[3].'>';
			echo '<br>service<input type="text" name="ser" value='.$r[4].'>';
			echo '<br>description<input type="text" name="d" value='.$r[5].'>';
			echo '<br>rate<input type="text" name="r" value='.$r[6].'>';
			echo'<br>photo<img src="'.$r[7].'" width="50" height="50">';
			echo '<br>photo<input type="file" name="i" value="">';
			echo'<input type="submit" name="usp" >';
			}
			
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