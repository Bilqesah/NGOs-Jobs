<?php
include ('db.php');
 $ID = $_GET['id'];
 mysqli_query($con,"DELETE FROM post WHERE id=$ID");
 header('location: posts.php');
?>