<?php

	// session_start();

	// if(isset($_SESSION["email"])){
	// 	header("Location:login.php")
	// }
   
   define("DB_HOST","localhost");
   define("DB_USER","root");
   define("DB_PASS","");
   define("DB_NAME","datacheck");

   function dbconnection(){
	   $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME); 
	   
       if(mysqli_connect_errno() > 0){
           die("Connection Failed!");
       }else{
           return $db;
       }
   }

   function passcode ($password){
	$pass = md5($password);
	$pass = sha1($pass);
	$pass = crypt($pass,$pass);
	return $pass;
	} 

   if(isset($_POST['submit'])){

	$password = passcode($_POST['password']);
	$cpassword = passcode($_POST['cpassword']);

	// $var = $password." and ".$cpassword ; 
	// echo "<script>alert('$var')</script>";

	if($password == $cpassword){
		// echo "<script>alert('Second')</script>"; 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$email = $_POST['email'];

		// $_SESSION['email'] = $email;
		// $_SESSION['password'] = $password;

		$query = "INSERT INTO userdatas (first_name,last_name,email,password) VALUES ('$first_name','$last_name','$email','$password')";
		$database = dbconnection();
		$result = mysqli_query($database,$query);

		if($result){
			echo "<div><h4 class='successmsg'>New record created successfully !</h4></div>";
		 } else {
			// echo $query;
			echo "Error";
			// header("Location: signup.php");
		 }
		//  echo "<script>alert('First')</script>";
		 mysqli_close($database);
	}else{
		echo "<script>alert('Password do not match. Please reenter again')</script>"; 		
	}

	}
	//$password = passcode(123456);

	function beautyprint($arr){
        echo "<pre>" .print_r($arr,true). "</pre>";
    }

?>


<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link href="../assets/libs/fontawesome/css/all.css" rel="stylesheet" type="text/css">
	<link href="../assets/libs/fontawesome/css/duotone.css" rel="stylesheet" type="text/css">
	<link href="../assets/libs/fontawesome/css/regular.css" rel="stylesheet" type="text/css">

	<style type="text/css">

		*{
			box-sizing: border-box;
		}

		body{
			font-family: Arial,sans-serif;
			background-image:linear-gradient(to right,#bdc3c7,#2c3e50);
		}
		
		form{
			margin:40px auto;
			width:400px;
			box-shadow:-5px -5px 18px black;
		}
	
		h1,p{
			text-align: center;
			margin-top:3px;
		}

		legend{
			text-align: center;
		}

		input[type=text],input[type=email],input[type=password]{
			width: 100%;
			padding: 10px;
			margin:5px 0 20px 0;
			border: none;
			background-color: #f1f1f1;
		}

		input[type=text]:focus,input[type=email]:focus,input[type=password]:focus{
			background-color:#ddd;
			outline:none;
		}

		input[class=name]{
			width:48%;
			display:inline;
		}

		input[id=lname]{
			margin-left: 5px;
		}

		.user{
			display: block;
		}

		.gender,.checkbox,{
			margin:5px 0 20px 0;
		}

		.submit{
			width:100%;
			margin:5px 0 20px 0;
		}

		button{
			height:30px;
		}

		a{
			text-decoration: none;
		}

		a:hover{
			color:white;
		}

		.successmsg{
			text-align:right;
			background-color:white;
			color:black;
			padding:2px;
		}

	</style>
</head>
<body>
	<form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
		<fieldset>
			<legend><i class="fab fa-themeisle"></i></legend>

				<div class="container">

					<p>If You want to Sign UP</p>
					<p>Please fill in this form to create an account.</p>
					<hr/>

					<div>
						<label for="name" class="user"><i class="far fa-user-cowboy"></i><b>Username</b></label>
						<input type="text" name="first_name" id="fname" class="name" placeholder="Firstname" required>
						<input type="text" name="last_name" id="lname" class="name" placeholder="Lastname" required>
					<div>

					<div>
						<i class="fad fa-envelope-open"></i>
						<label for="email"><b>Email</b></label>
						<input type="email" name="email" id="email" class="email" placeholder="Email" required>
					</div>

					<div>
						<i class="far fa-lock"></i>
						<label><b>Password</b></label>
						<input type="password" name="password" id="pwd" class="pwd" placeholder="Password" required>
						<input type="password" name="cpassword" id="cpwd" class="cpwd" placeholder="Confirm Password" required>
					</div>

					<div style="margin-bottom:15px;">
						<label for="gender">Gender</label>
						<input type="radio" name="gender" id="gender" class="" value="1">Male
						<input type="radio" name="gender" id="gender" class="" value="0">Female
					</div>

					<div style="margin-bottom:15px;">
						<label>
							<input type="checkbox" checked="checked" name="cbox" id="cbox" class="">
							I accept the <a href="#">Terms of Use</a> & <a href="#">Policy</a>
						</label>
					</div>

					<div class="">
						<button name="submit" id="submit" class="submit">Register Now</button>
					</div>

					<center>
						<small>Already have an account? <a href="login.php">Sign in</a></small>
					</center>

				</div>	
		</fieldset>
	</form>
</body>
</html>