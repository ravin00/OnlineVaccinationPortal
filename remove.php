<?php
include 'connect.php';
if(isset($_GET['removeid'])){
    $app_num=$_GET['removeid'];

    $sql="delete from `appdetails` where app_num=$app_num";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:appointmentDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>