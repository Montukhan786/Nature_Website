
<?php
    // include("paginateindex.php");
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

    $result = $con->query("select * from userinfodata LIMIT $start,$number_per_page");

    //live search functionality
    if(isset($_POST['input'])){

        $input = $_POST['input'];

        $query = "select * from userinfodata where user like '{$input}%' OR email like '{$input}%' OR mobile like '{$input}%' OR comment like '{$input}%'";

        $result = mysqli_query($con,$query);
        if(mysqli_num_rows($result) > 0){
            ?>
                
                <table>
                    <thead>
                        <tr>
                            <th>Idd</th>
                            <th>Userr</th>
                            <th>Emaill</th>
                            <th>Mobile Numberr</th>
                            <th>Commentt</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            while($row = mysqli_fetch_assoc($result)){
                        ?>
                                <tr>
                                    <td><?php echo $row["id"] ?> </td>

                                    <td><?php echo $row["user"] ?></td>

                                    <td><?php echo $row["email"] ?></td>

                                    <td><?php echo $row["mobile"] ?></td>

                                    <td><?php echo $row["comment"] ?></td>
                                </tr>
                                <?php
                            }

                        ?>

                    </tbody>

                </table>

            <?php
        }
        else{
            ?>
                <h3>Sorry...No record Found</h3>
            <?php
        }

    }
    else{
        ?>
        <script>
            $('.content').css("display","intitial");
        </script>

        <?php
        
    }
    


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pagination.css">
    <title>Pagination</title>
</head>

<?php
if (isset($_GET['page-nr'])) {
    $id = $_GET['page-nr'];
} else {
    $id = 1;
}
?>


<!-- <body id="<
?php echo $id ?>"> -->
<body id="<?php echo $id ?>">


    <div class="main-content">

        <form action="POST">
            <input type="search" name="" id="live-search" class="search" placeholder="Search here" />
            <input type="button" value="Search" class="btn-search" />
            <a href="home.php">Back to home...</a>
        </form>

        <!-- Dispaly the rows -->
        <div class="content">
            <table>
                <tr>
                    <th>Id</th>
                    <th>Usersasassas</th>
                    <th>Email</th>
                    <th>Mobile Number</th>
                    <th>Comment</th>
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
                    </tr>

                <?php
                }
                ?>
            </table>
        </div> 

        <div class="page-select-div">
            <form method="GET">
                <label for="select-page" style="margin-top:5px;">No of record per Page</label>
                <select name="select-page" id="select-page" selected="$_GET['select-page']">
                    <option disabled>Choose an option</option>
                    <!-- <option disabled>Choose an option</option> -->
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                </select>

                <input type="submit" value="Submit" name="submit" />
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
            <a href="?page-nr=1">First</a>

            <!-- previous page -->
            <?php
            if (isset($_GET['page-nr']) && $_GET['page-nr'] > 1) {
            ?>
                <a href="?page-nr= <?php echo $_GET['page-nr'] - 1 ?>">Previous</a>
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
                <a href="?page-nr=2">Next</a>
                <?php
            } else {
                if ($_GET['page-nr'] >= $pages) {
                ?>
                    <a>Next</a>
                <?php
                } else {
                ?>
                    <a href="?page-nr=<?php echo $_GET['page-nr'] + 1 ?>">Next</a>
            <?php
                }
            }
            ?>


            <!-- last page -->
            <a href="?page-nr=<?php echo $pages ?>">Last</a>


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
                        // url: "livesearchpagination.php",
                        method: "POST",
                        data: {
                            input: input
                        },
                        success: function(data) {
                            // document.getElementsByClassName('content') = '';
                            $(".content").html(data);
                            $(".content").css("display","block");

                            // $(".content").css("width","100%");
                        }
                    });
                }
                else{
                    $(".content").css("display","none");
                }
            });
        });

        let links = document.querySelectorAll('.page-numbers > a');
        let bodyId = parseInt(document.body.id) - 1;
        links[bodyId].classList.add("active");
    </script>
</body>

</html>