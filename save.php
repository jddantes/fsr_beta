<?php
include('connect.php');
include('import.php');

if(isset($_POST['save'])){
	$input_last_name = $_POST['input_last_name'];
	$input_first_name = $_POST['input_first_name'];
	$input_middle_initial = $_POST['input_middle_initial'];
	$input_email = $_POST['input_email'];
	$input_mobile = $_POST['input_mobile'];

	echo "$input_last_name, $input_first_name $input_middle_initial. $input_email $input_mobile";

	if(mysql_query("UPDATE teachers SET last_name='$input_last_name', first_name = '$input_first_name', middle_initial = '$input_middle_initial', email = '$input_email', mobile = '$input_mobile' where id =  $id", $con))
		header('location:profile.php');	
	else
		echo mysql_error();
	//header('location:profile.php');

}

?>