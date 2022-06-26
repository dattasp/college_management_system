<?php

include "head.php";
include "nav.php";

?>
   
                <div class="row" style="height:520px;overflow-y:scroll;overflow-x:hidden;">
                    <div class="col-md-12 p-5">
                        <h2 class="text-center"> Student Registration List</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th> First Name</th>
                                    <th> Middle Name</th>
                                    <th>Last Name </th>
                                    <th> Number </th>
                                    <th> Email  </th>
                                    <th> SID  </th>
                                    <th> Username  </th>
                                    <th> Password  </th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $conn = mysqli_connect("localhost","root","","newdatabase");
                                $query = "SELECT * FROM registration_form";
                                $data = mysqli_query($conn,$query);
                                $i =1;
                                while($row = mysqli_fetch_assoc($data)){

                             ?>


                                <tr>
                                    <td> <?= $i++; ?></td>
                                    <td> <?= $row['firstname']; ?></td>
                                    <td> <?= $row['middlename']; ?></td>
                                    <td> <?= $row['lastname']; ?> </td>
                                    <td> <?= $row['number']; ?> </td>
                                    <td> <?= $row['email']; ?> </td>
                                    <td> <?= $row['sid']; ?>  </td>
                                    <td> <?= $row['username']; ?>  </td>
                                    <td> <?= $row['password']; ?>  </td>
                                    <td>
                                        <a href="registration1.php ? delete_id=<?=$row['id'];?>"> 
                                            <span class="text-danger"> Delete </span>
                                        </a>
                                        <a href="registration_edit.php?id=<?=$row['id']; ?>"> 
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
    $query = 'DELETE FROM `registration_form` WHERE id="'.$_GET['delete_id'].'" ';
    $row = mysqli_query($conn,$query);
    if($row){
        // echo "succefully data Deleted ";
        echo "<script> window.location.href='registration1.php'; </script>";
    }
    else{
        echo " Data is not Deleted | Something went wrong ";
    }

}


?>