<?php session_start();
	session_regenerate_id();
	
	require('connect.php');
	if($_SERVER["REQUEST_METHOD"] == "POST") {
	$no = $_POST['noinput'];
     $name = $_POST['nameinput']; 
	 $add = $_POST['addinput'];
     $crime = $_POST['crimeinput']; 
	 $sex = $_POST['gender'];
	 $t = $_POST['type'];
	 $at_date = $_POST['a_date'];
	 $d_date = $_POST['date'];
	 $c = $_POST['c_no'];
	 $d = $_POST['d_imp'];
	 $auth= "SELECT pno FROM prisoner WHERE pno='$no';";
	 $result = mysqli_query($con,$auth);
	 $count = mysqli_num_rows($result);
	 if($count==1){
		 echo "Prisoner Number Is Already Registered. Registeration Failed.";
	 }
	 elseif($no==NULL or $name==NULL or $add==NULL or $crime==NULL or $sex==NULL or $t==NULL or $at_date==NULL or $d_date==NULL or $c==NULL or $d==NULL){
		echo "The Form is not filled Properly.";
	 }
	 else{ 
	 $query= "insert into prisoner values ('$no','$name','$at_date','$d_date','$add','$crime','$sex','$t','$d','$c')";
	 $result = mysqli_query($con,$query);
	 echo "Successfully Added";
	 }
	 } 
?>