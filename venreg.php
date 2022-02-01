<html>
<head>
<title> Vender Registration </title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
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
.e2
{
position:absolute;
right:10%;
height:5%;
width:40%;
background-color:white;	
border-radius:10px;	
border-color:white;
}
#n1{ top:25%;}
#e1{top:40%; }
#p3{top:55%;}
#p1{ top:70%;}
#s1{
top:85%;

border:none;
background-color:rgba(216,10,102,1);
color:white;	
}
.sp{position:absolute;
right:10%;
height:4%;
width:12%;
background-color:TRANSPARENT;
color:rgba(216,10,102,1);	
}
#span1
{top:31% }
#span2
{top:46% }
#span3
{top:61% }
#span4
{top:76% }
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

	
	
</style>
</head>
<?php
$a=$as=$e=$es=$p=$ps=$n=$ns='';
$nr=0;
$ar=0;
$pr=0;
$er=0;

if (isset($_POST['s']))
{
include "dbcon.php";

$n=trim($_POST['n']);
$n1='/^[a-zA-Z ]*$/';
if(!preg_match($n1,$n)||strlen($n)==0)
	{$ns='<b>INVALID NAME </b>';
	}
	else
	{$nr=1;
	}


$e=trim($_POST['e']);
$e1='/^[a-zA-Z0-9._-]*\@[a-zA-Z0-9]*\.[a-zA-Z.]{2,6}$/';
if(!preg_match($e1,$e))
	{$es='<b> INVALID EMAIL </b>';
	}
	else
	{$er=1;
	}
$a=trim($_POST['a']);
$a1='/^[0-9]{10,10}$/';
	if(!preg_match($a1,$a))
	{$as='<b> INVALID NO. </b>';
	}
	else
	{$ar=1;
	}
$p=trim($_POST['p']);
$p1='/^[a-zA-Z0-9]{6,12}$/';
if(!preg_match($p1,$p))
	{$ps='<b> INVALID PASSWORD</b>';
	}
	else
	{$pr=1;
	}
	if($nr==1&&$ar==1 && $pr==1 && $er==1)
	{

$vreg="insert into ven(name,email,phone,password) values ('$n','$e',$a,'$p')";
$vrg=mysqli_query($cnt,$vreg);
if($vrg)
{
echo'<script> alert ("Registration Successful..Thanks for Registring") </script>';
}
else
{
echo'<script> alert ("error") </script>';
}
}
else
{
	echo'<script> alert ("Invalid Details..Try Again") </script>';
}
}
?>
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
        <li ><a href="index.php"><font color="white">HOME</a></font></li>
        
        
        <li><a href="contact.php"><font color="white">CONTACT</a></font></li>
      </ul>
	  <ul class="nav navbar-nav navbar-right">
        <li><a href="venlog.php"><font color="white"><span class="glyphicon glyphicon-log-in"></span> VENDOR LOGIN</a></li></font>
      </ul>
      </div>
	</nav>
	<div class="row">
			<div class='col-md-12'>
<div class="a">
<img src="r1.jpg" height="100%" width="100%">
<div class="a1">
<img src="l5.jpg" height="100%" width="100%">
<div id="l"><h1><center>VENDOR REGISTRATION</center></H1></div>
<form action="" method="POST">
<input type="text" name="n" id="n1" placeholder=" NAME" class="e2"><span  class="sp" id="span1"><?php echo$ns;?></span>  <br> <br>
<input type="text" name="e" id="e1" placeholder=" EMAIL[example@gmail.com]" class="e2"> <span  class="sp" id="span2"><?php echo$es;?> </span> <br> <br>
<input type="text" name="a" id="p3" placeholder=" PHONE NO.[10 DIGITS]" class="e2"> <span  class="sp" id="span3"><?php echo$as;?></span><br> <br>
<input type="password" name="p" id="p1" placeholder=" PASSWORD[6-12 ALPHABETS OR DIGITS]" class="e2"> <span id="span4" class="sp"><?php echo$ps;?> </span><br> <br>
<input type="submit" name="s" id="s1" class="e2" value="SIGN IN"> 
</form>

<div id="p2">
<img src="vl1.jpg" height="100%" width="100%">
</div>
</div>
</div>
</div>
</div>
</div>
</font>
</body>
</html>
