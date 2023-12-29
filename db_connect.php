<?php
$conn=mysqli_connect("localhost","root","","testing");
if( mysqli_connect_error())
   {
        echo "<script> alert('cannont connect to the database')";
        exit();
    }

?>