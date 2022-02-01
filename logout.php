<?php
session_start();
session_destroy();
header("location:index.php");
echo'<script>alert("you have successfully logged out")</script>';
?>