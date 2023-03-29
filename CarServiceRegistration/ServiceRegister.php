<?php


include "connection.php";

if (isset($_POST['submit'])) { 
   

    $name= $_POST['name'];
    $email= $_POST['email'];
    $password = $_POST['password'];
  


            $sql = "INSERT INTO service_register(Name, Email, Password) VALUES ('$name','$email','$password')";
            if (mysqli_query($con, $sql)) {
                
                echo "<script>window.location='ServiceLogin.php';alert('Car Service Registered Successfullyy!')</script>";
            
        } else {
            echo "<script>window.location='ServiceRegister.php';alert('Invalid Data');</script>";
        }
    }

?>




<!DOCTYPE html>
<html lang="en">
<head>
	 <title>Car Service Register</title>
    

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


    <h2 style="color:black;text-align:center;">Car Service Register </h2>
    <br>
                            

    <form  method="post">
                   
        <center>


        <div class="form-group mb-4 ">
                        
            <input  type="name" name="name" placeholder="Name" class="form-control w-50">
                       
        </div>


        <div class="form-group mb-4 ">
                        
            <input  type="email" name="email" placeholder="Email" class="form-control w-50">
                       
        </div>


         <div class="form-group mb-4 ">
                        
            <input  type="password" name="password" placeholder="Password" class="form-control w-50">
                       
        </div>

  
						
        <div class="form-group mb-4 ">
                        
            <input type="submit" name="submit" class="btn btn-primary" value="Registration" style="width:50%">
               
        </div>


					
				</form>
			</div>
		</div>
	</div>
	



</body>
</html>