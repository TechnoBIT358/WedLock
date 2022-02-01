<?php
session_start();
		$us=$_SESSION['u'];
		if($_SESSION['sidu']!=session_id())
		{
			header("location:login.php");
		}
?>

		
<html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style>
.se{position:absolute;line-height:30px;top:10%;width:8%;left:30%}
.s11{position:absolute;line-height:28px;top:10%;width:8%;left:45%}
#sea{position:absolute;line-height:28px;top:0%;left:60%}
#body1{background-color:rgba(216,10,102,1);overflow:hidden;}
.h{text-align:center;background-color:cyan;line-height:30px;left:30%;width:100%;position:absolute;margin:20px;}
.n{text-align:center;background-color:cyan;line-height:30px;left:30%;width:100%;position:absolute;margin:20px;
}
#r{text-align:center;background-color:lime;
border-style:solid;margin:20px;position fixed;height:45%;width:100%;
}
input {background:transparent;border:none;color:white;}
.b{color:white;}
.c{color:white;}
.b1{border-type:box;border-style:solid;color:white;}
#r1{visibility:hidden; background-color:rgba(8,8,8,0.4);}
#r:hover #r1{background-color:rgb(193,193,255,0.5);right:5%;top:10%;height:70%;width:80%;position:absolute;visibility:visible;}
#s1{color:rgba(216,10,102,1);background-color:white; border-radius:10px; }
#s1:hover{background-color:purple;color:white;}
#s2{color:rgba(216,10,102,1);background-color:white; border-radius:5px; }
</style>
<html>
<body background="d.jpeg">
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
      <ul class="nav navbar-nav">
        <li><a href="index.php"><font color="white">HOME</a></font></li>
		<li><a href="showusernew.php"><font color="white">MY PROFILE</a></font></li>
        <li><a href="updateuser2.php"><font color="white">EDIT PROFILE</a></font></li>
        <li><a href="bookven.php"><font color="white">BOOK VENDOR</a></font></li>
        <li><a href="bookshow.php"><font color="white">SHOW BOOKING</a></font></li>
        <li >
           <?php  
		   
		
		include"dbcon.php";
	
      echo'<form action="" method="POST">';  
	 $sh1='select * from vender group by city';
	   
 echo'<br><b><font color="white">&nbsp&nbsp&nbsp&nbsp SELECT CITY </font></b>';
  $si1=mysqli_query($cnt,$sh1);
  if($si1)                                                                                        
  {
   
	 echo'<select name="se1">';
	  if(mysqli_fetch_row($si1)>0)
		{
			$si1=mysqli_query($cnt,$sh1);

			 while($r=mysqli_fetch_row($si1))
			 {
			  echo'<option id="s2" value="'.$r[3].'">'.$r[3].'</option>';
			 }
			echo'</select> ';
			echo'&nbsp&nbsp&nbsp&nbsp<b><input type="submit" name="sc" value="SEARCH" id="s1"></b> ';
			

				
		}
		else
		{
			echo'no value';
		}
		
  }
  else
		{
			echo' connection problem ';
		}

	   
	   echo'</form>';
	   ?>
	   </li>
	   </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="login.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
      </ul>
    </div>
	</nav>
  </div>

  
<div class="container-fluid" id="body1">

<?php
include "dbcon.php";
 echo'<div class="row">';

			echo'<div class="col-md-3 col-md-offset-4">';
			 echo'<div id="rh">';
			 echo"<center><font size=5 color='white'><b>WELCOME:".$us."</b></font></center>";
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			  
  
if(isset($_POST['sc']))
{

  $se2=$_POST['se1'];
  $sh="select * from vender where city='".$se2."'";
  $si=mysqli_query($cnt,$sh);
  if($si)                                                                                        
  {
  
	  if(mysqli_fetch_row($si)>0)
		{
			$si=mysqli_query($cnt,$sh);
		echo'<div class="row1">';
			 while($r=mysqli_fetch_row($si))
			 {
			 echo'<div class="col-md-3">';
			 echo'<div id="r">';
			 
			 echo'<div class="f"><img src='.$r[7].' width="100%" height="100%"></div>';
			 echo'<div id="r1">';
			 
			 echo'<form action="bookven1.php" method="POST">';
			 echo'<br><br><center><div class="a"><font color="white">VENDOR ID:<input type="text" value=" '.$r[0].'" name="vi" size="5" readonly></div></center>';
			 echo'<center><div class="b">NAME:<input type="text" value=" '.$r[1].'" name="na" readonly></div></center>';
			 echo'<center><div class="c">EMAIL ID:<input type="text" value=" '.$r[2].'" name="vemail" size="5" readonly></div></center>';
			 echo'<center><div class="d">CITY:<input type="text" value=" '.$r[3].'" name="city" size="5" readonly></div></center>';
			 echo'<center><div class="e">SERVICE:<input type="text" value=" '.$r[4].'" name="service" size="5" readonly></div></center>';
			 echo'<center><div class="f">DESCRIPTION:<input type="text" value=" '.$r[5].'" name="des" size="5" readonly></div></center>';
			 echo'<center><div class="g">RATE:<input type="text" value=" '.$r[6].'" name="rate" size="5" readonly></div></center>';
			 echo'<center><input type="submit" name="book" class="b1" value="BOOK"></font></center> ';
			 echo'</form>';
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 }
			 echo'</div>';
			 echo'</div>';
			 }
		else
			{
			echo"<script> alert(' no data found')</script>";
			}
  }
  else                                 
  {
	echo "error".mysqli_error($cnt);
  }
}
else{
	echo'<font color="white" size="4"><b>no city selected</font></b>';
}
  
?>
</body>
