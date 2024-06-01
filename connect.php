<?php
		error_reporting(E_ALL ^ E_NOTICE); 
		$con=mysqli_connect("localhost","root","","prison");
		 if(!$con)
		 {
			echo "<script> alert('Connection Failed !'); </script>";
		 }
?>



