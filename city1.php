<html>
<head>
<title></title>

</head>
</body>
<form method='POST' action='city1.php'>
<?php
			include("dbcon.php");

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
	?>
</form>
</body>
</html>
		
		
		