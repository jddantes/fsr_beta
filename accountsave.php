<?php
include('connect.php');
include('import.php');

$password = $row['password'];


if(isset($_POST['submit'])){

	if($_POST['input_old_password']==$password){
		$new_password1 = $_POST['input_new_password1'];
		$new_password2 = $_POST['input_new_password2'];
		if($new_password1 == $new_password2){
			mysql_query("UPDATE teachers SET password = '$new_password1' where id=$id") or die(mysql_error());
			echo "Password changed. <br/>";
						//header('location:account.php');

		}
		else{
			echo "Passwords don't match <br/>";
			
			//header('location:account.php');
		}

	}
	else{
		echo "Old password is wrong<br/>";
		
		//header('location:account.php');
	}

}
?>

<html>
<body>
<a href="account.php">Go back</a>
</body>

</html>