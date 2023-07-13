<?php

$server = "localhost";
$user = "root";
$password = "Montukhan@2000";
$db = "natureworld";

$con = mysqli_connect($server,$user,$password,$db);

if($con){
    ?>
    <script>
        //alert("Connection Seccussfull-dbcon");
    </script>
    <?php
}
else{
    ?>
    <script>
        //alert("No Connection!!!-dbcon");
    </script>
    <?php
}


?>