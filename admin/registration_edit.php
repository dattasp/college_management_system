<?php

$conn = mysqli_connect("localhost","root","","newdatabase");

$query = 'SELECT * FROM registration_form WHERE id = "'.$_GET['id'].'"';

$fir = mysqli_query($conn,$query);

$row=mysqli_fetch_assoc($fir);

?> 
<?php

include "head.php";

?>


<form action="registration_save.php" method="post">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <label for=""> First Name </label>
                <input type="hidden" name="id" class= "form-control" value= "<?= $row['id']; ?> ">

                <input type="text" name="firstname" class="form-control" value="<?=$row['firstname']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Middle Name  </label>
                <input type="text" name="middlename" class="form-control" value="<?=$row['middlename']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Last Name  </label>
                <input type="text" name="lastname" class="form-control" value="<?=$row['lastname']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Phone   </label>
                <input type="text" name="number" class="form-control" value="<?=$row['number']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Email  </label>
                <input type="email" name="email" class="form-control" value="<?=$row['email']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> SID  </label>
                <input type="text" name="sid" class="form-control" value="<?=$row['sid']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> Username  </label>
                <input type="text" name="username" class="form-control" value="<?=$row['username']; ?>"  >
            </div>

            <div class="col-md-6">
                <label for=""> password  </label>
                <input type="text" name="password" class="form-control" value="<?=$row['password']; ?>"  >
            </div>

            <div class="col-md-12 text-center">
                <button class = "btn btn-outline-warning mt-5">  Save </button>
            </div>


        </div>
    </div>
</form>