<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>ngojobs</title>

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
              <li><a class="dropdown-item" href="#">Home</a></li>
              <li><a class="dropdown-item" href="#">Jobs</a></li>
              <li><a class="dropdown-item" href="#">Training</a></li>
              <li><a class="dropdown-item" href="login.html">NGO LOGIN</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav -->
<div class="container">
    
<table class="table">
         
         <thead>
           <tr>
             <th scope="col">#</th>
             <th scope="col">Position</th>
             <th scope="col">Location</th>
             <th scope="col">Edit</th>
             <th scope="col">Del</th>
 
           </tr>
         </thead>
  <!-- ---------posts--------- -->
  <?php
  include ('db.php');
  $result = mysqli_query($con,"SELECT * FROM post");
  $count=1;
  while($row = mysqli_fetch_array($result)){
      echo "
      <tbody id='tBody'>
          <td class='id'>$count</td>
          <td><a href='post.php? id=$row[id]'>$row[job_name]</a></td>
          <td class='location'>$row[location]</td>
    
          <td><a href='edit.php? id=$row[id]' class='btn btn-secondary'><i class='fa-solid fa-pen-to-square'></i></td>
          <td><a href='delete.php? id=$row[id]' class='btn btn-danger'>X</a></td>



       </tbody>
      ";
      $count++;
    }


  ?>
       <tbody id="tBody">
               
               </tbody>
           </table>
  <!-- ---------posts--------- -->

  
</div>

    <!-- <script src="main3"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>