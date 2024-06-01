<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$name = $_POST['noinput'];
    $pass = $_POST['passinput']; 
	$auth= "SELECT name FROM admin WHERE name='$name';";
	$result = mysqli_query($con,$auth);
	$count = mysqli_num_rows($result);
	if($name==NULL or $pass==NULL){
		echo "User Input Invalid.";
	}
	elseif($count==1){
		echo "Username exits. Registeration Failed.";
	}
	else{ 
	 $query= "insert into admin values ('$name','$pass')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	}
 
	 
	 
	 }
	
	 
?>