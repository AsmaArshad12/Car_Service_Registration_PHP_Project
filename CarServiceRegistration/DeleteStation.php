<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from station where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewStation.php';alert('Deleted Successfully');</script>";
}

?>