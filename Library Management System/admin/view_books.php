<?php require("../includes/config.php"); 
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<title>Library</title>
</head>
<body>

<?php require("includes/header.php"); ?>
<div class="row w-100 ">
<div class="col col-md-3 col-lg-2"><?php require("includes/sidebar.php"); ?></div>
    <div class="mt-5 col-12 col-md-8 col-sm-12 mx-lg-auto mx-md-auto mx-sm-auto col-lg-9">
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
                        <th>Year</th>
                        <th>VIEW</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                    </tr>
                        <?php 


                        if($res->num_rows >0){
                            $i=0;
                            while($row=$res->fetch_assoc()){
                                $i++;
                                $bookview="../books/".$row['ebook'];
                        ?>        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['bname']; ?></td>
                            <td><?php echo $row['authors']; ?></td>
                            <td><?php echo $row['publishers']; ?></td>
                            <td><?php echo $row['pdate']; ?></td>

                            <td><button class="btn btn-primary"><a class="text-white text-decoration-none" target="_blank" href="<?php echo $bookview; ?>">view</a></button></td>
                            <td><button class="btn btn-warning"><a class="text-white text-decoration-none updatebtn" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" href="#UpdateForm">UPDATE</a></button></td>
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

<div class="modal" tabindex="-1" role="dialog" id="UpdateForm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h5 class="modal-title w-100 font-weight-bold">Update</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form method="POST" action="update_data.php" enctype="multipart/form-data">
                <input type="hidden" id="upid" name="upid" class="form-control"></input>
                <div class="form-group">
                    <label for="bname">Book Name:</label>
                    <input type="text" name="bname" id="bname" autofocus="on" class="form-control">
                </div>
                <div class="form-group">
                    <label for="authorname">Auther name:</label>
                    <input type="text" name="authorname" id="authorname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="pname">Publisher name:</label>
                    <input type="text" name="pname" id="pname" class="form-control">
                </div>
                <div class="form-group">
                    <label for="bdate">Year:</label>
                    <input type="text" name="bdate" id="bdate" class="form-control">
                </div>
                <div class="form-group">
                    <label for="file">File:</label>
                    <input type="file" name="file" class="form-control">
                </div>

                <!-- <input type="submit" name="upload" value="Upload" class="btn btn-primary btn-block">  -->

               
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="Update">Update</button>
      </div>
      </form>
    </div>
  </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="DeleteForm">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        
        <h5 class="modal-title w-100 font-weight-bold">Delete</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="delete_data.php" method="post">
      <div class="modal-body">
        <input type="hidden" id="delid" name="delid" class="form-control"></input>
                Are you confirm Delete?

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger" name="delete">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

<?php




?>

<script>
  $(document).ready(function(){
    $(".updatebtn").click(function(){
      var id=$(this).attr("data-id");
      $("#upid").val(id);

      $tr=$(this).closest("tr");

      var data=$tr.children("td").map(function(){
        return $(this).text();

      }).get();

      console.log(data);

      $("#bname").val(data[1]);
      $("#authorname").val(data[2]);
      $("#pname").val(data[3]);
      $("#bdate").val(data[4]);
      

    });
  });
</script>


<script>
  $(document).ready(function(){
    $(".deletebtn").click(function(){

      var id=$(this).attr("data-id");

      $("#delid").val(id);

    });

  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>