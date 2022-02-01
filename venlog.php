<?php
session_start();
?>
<html>
<head>
<title>Vendor Login</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
body {margin:0;font-family:Arial;}
#myNavbar
{
background-color:rgba(216,10,102,1);
color:white;
}
.a{
background-color:rgba(216,10,102,0.5);
min-height:600px;	
}
.a1{
position:absolute;
top:3%;
left:5%;
height:90%;
width:90%;
background-color:silver;		
box-shadow:5px 5px 5px pink;	
}
.e
{
position:absolute;
right:10%;
height:5%;
width:40%;
background-color:white;	
border-radius:10px;	
border-color:white;

}
#e1{ top:25%;}
#p1{top:40%; }
#s1{
top:55%;
border:none;

background-color:rgba(216,10,102,1);
color:white;	
}
#s1:hover{background-color:rgba(196,0,92,1); }
#p2{
position:absolute;
top:0%;
left:0%;
height:100%;
width:40%;
background-color:pink;		
		
}
#l
{
position:absolute;
top:0%;
right:0%;
height:5%;
width:60%;
background:transparent;
color:rgba(216,10,102,1);
}
#r{
position:absolute;
top:60%;
right:0%;
height:40%;
width:60%;
background:transparent;
color:rgba(216,10,102,1);	
	}
	
	
</style>
</head>
<body background="r1.jpg"> <font face="arial" color="rgba(216,10,102,1)">
<div class="fluid-container">
<nav class="navbar navbar-inverse">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li ><a href="index.php"><font color="white">HOME</a></li></font>
        
        
        <li><a href="contact.php"><font color="white">CONTACT</a></li></font>
      </ul>
      </div>
	</nav>
	<div class="row">
			<div class='col-md-12'>
<div class="a">
<img src="r1.jpg" height="100%" width="100%">
<div class="a1">

<img src="l5.jpg" height="100%" width="100%">
<div id="l"><h1><center>LOGIN TO WEDLOCK AS VENDOR</center></H1></div>
<form action="checkv.php" method="POST">

<input type="text" name="v" id="e1" placeholder=" EMAIL" class="e"> <br><br>
<input type="password" name="p" id="p1" placeholder=" PASSWORD" class="e"> <br><br>
<input type="submit" name="s" id="s1" class="e" value="SIGN IN">
</form>
<div id="r"><br><center><h5>DON'T HAVE AN ACCOUNT?</H5><h3><a href="venreg.php" style="text-decoration:none; color:rgba(216,10,102,1);">REGISTER</H3></a></div>
<div id="p2">
<img src="vl.jpg" height="100%" width="100%">
</div>
</div>
</div>
</div>
</div>
</div>
</font>
</body>