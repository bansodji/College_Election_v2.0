<?php

    $con = mysqli_connect("localhost", "root", "", "college election v2.0");
    if($con){
        ?>
            <script>alert("database connected")</script>
        <?php
    }else{
        ?>
            <script>alert("database not connected")</script>
        <?php
    }

?>