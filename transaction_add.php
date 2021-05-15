<?php
    $con = mysqli_connect("localhost:3308","root","","bankingsystem") or die(mysqli_error($con));
    $sender_id = $_POST['sender_id'];
    $receiver_id = $_POST['receiver_id'];
    $amount_transfered = $_POST['amount_transfered'];
    
    $insert_query = "INSERT INTO transferdetails(sender_id, receiver_id, money_transfered) VALUES('$sender_id', '$receiver_id', '$amount_transfered')";
    $insert_query_result = mysqli_query($con,$insert_query);
    
    $update_query_for_sender = "UPDATE customers set balance=balance-$amount_transfered where accNo = $sender_id";
    $update_query_result = mysqli_query($con,$update_query_for_sender);
    
    $update_query_for_receiver = "UPDATE customers set balance=balance+$amount_transfered where accNo = $receiver_id";
    $update_query_result = mysqli_query($con,$update_query_for_receiver);
    
//    header("Location: transaction.php?id=".$sender_id);
?> 

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title>Gold Horizon Bank</title>
        <style>
            body{
                
            }
            a{
                color: greenyellow;
                text-decoration: none;
            }
            a:hover{
                color: greenyellow;
            }
        </style>
    </head>
    <body>
        <div class="px-4 pt-5 my-5 text-center border-bottom">
            <h1 class="display-4 fw-bold">Transaction Done Successfully</h1>
            <div class="col-lg-6 mx-auto">
                <div class="card mb-4 rounded-3 shadow-sm">
                    <div class="card-header py-3">
                      <h4 class="my-0 fw-normal">Transaction Summery</h4>
                    </div>
                    <div class="card-body">
                      <ul class="list-unstyled mt-3 mb-4">
                        <li><b>Credits Transferred By :-</b> <?php echo $sender_id ?> </li>
                        <li><b>Credits Received By :-</b> <?php echo $receiver_id ?></li>
                        <li><b>Total Credits Transferred :- </b><?php echo $amount_transfered?></li>
                      </ul>
                    </div>
              </div>
              <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
                  <button type="button" class="btn btn-primary btn-lg px-4 me-sm-3"><a href="transaction.php?id=<?php echo $sender_id ?>">Previous Page</a></button>
                  <button type="button" class="btn btn-outline-secondary btn-lg px-4"><a href="index.php">Home</a></button>
              </div>
            </div>
            <div class="overflow-hidden" style="max-height: 30vh;">
              <div class="container px-5">
                <img src="https://www.storyyogi.com/wp-content/uploads/2019/11/ft.png" class="img-fluid border rounded-3 shadow-lg mb-4" alt="Example image" width="700" height="500" loading="lazy">
              </div>
            </div>
          </div>        
    </body>
</html>


