<?php
    $con=mysqli_connect("localhost","root","","library_db");
    if(!$con){
        die( "Could not connect to the database: ".mysqli_error( $con));
    }
    // else{
    //     echo  "Connected to the database successfully";
    // }
    // mysqli_close($con);
?>