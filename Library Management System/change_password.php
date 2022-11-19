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
    
</style>
</head>

<body>
<?php require("includes/uheader.php"); ?>
<div class="row w-100">
    <div class="col col-md-3 col-lg-2"><?php require("includes/usidebar.php"); ?></div>
    <div class="mt-5 col col-md-9 col-sm-12 mx-lg-auto mx-sm-auto col-lg-9">
        <div class="container-fluid">
        <div class="row justify-content-center">

            <div class="col-sm-8 col-10 col-md-8 col-lg-5">
                <h1 class="text-primary text-center mb-4">Change Password</h1>
                <form method="POST" action="#">
                <div class="form-group">
                    <label for="opass">Old password:</label>
                    <input type="password" name="opass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pass"> New Password:</label>
                    <input type="password" name="pass" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cpass">Confirm password:</label>
                    <input type="password" name="cpass" class="form-control">
                </div>
                <input type="submit" name="upload" value="Change password" class="btn btn-primary btn-block"> 

                </form>
            </div>

        </div>

    </div>


    </div>
</div>





<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>