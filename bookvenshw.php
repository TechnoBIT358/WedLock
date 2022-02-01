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
$sv1="select *from vender";

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
			
		?>
			<body>
<form method='POST' action='showbill.php'>

<?php
		$result = mysqli_query($cnt,"SELECT * FROM vender group by email");
	?>

	<select name="select2">
		<option value="">--- Select vender---</option>
		<?php
			while ($line = mysqli_fetch_array($result))
			{
			?>
			<option value="<?php echo $line[2];?>"> <?php echo $line[2];?> </option>
			<?php
			}
	?>
	</select>
	
	<select name="select3"  >
		<option value="">--- Select service---</option>
		<?php
		$result = mysqli_query($cnt,"SELECT * FROM vender group by services");
	
			while ($line = mysqli_fetch_array($result))
			{
			?>
			<option value="<?php echo $line[4];?>"> <?php echo $line[4];?> </option>
			<?php
			}
	?>
	</select>
	<br><br>                                                                                           
	<input type="submit" name="s">
	<?php
	if (isset($_POST['s']))
{
$vpk="insert into book(uemail,vemail,service,amount) values ('$us','$ve','$ser','$r')";
$vp=mysqli_query($cnt,$vpk);
if($vp)
{
echo'<script> alert ("thanks") </script>';
}
else
{
echo'<script> alert ("error") </script>';
}
}
		
			
			
			
			
			
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
</form>
</body>
</html>