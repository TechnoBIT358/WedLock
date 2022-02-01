<?php
include "dbcon.php";
$tc="create table rec(id int(3) not null auto_increment, email varchar(50) not null, phone varchar(25), password varchar(20) not null, primary key(id), unique(email))";
$stc=mysqli_query($cnt,$tc);
if($stc)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
