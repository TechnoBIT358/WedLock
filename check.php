<?php
if(isset($_POST['s']))
{
$ua=$_POST['u'];
$p=$_POST['p'];



		if($ua=="argus" && $p=="academy")
		{
		session_start();
		$_SESSION['sida']=session_id();
		$_SESSION['u']=$ua;
		header("location:showoll.php");
		}
		else
		{
		
		include"dbcon.php";
		$us=$_POST['u'];
$sa="select *from rec where email='".$us."' and password='".$p."'"; 

$saq=mysqli_query($cnt,$sa);
if($saq)
	{
	if(mysqli_fetch_row($saq)>0)
	{
	$saq=mysqli_query($cnt,$sa);
			while($r=mysqli_fetch_row($saq))
			{
			$u=$r[1];
			$p=$r[3];
			}
			session_start();
		$_SESSION['sidu']=session_id();
		$_SESSION['u']=$us;
		header("location:showusernew.php");
		}
	
	else
	{
		header("location:login.php");
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
header("location:login.php");
}
?>