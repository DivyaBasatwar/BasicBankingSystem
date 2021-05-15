<?php
    include 'header.php';
    
    $con = mysqli_connect("localhost:3308","root","","bankingsystem") or die(mysqli_error($con));
    
    $select_query = "SELECT accNo, name, accType, email_id from customers";
    $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
    
    include 'footer.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo 'Bank Golden Horizon | customers'; ?></title>
        <style>
        .mybutton{
            border: 3px solid yellow;
        }
        a{
            color: white;
            text-decoration: none;
            font-weight: bolder;
        }
        a:hover{
            color: yellow;
            font-weight: bolder;
        }
        body {
            background-color: #ccccff; /* For browsers that do not support gradients */
            background-image: linear-gradient(to right,#ccccff, #e580ff);
        }
        </style>
    </head>
    <body>
        <?php echo '<br/><br/><br/><br/>';?>
        <div class="container">
            
            
            <table class="table table-hover table-striped table-responsive">
                <tr>
                    <th>Account No.</th>
                    <th>Name of Customer</th>
                    <th>Account Type</th>
                    <th>Email Id</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($select_query_result)){  ?>
                <tr>
                    <td><?php echo $row['accNo'] ?></td>
                    <td><?php echo $row['name'] ?></td>
                    <td><?php echo $row['accType'] ?></td>
                    <td><?php echo $row['email_id'] ?></td>
                    <td><button class="btn btn-primary mybutton"><a href="customer.php?id=<?php echo $row['accNo']?>">View More</a></button></td>
                </tr>
                <?php } ?>
            </table>
            
            
        </div>
        <br><br><br>
    </body>
</html>



