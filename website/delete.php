<?php
    include 'dbconn.php';
    // include 'paginateindex.php';

    $id = $_GET['ids'];

    $deletequery = "delete from userinfodata where id=$id";

    $query = mysqli_query($con,$deletequery);

    if($query){
        ?>
            <!-- <script>
                alert("Deleted successfully");
                location.replace('paginateindex.php');
            </script> -->
            <meta http-equiv="refresh" content="0; url = http://localhost/website/paginateindex.php" />
        <?php
        // header('location:paginateindex.php');
    }
    else{
        ?>
            <script>
                alert("Not Deleted");
            </script>
        <?php
    }

?>