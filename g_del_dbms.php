<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['input'];
	$auth= "SELECT gno FROM guard WHERE gno='$no';";
	$con=mysqli_connect("localhost","root","","prison");
	$result = $con->query($auth);
	$cno = mysqli_fetch_array($result);
	if ($no==NULL){
		echo "Invalid Guard number.";
	}
	elseif($cno==NULL){
		echo "Guard No: $no is not registered." ;
	}
	elseif($cno['gno']==$no){
    $query= "delete from guard where gno = '$no'";
	$result = mysqli_query($con,$query);
	echo "Successfully Deleted";
	}
}
?>
