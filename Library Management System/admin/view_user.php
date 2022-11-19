<?php require("../includes/config.php"); 
$sql="SELECT * FROM users";
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
<style>
    .center{
        margin-top:10vh;
        margin-left:2vw;

    }
</style>
</head>
<body>
<?php require("includes/header.php"); ?>
<div class="row w-100 ">
    <div class="col-md-1.5"><?php require("includes/sidebar.php"); ?></div>
    <div class="col-md-9">
        <div class="container center">
            <div class="table-responsive">
                <table class=" text-center table table-hover table-bordered">
                    <tr>
                        <th>S.NO</th>
                        <th>user name</th>
                        <th>user email</th>
                        <th class="col-md-1">DELETE</th>
                    <tr>
                        <?php 
                        if($res->num_rows >0){
                            $i=0;
                            while($row=$res->fetch_assoc()){
                                $i++;
                        ?>        
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $row['uname']; ?></td>
                            <td><?php echo $row['uemail']; ?></td>
                            <td><button  class="btn btn-danger"><a  class="text-white text-decoration-none deletebtn" data-id="<?php echo $row['ID']; ?>" data-toggle="modal" href="#DeleteForm">DELETE</a></button></td>
                        </tr>
                    <?php

                            }
                        }


                        ?>

                </table>
        

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
        <button type="submit" class="btn btn-danger" name="delete_user">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>

<script>
  $(document).ready(function(){
    $(".deletebtn").click(function(){

      var id=$(this).attr("data-id");
      console.log(id);

      $("#delid").val(id);

    });

  });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>