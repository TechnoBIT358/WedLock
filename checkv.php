<?php
if(isset($_POST['s']))
{
$ua=$_POST['v'];
$p=$_POST['p'];



		if($ua=="argus" && $p=="academy")
		{
		session_start();
		$_SESSION['sida']=session_id();
		$_SESSION['v']=$ua;
		header("location:showoll.php");
		}
		else
		{
		$ve=$_POST['v'];
		include"dbcon.php";
$sv="select *from ven where email='".$ve."' and password='".$p."'"; 

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
			while($r=mysqli_fetch_row($svq))
			{
			$u=$r[2];
			$p=$r[4];
			}
			session_start();
		$_SESSION['sidv']=session_id();
		$_SESSION['v']=$ve;
		header("location:showvennew.php");
		}
	
	else
	{
		header("location:venlog.php");
	}
}
		else
		{
		echo' error ';
		}

		
		
		
		
		}
		

}
else
{
header("location:venlog.php");
}
?>