<?php 
include "connection.php";
$Id=$_GET['id'];
$query="delete from staff where Id='$Id'";
$msg= mysqli_query($con, $query);
if($msg)
{
	
	 echo "<script>window.location='ViewStaff.php';alert('Deleted Successfully');</script>";
}

?>