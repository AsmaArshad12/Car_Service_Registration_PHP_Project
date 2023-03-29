<?php

include "connection.php";
if(isset($_POST['submit']))
{

  $id=$_POST['id'];

    $stationname= $_POST['stationname'];
    $empname= $_POST['empname'];
    $email= $_POST['email'];
    $experience= $_POST['experience'];
    $password= $_POST['password'];


$query="update staff set StationName='$stationname', EmployeeName='$empname', Email='$email', Experience='$experience', Password='$password' where Id='$id'";
$update=mysqli_query($con, $query);

if($update)
{
  echo "<script>window.location='ViewStaff.php';alert('Update Successfully');</script>";
   
}

else
{
  echo "<script>window.location='ViewStaff.php';alert('InValid Data');</script>";
}


}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Update Staff</title>
   
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>


<body  style="background-color:#6CBCE7">
    
   <?php 

include "header/adminheader.php";
include "connection.php";



$Id=$_GET['id'];
$query="select * from staff where Id='$Id'";
$x= mysqli_query($con, $query);
while($row=mysqli_fetch_array($x))
{
?>

<br><br>


<div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
                 
<h2 style="color:black;text-align:center;"> Update Staff </h2>

                           
 

     <form  method="post">
                              
       <center>

      <div class="form-group mb-4 ">
                <input  type="hidden" name="id" value="<?php echo $row['Id']; ?>" class="form-control w-50">
                       
            </div>


       <label style="margin-right: 230px">Service Station Name</label>    
                   
                   
        <div class="form-group mb-4 ">
                        
            <input  type="text" name="stationname" class="form-control w-50" value="<?php echo $row['StationName']; ?>">
                       
        </div>

             <label style="margin-right: 260px">Employee Name</label>   


          <div class="form-group mb-4 ">
                        
            <input  type="text" name="empname" class="form-control w-50" value="<?php echo $row['EmployeeName']; ?>">
                       
        </div>


         <label style="margin-right: 350px">Email</label>  
          <div class="form-group mb-4 ">
                        
            <input  type="email" name="email" class="form-control w-50" value="<?php echo $row['Email']; ?>">
                       
        </div>


         <label style="margin-right: 310px">Experience</label>  
          <div class="form-group mb-4 ">
                        
            <input  type="text" name="experience" class="form-control w-50" value="<?php echo $row['Experience']; ?>">
                       
        </div>


           <label style="margin-right: 310px">Password</label>  
          <div class="form-group mb-4 ">
                        
            <input  type="text" name="password" class="form-control w-50" value="<?php echo $row['Password']; ?>">
                       
        </div>



<?php
}
?>


           <div class="form-group mb-4 ">
                      
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" style="width:50%">
           </div>
                       
           
 
                     
                       
    </div>
    </div>                
                   
</form>
</body>
</html>
