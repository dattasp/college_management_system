<?php

$conn = mysqli_connect("localhost","root","","newdatabase");

$query = 'SELECT * FROM admission WHERE id = "'.$_GET['id'].'"';

$fir = mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($fir);

?> 
<?php

include "head.php";

?>


<form action="admission_save.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for=""> First Name </label>
                <input type="hidden" name="id" class= "form-control" value= "<?= $row['id']; ?> ">

                <input type="text" name="fname" class="form-control" value="<?=$row['fname']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Middle Name  </label>
                <input type="text" name="mname" class="form-control" value="<?=$row['mname']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Last Name  </label>
                <input type="text" name="lname" class="form-control" value="<?=$row['lname']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> DOB   </label>
                <input type="text" name="dob" class="form-control" value="<?=$row['dob']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Phone  </label>
                <input type="text" name="phone" class="form-control" value="<?=$row['phone']; ?>"  >
            </div>

            
            <div class="col-md-6">
                <label for=""> Email  </label>
                <input type="email" name="email" class="form-control" value="<?=$row['email']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Mother Name  </label>
                <input type="text" name="mothername" class="form-control" value="<?=$row['mothername']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Gender   </label>
                <input type="text" name="gender" class="form-control" value="<?=$row['gender']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> College Name   </label>
                <input type="text" name="collegename" class="form-control" value="<?=$row['collegename']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Unicersitye   </label>
                <input type="text" name="university" class="form-control" value="<?=$row['university']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Percentage   </label>
                <input type="text" name="percentage" class="form-control" value="<?=$row['percentage']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Seat No   </label>
                <input type="text" name="seatno" class="form-control" value="<?=$row['seatno']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Total Marks  </label>
                <input type="text" name="tmark" class="form-control" value="<?=$row['tmark']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Area  </label>
                <input type="text" name="area" class="form-control" value="<?=$row['area']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> City  </label>
                <input type="text" name="city" class="form-control" value="<?=$row['city']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for="">District   </label>
                <input type="text" name="district" class="form-control" value="<?=$row['district']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Zip Code    </label>
                <input type="text" name="zip" class="form-control" value="<?=$row['zip']; ?>"  >
            </div>

            <div class="col-md-12 text-center">
                <button class = "btn btn-outline-warning mt-5">  Save </button>
            </div>


        </div>
    </div>
</form>