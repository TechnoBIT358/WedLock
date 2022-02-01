<?php
include "dbcon.php";
$pt="create table apackage(id int(3) not null auto_increment,package varchar(40) not null, primary key(id))";
$spt=mysqli_query($cnt,$pt);
if($spt)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
