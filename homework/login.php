<?php

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

function passcode($password){
  $pass = md5($password);
  $pass = sha1($pass);
  $pass = crypt($pass,$pass);
  return $pass;
}

  if(isset($_POST["submit"])){
    
      $email = $_POST["email"];
      $password = passcode($_POST["password"]); 
      $database = dbconnection();
      $query = "SELECT * FROM userdatas WHERE email = '$email' AND password = '$password'";
      $result = mysqli_query($database,$query);
      if(mysqli_num_rows($result) > 0){
        header("Location:private.php");
      }else{
        echo "<script>alert('Username and password do not match!')</script>"; 
        // header("Location:login.php"); 
      }
      // header("Location:private.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page</title>
<style>
body {
    font-family: Arial, sans-serif;
    background-image:linear-gradient(to right,#bdc3c7,#2c3e50);
}

form{
    margin:100px auto;
	width:300px;
	box-shadow:-5px -5px 18px black;
}

input[type=email], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:#2193b0;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.container {
  padding: 16px;
}

span.sign {
    padding-top: 16px;
    float:right;
}

a{
    color:white;
}

.errormsg{
        text-align:right;
        background-color:red;
        color:white;
        padding:3px;
    }

</style>
</head>
<body>

  <form action="<?php $_SERVER["PHP_SELF"]; ?>"  method="POST">

    <div class="container">

      <label for="email"><b>Email</b></label>
      <input type="email" name="email" id="" class="" placeholder="Enter Email" required>

      <label for="password"><b>Password</b></label>
      <input type="password" name="password" id="" class="" placeholder="Enter Password" required>
        
      <button name="submit" id="submit" class="">Login</button>

      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

    </div>

    <div class="container">
      <button name="" id="" class="cancelbtn" value="reset">Cancel</button>
      <span class="sign">Do you want <a href="signup.php">Sign Up?</a></span>
    </div>
  </form>

</body>
</html>

