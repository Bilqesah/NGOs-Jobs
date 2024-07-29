<?php
include('db.php');
// $ID = $_GET['id'];

if(isset($_POST['update'])){
    $ID = $_POST['id'];
    $JOB_NAME = $_POST['position'];
    $ORG_NAME = $_POST['org-name'];
    $LOCATION = $_POST['location'];
    $DURATION = $_POST['duration'];
    $POSTED = $_POST['posted_date'];
    $DEADLINE = $_POST['deadline_date'];
    $DESCRIPTION = $_POST['description'];
    $APPLY = $_POST['apply'];


    
    $update="UPDATE post SET job_name='$JOB_NAME',org_name='$ORG_NAME',location='$LOCATION',contract_duration='$DURATION',posted_date='$POSTED',deadline_date='$DEADLINE',description='$DESCRIPTION', apply='$APPLY' WHERE id=$ID ";
    mysqli_query($con,$update);
    
    header('location:ngopage.php');
}

?>