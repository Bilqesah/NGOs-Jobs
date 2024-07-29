<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>ngojobs</title>
<!-- <style>
  footer{
    height: 30px;
    background-color: green;
}
</style> -->
</head>
<body>
    <!-- menu bar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">NGOs</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDarkDropdown" aria-controls="navbarNavDarkDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDarkDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              MENU
            </a>
            <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarDarkDropdownMenuLink">
              <li><a class="dropdown-item" href="ngopage.php">Home</a></li>
              <li><a class="dropdown-item" href="#">Jobs</a></li>
              <li><a class="dropdown-item" href="#">Training</a></li>
              <li><a class="dropdown-item" href="login.php">NGO LOGIN</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
<div class="container">
    
  <div class="jobs">
      <h2>Jobs By Governorates</h2>
      <div class="content mb-3">
          <div class="row">
              
          </div>
      </div>
  </div>
  
  <!-- Search Job -->
  <div class="serach">
      <a href="" class="">Search job</a>
  </div>
  <!-- newest jobs -->
  <div class="new-job">
      <h3>Newest JOBS</h3>
      
      <!-- ---------posts--------- -->
  <?php
  include ('db.php');
  $result = mysqli_query($con,"SELECT * FROM post");
  
  while($row = mysqli_fetch_array($result)){
      echo "
      <div class='job'>
            <a href='post.php? id=$row[id]'>$row[job_name]</a>
            <hr>
            <img src='images/ngo.jpg' alt=''>
            <p>$row[org_name]</p>
            <hr>
            <p>$row[location]</p>
     </div>
      ";}
  ?>
  </div>
</div>
<footer class="bg-secondary p-2  text-center text-white text-uppercase ">Bilqes2023</footer>

    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>