<?php
        require("../includes/config.php");
// delete book
        if(isset($_POST["delete"])){
            $id=$_POST['delid'];
           // echo "<script>alert(2)</script>";
            //echo "hii";
        
             $sql="DELETE FROM books WHERE ID='$id'";
                if($con->query($sql)){
                    $con->close();
                    header("Location:view_books.php");
                    exit;
                }
                else{
                    echo "no";
                }
            }
// delete admin
            if(isset($_POST["delete_admin"])){
                $id=$_POST['delid'];
            
                 $sql="DELETE FROM admin WHERE ID='$id'";
                    if($con->query($sql)){
                        $con->close();
                        header("Location:view_admin.php");
                        exit;
                    }
                    else{
                        echo "no";
                    }
                }

    // delete user
            if(isset($_POST["delete_user"])){
                $id=$_POST['delid'];
            
                 $sql="DELETE FROM `users` WHERE ID='$id'";
                    if($con->query($sql)){
                        $con->close();
                        header("Location:view_user.php");
                        exit;
                    }
                    else{
                        echo "no";
                    }
                }
?>