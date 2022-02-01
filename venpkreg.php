

<html lang="en">
  <head><title>Vendor add services</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.h{text-align:center;background-color:gray;line-height:30px;left:30%;width:40%;position:absolute;
}
#r{text-align:center;background-color:lime;}

.rh{text-align:center;
border-style:solid;margin:20px;
}

.a{color:white; line-height:3;}

#r1{background-color:rgba(8,8,8,0.3);right:5%;top:5%;height:90%;width:90%;position:absolute; overflow:hidden;}

#r11{right:0%;top:38%;height:55%;width:50%;position:absolute;visibility:visible;}
#c{ background-color:rgba(216,10,102,1); color:white; border-radius:5px; border:none;}
#d{border-radius:5px; color:rgba(216,10,102,1)}


.di{background-color:rgba(216,10,102,1);text-align:center;
border:none;margin:20px;line-height:40px;min-height:50px;
margin:0px;
}
.di1{text-align:center;background-color:rgba(216,10,102,1);
border:none;margin:20px;line-height:40px;min-height:50px;
margin:0px;
}
input { 
text-align:center;
 border-radius: 15px;
   border:solid 1px black;
   background-color:white;}
   #prvw{
	   
   }


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
        <li><a href="venpkreg.php"><font color="white">ADD SERVICES</a></font></li>
        <li><a href="vensershownew.php"><font color="white">VIEW SERVICES</a></font></li>
		<li><a href="venbookshow.php"><font color="white">SHOW BOOKING</a></font></li>
	   </ul>
	  <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="logout.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
		
        </ul>
    </div>
	</nav>
	
  </div>
  
 <div class="container-fluid" id="body1"> 
  	 
            

<?php
session_start();
$ve=$_SESSION['v'];
$n=$_SESSION['na'];
if($_SESSION['sidv']=session_id())
{
         $c=$cs=$u=$es=$ns=$s=$ss=$d=$ds=$r=$rs=$i=$is=$id1='';
$nr=0;
$cr=0;
$sr=0;
$er=0;
$rr=0;
$ir=0;
		
        if(isset($_POST['o']))
        {
        $n=$_POST['n'];
        $c=$_POST['c'];
		$s=$_POST['ser'];
        $d=$_POST['d'];
        $r=$_POST['r'];
        $in=$_FILES['im']['name'];
        $is=$_FILES['im']['tmp_name'];
		
        $id1="load/".uniqid().''.$in;
        move_uploaded_file($is,$id1);
		echo'<div class="col-md-5 col-md-offset-3">';
       echo'<div class="di1">';	

        echo '<font color="white">PREVIEW:</font><br><img src="'.$id1.'"width="300" height="300" id="prvw">';
		echo'</div>';
       echo'</div>'	;

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
	$img11=$_POST['fc'];
		if($img11=="")
		{
			echo'check image';
		}
		else{
			$nrm=1;
		}
	
	if($nr==1 && $er==1&& $cr==1 && $sr==1 && $dr==1 && $rr==1 && $nrm==1)
	{

$vpk="insert into vender(name,email,city,services,description,rate,photo) values ('$n','$ve','$c','$s','$d','$r','$img11')";
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









}
 else
{
header("location:venlog.php");
}
?>



<form action=" "  method="POST" enctype="multipart/form-data">
	
<div class="col-md-5 col-md-offset-3">
<div class="di">	
<b style="color:white; ">PHOTO:</b>
<center>
<input type="file" name="im" style="left:10%;"value="<?php echo $id1; ?>"><input type="text" name="fc" placeholder="photo id" value="<?php echo $id1;?>">
<button  name="o" style="background-color:rgba(201,238,85,0.3);color:white;">PREVIEW</button><br></center>
</div></div>
<div class="col-md-5 col-md-offset-3" >
<div class="di1">
<br><b style="color:white; ">NAME:&nbsp </b><input type="text" name="n" placeholder="name" style="height:40px;" value="<?php echo $n;?>">
<span class="sp"><?php echo $ns; ?></span><br><br>
<b style="color:white; ">EMAIL ID:&nbsp </b><input type="text" name="v" placeholder="exampl@gmail.com" style="height:40px;" value="<?php echo $ve;?>">
<span class="sp"><?php echo $es; ?></span><br><br>
<b style="color:white; ">CITY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input type="text" name="c" style="height:40px;" value="<?php echo $c; ?>">
<span class="sp"><?php echo $cs; ?></span><br><br>
<b style="color:white; ">SERVICE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><input type="text" name="ser" style="height:40px;" value="<?php echo $s; ?>">
<span class="sp"><?php echo $ss; ?></span><br><br>
<b style="color:white; ">DESCRIPTION:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </b><textarea name="d" style="height:50px;"  style="height:50px;"value="<?php echo $d; ?>"></textarea>
<span class="sp"><?php echo $ds; ?></span><br><br>
<b style="color:white; ">RATE(rs):&nbsp&nbsp&nbsp </b><input type="text" name="r" style="height:40px;style="height:40px;" "value="<?php echo $r; ?>">
<span class="sp"><?php echo $rs; ?></span><br><br>

<input type="submit" name="s" style="height:40px;width:150px;">
</form>
</div>
</div>
</body>
</html>