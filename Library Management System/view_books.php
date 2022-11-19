<?php require("includes/config.php"); 
$sql="SELECT * FROM books";
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
<link rel="stylesheet" href="assets/css/style.css">
<title>Library</title>
</head>
<body>
<?php require("includes/uheader.php"); ?>
<div class="row w-100">
    <div class="col col-md-3 col-lg-2"><?php require("includes/usidebar.php"); ?></div>
    <div class="mt-5 col col-md-9 col-sm-12 mx-lg-auto mx-sm-auto col-lg-9">
        <div class="container-fluid">
            <div class="row mb-3">

<div class="col-4">
    <form class="form-inline float-sm-left" method="POST" action="searchbox.php">
        <select class="form-control">
          <option selected disabled>Select a category</option>
          <option>Programming</option>
          <option>Hacking</option>
          <option>Electronic</option>
        </select>
    </form>
</div>
  
<div class="col-8">
    <form class="form-inline float-sm-right"  method="POST" action="view_books.php">
        <input type="text" class="form-control" name="search" placeholder="Search">
        <button class="btn btn-outline-success ml-2" name="searchbtn" type="submit">Search</button>
    </form>
</div>
</div>
            <div class="table-responsive">
                <table class=" text-center table table-hover table-bordered">
                    <tr>
                        <th>S.NO</th>
                        <th>BOOK NAME</th>
                        <th>authors</th>
                        <th>Publihers</th>
                        <th>Publish Year</th>
                        <th>VIEW</th>
                    <tr>
                        <?php 
                        if($res->num_rows >0){
                            $i=0;
                            while($row=$res->fetch_assoc()){
                                $i++;

                                $bookview="books/".$row['ebook'];
                        ?>        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['bname']; ?></td>
                            <td><?php echo $row['authors']; ?></td>
                            <td><?php echo $row['publishers']; ?></td>
                            <td><?php echo $row['pdate']; ?></td>
                            <td><button class="btn btn-primary"><a class="text-white" target="_blank" href="<?php echo $bookview; ?>">VIEW</a></button></td>
                        </tr>
                        <?php
                                }
                            }
                        ?>
                </table>
        

</div>


</div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>