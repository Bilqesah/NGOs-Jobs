<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>NGOs-Admin</title>
</head>
<body>
    <div class="container">
        
        <div class="add-user">

                <div class="form">
                    <form action="insert.php" method="post" enctype="multipart/form-data">
                        <label for="">User Fullname</label>
                        <input type="text" class="form-control" name="fullname"><br>
                        <label for="">User Name</label>
                        <input type="text" class="form-control" name="username"><br>
                        <label for="">Pass Word</label>
                        <input type="password" class="form-control password" name="password"><br>
                        <label for="">Status</label>
                        <select name="status" id="" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Not Active</option>

                        </select>
                        <!-- <input type="checkbox" name="" id=""> -->
                        <!-- <label for="">Remeber me</label><br> -->
                        <button name="add_user" type="submit" class="btn btn-outline-secondary">Add</button>

                        <!-- <a href="add_user.php" name="add_user" class="btn btn-outline-secondary">Add</a> -->
                    </form>
                </div>
        </div>
        

    </div>
</body>
</html>