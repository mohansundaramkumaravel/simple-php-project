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
    <title>project</title>
    <link rel="stylesheet" href="index.css">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
        
  

    <div class="head fixed-top">
        <ul class="nav justify-content-end ">
            <li class="nav-item">
                <a class="nav-link text-danger" href="#content">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-danger" href="#content">content</a>
            </li>
            <li class="nav-item">
                <a class="nav-link  text-danger" href="#foot">contact</a>
            </li>
        </ul>
    </div>



    <section id="content">
         <h1 class="text-center">
            Material  database management
         </h1>
        <div class="row container">
           
            <div class="col-lg-6">
                <img src="https://th.bing.com/th/id/R.d7423def86f09c2084141f9a07a35ae5?rik=doSYh2yfFYOS8A&riu=http%3a%2f%2fwww.assignmenthelphub.com%2fBlog%2fwp-content%2fuploads%2f2015%2f12%2fDBMS-Page.jpg&ehk=%2f%2fn9NTlvPDu4DphBzH0o5KzHKbx3cY0R9qSM%2fkDBMdo%3d&risl=&pid=ImgRaw&r=0 " alt="">
            </div>
            <div class="col-lg-6" id="col-2">
                 <h2> Material Requirement Process</h2>
                 <p> Material requirement planning in project comes from Material management and Production Planning and Control. MRP run or planning run is an engine, which is used to fill the demand and supply gap. Issues & Receipts are called MRP elements.</p>
                 <div class="mm ">
                    
                       <p>
                           Basic steps in Material requirement planning are as follows: 
                           Identifying requirement. Running MRP- creating the suggestion. Firming the suggestion.
                        </p>
                        <p> please insert ,delete and update date</p>
                        <div class="div">
                       
                          <h3> Click here to update data</h3>
                              
                        </div>
                      <div class="row justify-content-center mt-10  container-fluid">
                          <div class="col-md-3"> <a href="insert.php">
                            <button class="btn btn-primary">
                                 INSERT
                                </button>
                          </a> </div> 
                          <div class="col-md-3">
                               <a href="update.php">
                                     <button class="btn btn-primary">
                                          UPDATE
                                     </button>
                                </a>  
                            </div> 
                            
                            <div class="col-md-3">
                                <a href="delete.php">
                                      <button class="btn btn-primary" name="delete">
                                           DELETE
                                      </button>
                                 </a>  
                             </div>  
                             <div class="col-md-3">
                                <a href="view.php">
                                      <button class="btn btn-primary">
                                           VIEW
                                      </button>
                                 </a>  
                             </div>  
                         
                         
                      </div>
                
                
                </div>
            </div>
        </div>
    </section>








    <main>
 
       
       
    </main>

    <footer class="container-fluid  bg-dark" id="foot">
        <div class="contact container " id="contacts">
          <div class="text-center text-light">
            <h3>
              Any clarification contact me
            </h3>
          </div>
          <div class="row mt-5">
            <div class="col-md-4 mt-5">
              <a href="tel:9629150229"><i class="fab fa fa-phone" id="icon1"></i></a>
              <p class="text-light p-1">+91 9962923217</p>
            </div>
            <div class="col-md-4 mt-5">
              <a href="https://mail.google.com">
                <i class="fab fa fa-envelope" id="icon2"></i></a>
              <p class="text-light p-1">mohanharish2732002@gmail.com</p>
            </div>
            <div class="col-md-4 mt-5">
              <a href="https://instagram.com/cr7ms_?utm_medium">
                <i class="fab fa fa-instagram" id="icon3"></i></a>
              <p class="text-light p-1"> instagram </p>
            </div>
          </div>
        </div>

        <hr class="text-light">
        <div class="text-light text-center mt-4">
          Created by mohansundaram k or <i class="fa fa-heart text-dark"></i> ms
        </div>
      </footer>
</body>

</html>