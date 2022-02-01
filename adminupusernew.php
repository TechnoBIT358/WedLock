<?php
session_start();
$ua=$_SESSION['u'];

if($_SESSION['sida']!=session_id())
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

.a{color:white; line-height:3; background-color:rgba(216,10,102,1); }

#r1{text-align:center;background-color:rgba(8,8,8,0.4);
border-style:solid;margin:20px;position fixed;height:65%;width:80%;
}
#r11{right:0%;top:38%;height:55%;width:50%;position:absolute;visibility:visible;}
.t{border-radius:10px; color:rgba(216,10,102,1);}
#u{width:30%; }

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
  <?php
echo'<div class="row">';

			echo'<div class="col-md-3 col-md-offset-4">';
			 echo'<div id="rh">';
			 echo"<center><font size=5 color='white'><b>WELCOME:".$ua."</b></font></center>";
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 
            
	
 $ue=$_POST['au'];
		include"dbcon.php";
		if(isset($_POST['usp']))
		{
			
$sv="select *from rec where id='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	if(mysqli_fetch_row($svq)>0)
	{
	$svq=mysqli_query($cnt,$sv);
	echo'<form action="adupusernew.php" method="POST">';
			while($r=mysqli_fetch_row($svq))
			{
			echo'<div class="col-md-6 col-md-offset-3">';
			 echo'<div id="r1">';
			 echo '<br><div class="a">VENDOR ID :<input type="text" class="t" name="i"readonly value='.$r[0].'></div>';
		
			echo '<br><div class="a">EMAIL :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="t" name="u"readonly value='.$r[1].'></div>';
			echo '<br><div class="a">PHONE NO. :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="t" name="a" value='.$r[2].'></div>';
			echo '<br><div class="a">PASSWORD :&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" class="t" name="p" value='.$r[3].'></div>';
			
			 
			 
			}
			echo'<br><div class="a"><input type="submit" class="t" id="u" name="usp" value="UPDATE"></div>';
			echo'<br></form>';
			echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			 echo'</div>';
			
			}
		
			
			echo'<br></form>';
			
		}
		
	
	else
	{
		echo' no record found ';
	}
}
		
 
 else if(isset($_POST['del']))
 {
	 
 $sv="delete from rec where id='".$ue."'";

$svq=mysqli_query($cnt,$sv);
if($svq)
	{
	echo'<center><font color="white" size="5"><B> DELETED SUCCESSFULLY</font></B></center>';
 }
 else
		{
		echo' error ';
		}
 
 }
  else
{
header("location:showallvennew.php");
}

 

?>