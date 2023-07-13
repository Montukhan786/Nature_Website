<!DOCTYPE html>
<html lang="en">
<head>
<head>
    <title>Update Page</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/update.css">

    <!-- font awesome link -->
    <script src="https://kit.fontawesome.com/7a91e5546b.js" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="css/navbar.css"> -->


</head>
</head>
<body>

    <?php
        include 'dbconn.php';

        $id = $_GET['id'];

        $selectQuery = " select * from userinfodata where id=$id";
        // echo $selectQuery;
        $query = mysqli_query($con,$selectQuery);

        $result = mysqli_fetch_assoc($query);

        if(isset($_POST['submit'])){
            $id = $_GET['id'];
            $user = $_POST['user'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $comments = $_POST['comments'];

            $updatequery = " update userinfodata set id=$id, user='$user',mobile='$mobile', email='$email', comment='$comments' where id=$id";
            // echo $updatequery;
            $query = mysqli_query($con,$updatequery);

            ?>

            <script>
                // alert("Data Updated.");
                // location.replace('paginateindex.php');
            </script>
            <!-- for redirecting paginateindex.php page -->
            <!-- <meta http-equiv="refresh" content="0; url = http://localhost/website/paginateindex.php" /> -->
            <!-- in above line content="0 specify the delay time is seconds -->
        
            <?php
        }


    ?>

    <section class="my-5">
        <div class="py-5">
            <h1 class="text-center">Feedback Form</h1>
        </div>

        <div class="w-50 m-auto">
            <form action="" method="post" id="frm">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" value="<?php echo $result['user'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>E-mail Id</label>
                    <input type="text" name="email" value="<?php echo $result['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Mobile</label>
                    <input type="number" name="mobile" value="<?php echo $result['mobile'] ?>" class="form-control">
                </div>

                <div class="form-group">
                    <label>Comments</label>
                    <textarea class="form-control" name="comments"><?php echo $result['comment'] ?></textarea>
                </div>

                <input type="submit" class="btn btn-success" name="submit" value="Update"></button>

                <button onclick="showUpdateMsg()">Test</button>
            </form>
        </div>

        <div id="toastBox">

        </div>

    </section>

    


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