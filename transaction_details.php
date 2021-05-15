<?php
    include 'header.php';
    
    $con = mysqli_connect("localhost:3308","root","","bankingsystem") or die(mysqli_error($con));
    
    $select_query1 = "SELECT * from transferdetails";
    $select_query_result1 = mysqli_query($con, $select_query1) or die(mysqli_error($con));    

//    $select_query2 = "SELECT * from customers";
//    $select_query_result2 = mysqli_query($con, $select_query2) or die(mysqli_error($con)); 
    
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
        body{
            background-image: radial-gradient(#e580ff,#ccccff);
        }
        
        </style>
    </head>
    <body>
        <?php echo '<br/><br/><br/><br/>';?>
        <div class="container"> 
            <table class="table table-hover table-striped table-responsive">
                <tr>
                    <th>Transfer Id</th>
                    <th>Amount Transferred By</th>
                    <th>Amount Received By</th>
                    <th>Amount Transferred</th>
                    <th>Transaction Done At</th>
                    <th></th>
                </tr>
                <?php while($row = mysqli_fetch_array($select_query_result1)){  ?>
                <tr>
                    <td><?php echo $row['transfer_id'] ?></td>
                    <td><?php echo $row['sender_id'] ?></td>
                    <td><?php echo $row['receiver_id'] ?></td>
                    <td><?php echo $row['money_transfered'] ?></td>
                    <td><?php echo $row['transaction_time'] ?></td>
                </tr>
                <?php } ?>
            </table>
            
            
        </div>
    </body>
</html>


