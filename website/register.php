<?php

    session_start();

    if(isset($_SESSION['username'])){
        // echo "You are logged out!";
        header("location:home.php");
    }

?>

<!doctype html>
<html lang="en">

<head>

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="css/style.css"> -->

    <link rel="stylesheet" href="css/register.css">
    <!-- <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>     -->

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>





<!-- Feedback form start -->
<!-- <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Feedback Form</h1>
        </div>

        <div class="w-50 m-auto">
            <form action="userinfo.php" method="post" id="frm">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control">
                </div>

                <div class="form-group">
                    <label>E-mail Id</label>
                    <input type="text" name="email" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" name="mobile" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>

    </section> -->

    <div class="container-fluid bg-dark text-light py-3">
        <header class="text-center">
            <h1 class="display-6">Welcome to our page</h1>
        </header>
    </div>

    <section class="container my-5 bg-dark w-50 text-light p-3">
        <form action="database_connection/registration.php" method="post" class="row g-3 p-3 bg-dark d-flex" id="register">

            <div class="col-md-4 my-2">
                <label for="validationDefault01" class="form-label">First name*</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>
            <div class="col-md-4 my-2">
                <label for="validationDefault02" class="form-label">Last name*</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>
            <div class="col-md-4 my-2">
                <label for="validationDefaultUsername" class="form-label">Username*</label>
                <div class="input-group">
                    <span class="input-group-text" id="inputGroupPrepend2">@</span>
                    <input type="text" class="form-control" id="validationDefaultUsername"
                        aria-describedby="userName" name="userName">
                </div>
            </div>

            <div class="col-md-6 my-2">
                <label for="inputEmail4" class="form-label">Email*</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="col-md-6 my-2">
                <label for="inputAge4" class="form-label">Age</label>
                <input type="number" class="form-control" id="age" name="age">
            </div>
            <div class="col-md-6 my-2">
                <label for="inputpass4" class="form-label">Password*</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="col-md-6 my-2">
                <label for="inputconfirmpass" class="form-label">Confirm Password*</label>
                <input type="password" class="form-control" id="confirmpass" name="confirmpass">
            </div>
            <div class="col-12 my-2">
                <label for="inputAddress" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address"
                    placeholder="Apartment, studio, or floor">
            </div>
            <div class="col-md-6 my-2">
                <label for="inputCity" class="form-label">City*</label>
                <input type="text" class="form-control" name="city" id="city">
            </div>
            <div class="col-md-4 my-2">
                <label for="inputmobile" class="form-label">Mobile*</label>
                <input type="number" class="form-control" name="mobile" id="mobile">
            </div>
            <div class="col-md-2 my-2">
                <label for="inputZip" class="form-label">ZipCode*</label>
                <input type="text" class="form-control" name="zipcode" id="zipcode">
            </div>
            <div class="col-12 my-2">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Check me out
                    </label>
                </div>
            </div>
            <div class="col-12 d-flex flex-column gap-3 justify-content-around my-2">
                <button type="submit" name="submit" class="btn btn-primary">Sign Up</button>
                
                <a href="login.php" class="nav-link text-center">Already have an account? Login</a>
            </div>
        </form>
    </section>
    
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.min.js"></script>
       
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="javascript/script.js"></script>

    
</body>

</html>


