<?php
include('db.php');
if(isset($_POST['upload'])){
    $JOB_NAME = $_POST['position'];
    $ORG_NAME = $_POST['org-name'];
    $LOCATION = $_POST['location'];
    $DURATION = $_POST['duration'];
    $POSTED = $_POST['posted_date'];
    $DEADLINE = $_POST['deadline_date'];
    $DESCRIPTION = $_POST['description'];
    $APPLY = $_POST['apply'];


    
    $insert="INSERT INTO post (job_name,org_name,location,contract_duration,posted_date,deadline_date,description,apply) VALUES 
    ('$JOB_NAME','$ORG_NAME','$LOCATION','$DURATION','$POSTED','$DEADLINE','$DESCRIPTION','$APPLY')";
    mysqli_query($con,$insert);
    
    header('location:ngopage.php');
}
//Insert Users
if(isset($_POST['add_user'])){
    $FULL_NAME = $_POST['fullname'];
    $USER_NAME = $_POST['username'];
    $PASSWORD = $_POST['password'];
    $STATUS = $_POST['status'];
    // $POSTED = $_POST['posted_date'];
    // $DEADLINE = $_POST['deadline_date'];
    // $DESCRIPTION = $_POST['description'];
    // $APPLY = $_POST['apply'];


    
    $insert1="INSERT INTO users(fullname, username, password, type, status) VALUES ('$FULL_NAME','$USER_NAME','$PASSWORD',1,'$STATUS')";
    mysqli_query($con,$insert1);
    
    header('location:add_user.php');
}

?>