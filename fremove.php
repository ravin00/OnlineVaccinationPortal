<?php
include 'connect.php';
if(isset($_GET['removeid'])){
    $pre_app_num=$_GET['removeid'];

    $sql="delete from `foreignregi` where pre_app_num=$pre_app_num";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:fappointmentDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>