<?php
require("../includes/config.php")
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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
<style>
</style>
<title>Library</title>
<style>
    #nameerror,#mailerror,#passerror,#cpasserror{
        color:red;
    }
</style>
</head>
<body>

<?php require("includes/header.php"); ?>
<div class="row w-100">
<div class="col-12 col-md-3 col-lg-2"><?php require("includes/sidebar.php"); ?></div>
    <div class="mt-5 col col-md-9 col-sm-12 mx-lg-auto mx-sm-auto col-lg-9">
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-8 col-10 col-md-8 col-lg-5">
                <h1 class="text-primary text-center mb-2">ADD ADMIN</h1>
                <form method="POST" action="#" id="verification"  onsubmit="return verification() ">
                <div class="form-group">
                    <label for="aname">Admin Name:</label>
                    <input type="text" name="aname" id="aname" autofocus="on" class="form-control" autocomplete="off">
                    <p id="nameerror"></p>
                </div>
                <div class="form-group">
                    <label for="aemail">Admin Email:</label>
                    <input type="email" name="aemail" id="aemail" class="form-control" autocomplete="off">
                    <p id="mailerror"></p>
                </div>
                <div class="form-group">
                    <label for="apass">Password:</label>
                    <input type="password" name="apass" id="apass" class="form-control" autocomplete="off">
                    <p id="passerror"></p>
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm password:</label>
                    <input type="password" name="cpass" id="cpass" class="form-control" autocomplete="off">
                    <p id="cpasserror"></p>
                </div>
                <input type="submit" name="upload" value="Add Admin" class="btn btn-primary btn-block"> 

                </form>
            </div>

        </div>

    </div>


    </div>
</div>

<?php

if(isset($_POST['upload'])){

$name=$_POST['aname'];
$email=$_POST['aemail'];
$pass=$_POST['apass'];
$cpass=$_POST['cpass'];

$email_exists=$con->query("SELECT * FROM admin WHERE aemail='$email'");

if($email_exists->num_rows>0){
    echo "<p>exists</p>";

}
else{

$sql="INSERT INTO admin(aname,aemail,apassword) VALUES('$name','$email','$pass')";

if(! $con->query($sql)===TRUE){
    echo "ERROR: ".sql."<br>".$con->error;

}
else{
    header("location:add_admin.php");
}
}
$con->close();
}
?>



<script src="../form_validation.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>