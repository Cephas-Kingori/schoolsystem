<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Homepage</title>
  </head>
  <body>
  	<br> <br>
    <?php 
       require 'connection.php';
    ?>

         <div class="container">
         	  	<h3>Student Details</h3>
  	<hr style="margin-left: 26px; margin-right: 26px;">
         	<form action="connection.php" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" id="id" class="form-control" value="<?php echo $id; ?>">
         		<div class="form-group">
         			<input type="text" name="studentName" id="studentName" class="form-control" placeholder="student Name" value="<?php echo $name  ?>" required="" >
                    <span><?php echo $nameErr ?></span>
         		</div>
         			<div class="form-group">
         			<input type="email" name="studentEmail" id="studentEmail" class="form-control" placeholder="Email" value="<?php echo $email  ?>" required="">

         		</div>
         			<div class="form-group">
         			<input type="text" name="studentPhone" id="phone" class="form-control" placeholder="Enter Phone Number" value="<?php echo $phone  ?>" required="">

         		</div>
         			<div class="form-group">
         			<select name="studentGender" class="form-control" required="">
         				<option value="<?php echo $gender  ?>" ><?php echo $gender  ?></option>
         				<option value="male">Male</option>
         				<option value="female">Female</option>
         			</select>

         		</div>
         			<div class="form-group">
         			<input type="number" name="studentAge" id="studentAge" class="form-control" placeholder="Age" value="<?php echo $age  ?>" required="">
                    
 
         		</div>

                        <div class="form-group">
                    <label for="profileImage" style="padding: 10px;">Upload Student Image</label>
                    <input type="file" name="studentImage" id="studentImage" value="<?php echo $studentImage  ?>" class="form-control">
                        </div>
            

                    <?php
                      if ($update == true):
                    ?>
                <div class="form-group">
                    <input type="submit" name="update" id="update"  class="btn btn-warning" value="Update Student Details">
                </div>
                     <?php
                      else:
                     ?>
         			<div class="form-group">
         			<input type="submit" name="save" id="save"  class="btn btn-success" value="Upload Student Details">
         		</div>
                <?php
                  endif;
                ?>
         	</form>
         	
         </div>




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>