<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>ngojobs/post</title>
    <style>
    .post .job_name{
         color: white;
        padding: 10px;
        margin-bottom: 10px;
        text-transform: capitalize;

}
.siz{
    width:200px;
    border: 1px solid green;
    border-radius: 7px;
    margin-bottom: 10px;


}
span,p{
    color: #333;
/* box-shadow: 0px 0px 5px  #333; */
border: 1px solid #777;

display: block;
margin: 10px 0;
padding: 5px;
border-radius: 5px;

}

    </style>
</head>
<body>
    <div class="container">
    <?php
include ('db.php');
$ID = $_GET['id'];
// echo $ID;
$result=mysqli_query($con,"select * FROM post WHERE id=$ID");
while($data = mysqli_fetch_array($result)){
    echo "

            <div class='post'>
                <h4>Job Information</h4>
                <hr>
                
                <h3 id='job_name' class='job_name bg-secondary white'>$data[job_name]</h3>
                <h4>NGO Information</h4>
                <hr>
                <img src='images/iom.png' class='card-img-top siz' >
                <h5>NGO Name</h5>
                <span>$data[org_name]</span>
                <h4>Job Information</h4>
                <hr>
                <h5>Contract Duration</h5>
                <span>$data[contract_duration]</span>
                <h5>Governorate</h5>
                <span>$data[location]</span>
                <h5>Posted Date</h5>
                <span>$data[posted_date]</span>
                <h5>Deadline Date</h5>
                <span>$data[deadline_date]</span>
                <h5>Description</h5>
                <p>$data[description]</p>

                <h5>How To Apply</h5>
                <p>$data[apply]</p>
                <a href='delete.php? id=$data[id]' class='btn btn-outline-danger'>Delete</a>
                <a href='update.php? id=$data[id]' class='btn btn-outline-success'>Edit</a>

                
                
            </div>
        

    
   
    ";
}
?>
    </div>

    <script src="main1.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>
