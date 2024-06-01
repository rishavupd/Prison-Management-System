<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$user = $_POST['textinput'];
    $pass = $_POST['passwordinput']; 
	$auth= "SELECT name FROM admin WHERE name='$user' and password='$pass';";
	$result = mysqli_query($con,$auth);
    $count = mysqli_num_rows($result);
	if($count==1){
		echo "Successfully Logged In!";
	    header("Location: admin.html");
	}
	else
		 echo "Username or password is incorrect.";
	 
	 }
	
	 
?>
<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<form action="admin_log.php">
    <button type="submit" class = "btn btn-light">Back to login</button>
</form>