<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
	$auth= "SELECT pno FROM prisoner WHERE pno='$no';";
	$con=mysqli_connect("localhost","root","","prison");
	$result = $con->query($auth);
	$cno = mysqli_fetch_array($result);
	if ($no==NULL){
		echo "Invalid Prisoner number.";
	}
	elseif($cno==NULL){
		echo "Prisoner No: $no is not registered." ;
	}
	elseif($cno['pno']==$no){
    $query= "delete from prisoner where pno = '$no'";
	$result = mysqli_query($con,$query);
	echo "Successfully Deleted";
	}

}
?>
