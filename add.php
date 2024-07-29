<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
    
        <link rel="stylesheet" href="css/all.min.css" />
        <link rel="stylesheet" href="css/bootstrap.min.css" />
        <link rel="stylesheet" href="css/styled.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <title>Webshop</title>
  
    </head>
    <style>
      .lik{
        color:#333;
        font-weight: bold;
      }
      .nav-link:hover{
    color: #4caf50;
}
    </style>
<body>

    <div class="container">

        <!-- nav1 -->
    <nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand">Webshop</a>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="row content">
    <div class="col-sm-6 col-md-3 col-lg-3">
        <!-- nav2 -->
    <nav class="nav flex-column">
    <a class="nav-link active" aria-current="page" href="./dashboard.php">Dashboard</a>
    <a class="nav-link lik" href="./products.php"><i class="fa-solid fa-bag-shopping"></i> Products</a>
    <a class="nav-link" href="./add.php"><i class="fa-solid fa-plus"></i> Add Product</a>
    <a class="nav-link" href="#"><i class="fa-solid fa-gear"></i> Settings</a>

    </nav>
    </div>
    <div class="col-sm-6 col-md-9 col-lg-9">
    <div class="card-add">
              <!-- <h3>Add product</h3> -->
        <form action="./insert.php" method="post" enctype="multipart/form-data">
            <label for="name">Product's Name</label>

            <input type="text" name="name">
            <label for="price">Price</label>

            <input type="text" name="price">
            <label for="file">Select prodect image</label>
            <input type="file" id="file" name="image">
            <hr>
            <button name="upload" type="submit" class="add">Add</button>
            <!-- <a href="../products.php">View all products</a> -->
        </form>
    </div>
    </div>
</div>
        
    
</div>
    
</body>
</html>