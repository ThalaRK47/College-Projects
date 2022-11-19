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

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
    .center{
        margin-top:10vh;
    }
</style>
<title>login</title>
</head>
<body>
    <?php  require("includes/header.php") ?>
    <div class="container-fluid center ">
        <div class="row w-100 justify-content-center">
            <div class="col-sm-8 col-10 col-md-5 mx-lg-auto col-lg-4">
                <h1 class="text-primary text-center mb-3">LOGIN FORM</h1>
                <form method="POST" action="login.php">
                <div class="form-group">
                    <label for="mail">EMAIL:</label>
                    <input type="email" name="mail" autofocus="on" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pass">PASSWORD:</label>
                    <input type="password" name="pass" class="form-control" autocomplete="off">
                </div>
                <div class="g-recaptcha" data-sitekey="6LcXaV8cAAAAAPQ6_ZErj2Gzeaxa5RXQFUzW9PDo"></div>
                 <p class="text-right"><a class="text-decoration-none" href="forget.php">Forget Password?</a></p>
                <input type="submit" name="login" value="Login" class="btn btn-primary btn-block"> 
                <p class="text-left mt-2">Don't have an account? <a class="text-decoration-none " href="signup.php">create account</a></p>

                </form>
            </div>

        </div>

    </div>

<?php

if(isset($_POST['login'])){ 

$email=$_POST['mail'];
$pass=$_POST['pass'];

/*if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
 $secretKey = '6LcXaV8cAAAAAD37HuVulDSYkQVL9AIxeM6sIODh'; 
             
            // Verify the reCAPTCHA response 
$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
$responseData = json_decode($verifyResponse);
if($responseData->success){
*/      
        $sql="SELECT * FROM users where uemail='$email' and upassword='$pass'";

        $res=$con->query($sql);

            if($res->num_rows>0){
                $row=$res->fetch_assoc();
                $_SESSION["uemail"] = $row['uemail'];
                header("location:uhome.php");

            }
            else{
                $sql="SELECT * FROM admin where aemail='$email' and apassword='$pass'";
                $res=$con->query($sql);
                if($res->num_rows>0){
                    $row=$res->fetch_assoc();
                    $_SESSION["email"] = $row['aemail'];
                    header("location:admin/index.php");
    
                }
            }
       /* }
}*/

$con->close();
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>