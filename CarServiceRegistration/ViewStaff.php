
<!DOCTYPE html>
<html lang="en">
<head>


    <title>View Staff</title>
    
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/adminheader.php"
?>
 <br><br>
 <center>
<h4>Staff Details</h4>
<br>
                
                <table border="1" style="width:1000px; height:150px;text-align:center;">

        <tr>
           
            <th>Service Station Name</th>
             <th>Employee Name</th>
           <th>Email</th>
           <th>Experience</th>
           <th>Password</th>
           <th>Update</th>
          <th>Delete</th>
     
        </tr>


<?php
include "connection.php";

$query="select * from staff";
$x= mysqli_query($con, $query);
while($row= mysqli_fetch_array($x))
{

        ?>
        <tr>
            <td><?php echo $row['StationName']; ?></td>
             <td><?php echo $row['EmployeeName']; ?></td>
              <td><?php echo $row['Email']; ?></td>
             <td><?php echo $row['Experience']; ?></td>
              <td><?php echo $row['Password']; ?></td>
   
<td><a  class="btn btn-success" role="button" href="UpdateStaff.php?id=<?php echo $row['Id']; ?>">Update</a></td>

<td>
<a class="btn btn-success" role="button" href="DeleteStaff.php?id=<?php echo $row['Id']; ?>">Delete</a>
</td>
        </tr>
<?php
}

?>
  </center>  </table>
       
    </div>
</div>

    

</body>
</html>