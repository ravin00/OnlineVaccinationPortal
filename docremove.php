<?php
include 'connect.php';
if(isset($_GET['docremoveid'])){
    $doc_app=$_GET['docremoveid'];

    $sql="delete from `docdetails` where doc_app=$doc_app";
    $result=mysqli_query($con,$sql);
    if($result){
        // echo "Deleted successfully";
        header('location:docappointmentDisplay.php');
    }
    else{
        die(mysqli_error($con));
    }
}



?>