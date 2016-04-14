<?php
include 'connect.php';
session_start();

if (isset($_GET['del'])) {
	$u_id=$_GET['u_id'];
	$query="DELETE FROM user WHERE u_id='$u_id'";
	mysqli_query($conn,$query);
	header("Location:log.php");
}

if (isset($_SESSION['u_id'])) {
	$u_id=$_SESSION['u_id'];
	echo $u_id;
	echo "<a href='checkdel.php?del=del&u_id=$u_id'>確定刪除</a>";
}
?>