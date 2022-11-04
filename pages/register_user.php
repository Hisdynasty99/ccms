<?php
session_start();
$user_id = $_SESSION['id'];
$status = $_SESSION['status'];
$lawyername = $_SESSION['name'];
$connect= mysqli_connect('localhost','root','','ccms1')
or die("connection Failed");
//  if(isset($_POST[""])){
   $fname=$_POST["firstname"];
   $mname=$_POST["middlename"];
   $sname=$_POST["surname"];
   $password=$_POST["password"];
   $email=$_POST["email"];
   $username= $_POST["username"];
   $role= $_POST["role"];
   $phonenumber=$_POST["phonenumber"];


   $sql="INSERT INTO user (first_name,middle_name,sur_name,username,phonenumber,status,email,password)
    values('$fname','$mname','$sname','$username','$phonenumber','$role','$email','$password')";
// }
    if(mysqli_query($connect,$sql)){
      header("location: user_registration.php");

    }
    else{
        header("location: 404-page.html");
    }
  // }

 ?>
