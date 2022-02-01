<?php
session_start();
$ua=$_SESSION['u'];

if($_SESSION['sida']!=session_id())
{
header("location:venlog.php");
}
?>
<html lang="en">
  <head><title>Admin Profile</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
.h{text-align:center;background-color:gray;line-height:30px;left:30%;width:40%;position:absolute;
}
#r{text-align:center;background-color:rgba(8,8,8,0.3); overflow:hidden;border-style:solid;margin:20px;}

.rh{text-align:center;
border-style:solid;margin:20px;
}

.a{color:white; line-height:3;}

#r1{background-color:rgba(8,8,8,0.3);right:5%;top:5%;height:90%;width:90%;position:absolute; overflow:hidden;}

#r11{right:0%;top:38%;height:55%;width:50%;position:absolute;visibility:visible;}
.c{ background-color:rgba(216,10,102,1); color:white; border-radius:5px; border:none;}
#d{border-radius:5px; color:rgba(216,10,102,1)}

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
		
        <li><a href="showoll.php"><font color="white">ADMIN PROFILE</a></font></li>
        <li><a href="showallusernew.php"><font color="white">CUSTOMER DETAILS</a></font></li>
        <li><a href="showallvennew.php"><font color="white">VENDOR DETAILS</a></font></li>
	   </ul>
	  <ul class="nav navbar-nav navbar-right">
	  
        <li><a href="logout.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
		
        </ul>
    </div>
	</nav>
	
  </div>
  
 <div class="container-fluid" id="body1"> 
  <?php
  echo'<div class="row">';

			echo'<div class="col-md-3 col-md-offset-4">';
			 echo'<div id="rh">';
			 echo"<center><font size=5 color='white'><b>WELCOME:".$ua."</b></font></center>";
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 
        

	echo'<center><font size=5 color="white"><b>CUSTOMER INFORMATION:</b></font></center>';		 
            
	include"dbcon.php";

  $sh1="select * from rec";

			 
			$si1=mysqli_query($cnt,$sh1);
  if($si1)                                                                                        
  {
  
	  if(mysqli_fetch_row($si1)>0)
		{
			$si1=mysqli_query($cnt,$sh1);
		echo'<div class="row1">';
			 while($r=mysqli_fetch_row($si1))
			 {
			 echo'<div class="col-md-3">';
			 echo'<div id="r">';
			 
			
			 
			 
			 
			 
			 echo'<br><br>';
			 
			 echo'<div class="a">CUSTOMER ID = '.$r[0].'</div>';
		     echo'<div class="a">EMAIL= '.$r[1].'</div>';
			 echo'<div class="a">PHONE= '.$r[2].'</div>';
			 echo'<div class="a">PASSWORD= '.$r[3].'</div>';
			 
			
			 
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			
			 }
			 
		
			
			
			
			 }
		else
			{
			echo" no service added";
			}
  }
  
		
  else                                 
  {
	echo "error".mysqli_error($cnt);
  }
  $si1=mysqli_query($cnt,$sh1);
			echo'<form action="adminupusernew.php" method="POST">';
	echo'<br><br><font color="white" size="4"><B>SELECT CUSTOMER ID</font> </B>&nbsp&nbsp&nbsp&nbsp<select name="au" id="d">';
			while($r=mysqli_fetch_row($si1))
			{
			echo '<option value="'.$r[0].'">'.$r[0].'</option>';
			
			}
			echo'</select>';
			echo'&nbsp&nbsp&nbsp&nbsp<input type="submit" name="usp" value="UPDATE" class="c">';
			echo'&nbsp&nbsp&nbsp&nbsp<input type="submit" name="del" value="DELETE" class="c">';
			echo'<br></form>';
			echo'</div>';

?>
</body>
</html>