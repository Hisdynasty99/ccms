<?php
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['status'];
$connect=$db =mysqli_connect('localhost','root','','ccms1')
or die("connection Failed");
// if(isset($_POST["change"])){
   $id=$_GET["id"];
//    $status=$_GET["status"];
//    echo $id;
//    echo $status
$myArray = explode(',', $id);
$status = $myArray[1];
$ids = $myArray[0];
// echo $ids;
// echo $status;

   $st;
 if ($status == '1') {
    $sql= "UPDATE user SET activation = '2' WHERE id = '".$ids."'";
 } else 
 if ($status == '2'){
    $sql= "UPDATE user SET activation = '1' WHERE id = '".$ids."'";
 }
    

    if(mysqli_query($connect,$sql)){
        header("location: usermanagement.php");
    }
    else{
        header("location: 404-page.html");
    }   
 ?>
