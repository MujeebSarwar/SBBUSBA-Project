<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

     <!-- Container with background image -->
     <div class="container-fluid bg-image mt-5">
            <!-- Logo and login form -->
            <div class="row justify-content-center align-items-center">
                <div class="col-md-4 col-sm-6 col-8">
                    <!-- Logo -->
                   
                    <!-- Login form -->
                    <form class="bg-white p-4 rounded shadow" action="index.php" method="POST">
                            <div class="text-center mb-4">
                                <img src="images/logo.png" class="img-fluid logo" alt="Logo" width="80px">
                            </div>
                        <h3 class="mb-4 text-center">Register Account</h3>
                        <hr>

                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Full Name" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </span>
                        </div>
                        
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
                            <input type="password" id="password" class="form-control" placeholder="Retype Password" aria-label="Username" aria-describedby="basic-addon1">
                            <span class="input-group-text" id="basic-addon1">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                            </span>
                        </div>

                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-warning  mt-3">Register</button>  
                        </div>
                        <div class="input-group">
                          <h5 class="text-success">Already have an account</h5> 
                        </div>
                        <div class="input-group mb-3"> 
                          <a style="text-decoration: none;" class="ms-3" href="index.php">Login here</a>
                        </div>
                        <div class="input-group mb-3 d-flex justify-content-center">
                            <a class="btn btn-outline-info" style="text-decoration: none;" href="https://www.sbbusba.edu.pk/files/admission/Prospectus%202023.pdf">Download Prospectus</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    <script src="js/bootstrap.js"></script>
</body>
</html>
