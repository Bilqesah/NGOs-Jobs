<!DOCTYPE html>
<html lang="en">
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<link rel="stylesheet" href="../css/bootstrap.min.css" />
    
<meta charset="utf-8" />
        <title>Webshop||Mycart</title>
    
        <link rel="stylesheet" href="../css/all.min.css" />
        <link rel="stylesheet" href="../css/bootstrap.min.css" />
        <!-- <link rel="stylesheet" href="../css/style.css" /> -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <style>
        .num_items{
            width:50px;
        }
        .table{
            text-align: center;

        }
    </style>
</head>
<body>
    <?php include ('../nav.php');?>
    <div class="container">
        <div class="row">
        <div class="col-6"><h4 class="m-3">Items In My Cart</h3> </div>
        </div>
        <table class="table">
         
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Item</th>
                    <th scope="col">Unit Price</th>
                    <th scope="col"> Quantity</th>
                    <th scope="col">Final Price</th>
                    <th scope="col">Remove</th>
        
                  </tr>
                </thead>
                <?php
                include ('../config.php');
                $result = mysqli_query($con,"SELECT * FROM cart");
                while($row = mysqli_fetch_array($result)){
                    echo "
                    <tbody id='tBody'>
                    <td class='id'></td>
                    <td>$row[name]</td>
                    <td class='item_price'>$row[price]</td>
                    <td><input type='number'class='num_items' ></td>
                    <td class='fPrice'></td>
                    <td><a href='del_cart.php? id=$row[id]' class='btn btn-outline-danger'>Delete</a></td>


                    </tbody>
    
                    ";
                }


                ?>
                <tbody id="tBody">
               
                </tbody>
            </table>
    </div>
    <script src="../js/main.js"></script>
</body>
</html>