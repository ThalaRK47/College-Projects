<?php
        require("../includes/config.php");

        if(isset($_POST["Update"])){
            $id=$_POST['upid'];

            $bname=$_POST['bname'];
            $authorname=$_POST['authorname'];
            $pubname=$_POST['pname'];
            $bdate=$_POST['bdate'];
        
             $sql="UPDATE books SET bname='$bname',authors='$authorname',publishers='$pubname',pdate='$bdate' WHERE ID='$id'";
                if($con->query($sql)){
                   // $con->close();
                    header("Location:view_books.php");
                    //exit;
                }
                else{
                    echo "no";
                }
            }
?>