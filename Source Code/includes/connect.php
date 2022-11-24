<?php 

    $conn = new mysqli('localhost','root','','dbivetclinic');

    if (!$conn) {
        die(mysqli_error($conn));
    }   
    
?>