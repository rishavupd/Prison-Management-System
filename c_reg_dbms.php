<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 
	 
     $d_date = $_POST['d_date'];
	 $sex = $_POST['gender'];
	 
	 $at_date = $_POST['a_date'];
	 $add = $_POST['addinput'];
	 $c = $_POST['c_no'];
	 
	 $auth= "SELECT cno FROM cleaner WHERE cno='$no';";
	 $result = mysqli_query($con,$auth);
	 $count = mysqli_num_rows($result);
	 if($count==1){
		 echo "Cleaner Number Is Already Registered. Registeration Failed.";
	 }
	 elseif($no==NULL or $name==NULL or $d_date==NULL or $add==NULL or $at_date==NULL or $sex==NULL){
		echo "The Form is not filled Properly.";
	 }
	 else{ 
	  
	 $query= "insert into cleaner values ('$no','$name','$d_date','$sex','$at_date','$add','$c')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 } 
	 }	 
?>