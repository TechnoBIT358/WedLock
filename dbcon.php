<?php
$s1='localhost:3306';
$u1='root';
$p1='ruchi';
$d1='d';
$cnt=mysqli_connect($s1,$u1,$p1,$d1);
if(!$cnt)
{
echo'<br> error  '.mysqli_connect_errno();
echo'<br> error  '.mysqli_connect_error();
}

?>