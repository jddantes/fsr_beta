<?php
include('connect.php');

echo "PASS 1 <br/>";
if(isset($_POST['submit'])){

	echo "PASS 2 <br/>";

	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = mysql_query("SELECT id FROM teachers WHERE username = '$username' and password = '$password' ");
	$count = mysql_num_rows($result);
	echo "Count: $count<br/>";
	//Credentials match
	if($count == 1){ 
		$message = "";
		$row = mysql_fetch_assoc($result);
		session_start();
		$_SESSION['id'] =$row['id'];
		header('location:home.php');

	}
	else if($count == 0){
		echo "Wrong username or password. <br/>";
		//header('location:index.php');
	}
	else{
		echo "$count entries were found. Please contact the webmaster.<br/>";
	}

}
?>