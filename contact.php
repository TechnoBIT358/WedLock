<html>
<head>
<title> contact </title>
<style>
#a
{
position:absolute;
top:0%;
left:0%;
height:100%;
width:100%;
}
#a1
{
position:absolute;
top:0%;
left:0%;
height:100%;
width:100%;
background-color:transparent;
}
#m
{
position:absolute;
top:25%;
left:40%;
height:70%;
width:45%;
background-color:silver;
overflow:hidden;
}


#b
{
position:fixed;
top:40%;
right:5%;
height:55%;
width:5%;
background:transparent;
}
.r{
position:absolute;
height:20%;
width:100%;
left:0%;
}
#b1{
top:0%;
}

#b2{
top:19%;
}
#b3{
top:40%;
}
#b4{
top:62%;
}
#b5{
bottom:0%;
}


#bb
{
position:fixed;
top:0%;
left:0%;
height:15%;
width:100%;
background-color:rgba(216,10,102,0);
}
.mm{
position:absolute;
border-radius:10px;
cursor:pointer;
box-shadow:2px 2px 2px rgba(6,0,3,0.4);
background-color:rgba(216,10,102,1);
color:white;
line-height:5;
}
.mm:hover{ background-color:rgba(196,0,92,1);}
#bb1{
top:5%;
left:5%;
width:15%;
height:90%;
box-shadow:5px 5px 5px rgba(6,0,3,0.4);
border-radius:10px;
overflow:hidden;
}

#bb2{
top:10%;
left:25%;
width:20%;
height:80%;
}
#bb3{
top:10%;
left:50%;
width:20%;
height:80%;
}
#bb4{
top:10%;
right:5%;
width:20%;
height:80%;
}
</style>
<script>
function namecheck()
{ var nf,nc;
nf=document.getElementById("nf").value;
nc=/^[A-Za-z ]+$/;

if(!nf.match(nc)||nf.charAt(0)==' ')
{document.getElementById("ns").innerHTML="Invalid Name";
return 0;}
else
{document.getElementById("ns").innerHTML="";
return 1;} }

function emailcheck()
{ var em,ec;
em=document.getElementById("em").value;
ec=/^[a-zA-Z0-9._-]+\@[a-zA-Z0-9]+\.[a-zA-Z]{2,6}$/;

if(!em.match(ec))
{document.getElementById("emm").innerHTML="Invalid Email";return 0;}
else
{document.getElementById("emm").innerHTML="";
return 1;} }

function phcheck()
{ var con,pc;
con=document.getElementById("con").value;
pc=/^[0-9]{10,10}$/;
if(!con.match(pc))
{document.getElementById("phh").innerHTML="Invalid Phone";return 0;}
else
{document.getElementById("phh").innerHTML="";
return 1;} }
function mscheck()
{var ad;
a=document.getElementById("ta").value;
ac=a.trim();
if(ac.length<1)
{document.getElementById("mm").innerHTML="Enter Message";
return 0;}
else
{document.getElementById("mm").innerHTML="";
return 1;} }
function valid()
{
n=document.getElementById("nf").value;
if(namecheck()==1 && emailcheck()==1 && phcheck()==1  && mscheck()==1)
{
 document.getElementById("kt").value="ok";
}
else
{
namecheck();
emailcheck();
phcheck();
mscheck();

alert("check details");
}
}

</script>
</head>
<body>
<div id="a"><img src="d.jpeg" width="100%" height="120%"></div>
<div id="a1">
<form action="" method="POST">
<h1><center><font color="white"><b> GET IN TOUCH </h1></b> </center></font>  <br>
<center><font color="white" size="4">Address:Lalpur, Ranchi | Phone:0987654321 | Email:ruchi.sharma358@gmail.com</font></center>
<br><br><b><font color="white">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp NAME:<br>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="nf" name="n" placeholder="Full Name" onblur="namecheck()"> <span id="ns" style="color:red"></span>

<br> <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEMAIL:<br>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="em" name="e" placeholder="example@gmail.com" onblur="emailcheck()"><span id="emm" style="color:red"></span> 
<br> <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCONTACT NO.:<br>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" id="con" name="c" placeholder="Phone no." maxlength="10" onblur="phcheck()"><span id="phh" style="color:red"></span>
<br> <br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspMESSAGE:<br>
<br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<textarea id="ta" name="m" placeholder="Enter your Message" onblur="mscheck()" cols="40" rows="10"></textarea><span id="mm" style="color:red"></span>
<br><br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="submit" onclick="valid()" name="s">
<input type="text" name="t" id="kt" style="visibility:hidden;">
</form>
<div id="m"> <script src='https://maps.googleapis.com/maps/api/js?v=3.exp'></script><div style='overflow:hidden;height:440px;width:700px;'><div id='gmap_canvas' style='height:440px;width:700px;'></div><div><small><a href="http://www.googlemapsgenerator.com/fr/">http://www.googlemapsgenerator.com/fr/</a></small></div><div><small><a href="https://ww.premiumlinkgenerator.com/">ww.premiumlinkgenerator.com</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:13,center:new google.maps.LatLng(23.352610338125913,85.310008998272),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(23.352610338125913,85.310008998272)});infowindow = new google.maps.InfoWindow({content:'<strong>EXPLORER</strong><br>Ranchi<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>

</div>
<div id="bb">
<div id="bb1" class="mm"><center><a href="index.php"><img src="w.jpeg"  width="100%" height="100%"></a> </center></div>

</div>
</body>
</html>

<?php
if(isset($_POST['s']) && $_POST['t']!='')
{
	$n=$_POST['n'];
	$e=$_POST['e'];
	$c=$_POST['c'];
	$m=$_POST['m'];
	$b='name '.$n.' "\n" email '.$e.' "\n" contact '.$m.' "\n" message '.$m;
if(mail($e,' thank for feedback ',$b,' mail by wedding designer '))
	{
		if(mail($e,' thank for feedback ',$b,' mail by wedding designer '))
	{
	echo'<script> alert("thanks for your feedback")</script>';
	}
	
	}
}
?>
