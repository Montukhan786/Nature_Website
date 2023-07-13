<?php

    session_start();

    if (!isset($_SESSION['username'])) {
        echo "You are logged out!";
        header("location:login.php");
    }

    // include("pagination.php");
    $con = new mysqli('localhost','root','Montukhan@2000','natureworld');

    if($con->connect_error != 0){
        echo $con->connect_error;
        exit();
    }
    // echo"<pre>"; print_r($_POST);die;
    //set the start point

    $start = 0;

    //setting number of rows

    // $number_per_page = 4;
    //option

    if (isset($_GET['select-page'])) {
        // echo"<pre>";print_r($_GET);die;
        $record_per_page = $_GET['select-page'];
        //echo $record_per_page;
    }
     else {
        $record_per_page = 3;
        //echo $record_per_page;
    }

    $number_per_page = $record_per_page;

    $records = $con->query("select * from userinfodata");

    $nr_of_rows = $records->num_rows;

    //actual calculation number of pages
    $pages = ceil($nr_of_rows / $number_per_page);


    //if user click on pagination button we set a new starting point

    if(isset($_GET['page-nr'])){
        $page = $_GET['page-nr']-1;
        $start = $page * $number_per_page;
        
    }


    $postdata = $_POST['input'];

    $result = "select * from userinfodata LIMIT $start,$number_per_page";
    if(isset($postdata)){
        $result = "select * from userinfodata where id like '{$postdata}%' OR user like '{$postdata}%' OR email like '{$postdata}%' OR mobile like '{$postdata}%' OR comment like '{$postdata}%'";
                
    }else{
     
        
    }
   
    $result = mysqli_query($con,$result);
    // print_r($lastresult);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css" integrity="sha512-SgaqKKxJDQ/tAUAAXzvxZz33rmn7leYDYfBP+YoMRSENhf3zJyx3SBASt/OfeQwBHA1nxMis7mM3EV/oYT6Fdw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/pagination.css">
    <title>Live Pagination</title>
</head>

<?php
if (isset($_GET['page-nr'])) {
    $id = $_GET['page-nr'];
} else {
    $id = 1;
}
?>


<body id="<?php echo $id ?>">


    <div class="main-content">

        <h3 class="delete-success-text">Deleted Successfully!</h3>

        <form action="POST">
            <input type="search" name="" id="live-search" class="search" placeholder="Search here" />
            <input type="button" value="Search" class="btn-search" />
            <a href="home.php">Back to home...</a>
        </form>

        <h3 id="notfound">Record Not Found!!!</h3>

        <!-- Dispaly the rows -->
        <div class="content">
            <table>
                <tr>
                    <th>Id</th>
                    <th>User</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Comment</th>
                    <th colspan="2">Operations</th>
                </tr>

                <?php
                while ($row = $result->fetch_assoc()) {
                ?>
                    <tr>
                        <td><?php echo $row["id"] ?> </td>

                        <td><?php echo $row["user"] ?></td>

                        <td><?php echo $row["email"] ?></td>

                        <td><?php echo $row["mobile"] ?></td>

                        <td><?php echo $row["comment"] ?></td>

                        <td><a href="update.php?id=<?php echo $row["id"]; ?>" class="operation-btn"> Update </a></td>

                        <td><a href="delete.php?ids=<?php echo $row["id"]; ?>" class="operation-btn" onclick='return checkdelete()'> Delete </a></td>
                    </tr>

                <?php
                }
                ?>
            </table>
        </div> 

        <div class="dummy-table">

        </div>

        <div class="page-select-div">
            <form method="GET">
                <label for="select-page" style="margin-top:5px;">No of record per Page</label>
                <select name="select-page" id="select-page" selected="$_GET['select-page']">
                    <option><?php echo $_GET['select-page']; ?></option>
                    <!-- <option disabled>Choose an option</option> -->
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

                <input type="submit" value="Submit" name="submit" class="btn-search"/>
            </form>
        </div>


        <!-- page information -->
        <div class="page-info">
            <?php
            if (!isset($_GET['page-nr'])) {
                $page = 1;
            } else {
                $page = $_GET['page-nr'];
            }
            ?>
            showing <?php echo $page ?> of <?php echo $pages ?> Pages
        </div>

        <!-- pagination button -->
        <div class="pagination">

            <!-- first page -->
            <a href="?page-nr=1&select-page=<?php echo $number_per_page ?>">First</a>

            <!-- previous page -->
            <?php
            if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
            ?>
                <a href="?page-nr= <?php echo $_GET['page-nr']-1 ?>&select-page=<?php echo $number_per_page ?>">Previous</a>
            <?php
            } else {
            ?>
                <a>Previous</a>
            <?php
            }
            ?>

            <!-- page numbers -->
            <div class="page-numbers">
                <?php
                for ($counter = 1; $counter <= $pages; $counter++) {
                ?>
                    <a href="?page-nr=<?php echo $counter ?>&select-page=<?php echo $number_per_page ?>"><?php echo $counter ?></a>
                <?php
                }
                ?>

            </div>

            <!-- next page -->
            <?php
            if (!isset($_GET['page-nr'])) {
            ?>
                <a href="?page-nr=2&select-page=<?php echo $number_per_page ?>">Next</a>
                <?php
            } else {
                if ($_GET['page-nr'] >= $pages) {
                ?>
                    <a>Next</a>
                <?php
                } else {
                ?>
                    <a href="?page-nr=<?php echo $_GET['page-nr']+1; ?>&select-page=<?php echo $number_per_page ?>">Next</a>
            <?php
                }
            }
            ?>


            <!-- last page -->
            <a href="?page-nr=<?php echo $pages ?>&select-page=<?php echo $number_per_page ?>">Last</a>


        </div>


    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#live-search").keyup(function() {
                var input = $(this).val();
                // alert(input);

                if (input != "") {
                    $.ajax({
                        url: "pagination.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            // document.getElementsByClassName('content') = '';
                            $(".dummy-table").html(data);
                            // $(".content").css("display","block");

                            // $(".content").css("width","100%");
                        }
                    });
                }
                else{
                    $(".dummy-table").css("display","none");
                    $(".content").css("display","initial");
                    $("#notfound").css("display","none");
                }
            });
        });

        let links = document.querySelectorAll('.page-numbers > a');
        let bodyId = parseInt(document.body.id) - 1;
        links[bodyId].classList.add("active");

        //check confirm message for delete data
        function checkdelete(){
            return confirm("Are you want to delete this record?");
        }


    </script>
</body>

</html>