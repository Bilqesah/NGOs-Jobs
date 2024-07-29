<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>ngojobs/edit</title>
    <style>
         input{
            display:block;
        }
    </style>
</head>
<body>
<?php
include ('db.php');
 $ID = $_GET['id'];
 $up=mysqli_query($con,"select * FROM post WHERE id=$ID");
 $data= mysqli_fetch_array($up);
?>
        <div class="container">
        <form action="up.php" method="post" enctype="multipart/form-data">
        <input type="text" name="id" value='<?php echo $data['id']?>' style="display:none">
            <label for="name">Position</label>
            <input type="text" name="position" value='<?php echo $data['job_name']?>'>
           

            <label for="name">Org Name</label>
            <input type="text" name="org-name" value='<?php echo $data['org_name']?>'>

            <label for="name">Location</label>
             <select name="location" id="location" value='<?php echo $data['job_name']?>'>
               

            </select><br><br>

            <label for="name">Contract Duration</label>
            <input type="text" name="duration" value='<?php echo $data['contract_duration']?>'>

            <label for="name">Posted Date</label>
            <input type="date" name="posted_date" value='<?php echo $data['posted_date']?>'>

            <label for="name">Deadline Date</label>
            <input type="date" name="deadline_date" value='<?php echo $data['deadline_date']?>'>

            <label for="name">Description</label><br>
            <textarea name="description" id="" cols="30" rows="10" ><?php echo $data['description']?></textarea>
            <br>
            
            <label for="name">How To Apply</label>
            <input type="text" name="apply" value='<?php echo $data['apply']?>'>
            
            <button name="update" type="submit" class="update">Update</button>
        </form>









<!-- <div class="row content">
    <div class="col-sm-6 col-md-3 col-lg-3">
    <nav class="nav flex-column">
    <a class="nav-link active" aria-current="page" href="./dashboard.php">Dashboard</a>
    <a class="nav-link" href="./products.php"><i class="fa-solid fa-bag-shopping"></i> Products</a>
    <a class="nav-link" href="./index.php"><i class="fa-solid fa-plus"></i> Add Product</a>
    <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i> Settings</a>

    </nav>
    </div>
    <div class="col-sm-6 col-md-9 col-lg-9">
    <div class="card-add">
        <form action="up.php" method="post" enctype="multipart/form-data">
            <label for="name">Product's Name</label>
            <input type="text" name="id" value='<?php echo $data['id']?>' style="display:none">

            <input type="text" name="name" value='<?php echo $data['name']?>'>
            <label for="price">Price</label>

            <input type="text" name="price" value='<?php echo $data['price']?>'>
            <label for="file">Select prodect image</label>
            <input type="file" id="file" name="image" >
            <hr>
            <button name="update" type="submit" class="add">Update</button>
        </form>
    </div>
    </div> -->
</div>
        
    
</div>

<script src="main1.js"></script>

    
</body>
</html>
