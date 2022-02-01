<html>
<head>
<title> vender service form </title>
</head>
<?php
session_start();
		
		if(session_id()==$_SESSION['sidv'])
		{
		$ve=$_SESSION['v'];
		echo'welcome '.$ve.'<br>';
		
		include"dbcon.php";
$sv="select *from ven where email='".$ve."'";





$c=$cs=$u=$es=$n=$ns=$s=$ss=$d=$ds=$r=$rs=$i=$is='';
$nr=0;
$cr=0;
$sr=0;
$er=0;
$rr=0;
$ir=0;
$ne="select name from ven where email='".$ve."'";
$ne1=mysqli_query($cnt,$ne);

		
if($ne1)
	{
	if(mysqli_fetch_row($ne1)>0)
	{
	$ne1=mysqli_query($cnt,$ne);
	
			while($r=mysqli_fetch_row($ne1))
			{
			echo '$r[1]';
			}
		}
}		


if (isset($_POST['s']))
{
include "dbcon.php";


$n=trim($_POST['n']);
$n1='/^[a-zA-Z ]*$/';
if(!preg_match($n1,$n)||strlen($n)==0)
	{$ns='--*check name';
	}
	else
	{$nr=1;
	}


$v=trim($_POST['v']);
$e1='/^[a-zA-Z0-9._-]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
if(!preg_match($e1,$ve))
	{$es='--*check email';
	}
	else
	{$er=1;
	}
$c=trim($_POST['c']);
$c1='/^[a-zA-Z]*$/';
if(!preg_match($c1,$c)||strlen($c)==0)
	{$cs='--*check city';
	}	else
	{$cr=1;
	}
$s=trim($_POST['ser']);
$s1='/^[a-zA-Z]*$/';
if(!preg_match($s1,$s)||strlen($s)==0)
	{$ss='--*check service';
	}	else
	{$sr=1;
	}
	$d=trim($_POST['d']);
	
	if(strlen($d)==0 )
	{$ds='--*check description';
	}
	else
	{$dr=1;
	}
	
	$r=$_POST['r'];
	$r1='/^[0-9]{1,10}$/';
	if(!preg_match($r1,$r))
	{$rs='---*enter rate';
	}
	else
	{$rr=1;
	}
	$in=$_FILES['i']['name'];
$is=$_FILES['i']['tmp_name'];
$id='load/'.uniqid().''.$in;
move_uploaded_file($is,$id);
	
	if($nr==1 && $er==1&& $cr==1 && $sr==1 && $dr==1 && $rr==1)
	{

$vpk="insert into vender(name,email,city,services,description,rate,photo) values ('$n','$ve','$c','$s','$d','$r','$id')";
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
echo'preview:<img src="'.$id.'" width="50" height="50">';
}









}
 else
{
header("location:venlog.php");
}
?>
<body>
<a href="venlog.php"> logout </a>|
<a href="showven.php"> vender main page </a> |
<a href="updateven.php"> vender update main page </a> |
<a href="venpkform.php">  Add vender details </a>|
<a href="vensershow.php">  vender services </a>

<br>
<form action="" method="POST" enctype="multipart/form-data">
NAME:<input type="text" name="n" value="<?php echo$ne;?>" > <span><?php echo$ns;?> </span> <br> <br>
EMAIL:<input type="text" name="v" value="<?php echo$ve;?>" readonly> <span><?php echo$es;?> </span> <br> <br>
CITY:<input type="text" name="c"><span><?php echo$cs;?> </span> <br> <br>
SERVICES:<input type="text" name="ser"> <span><?php echo$ss;?> </span><br> <br>
DESCRIPTION:<textarea name="d" rows="4" cols="20"></textarea><span><?php echo$ds;?> </span> <br> <br>
RATE:<input type="text" name="r"><span><?php echo$rs;?> </span> <br> <br>
IMAGE:<input type="file" name="i"> <br> <br>
<input type="submit" name="s"> 
</form>
</body>
</html>
