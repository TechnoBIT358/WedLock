<?php
session_start();
$ve=$_SESSION['v'];

if($_SESSION['sidv']!=session_id())
{
header("location:venlog.php");
}
?>
<html>
  <head><title>Vendor Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.h{text-align:center;background-color:gray;line-height:30px;left:30%;width:40%;position:absolute;
}
.r{text-align:center;background-color:rgb(193,193,255,0.5);
border-style:solid;margin:20px;
}
.rh{text-align:center;
border-style:solid;margin:20px;
}

.a{color:white; line-height:3;}

#r1{text-align:center;background-color:rgba(8,8,8,0.4);
border-style:solid;margin:20px;position fixed;height:55%;width:80%;
}
#r11{right:0%;top:38%;height:55%;width:50%;position:absolute;visibility:visible;}


</style>
</head>
<body background="d.jpeg" height="100%" width="100%">

  <div class="container-fluid" style="border:none;">
  <nav class="navbar " style="background-color:rgba(216,10,102,1);">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-left">
        
        <li><a href="index.php"><font color="white">HOME</a></font></li>
		<li><a href="showvennew.php"><font color="white">MY PROFILE</a></font></li>
        <li><a href="updatevennew.php"><font color="white">EDIT PROFILE</a></font></li>
        <li><a href="venpkformnew.php"><font color="white">ADD SERVICES</a></font></li>
        <li><a href="vensershownew.php"><font color="white">VIEW SERVICES</a></font></li>
	   </ul>
	  <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="venlog.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
		
        </ul>
    </div>
	</nav>
	
  </div>
<?php

echo'<div class="row">';

			echo'<div class="col-md-3 col-md-offset-4">';
			 echo'<div id="rh">';
			 echo"<center><font size=5 color='white'><b>WELCOME:".$ve."</b></font></center>";
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 
			 $c=$cs=$u=$es=$n=$ns=$s=$ss=$d=$ds=$r=$rs=$i=$is='';
$nr=0;
$cr=0;
$sr=0;
$er=0;
$rr=0;
$ir=0;




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

echo'preview:<img src="'.$id.'" width="50" height="50">';
}



?>



<br>
<form action="" method="POST" enctype="multipart/form-data">
NAME:<input type="text" name="n" value="<?php echo$n;?>" > <span><?php echo$ns;?> </span> <br> <br>
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
