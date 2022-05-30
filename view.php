
<?php


$conn = new mysqli('localhost','root','','customer');

if($conn ->connect_errno)
{
	echo $conn->connect_errno;
	die();
}
else{
	
}

?>  


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="view.css">
</head>
<body>
  
      <div class="back">
        <a href="index.php"> <i class="fa fa-arrow-left"></i></a>
       
      </div>
    <main>
     <div class=" text-center text-primary" >
         <h2> 
             VIEW
         </h2>
     </div>
      <div class=" text-center">
          <form action="" method="POST">
             <input type="submit" name=submit class=" btn bg-success">
    
          </form>
          </div>  
     </main>
     
<?php
    


if(isset($_POST['submit']))
   {
     $sql= "SELECT * FROM material";	 
    

     if($result = $conn->query($sql))
     {
        echo "<table>";

        echo "<thead>";

        foreach($result as $row_no => $row_val)
        {
            echo "<tr>";

            foreach($row_val as $row_head => $row_body)
            {
                echo "<th>".$row_head."</th>";
            }

            echo "</tr>";

            break;
        }

        echo "</thead>";

        echo "<tbody>";

        foreach($result as $row_no => $row_val)
        {
            echo "<tr>";

            foreach($row_val as $row_head => $row_body)
            {
                echo "<td>".$row_body."</td>";
            }

            echo "</tr>";
        }

        echo "</tbody>";

        echo "</table>";
     }
     else
     {
       echo "data failed due to some error";
     }
   }
   else
   {
     echo " ";
   }
 ?>
 
 
   
   
</body>
</html>