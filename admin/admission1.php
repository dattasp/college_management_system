<?php

include "head.php";
include "nav.php";

?>
   
                <div class="row" >
                    <div class="col-md-12 p-5">
                        <h2 class="text-center"> Student Admission List</h2>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Sr.No.</th>
                                    <th> First Name</th>
                                    <th> Middle Name</th>
                                    <th>Last Name </th>
                                    <th> DOB </th>
                                    <th> Phone  </th>
                                    <th> Mother Name  </th>
                                    <th> Email  </th>
                                    <th> Gender  </th>
                                    <th> College Name   </th>
                                    <th> University  </th>
                                    <th> Percentage  </th>
                                    <th> Seat No.  </th>
                                    <th> Total Marks   </th>
                                    <th> Area  </th>
                                    <th> City  </th>
                                    <th> District  </th>
                                    <th> Zip Code   </th>



                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                $conn = mysqli_connect("localhost","root","","newdatabase");
                                $query = "SELECT * FROM admission";
                                $data = mysqli_query($conn,$query);
                                $i =1;
                                while($row = mysqli_fetch_assoc($data)){

                             ?>


                                <tr>
                                    <td> <?= $i++; ?></td>
                                    <td> <?= $row['fname']; ?></td>
                                    <td> <?= $row['mname']; ?></td>
                                    <td> <?= $row['lname']; ?> </td>
                                    <td> <?= $row['dob']; ?> </td>
                                    <td> <?= $row['phone']; ?> </td>
                                    <td> <?= $row['mothername']; ?>  </td>
                                    <td> <?= $row['email']; ?>  </td>
                                    <td> <?= $row['gender']; ?>  </td>
                                    <td> <?= $row['collegename']; ?>  </td>
                                    <td> <?= $row['university']; ?>  </td>
                                    <td> <?= $row['percentage']; ?>  </td>
                                    <td> <?= $row['seatno']; ?>  </td>
                                    <td> <?= $row['tmark']; ?>  </td>
                                    <td> <?= $row['area']; ?>  </td>
                                    <td> <?= $row['city']; ?>  </td>
                                    <td> <?= $row['district']; ?>  </td>
                                    <td> <?= $row['zip']; ?>  </td>
                                    <td>
                                        <a href="admission1.php ? delete_id=<?=$row['id'];?>"> 
                                            <span class="text-danger"> Delete </span>
                                        </a>
                                        <a href="admission_edit.php?id=<?=$row['id']; ?>"> 
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
    $query = 'DELETE FROM `admission` WHERE id="'.$_GET['delete_id'].'" ';
    $row = mysqli_query($conn,$query);
    if($row){
        // echo "succefully data Deleted ";
        echo "<script> window.location.href='admission1.php'; </script>";
    }
    else{
        echo " Data is not Deleted | Something went wrong ";
    }

}


?>