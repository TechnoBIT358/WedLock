<html>
<head>
<title></title>
<script>
function showState(Country_Id)
{
 document.frm.submit();
}
</script>
</head>
</body>
<form method='POST' action='city.php'name="frm" id="frm">
<?php
			include("dbcon.php");
		//$con=mysqli_connect("localhost:3306", "root", "ruchi","d") or die("Connection Failed");
	
		//$query = "SELECT * FROM state";
		$result = mysql_query("SELECT * FROM state");
		?>
		<select name="select1"  onChange="showState(this.value);">
		<option value="">--- Select State---</option>
		<?php
		while ($line = mysql_fetch_array($result)) 
		{
			?>
			<option value="<?php echo $line['s_id'];?>" 

			<?php 
			if(isset($_REQUEST['select1']) AND $line['s_id']==$_REQUEST['select1'])
			{ echo 
			"Selected"; } ?> >  
			
			<?php echo $line['s_name'];?> </option>
			<?php
		}
		
	
		$result = mysql_query("SELECT * FROM city where s_id='$_REQUEST[select1]'");
	?>
	</select>
	<select name="select2"  >
		<option value="">--- Select City---</option>
		<?php
			while ($line = mysql_fetch_array($result))
			{
			?>
			<option value="<?php echo $line['city'];?>"> <?php echo $line['city'];?> </option>
			<?php
			}
	?>
</form>
</body>
</html>
		
		
		