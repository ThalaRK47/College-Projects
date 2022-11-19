<?php
$host="localhost";
$username="ranjith";
$password="877";
$database="library";

$con=new mysqli($host,$username,$password,$database);

if($con->connect_error){
    die("connection filed". $con->conect_error);

}

?>