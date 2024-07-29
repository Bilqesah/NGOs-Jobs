<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        input{
            display:block;
        }
    </style>
</head>
<body>
<div class="card-add">
        <form action="insert.php" method="post" enctype="multipart/form-data">
            <label for="name">Position</label>
            <input type="text" name="position">
           

            <label for="name">Org Name</label>
            <input type="text" name="org-name">

            <label for="name">Location</label>
             <select name="location" id="location">
               

            </select><br><br>

            <label for="name">Contract Duration</label>
            <input type="text" name="duration">

            <label for="name">Posted Date</label>
            <input type="date" name="posted_date">

            <label for="name">Deadline Date</label>
            <input type="date" name="deadline_date">

            <label for="name">Description</label>
            <input type="text" name="description">

            
            <label for="name">How To Apply</label>
            <input type="text" name="apply">
            
            <button name="upload" type="submit" class="add">Add</button>
        </form>
    </div>
    <script src="main1.js"></script>

</body>
</html>