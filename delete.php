<?php
include 'connect.php';
if(isset($_GET['deleteid'])){

	$id=$_GET['deleteid'];

	$sql="DELETE FROM table23 WHERE id=$id";
	$connect->query($sql);
	
	}
	header("location:index.php");
	exit;

?>