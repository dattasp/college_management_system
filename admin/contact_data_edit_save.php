<?php 

$conn = mysqli_connect("localhost","root","","newdatabase");
if($conn){
    // echo "ok";
}
if(isset($_POST['firstname']))
{
 $query='UPDATE `contactus` SET `firstname`="'.$_POST['firstname'].'",`lastname`="'.$_POST['lastname'].'",`phone`="'.$_POST['phone'].'",`email`="'.$_POST['email'].'",`message`="'.$_POST['message'].'" WHERE `id`="'.$_POST['id'].'"' ;
$row=mysqli_query($conn,$query);
echo "$row";
if($row){
    echo "<script> Data Updated Successfully </script> ";

header('location:contact_data.php');
}
}
?>