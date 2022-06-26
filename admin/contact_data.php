<?php

include "head.php";
include "nav.php";

?>
   
                <div class="row" style="height:520px;overflow-y:scroll;overflow-x:hidden;">
                    <div class="col-md-12 p-5">
                        <h2 class="text-center">Contact User List</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th>First Name </th>
                                    <th>Last Name </th>
                                    <th> Phone </th>
                                    <th> Email  </th>
                                    <th> Massage </th>
                                    <th> Action  </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $conn = mysqli_connect("localhost","root","","newdatabase");
                                $query = "SELECT * FROM contactus";
                                $data = mysqli_query($conn,$query);
                                $i =1;
                                while($row = mysqli_fetch_assoc($data)){

                             ?>


                                <tr>
                                    <td> <?= $i++; ?></td>
                                    <td> <?= $row['firstname']; ?></td>
                                    <td> <?= $row['lastname']; ?> </td>
                                    <td> <?= $row['phone']; ?> </td>
                                    <td> <?= $row['email']; ?> </td>
                                    <td> <?= $row['message']; ?>  </td>
                                    <td>
                                        <a href="contact_data.php ? delete_id=<?=$row['id'];?>"> 
                                            <span class="text-danger"> Delete </span>
                                        </a>
                                        <a href="contact_data_edit.php?id=<?=$row['id']; ?>"> 
                                        <span class="text-warning"> Edit </span>
                                            
                                        </a>
                                    </td>

                                </tr>


                                <?php
                                }
                                ?>
                                
                            </tbody>
                        </table>
                    </div>
                </div>
           <?php

    

if(isset ($_GET['delete_id'])){
    $query = 'DELETE FROM `contactus` WHERE id="'.$_GET['delete_id'].'" ';
    $row = mysqli_query($conn,$query);
    if($row){
        // echo "succefully data Deleted ";
        echo "<script> window.location.href='contact_data.php'; </script>";
    }
    else{
        echo " Data is not Deleted | Something went wrong ";
    }

}


?>