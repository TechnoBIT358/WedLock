<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |
<a href="adminpack.php"> packages</a>|
<br>





<br>
<?php

session_start();
		
		if(session_id()==$_SESSION['sid'])
		{ 
		$u=$_SESSION['u'];
		echo'welcome '.$u.'<br>';
		$ue=$_POST['au'];
		
		include"dbcon.php";
		if(isset($_POST['usp']))
		{
$sv="select * from apackage where id='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
	echo'<form action="adpackup.php" method="POST">';
			while($r=mysqli_fetch_row($svq))
			{
			echo '<br>id<input type="text" name="i"readonly value='.$r[0].'>';
			echo '<br>package<input type="text" name="n" value='.$r[1].'>';
			
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
 $sv="delete from apackage where id='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
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
header("location:venlog.php");
}

 }
 else
{
header("location:venlog.php");
}


?>