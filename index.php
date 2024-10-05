<?php
	session_start();

if (!isset($_SESSION['email'])) {}
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="images/Information_Admission.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>


     <!-- Container with background image -->
     <div class="container-fluid bg-image mt-5">
            <!-- Logo and login form -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 col-sm-6 col-8">
                    <!-- Logo -->
                   
                    <!-- Login form -->
                    <form class="bg-white p-4 rounded shadow" action="User_Dashboard/index.html" method="POST">
                            <div class="text-center mb-4">
                                <img src="images/logo.png" class="img-fluid logo" alt="Logo" width="80px">
                            </div>
                        <h3 class="mb-4 text-center">Admission Portal</h3>
                        <hr>
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                            
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" id="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                            
                        </div>
                        

                        <div class="input-group mb-3">
                            <input type="checkbox" onclick="showPassword()"  aria-label="Username" aria-describedby="basic-addon1">
                            Show Password
                        </div>

                        <div class="d-flex justify-content-end">
                      
`
                            <button type="submit" class="btn btn-warning  mt-3">Login</button> 
                        </div>
                        <div class="input-group">
                            <h5 class="text-success">Have not account yet!</h5> 
                        </div>
                        <div class="input-group mb-3">
                            <a style="text-decoration: none;" href="register.php">Register Account</a>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-center">
                            <a class="btn btn-outline-info" style="text-decoration: none;" href="https://www.sbbusba.edu.pk/files/admission/Prospectus%202023.pdf">Download Prospectus</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.js"></script>
    <script src="js/app.js"></script>
          <!-- jQuery -->
          <script src="js/jquery.min.js"></script>
          <script src="js/popper.min.js"></script>
          <script src="js/bootstrap.min.js"></script>
          <!-- wow animation -->
          <script src="js/animate.js"></script>
          <!-- select country -->
          <script src="js/bootstrap-select.js"></script>
          <!-- owl carousel -->
          <script src="js/owl.carousel.js"></script> 
          <!-- chart js -->
          <script src="js/Chart.min.js"></script>
          <script src="js/Chart.bundle.min.js"></script>
          <script src="js/utils.js"></script>
          <script src="js/analyser.js"></script>
          <!-- nice scrollbar -->
          <script src="js/perfect-scrollbar.min.js"></script>
          <script>
             var ps = new PerfectScrollbar('#sidebar');
          </script>
          <!-- custom js -->
          <script src="js/custom.js"></script>
          <!-- calendar file css -->    
          <script src="js/semantic.min.js"></script>
          <script></script>
       </body>
    </html>
</body>
</html>
