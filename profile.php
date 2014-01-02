<?php
include('connect.php');
include('import.php');






$last_name = $row['last_name'];
$first_name = $row['first_name'];
$middle_initial = $row['middle_initial'];
$email = $row['email'];
$mobile = $row['mobile'];


?>
<html>
<head>
<link rel="stylesheet" href="css/styles.css" />
<script type="text/javascript" src="js/jquery-2.0.3.min.js" ></script>
<script type="text/javascript">
$(document).ready(function(){
	//$('.edit').click(alert('a')); clicks on load @_@



});
</script>
</head>

<a href="logout.php">Logout</a><br/>
<a href="home.php">Home</a><br/>

<h1>Profile</h1>
<a href="edit.php"/>Edit Information</a>
<div class="name">
<div class="edit" name="output_last_name"><?php echo "$last_name," ?></div>
<div class="edit" name="output_first_name"><?php echo "$first_name" ?></div>
<div class="edit" name="output_middle_initial"><?php echo "$middle_initial" ?></div>
</div>
<div class="edit" name="output_email"><?php echo "$email" ?></div>
<div class="edit" name="output_mobile"><?php echo "$mobile" ?></div>



</html>