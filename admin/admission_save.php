<?php 

$conn = mysqli_connect("localhost","root","","newdatabase");
if($conn){
    // echo "ok";
}
if(isset($_POST['fname']))
{
 $query='UPDATE `admission` SET `fname`="'.$_POST['fname'].'",`mname`="'.$_POST['mname'].'",`lname`="'.$_POST['lname'].'",`dob`="'.$_POST['dob'].'",`phone`="'.$_POST['phone'].'",`mothername`="'.$_POST['mothername'].'",`email`="'.$_POST['email'].'",`gender`="'.$_POST['gender'].'",`collegename`="'.$_POST['collegename'].'",`university`="'.$_POST['university'].'",`percentage`="'.$_POST['percentage'].'",`seatno`="'.$_POST['seatno'].'",`tmark`="'.$_POST['tmark'].'",`area`="'.$_POST['area'].'",`city`="'.$_POST['city'].'",`district`="'.$_POST['district'].'",`zip`="'.$_POST['zip'].'" WHERE `id`="'.$_POST['id'].'"' ;
$row=mysqli_query($conn,$query);

// echo "$row";

if($row){
    echo "<script> Data Updated Successfully </script> ";

header('location:admission1.php');
}
}
?>