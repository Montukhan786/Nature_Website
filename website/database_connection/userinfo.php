<?php

    $con = mysqli_connect('localhost','root','Montukhan@2000');

    if($con){
        echo "Connection successfull!";
        echo "<br>";
    }
    else{
        echo "Connection Failed!";
        echo "<br>";
    }

    mysqli_select_db($con,'natureworld');

    $user = $_POST['user'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $comments = $_POST['comments'];

    $query = " insert into userinfodata (user, email, mobile, comment)
    values ('$user','$email','$mobile','$comments') ";

    echo "$query";

    mysqli_query($con,$query);


?>

