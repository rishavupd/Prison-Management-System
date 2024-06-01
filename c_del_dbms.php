<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['input'];
	$auth= "SELECT cno FROM cleaner WHERE cno='$no';";
	$con=mysqli_connect("localhost","root","","prison");
	$result = $con->query($auth);
	$cno = mysqli_fetch_array($result);
	if ($no==NULL){
		echo "Invalid Cleaner number.";
	}
	elseif($cno==NULL){
		echo "Cleaner No: $no is not registered." ;
	}
	elseif($cno['cno']==$no){
    $query= "delete from cleaner where cno = '$no'";
	$result = mysqli_query($con,$query);
	echo "Successfully Deleted";
	}
}
?>
