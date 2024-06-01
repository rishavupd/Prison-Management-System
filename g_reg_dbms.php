<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 $d_date = $_POST['date'];
	 $add = $_POST['addinput'];
	 $at_date = $_POST['a_date'];
	 $sex = $_POST['gender'];
	 $b = $_POST['b_no'];
     $g = $_POST['shift'];
	 $p = $_POST['newpassword'];
	 $auth= "SELECT gno FROM guard WHERE gno='$no';";
	 $result = mysqli_query($con,$auth);
	 $count = mysqli_num_rows($result);
	 if($count==1){
		 echo "Guard Number Is Already Registered. Registeration Failed.";
	 }
	 elseif($no==NULL or $name==NULL or $d_date==NULL or $add==NULL or $at_date==NULL or $sex==NULL or $b==NULL or $g==NULL or $p==NULL){
		echo "The Form is not filled Properly.";
	 }
	 else{ 
	 $query= "insert into guard values ('$no','$name','$d_date','$add','$at_date','$sex','$b','$g','$p')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 }
	 }

	 
?>