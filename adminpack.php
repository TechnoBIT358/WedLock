<a href="venlog.php"> logout </a> |
<a href="showallven.php"> admin main page </a> |
<a href="adminpack.php"> packages</a>|
<br>



<?php
session_start();
		
		if(session_id()==$_SESSION['sid'])
		{
		$u=$_SESSION['u'];
		echo'welcome '.$u.'<br>';
		
include"dbcon.php";
$p="select * from apackage";

$q=mysqli_query($cnt,$p);
if($q)
	{
	if(mysqli_fetch_row($q)>0)
	{
	$q=mysqli_query($cnt,$p);
	echo'Packages available in this site<br>';
	echo'<table border="2" width="500"><tr><th>id</th><th>package</th></tr>';
			while($r=mysqli_fetch_row($q))
			{
			echo '<tr><th>'.$r[0].'</th>';
			echo '<th>'.$r[1].'</th>';
			echo'</tr>';
			}
			echo'</table>';
			
			
			
			$q=mysqli_query($cnt,$p);
			echo'<form action="adminpackup.php" method="POST">';
	echo'<br><br>select any <select name="au">';
			while($r=mysqli_fetch_row($q))
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

<?php


if (isset($_POST['s']))
{
include "dbcon.php";
$n=trim($_POST['n']);
$n1='/^[a-zA-Z]*$/';
if(!preg_match($n1,$n)||strlen($n)==0)
	{$ns='--*check package';
	}


$pa="insert into apackage(package) values ('$n')";
$qa=mysqli_query($cnt,$pa);
if($qa)
{
echo'<script> alert ("thanks") </script>';
}
else
{
echo'<script> alert ("error") </script>';
}
}

?>
<body>

<form action="" method="POST">


<br>

PACKAGE:<input type="text" name="n"><br> <br>

<input type="submit" name="s" value="ADD"> 
</form>
</body>
</html>












 
 
 
 
 
 
 