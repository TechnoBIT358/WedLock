<?php
include "dbcon.php";
$tc2="create table book(id int(3) not null auto_increment, uemail varchar(50) not null,vemail varchar(50) not null, service varchar(40) not null,amount int(40) not null,primary key(id), unique(uemail))";
$stc2=mysqli_query($cnt,$tc2);
if($stc2)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
