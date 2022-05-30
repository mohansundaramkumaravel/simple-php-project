
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
    <title>insert form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="insert.css">
</head>
<body>
  
      <div class="back">
        <a href="index.php"> <i class="fa fa-arrow-left"></i></a>
       
      </div>
      <main>
         <h1 class="text-center"> INSERT</h1>
         <div class="center mx-auto">
          <form action="" method="POST">

            <div class="row">
                <div class=" mx-auto">
                  <label for="cusid"> <b> Enter your customer id:</b> </label>
                  <input type="number" class="form-control" placeholder="Enter your customer id" name="customerid">
                    
                  <label for="name"> <b> Enter your customer name:</b> </label>
                  <input type="text" class="form-control" placeholder="Enter your customer name" name="cusname">
                    
                    <label for="email"><b> Enter your email-id: </b> </label>
                  <input type="text" class="form-control" placeholder="Enter email-id" name="emailid">
                </div>
                 <br>
                <div>
                    <label for="pswd">  <b> Enter your password:</b> </label>
                  <input type="password" class="form-control" placeholder="Enter password" name="password">
                  <br>
                  <label for="number">  <b> Enter your customer phone number:</b> </label>
                  <input type="tel" class="form-control" maxlength="10" placeholder="Enter your customer number" name="phonenumber">
                  <br>
                  <label for="amount">  <b>  Enter your total amount:</b></label>
                  <input type="number" class="form-control" placeholder="Enter your total amount" name="totalamount">
                  <br>
                  <input type="submit" class=" btn btn-primary" id="submit" name="submit">
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
     $emailid=$_POST['emailid'];
     $password=$_POST['password'];
     $phonenumber=$_POST['phonenumber'];
     $totalamount=$_POST['totalamount'];
     
     $sql="INSERT INTO material VALUES('$customerid','$cusname','$emailid ','$password','$phonenumber','$totalamount')";	  
     if($conn ->query($sql))
     {
      
      ?>
       <script>
           window.alert(" DATA INSERTED");
        </script>
      <?php
     
     }
     else{
       echo "insert data failed";
     }
   }
   else
   {
     echo " ";
   }
 ?>
   
   
</body>
</html>