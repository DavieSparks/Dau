<?php

require_once "config.php";
require_once "session.php";

   $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $admission = $_POST['admission'];
    $phone = $_POST['phone'];
    

    //Database connection
    $conn = new mysqli('localhost','root','root','dauelect');
    if($conn->connect_error){
    	die('Connection Failed  : '.$conn->connect_error);
    }else{
    	$stmt = $conn->prepare("insert into registration(name, email, password, admission, phone)  values(?, ?, ?, ?, ?)");
    	$stmt->bind_param("sssii",$name, $email, $password, $admission, $phone);
    	$stmt->execute();
    	echo "Registration Successful...";
    	$stmt->close();
    	$conn->close();
    }

 /*
$admission = filter_input(INPUT_POST, 'admission');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email');
$phone = filter_input(INPUT_POST, 'phone');
$password = filter_input(INPUT_POST, 'password');

if (!empty($name)){
if (!empty($password)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "elect";
// Create connection
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO registration (admission,name, email, phone, password)
values ('$admission','$name','$email','$phone','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "name should not be empty";
die();
}
*/

?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta name="author" content="Kodinger">
   <meta name="viewport" content="width=device-width,initial-scale=1">
   <title>My Login Page &mdash; Bootstrap 4 Login Page Snippet</title>
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" type="text/css" href="css/my-login.css">
</head>
<body class="my-login-page">
   <form action="connect.php" method="post">
   <section class="h-100">
      <div class="container h-100">
         <div class="row justify-content-md-center h-100">
            <div class="card-wrapper">
               <div class="brand">
                  <img src="img/logo.jpg">
               </div>
               <div class="card fat">
                  <div class="card-body">
                     <h4 class="card-title">Register</h4>
                     <form method="POST" class="my-login-validation" novalidate="">
                        <div class="form-group">
                           <label for="name">Name</label>
                           <input id="name" type="text" class="form-control" name="name" required autofocus>
                           <div class="invalid-feedback">
                              What's your name?
                           </div>
                        </div>

                        <div class="form-group">
                           <label for="email">E-Mail Address</label>
                           <input id="email" type="email" class="form-control" name="email" required>
                           <div class="invalid-feedback">
                              Your email is invalid
                           </div>
                        </div>

                        <div class="form-group">
                           <label for="admission">Admision Number</label>
                           <input id="admision" type="number" class="form-control" name="admission" required>
                           <div class="invalid-feedback">
                              Your admission number is invalid
                           </div>
                        </div>

                        <div class="form-group">
                           <label for="phone">Phone Number</label>
                           <input id="phone" type="number" class="form-control" name="phone" required>
                           <div class="invalid-feedback">
                              Your phone number is invalid
                           </div>
                        </div>

                        <div class="form-group">
                           <label for="password">Password</label>
                           <input id="password" type="password" class="form-control" name="password" required data-eye>
                           <div class="invalid-feedback">
                              Password is required
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="custom-checkbox custom-control">
                              <input type="checkbox" name="agree" id="agree" class="custom-control-input" required="">
                              <label for="agree" class="custom-control-label">I agree to the <a href="#">Terms and Conditions</a></label>
                              <div class="invalid-feedback">
                                 You must agree with our Terms and Conditions
                              </div>
                           </div>
                        </div>

                        <div class="form-group m-0">
                           <button type="submit" class="btn btn-primary btn-block">
                              Register
                           </button>
                        </div>
                        <div class="mt-4 text-center">
                           Already have an account? <a href="index.html">Login</a>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="footer">
                  Copyright &copy; 2021 &mdash; Dau Elect
               </div>
            </div>
         </div>
      </div>
   </section>
   </form>

   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   <script src="js/my-login.js"></script>
</body>
</html>