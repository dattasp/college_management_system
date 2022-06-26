<?php

// form data 

$username = $_POST['username'];
$password = $_POST['password'];

// echo " $username $password ";


//  Database Connection 
$conn = mysqli_connect("localhost","root","","newdatabase");
$query = "SELECT * FROM  user ";
// echo "$query";
$row = mysqli_query($conn,$query);
$data = mysqli_fetch_assoc($row);

$username1 = $data['username'];
$password1 = $data['password'];

if($username == $username1 && $password == $password1){
    echo  "<script> alert('correct mathched !!') </script> ";
    header("location:index.php");
}
else{
    echo "<script> alert(' Something went wrong  !!') </script>";
    header("location:adminlogin.php");
}


?>