<?php

include "connection.php";
if(isset($_POST['submit']))
{

  $id=$_POST['id'];
  
  $name= $_POST['name'];
    $location= $_POST['location'];

  
    $image=   $_FILES['image']['name'];
   if ($image) {
     $images=$image;
   }else{
    $images=$_POST['img'];
}
$query="update station set Name='$name',Location='$location', Image='$images' where Id='$id'";
$update=mysqli_query($con, $query);

if($update)
{
  echo "<script>window.location='ViewStation.php';alert('Update Successfully');</script>";
   
}

else
{
  echo "<script>window.location='ViewStation.php';alert('InValid Data');</script>";
}


}
?>

<!DOCTYPE html>
<html>
<head>
 <title>Update Station</title>
   
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
$query="select * from station where Id='$Id'";
$x= mysqli_query($con, $query);
while($row=mysqli_fetch_array($x))
{
?>

<br><br>


<div class="container p-3 my-3 bg-white " style="border-radius:15px;width:50%">
             <br>           
<h2 style="color:black;text-align:center;"> Update Station </h2>
   <br>
                           
 

     <form  method="post" enctype="multipart/form-data">
                              
       <center>

      <div class="form-group mb-4 ">
                <input  type="hidden" name="id" value="<?php echo $row['Id']; ?>" class="form-control w-50">
                       
            </div>


       <label style="margin-right: 310px">Station Name</label>    
                   
                   
        <div class="form-group mb-4 ">
                        
            <input  type="text" name="name" class="form-control w-50" value="<?php echo $row['Name']; ?>">
                       
        </div>


          <div class="form-group mb-4 ">
                        
            <input  type="text" name="location" class="form-control w-50" value="<?php echo $row['Location']; ?>">
                       
        </div>



         <label style="margin-right: 290px">Upload Image</label> 
 

          <div class="form-group mb-4 ">
           <img src="upload/<?php echo $row['Image']; ?>" height="100" width="100" style="margin-right: 300px"/>   
           <input type="hidden" name="img" value="<?php echo $row['Image']; ?>">         
          </div>


          <?php
}
?>

          <input type="file" name="image" style="margin-right: 100px">    
           
<br> <br>


           <div class="form-group mb-4 ">
                      
                    <input type="submit" name="submit" class="btn btn-primary" value="Update" style="width:50%">
           </div>
                       
           
 
                     
                       
    </div>
    </div>                
         <br><br>            
</form>
</body>
</html>
