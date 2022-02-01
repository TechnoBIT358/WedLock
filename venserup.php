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
		
		include"dbcon.php";
		
		
$c=$cs=$u=$es=$n=$ns=$s=$ss=$d=$ds=$r=$rs=$i=$is=$idd='';
$nr=0;
$cr=0;
$sr=0;
$er=0;
$rr=0;
$ir=0;

$n=$_POST['n'];
		$c=$_POST['c'];
		$ser=$_POST['ser'];
		$d=$_POST['d'];
		$r=$_POST['r'];
		$idd=$_POST['au'];
		


if (isset($_POST['usp']))
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
if(!preg_match($e1,$u))
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
	
	
	if($nr==1 && $er==1&& $cr==1 && $sr==1 && $dr==1 && $rr==1)
	{		
		
		
		

		
if(!$_FILES['i']['name']!='')
	{		
		
		$in=$_FILES['i']['name'];
$is=$_FILES['i']['tmp_name'];
$id='load/'.uniqid().''.$in;

	
	include"dbcon.php";
	if($cnt)
	{
				$idd=$_POST['au'];

	
$sv2="update vender set city='".$c."' , service='".$ser."' , description='".$d."' , rate='".$r."' , photo='".$id."' where id='".$idd."'";

$svq2=mysqli_query($cnt,$sv2);
		if(!$svq2)                                                                                        
		{
				echo "error".mysqli_error($cnt);
		}
		else                                 
		{
			echo' <script> alert(" updated successfully")</script>';
		}
	}
	}
	else 
	{  	
		
		include"dbcon.php";
	if($cnt)
	{
				$idd=$_POST['au'];

	  $sv2="update vender set city='".$c."' , service='".$ser."' , description='".$d."' , rate='".$r."' where id='".$idd."'";
	$svq2=mysqli_query($cnt,$sv2);
	if(!$svq2)                                                                                        
	{
		echo "error".mysqli_error($cnt);
	}
	else                                 
	{
		echo' <script> alert(" updated successfully")</script>';
	}
	
	
	}
}
$sv2="select *from vender where email='".$ve."'";

$svq2=mysqli_query($cnt,$sv2);
if($svq2)
	{
	if(mysqli_fetch_row($svq2)>0)
	{
	$svq2=mysqli_query($cnt,$sv2);
	echo'<table border="2" width="500"><tr><th>id</th><th>name</th><th>email</th><th>city</th><th>service</th><th>description</th><th>rate</th><th>photo</th></tr>';
			while($r=mysqli_fetch_row($svq2))
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
		
	
		}
	}


	}

else
	{  
		echo'<script>alert("check entered detail")</script>';
	}


 

 
 
}
		}
 else
{
header("location:venlog.php");
}


?>
















