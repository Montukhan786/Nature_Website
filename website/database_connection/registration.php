<?php

//session_start();

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

include '../dbconn.php';

//echo "$server" . "<br>";
//echo "this is a server in registration";
if (isset($_POST['submit'])) {
    $firstname = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $userName = $_POST['userName'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $pass = $_POST['password'];
    $conpass = $_POST['confirmpass'];
    $address = $_POST['address'];
    $city = $_POST['city'];
    $mobile = $_POST['mobile'];
    $zipcode = $_POST['zipcode'];

    $encrpass = password_hash($pass, PASSWORD_BCRYPT);
    $confirmencrpass = password_hash($conpass, PASSWORD_BCRYPT);
    //echo "assign value in regisrtation";
    //echo "<br>";

    $usernamecheckquery = " select * from registration where username = '$userName' ";

    $query = mysqli_query($con,$usernamecheckquery);

    $emailcount = mysqli_num_rows($query);
    echo "$emailcount";

    if ($emailcount > 0) {
        ?>
            <script>
                alert("Username is already Exists...");
            </script>
        <?php

    } else {
        if ($pass === $conpass) {
            $query = " insert into registration(firstname, lastname, username, email, age, password, confirm_password, address, city, mobile, zipcode)
                values ('$firstname','$lastName','$userName','$email','$age','$encrpass','$confirmencrpass','$address','$city','$mobile','$zipcode') ";

            //echo "$query";
            // echo "<br>";

            $iquery = mysqli_query($con, $query);

            if ($iquery) {
                header("location:../login.php");
        ?>
                <script>
                    alert("Connection Seccussfull(Registration)");
                </script>
            <?php
            } else {
            ?>
                <script>
                    alert("No Connection!!!(Registration)");
                </script>
            <?php
            }

        } else {
            echo "Password and Confirm Password not match !";
            echo "<br>";
        }
    }
}





// if($len != 0){
//     echo "User already exist!";
// }
// else{

//     if($pass == $conpass){
//         $query = " insert into registration(firstname, lastname, username, email, age, password, confirm_password, address, city, mobile, zipcode)
//         values ('$firstname','$lastName','$userName','$email','$age','$pass','$conpass','$address','$city','$mobile','$zipcode') ";

//         echo "$query";

//         mysqli_query($con,$query);
//     }
//     else{
//         echo "Password and Confirm Password not match !";
//     }

// }

// header("location:../login.php");
?>