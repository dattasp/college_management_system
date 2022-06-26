<?php 

$conn = mysqli_connect("localhost","root","","newdatabase");
if($conn){
    // echo "ok";
}
if(isset($_POST['firstname']))
{
 $query='UPDATE `registration_form` SET `firstname`="'.$_POST['firstname'].'",`middlename`="'.$_POST['middlename'].'",`lastname`="'.$_POST['lastname'].'",`number`="'.$_POST['number'].'",`email`="'.$_POST['email'].'",`sid`="'.$_POST['sid'].'",`username`="'.$_POST['username'].'",`password`="'.$_POST['password'].'" WHERE `id`="'.$_POST['id'].'"' ;
$row=mysqli_query($conn,$query);
echo "$row";
if($row){
    echo "<script> Data Updated Successfully </script> ";

header('location:registration1.php');
}
}
?>