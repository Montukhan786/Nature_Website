<?php
 include("database_connection/loginvalidation.php");
 
    session_start();

    if(isset($_SESSION['username'])){
        // echo "You are logged out!";
        header("location:home.php");
    }
   

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Login form</title>
  </head>
  <body>


    <section>

        <div class="container mt-5 pt-5 w-50">
            <div class="row">
                <div class="col-12 col-sm-8 col-md-6 m-auto">
                    <div class="card shadow border-0">
                        <div class="card-body">
                            <h1 class="text-center">Login Form</h1>
                            <div class="text-center">
                                <svg class="mx-auto my-3" xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                                </svg>    
                            </div>
                              
                            <form action="database_connection/loginvalidation.php" method="post">
                                <input type="text" name="username" id="" class="rounded-9 form-control my-4 py-2" placeholder="UserName" required>
                                
                                <input type="password" name="passw" id="" class="form-control my-4 py-2" placeholder="Password">
                                
                                <div class="text-center mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary w-100">Login</button>
                                    <a href="register.php" class="nav-link">Sign-Up</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    
  </body>
</html>