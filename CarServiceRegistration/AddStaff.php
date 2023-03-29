<?php

include "connection.php";

if(isset($_POST['submit']))
{

    $stationname= $_POST['stationname'];
    $empname= $_POST['empname'];
    $email= $_POST['email'];
    $experience= $_POST['experience'];
    $password= $_POST['password'];
   
  
         $sql = "INSERT INTO staff(StationName, EmployeeName, Email, Experience, Password)VALUES ('$stationname','$empname','$email','$experience', '$password')";
         
    if (mysqli_query($con, $sql)) {
      echo "<script>window.location='ViewStaff.php';alert(' Added Successfully');</script>";
     }
    else {

      echo "<script>window.location='AddStaff.php';alert('Invalid Data');</script>";
   }
 }

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <title>Add Staff</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


    <body  style="background-color:#6CBCE7">
     
 <?php  include "header/adminheader.php"  ?>


   <br><br>
        <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Add Staff </h2>
   <br>
                            

<form  method="post">
                   
                  
            
<center>



    <div class="form-group mb-4 ">
            
    <select name="stationname" class="form-control w-50" required>
    <option value="">Select Service Station</option>
       <?php
       $list = mysqli_query($con,"SELECT distinct(Name) FROM station ");
       while ($row_ah = mysqli_fetch_assoc($list)) {
      
      ?>
     
      <option value="<?php echo $row_ah['Name']; ?>"><?php echo $row_ah['Name']; ?></option>

      <?php } ?>

    </select>             
      
                       
    </div>

    <div class="form-group mb-4 ">
                        
        <input  type="text" name="empname" placeholder="Employee Name" class="form-control w-50" required>
                       
    </div>


    <div class="form-group mb-4 ">
                        
        <input  type="email" name="email" placeholder="Email" class="form-control w-50" required>
                       
    </div>

    <div class="form-group mb-4 ">
                        
        <input  type="text" name="experience" placeholder="Experience" class="form-control w-50" required>
                       
    </div>

      <div class="form-group mb-4 ">
                        
        <input  type="password" name="password" placeholder="Password" class="form-control w-50" required>
                       
    </div>



    <div class="form-group mb-4 ">
                        
        <input type="submit" name="submit" class="btn btn-primary" value="Add Staff" style="width:50%">
                        
    </div>
                   

                   
                </form>
            </div>
        </div>
    </div>
    

</body>
</html>