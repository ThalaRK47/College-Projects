<?php
require("../includes/config.php");
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
<title>Library</title>
</head>
<body>

<?php require("includes/header.php"); ?>
<div class="row w-100">
<div class="col col-md-3 col-lg-2"><?php require("includes/sidebar.php"); ?></div>
    <div class="mt-5 col-10 col-md-9 col-sm-12 mx-lg-auto mx-sm-auto col-lg-9">
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-10 col-md-6 col-lg-5">
                <h1 class="text-primary text-center mb-2">ADD BOOKS</h1>
                <form method="POST" action="add_books.php" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="bname">Book Name:</label>
                    <input type="text" name="bname" autofocus="on" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="authorname">Auther name:</label>
                    <input type="text" name="authorname" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="pname">Publisher name:</label>
                    <input type="text" name="pname" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="bdate"> Year:</label>
                    <input type="text"  name="bdate" class="form-control" autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="file">File:</label>
                    <input type="file" name="file" class="form-control">
                </div>
                <input type="submit" name="upload" value="Upload" class="btn btn-primary btn-block"> 

                </form>
            </div>

        </div>

    </div>


    </div>
</div>




 <?php

if(isset($_POST['upload']))
{
    $bname=$_POST['bname'];
    $authorname=$_POST['authorname'];
    $pubname=$_POST['pname'];
    $bdate=$_POST['bdate'];

    $targetDir = '../books/';
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;

    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if ($fileType=="pdf") {

 if(move_uploaded_file($_FILES['file']['tmp_name'], $targetFilePath))

 {
$sql="INSERT INTO books(bname,authors,publishers,pdate,ebook) VALUES('$bname','$authorname','$pubname','$bdate','$fileName')";
 $con->query($sql);
 //echo "The file ". basename( $_FILES['file']['name']). " is uploaded";
    echo "<script> alert('upload successfull') </script>";
 }

 else {

 echo "Problem uploading file";

 }

}
else {

 echo "You may only upload PDFs, JPEGs or GIF files.<br>";

}
}

?>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>