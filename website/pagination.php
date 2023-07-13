<?php
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

    $number_per_page = 4;

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
    //live search functionality
    ?>
        <script>
            // let searchval = document.getElementById("live-search").value;
            // console.log(document.getElementById("live-search").value);
            
        </script>
    <?php
    
    // if(isset($postdata)){
    if(!empty($postdata)){
        $result = "select * from userinfodata where user like '{$postdata}%' OR email like '{$postdata}%' OR mobile like '{$postdata}%' OR comment like '{$postdata}%'";
        
        $livesearchquery = mysqli_query($con,$result);
    
        
        if(mysqli_num_rows($livesearchquery) >= 1){
            // experiment
            $nr_of_rows = mysqli_num_rows($livesearchquery);

            
            //end
            ?>
                <script>
                    $('.content').css("display","none");
                    $('.dummy-table').css("display","initial");
                    $('#notfound').css("display","none");
                    console.log("<?php echo strlen($postdata); ?>");
                </script>
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
                while ($row = mysqli_fetch_assoc($livesearchquery)) {
                ?>
                    <tr>
                        <td><?php echo $row["id"]; ?> </td>

                        <td><?php echo $row["user"]; ?></td>

                        <td><?php echo $row["email"]; ?></td>

                        <td><?php echo $row["mobile"]; ?></td>

                        <td><?php echo $row["comment"]; ?></td>

                        <td><a href="update.php?id=<?php echo $row["id"]; ?>" class="operation-btn"> Update </a></td>

                        <td><a href="delete.php?ids=<?php echo $row["id"]; ?>" class="operation-btn" onclick='return checkdelete()'> Delete </a></td>
                    </tr>

                <?php
                }
                ?>
            </table>

            <?php

        }
        else{
            $showNotFound = true;
            ?>
                <script>
                    console.log("0 record found");
                    $("#notfound").css("display","block");
                    $('.content').css("display","none");
                </script>
            <?php
        }
        
    }
    


        

?>