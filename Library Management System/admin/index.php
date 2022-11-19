<?php require("../includes/config.php"); 
$sql="SELECT * FROM announcements";
$res=$con->query($sql);
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
</head>
<body class="h-100">
<?php require("includes/header.php"); ?>
<div class="row w-100 ">
<div class="col col-md-3 col-lg-2"><?php require("includes/sidebar.php"); ?></div>
    <div class="mt-5 col-12 col-md-8 col-sm-12 mx-lg-auto mx-md-auto mx-sm-auto col-lg-9">
        <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-sm-6 col-10 col-md-6 col-lg-7">
                <h1 class="text-primary text-center mb-4">New Announcements</h1>
                <form method="POST" action="index.php" enctype="multipart/form-data">
                <div class="form-group">
                    <textarea name="announcements" class="form-control" rows="5"></textarea>
                </div>
                <input type="submit" name="publish" value="publish" class="btn btn-primary mt-2 mr-3 mb-5 float-right"> 
                </form>
                </div>
                <div class="col-sm-6 col-10 col-md-6 col-lg-10">
                <h1 class="text-primary text-center mb-4">NOTICE BOARD</h1>
                <div class="table-responsive">
                <table class="text-center table table-hover table-bordered">
                    <tr>
                        <th class="col-2">S.NO</th>
                        <th>Announcements</th>
                        <th class="col-2">DELETE</th>
                    </tr>
                    <?php 
                        if($res->num_rows >0){
                            $i=0;
                            while($row=$res->fetch_assoc()){
                                $i++;
                        ?>        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['Announcement']; ?></td>
                            <td><button  class="btn btn-danger"><a  class="text-white text-decoration-none deletebtn"  data-toggle="modal" data-id="<?php echo $row['ID']; ?>"  href="#DeleteForm">DELETE</a></button></td>
                        </tr>
                    <?php

                            }
                        }


                        ?>
                </table>
                </div>
            </div>    
        </div>
</div>
</div>
</div>

<?php 
if(isset($_POST['publish'])){

$notice=$_POST['announcements'];

$sql="INSERT INTO announcements(Announcement) VALUES('$notice')";

if(! $con->query($sql)===TRUE){
    echo "ERROR: ".sql."<br>".$con->error;

}
$con->close();
}
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>