	<?php
 include "connection.php";
if(isset($_POST['search']))
{
    $valueToSearch = $_POST['name'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM station WHERE CONCAT(Name, Location) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);

    if(mysqli_num_rows($search_result)>0)
    {
    	echo "No record exist in database";
    }
    
}
 else {
    $query = "SELECT * FROM station";
    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
 include "connection.php";
 
    $filter_Result = mysqli_query($con, $query);
    return $filter_Result;
}

?>






<!DOCTYPE html>
<html lang="en">
<head>


    <title>View Service Station</title>
    
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>


<body  style="background-color:#6CBCE7">
  
<?php
   include "header/serviceheader.php"
?>



		
		<div class="container-fluid" style="margin-top: -130px;">
  
      <form method="post" style="margin-left:500px;" >

        <div class="row">
                    <div class="col-4 mb-2">

                    <input type="text" name="name" placeholder="Search Name "required  class="form-control">
</div></div>
                    <input type="submit" class="btn btn-primary" value="search"   name="search" style="width:150px;margin-top:-70px;margin-left:280px;";>
                </form>
        
  <div class="table-responsive">

  <table class="table">

           
           <th>Service Station Name</th>
             <th>Location</th>
           <th>Image</th>
          
                </tr>

      
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['Name']; ?></td>
             <td><?php echo $row['Location']; ?></td>
              <td><img width="auto" src="upload/<?php echo $row['Image']?>" width="450" height="200" /> </td>
           


                </tr>

                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>