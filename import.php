
<?php
session_start();
if(!isset($_SESSION['id']))
	header('location:index.php');
else{
	$id = $_SESSION['id'];
	$result = mysql_query("SELECT * FROM teachers WHERE id = $id");
	$row = mysql_fetch_assoc($result);
	$username = $row['username'];
	
}