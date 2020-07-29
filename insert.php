<?php
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];


if (!empty($username) || !empty($password) ||  !empty($email) ) {
	$host ="localhost";
	$dbUsername ="root";
	$dbPassword ="";
	$dbname = "details";
	$conn =new mysqli($host, $dbUsername ,$dbPassword ,$dbname);
	if (mysqli_connect_error()) {
		die('Connect Error('. mysql_errno().')'.mysqli_connect_error());
		# code...
	}else{
		$SELECT ="SELECT email From signin Where email =? Limit 1";
		$INSERT ="INSERT Into signin (username,password,email) values(?,?,?)";

		$stmt=$conn->prepare($SELECT);
		$stmt->bind_param("s",$email);
		$stmt->execute();
		$stmt->bind_result($email);
		$stmt->store_result();
		$rnum=$stmt->num_rows;
		if ($rnum==0) {
			$stmt->close();
			$stmt=$conn->prepare($INSERT);
			$stmt->bind_param("sss",$username,$password,$email);
			$stmt->execute();
			echo "";

			# code...


echo nl2br(" New record inserted successfully .\n  <a href='booking.html'>Click here to Book flights</a>");


		
		
		}else{
			echo "Someone already registered using this email";
		}
		$stmt->close();
		$conn->close();
	}

	}


	 else {
	echo "All fields are required";
	die();
}
?>
<!DOCTYPE html>
<html>
<head>
	
	
	<title></title>
</head>
<body style="background-image: url('img/ap2.jpeg'); background-repeat: no-repeat;background-size:cover;">
	
	</body>
   
</body>
</html>