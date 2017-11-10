<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="iwt";


	$con = new mysqli($host,$uname,$pwd,$db) or die("connection failed");
	
	 
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$year=$_POST['year'];
	$rollno=$_POST['rollno'];
	$password=md5($_POST['password']);
	$name=$_POST['name'];
	$q="insert into users values('$rollno', '$name', '$email', '$year', '$phoneno', '$password')";
	
	$r=$con->query($q);
	if($r>0)
	  {
			header('location:index.php');	
			
			
	  }

	mysqli_close($con);
	
?>