<?php
session_start();
$us=$_SESSION['u'];

if($_SESSION['sidu']!=session_id())
{
header("location:login.php");
}
?>
<html lang="en">
  <head><title>Update Profile Status</title>
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
		<li><a href="showusernew.php"><font color="white">MY PROFILE</a></font></li>
        <li><a href="updateuser2.php"><font color="white">EDIT PROFILE</a></font></li>
        <li><a href="bookven.php"><font color="white">BOOK VENDOR</a></font></li>
        <li><a href="bookshow.php"><font color="white">SHOW BOOKING</a></font></li>
	   </ul>
	  <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="login.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
		
        </ul>
    </div>
	</nav>
	
  </div>
  <?php
echo'<div class="row">';

			echo'<div class="col-md-3 col-md-offset-4">';
			 echo'<div id="rh">';
			 echo"<center><font size=5 color='white'><b>WELCOME:".$us."</b></font></center>";
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 
            
	include"dbcon.php";

  $sh1="select * from rec where email ='".$us."'";
 
			 
		
		include"dbcon.php";
		$a=$_POST['a'];
		$p=$_POST['p'];
		
$sa="update rec set phone=".$a." , password='".$p."' where email='".$us."'";

$saq=mysqli_query($cnt,$sa);
if($saq)
	{
	echo' update successfully';
	
	}
		else
		{
		echo' error ';
		}
 

 
 


?>