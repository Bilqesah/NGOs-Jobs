<?php
include ('db.php');
if(isset($_POST['login'])){
    $USER_NAME = $_POST['user_name'];
    $PASSWORD = $_POST['pass_word'];
    // echo $USER_NAME;
    // echo $PASSWORD;
}
$result=mysqli_query($con,"select * FROM users");

while($data = mysqli_fetch_array($result)){
    if($USER_NAME == $data['username']){
        header('location:ngopage.php');

    }
}


?>