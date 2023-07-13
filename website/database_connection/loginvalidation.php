<?php

    include '../dbconn.php';

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $pass = $_POST['passw'];

        $usersearch = " select * from registration where username = '$username' ";

        $query = mysqli_query($con,$usersearch);

        $usercount = mysqli_num_rows($query);

        if($usercount){

            $user_pass = mysqli_fetch_assoc($query);

            $db_pass =  $user_pass['password'];

            // $_SESSION['username'] = $user_pass['username'];

            $pass_decode = password_verify($pass,$db_pass);

            if($pass_decode){
                ?>
                <script>
                    alert("Welcome to my website");
                </script>

                <?php
                session_start();
                $_SESSION['username'] = $user_pass['username'];
                echo "Login successfull!!!";

                //redirect to home page after succussfully login

                header('location:../home.php');
            }else{
                //echo "Invalid password";
                //$invalidpassword = "Invalid Password!";
                ?>
                <script>
                    alert("Invalid password./");
                    location.replace("../login.php");
                </script>

                <?php

                // header('location:../login.php');
            }

        }

        else{
            // echo "invalid username";
            // $invalidusername = "Invalid Username!";
            ?>
                <script>
                    alert("Invalid UserName.");
                    location.replace("../login.php");
                </script>

            <?php
            // header('location:../login.php');
            
        }
    }

    // $con = mysqli_connect('localhost','root','Montukhan@2000');

    // if($con){
    //     echo "Connection Successful";
    //     echo "<br>";
    // }
    // else{
    //     echo "Connection Failed!???";
    //     echo "<br>";
    // }

    // mysqli_select_db($con,'natureworld');

    // $username = $_POST['username'];
    // $passw = $_POST['passw'];

    // $checkquery = " select * from registration where username = '$username' && password = '$passw' ";

    // $result = mysqli_query($con,$checkquery);

    // $len = mysqli_num_rows($result);

    // if($len){
    //     echo "User not exist!";
    // }
    // else{
    //     header("location:home.php");
        
    // }



?>