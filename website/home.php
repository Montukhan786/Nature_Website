<?php

session_start();

if (!isset($_SESSION['username'])) {
    echo "You are logged out!";
    header("location:login.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Nature Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <!-- <link rel="stylesheet" href="css/navbar.css"> -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>


</head>

<body>

    <!-- navbar -->

    <header>
        <div class="logo">
            <img src="images/cinovic.svg" alt="">
            <!-- <a href="" class="header-logo">Bright</a> -->
        </div>

        <nav class="nav" id="nav-menu">
            <ion-icon name="close-outline" class="header-close" id="close-menu"></ion-icon>

            <ul class="nav-list">
                <li class="nav-item"><a href="" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="" class="nav-link">About</a></li>
                <li class="nav-item"><a href="" class="nav-link">Skills</a></li>
                <li class="nav-item"><a href="paginateindex.php" class="nav-link">Records</a></li>
                <li class="nav-item"><a href="" class="nav-link">Contact</a></li>
                <li class="nav-item log-out"><a href="logout.php" class="nav-link live-animate-btn">Logout</a></li>
            </ul>
        </nav>
        <ion-icon name="menu-outline" class="header-toggle" id="toggle-menu"></ion-icon>
    </header>



    <!-- carousal part start -->

    <div class="main">
        <div class="content">
            <div class="images">
                <img src="images/img-1.jpg" alt="img1" class="fadei">
                <img src="images/img-2.jpg" alt="img2" class="fade2">
                <img src="images/img-3.jpg" alt="img3" class="fade2">
                <img src="images/img-4.jpg" alt="img4" class="fade2">
            </div>

            <div onclick="side_slide(-1)" class="slide left">
                <span class="fas fa-angle-left">
                    < </span>
            </div>

            <div onclick="side_slide(1)" class="slide right">
                <span class="fas fa-angle-right"> > </span>
            </div>

            <div class="btm-sliders">
                <span onclick="btm_slide(1)"></span>
                <span onclick="btm_slide(2)"></span>
                <span onclick="btm_slide(3)"></span>
                <span onclick="btm_slide(4)"></span>
            </div>
        </div>
    </div>

    <!-- <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
            <li data-target="#demo" data-slide-to="3"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img-1.jpg" alt="Los Angeles" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Los Angeles</h3>
                    <p>We had such a great time in LA!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-2.jpg" alt="Chicago" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Chicago</h3>
                    <p>Thank you, Chicago!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-3.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>New York</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/img-4.jpg" alt="New York" width="1100" height="500">
                <div class="carousel-caption">
                    <h3>Barmingham</h3>
                    <p>We love the Big Apple!</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div> -->

    <!-- About us section start -->
    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">About Us</h1>
        </div>

        <div class="container-fluid about">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-12 about-left">
                    <img src="images/farmer.jpg" alt="Farmer" class="img-fluid about-img" />
                </div>

                <div class="col-lg-6 col-md-12 col-12 about-right">
                    <h2 class="display-4">I am a Nature Lover</h2>
                    <p class="py-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. At, quos?Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iusto consequuntur excepturi perferendis amet, labore reprehenderit ad dolorem hic molestiae Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, numquam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta voluptate, sint cumque voluptatibus iure maiores esse enim dolores, aliquam, adipisci tempore. Blanditiis ad harum, temporibus voluptatem voluptas quae assumenda culpa! Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis sequi quod facere. Saepe, veritatis eum! Natus fuga quia placeat quo eaque, porro at sequi sapiente repellendus, assumenda adipisci modi blanditiis provident veritatis odit illo</p>
                    <a href="about.php" class="btn btn-success">Know more</a>
                </div>

            </div>
        </div>

    </section>

    <!-- Service section start -->

    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Services</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/service-1.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-success">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/service-2.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-success">See Profile</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <div class="card">
                        <img class="card-img-top" src="images/service-3.jpg" alt="Card image">
                        <div class="card-body">
                            <h4 class="card-title">Beautiful nature</h4>
                            <p class="card-text">Some example text.</p>
                            <a href="#" class="btn btn-success">See Profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- card scroll effect -->
    <section class="card-scroll">
        <div class="container reveal">
            <h2>Your Title</h2>
            <div class="cards">

                <div class="text-card">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis eveniet eos cumque, nihil consectetur veniam placeat odio. Modi, facere consequuntur repudiandae asperiores saepe molestiae corporis odit rem pariatur! Perspiciatis, tenetur.</p>
                </div>

                <div class="text-card">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis eveniet eos cumque, nihil consectetur veniam placeat odio. Modi, facere consequuntur repudiandae asperiores saepe molestiae corporis odit rem pariatur! Perspiciatis, tenetur.</p>
                </div>

                <div class="text-card">
                    <h3>Title</h3>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officiis eveniet eos cumque, nihil consectetur veniam placeat odio. Modi, facere consequuntur repudiandae asperiores saepe molestiae corporis odit rem pariatur! Perspiciatis, tenetur.</p>
                </div>

            </div>
        </div>
    </section>

    

    <!-- Gallary section start -->
    <div class="full-img" id="fullImgBox">
        <img src="images/gallary.jpg" alt="" id="fullImg">
        <span onclick="closeFullImg()">X</span>
    </div>

    <div class="img-gallary">
        <img src="images/img-1.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/img-2.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/img-3.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/img-4.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/img-5.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/service-1.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/service-2.jpg" alt="" onclick="openFullImg(this.src)">
        <img src="images/service-3.jpg" alt="" onclick="openFullImg(this.src)">
    </div>

    <!-- <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Gallary</h1>
        </div>

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

                <div class="col-lg-4 col-md-4 col-12">
                    <img src="images/gallary.jpg" alt="" class="container-fluid pb-5">
                </div>

            </div>
        </div>
    </section> -->


    <!-- Feedback form start -->
    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Feedback Form</h1>
        </div>

        <div class="w-50 m-auto">
            <form action="database_connection/userinfo.php" method="post" id="frm">
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

    </section>

    <!-- Footer section start -->

    <footer>
        <p class="p-3 bg-dark text-light text-center">@Nature World Production</p>
    </footer>


    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.18.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    <script src="javascript/validation.js"></script>
</body>

</html>