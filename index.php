<html>
<head>
<title>
Wedlock</title>
<style>
#a{
position:absolute;
top:0%;
left:0%;
height:100%;
width:100%;
transition:5s;
animation: aa 5s infinite;
}
@keyframes aa{
0%{opacity:0.8;}
50%{opacity:1;}
50%{opacity:1;}
100%{opacity:0.8;}
}

#b
{
position:fixed;
top:0%;
left:0%;
height:15%;
width:100%;
background-color:rgba(216,10,102,0.5);
}
.m{
position:absolute;
border-radius:10px;
cursor:pointer;
box-shadow:2px 2px 2px rgba(6,0,3,0.4);
background-color:rgba(216,10,102,1);
color:white;
line-height:5;
}
.m:hover{ background-color:rgba(196,0,92,1);}
#b1{
top:5%;
left:5%;
width:15%;
height:90%;
box-shadow:5px 5px 5px rgba(6,0,3,0.4);
border-radius:10px;
overflow:hidden;
}

#b2{
top:10%;
left:25%;
width:20%;
height:80%;
}
#b3{
top:10%;
left:50%;
width:20%;
height:80%;
}
#b4{
top:10%;
right:5%;
width:20%;
height:80%;
}
#c
{
position:absolute;
top:100%;
left:0%;
height:100%;
width:100%;
background-color:rgba(216,10,102,1);
}
.k
{
position:absolute;
top:3%;
left:5%;
height:8%;
width:90%;
background-color:rgba(216,10,102,1);
line-height:0.3;
border-radius:10px;
color:white;
}
#d2{background:transparent; }
#c2
{
position:absolute;
top:16%;
left:5%;
height:37%;
width:90%;
background-color:transparent;

color:white;
}
#c3
{
position:absolute;
top:58%;
left:5%;
height:37%;
width:90%;
background-color:transparent;
color:white;
}
.s{
position:absolute;
top:0%;
border-radius:10px;
height:100%;
width:30%;
background-color:pink;
color:white;
overflow:hidden;
}
#c21
{
left:0%;
}
#c22
{
left:35%;
}
#c23
{
right:0%;
}
#c31
{
left:0%;
}
#c32
{
left:35%;
}
#c33
{
right:0%;
}
.s1{
position:absolute;
top:0%;
border-radius:10px;
height:100%;
width:100%;
background-color:rgba(6,0,3,0.4);
color:white;
overflow:hidden;
}
#d
{
position:absolute;
top:200%;
left:0%;
height:50%;
width:100%;
background-color:rgba(216,10,102,1);
border-radius:10px;
}
#d1
{
position:absolute;
top:0%;
left:0%;
height:100%;
width:100%;
background-color:rgba(6,0,3,0.4);

}
#d3
{
position:absolute;
top:25%;
left:5%;
height:60%;
width:42%;
background-color:transparent;
color:white;
}
#d4
{
position:absolute;
top:25%;
right:5%;
height:60%;
width:42%;
background-color:transparent;
color:white;

}
#e
{
position:absolute;
top:250%;
right:0%;
height:30%;
width:100%;
background-color:black;
color:white;

}
#e1
{
position:absolute;
top:50%;
left:40%;
height:20%;
width:20%;
background-color:rgba(216,10,102,1);
color:white;
border-radius:10px;
line-height:2.5;
cursor:pointer;
}
#e1:hover{ background-color:rgba(196,0,92,1);}

</style>
<script>
var a=new Array('w13.jpg','wed1.jpg','wed2.jpg','w10.jpg','wed15.jpg','w12.jpg','wed14.jpg','wed4.jpg','wed5.jpg','wed6.jpg','wed7.jpg','ww.jpg');
var i=0;
function slider()
{
if (i<11)
{
i++;
}
else
{
i=0;
}
document.getElementById("m").src=a[i];
setTimeout("slider()",3000);
}
</script>
</head>
<body onload="slider()">
<font face="arial">
<div id="a"><img src="w13.jpg" width="100%" height="100%" id="m"></div>

<div id="c"><img src="rose3.jpg" width="100%" height="100%" id="m1">
<div id="c1" class="k"><center><h1>EXCITING PACKAGES PROVIDED BY OUR VENDORS</center></h1></div>
<div id="c2">
<div id="c21" class="s"><img src="photo.jpg" width="100%" height="100%" id="m1"><div id="c211" class="s1"><H2><br><br><br><br><center>WEDDING PHOTOGRAPHERS</H2></center></div></div>
<div id="c22" class="s"><img src="makeup.jpg" width="100%" height="100%" id="m1"><div id="c212" class="s1"><H2><br><br><BR><br><center>BRIDAL MAKEUP ARTISTS</H2></center></div></div>
<div id="c23" class="s"><img src="dest.jpg" width="100%" height="100%" id="m1"><div id="c213" class="s1"><H2><br><br><br><br><center>WEDDING DESTINATIONS</H2></center></div></div>
</div>
<div id="c3">
<div id="c31" class="s"><img src="cheo.jpg" width="100%" height="100%" id="m1"><div id="c311" class="s1"><H2><br><br><br><br><center>WEDDING CHOREOGRAPHERS</H2></center></div></div>
<div id="c32" class="s"><img src="deco.jpg" width="100%" height="100%" id="m1"><div id="c312" class="s1"><H2><br><br><br><br><center>WEDDING DECORATORS</H2></center></div></div>
<div id="c33" class="s"><img src="pla.jpg" width="100%" height="100%" id="m1"><div id="c313" class="s1"><H2><br><br><br><br><center>WEDDING PLANNERS</H2></center></div></div>
</div>
</div>
<div id="d"><img src="t7.jpg" width="100%" height="100%" id="m2"><div id="d1"><div id="d2" class="k"><center><h1>BOOK VENDORS IN SIMPLE STEPS:</center></h1></div>
<div id="d3"><center><h2><br><br>&#xe032 SEND YOUR REQUIREMENTS TO MULTIPLE VENDORS</center></h2></div>
<div id="d4" ><center><h2><br><br>&#xe032 BOOK THE BEST VENDOR AS PER YOUR REQUIREMENT</center></h2></div>
</div></div>
<div id="e"><center><h2>ARE YOU A WEDDING VENDOR?</center></h2>
<a href="venreg.php" style="text-decoration:none; color:white;"> <div id="e1"><center>JOIN NOW &#x25BA </center></div></a>
</div>
<div id="b">
<div id="b1" class="m"><center><a href="index.php"><img src="w.jpeg"  width="100%" height="100%"></a> </center></div>
<a href="venlog.php" style="text-decoration:none; color:white;"><div id="b2" class="m"><center> <b>VENDOR LOGIN</b></center> </div></a>
<a href="contact.php" style="text-decoration:none; color:white;"><div id="b3" class="m"><center><b> CONTACT</b></center> </div></a>
<a href="login.php" style="text-decoration:none; color:white;"><div id="b4" class="m"><center>&#10084 <b>LOGIN</b></center> </div></a>
</div>
</font>
</body>
</html>