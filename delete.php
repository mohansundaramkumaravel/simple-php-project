
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
    <title>delete form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="delete.css">
</head>
<body>
  
      <div class="back">
        <a href="index.php"> <i class="fa fa-arrow-left"></i></a>
       
      </div>
      <main>
         <h1 class="text-center text-danger"> DELETE</h1>
         <div class="center mx-auto">
          <form action="" method="POST">

            <div class="row">
                 <div>
                  <label for="cusid"> <b> Enter your customer id:</b> </label>
                  <input type="number" class="form-control" placeholder="Enter your customer id" name="customerid">
                    
                  <label for="name"> <b> Enter your customer name:</b> </label>
                  <input type="text" class="form-control" placeholder="Enter your customer name" name="cusname">
                    <br>
                  <div class="text-center">
                  <input type="submit" class="btn btn-primary" id="submit" name="submit">
                  </div>
                
                
                </div>
              </div>
         </form>
         </div>
      

     </main>
     
<?php
   
   if(isset($_POST['submit']))
   {
     $customerid=$_POST['customerid'];
     $cusname=$_POST['cusname'];
    //  $emailid=$_POST['emailid'];
    //  $password=$_POST['password'];
    //  $phonenumber=$_POST['phonenumber'];
    //  $totalamount=$_POST['totalamount'];
     
     $sql="DELETE FROM  material WHERE customerid='$customerid'";
     if($conn->query($sql))

     {
      
      ?>
       <script>
           window.alert(" DATA DELETED SUCCESSFULLY");
        </script>
      <?php
     
     }
     else{
       echo "deleted data failed";
     }
   }
   else
   {
     echo " ";
   }
 ?>
   
   
</body>
</html>