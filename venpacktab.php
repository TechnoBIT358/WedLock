<?php
include "dbcon.php";
$st="create table vpk(id int(10) not null auto_increment,name varchar(30) not null, email varchar(50) not null,city varchar(20) not null, services varchar(40) not null, description varchar(200),rate int(20) not null,photo varchar(500))";
$sst=mysqli_query($cnt,$st);
if($sst)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>