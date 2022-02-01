<?php
include "dbcon.php";
$tcb="create table booking(bc int(5) not null auto_increment,bdate DATE NOT NULL,vemail varchar(30) NOT NULL,uemail varchar(30) NOT NULL, service varchar(30) NOT NULL, rate int(20) NOT NULL,city varchar(30) NOT NULL,unique(bc))";

$stcb=mysqli_query($cnt,$tcb);
if($stcb)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
