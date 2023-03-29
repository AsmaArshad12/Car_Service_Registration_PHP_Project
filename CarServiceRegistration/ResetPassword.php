<?php


include "connection.php";
session_start();

if (isset($_POST['submit'])) { 
   
    $password= $_POST['password'];
    $email = $_POST['email'];

    $sql="Update service_register set Password='$password' where Email='$email'";
    
    if (mysqli_query($con, $sql)) {
                
       echo "<script>window.location='ServiceLogin.php';alert('Password Reset Successfully');</script>";
            
        } else {
            echo "<script>window.location='ResetPassword.php';alert('Invalid Data');</script>";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
	 <title> Reset Password</title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

</head>
<body  style="background-color:#6CBCE7">
 <?php include"header/header.php";  ?>



<br><br>

 <div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             
     <br>    


    <h2 style="color:black;text-align:center;"> Reset Password </h2>
    <br>
                            

    <form  method="post">
                   
        <center>
    


    <?php

     $email=$_SESSION['email'];
   
    $query = "Select * from  service_register where Email='$email'";
    $x= mysqli_query($con, $query);
    while($row= mysqli_fetch_array($x))
    {

        ?>

        <div class="form-group mb-4 ">
                        
            <input  type="email" name="email" value="<?php echo $row['Email'];?>" class="form-control w-50" readonly>
                       
        </div>


        <div class="form-group mb-4 ">
                        
            <input  type="Password" name="password" placeholder="Password" class="form-control w-50">
                       
        </div>
        

        <?php

        }
        ?>


						
        <div class="form-group mb-4 ">
                        
            <input type="submit" name="submit" class="btn btn-primary" value="Reset Password" style="width:50%">
           
        </div>


					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>