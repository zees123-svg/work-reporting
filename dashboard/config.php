<?php

    $config = mysqli_connect("localhost","root","","work_reporting");
    if($config) {
        echo "";
    }
    else {
        echo "<script>alert('DB not connected :)');</script>";
    }

?>