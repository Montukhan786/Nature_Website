<?php
    include('paginateindex.php');
    echo $record_per_page;
if(isset($postdata)){
        $result = "select * from userinfodata where user like '{$postdata}%' OR email like '{$postdata}%' OR mobile like '{$postdata}%' OR comment like '{$postdata}%'";
        
    }else{
        ?>
        <script>
            $('.content').css("display","intitial");
        </script>

        <?php
        
    }
   
    $result = mysqli_query($con,$result);
    if(isset($postdata)){
        $result = "select * from userinfodata where user like '{$postdata}%' OR email like '{$postdata}%' OR mobile like '{$postdata}%' OR comment like '{$postdata}%'";
        
    }else{
        ?>
        <script>
            $('.content').css("display","intitial");
        </script>

        <?php
        
    }
   
    $result = mysqli_query($con,$result);


    //paginateindex.php(error mesaaege error code)

    if ($showNotFound){
        ?>
        <script>
            $('#notfound').css("display", "block");
            $('.content').css("display", "none");
            console.log("show not found");
            
        </script>
        <?php
    }
    else{
        ?>
            <script>
                $('#notfound').css("display", "none");
                console.log("Empty searchbox");
            </script>
        <?php
    }

?>
