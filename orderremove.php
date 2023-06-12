<?php
include 'connect.php';
if(isset($_GET['orderremoveid'])){
    $app_num3=$_GET['orderremoveid'];

    $sql="delete from `ordervac` where app_num3=$app_num3";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:orderDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>