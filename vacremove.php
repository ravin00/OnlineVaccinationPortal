<?php
include 'connect.php';
if(isset($_GET['vacremoveid'])){
    $app_num1=$_GET['vacremoveid'];

    $sql="delete from `vactype` where app_num1=$app_num1";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:vacappointmentDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}

?>