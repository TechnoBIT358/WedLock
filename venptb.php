<html>
<?php
include "dbcon.php";
$vt="create table vender(id int(10) not null auto_increment,name varchar(30) not null,email varchar(50) not null,city varchar(20) not null,services varchar(40) not null,description varchar(200),rate varchar(20) not null,photo varchar(500), unique(id))";
$vt1=mysqli_query($cnt,$vt);
if($vt1)
{
echo'<br> created successfully table';
}
else
{
echo'<br> error in creating table';
}
?>
</html>