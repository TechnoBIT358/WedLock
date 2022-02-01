<?php
include "dbcon.php";
$vt="create table ven(id int(3) not null auto_increment,name varchar(40) not null, email varchar(50) not null, phone varchar(25), password varchar(20) not null, primary key(id), unique(email))";
$svt=mysqli_query($cnt,$vt);
if($svt)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
