 <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
  .r{text-align:center;background-color:rgba(8,8,8,0.4);
border-style:solid;margin:20px;line-height:80px;min-height:80px;
margin:10px;
}
input { 
 border-radius:10px;
   border:solid 1px black;
   background-color:white;
    font-size:1vw;
	line-height:1;
	color:rgba(216,10,102,1);
   }
   #ss{ background-color:rgba(216,10,102,1); color:white; border:none;} 
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
	  
        <li><a href="logout.php"><font color="white"><span class="glyphicon glyphicon-log-out"></span></font> <font color="white">Logout</a></font></li>
		
        </ul>
    </div>
	</nav>
	
  </div>
<?php
session_start();
	  $us=$_SESSION['u'];
		if($_SESSION['sidu']=session_id())
		{
		
                  if(isset($_POST['book']))
                  {
                  	
					
                  	$vemail=$_POST['vemail'];
                  	$city=$_POST['city'];
					$service=$_POST['service'];
                 
                  	$rate=$_POST['rate'];
                  }
		          
		          else
		          {	   
	              header("location:bookven.php");
	              }
	   	}  
	     else
	     {	   
	        header("location:bookven.php");
	     }
		
		?>
<div class="col-md-5 col-md-offset-3">
<div class="r">	

<form action="bookven2.php" method="POST">
<center><b style="color:white; ">VENDOR EMAIL:</b><input type="text" name="vemail" style="height:40px;" value="<?php echo $vemail; ?>" readonly><br>
<b style="color:white; ">USER EMAIL ID:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="email" style="height:40px;"  value="<?php echo $us; ?>"readonly><br>
<b style="color:white; ">RATE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="rate"style="height:40px;"  value="<?php echo $rate; ?>"readonly><br>
<b style="color:white; ">SERVICE:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="service"style="height:40px;"   value="<?php echo $service; ?>"readonly><br>
<b style="color:white; ">CITY:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</b><input type="text" name="city" style="height:40px;"  value="<?php echo $city; ?>"readonly><br>
                     <B><input type="submit" name="s" style="height:40px;width:150px;" id="ss" value="CONFIRM BOOKING"><br><br></center></B>
</div>
</div>
</form>
</body> 
</html>

