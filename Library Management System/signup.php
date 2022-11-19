<?php
require("includes/config.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .center{
        margin-top:7vh;
    }
    #nameerror,#mailerror,#passerror,#cpasserror{
        color:red;
    }
</style>
<title>Signup</title>
</head>
<body>
    <?php  require("includes/header.php") ?>
    <div class="container-fluid center ">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-10 col-md-5 col-lg-4">
                <h1 class="text-primary text-center mb-3">SIGNUP FORM</h1>
                <form id="registration" onsubmit="return registeration() " method="POST" action="signup.php">
                <div class="form-group">
                    <label for="name">NAME: </label>
                    <input type="text" name="name" id="name" class="form-control" autofocus="on" autocomplete="off">
                    <p id="nameerror"></p>
                </div>
                <div class="form-group">
                    <label for="mail">EMAIL:</label>
                    <input type="email" name="mail" id="mail" class="form-control" autocomplete="off">
                    <p id="mailerror"></p>
                </div>
                <div class="form-group">
                    <label for="pass">PASSWORD:</label>
                    <input type="password" name="pass" id="pass" class="form-control" autocomplete="off">
                    <p id="passerror"></p>
                </div>
                <div class="form-group">
                    <label for="cpass">CONFIRM PASSWORD:</label>
                    <input type="password" name="cpass" name="cpass" class="form-control" autocomplete="off">
                    <p id="cpasserror"></p>
                </div>
                 
 
                

                <input type="submit" name="submit" value="signup" class="btn btn-primary btn-block"> 
                <p class="text-left mt-2">Already have an account? <a class="text-decoration-none " href="login.php">login here</a></p>

                </form>
            </div>

        </div>

    </div>
<?php

if(isset($_POST['submit'])){

$name=$_POST['name'];
$email=$_POST['mail'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];

$email_exists=$con->query("SELECT * FROM users WHERE uemail='$email'");

if($email_exists->num_rows>0){
    echo "<p>exists</p>";

}
else{

$sql="INSERT INTO users(uname,uemail,upassword) VALUES('$name','$email','$pass')";

if(! $con->query($sql)===TRUE){
    echo "ERROR: ".sql."<br>".$con->error;

}
else{
    header("location:login.php");
}
}
$con->close();
}
?>

<script src="form_validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>