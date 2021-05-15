<?php
    include 'header.php';
    echo '<br/><br/><br/>';
    
    $customer_id = $_GET['id'];
    
    $con = mysqli_connect("localhost:3308","root","","bankingsystem") or die(mysqli_error($con));
    $select_query = "SELECT * FROM customers WHERE accNo=$customer_id";
    $select_query_result = mysqli_query($con, $select_query); 
    $row = mysqli_fetch_array($select_query_result);
    
    include 'footer.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo 'Bank Golden Horizon'; ?></title>
        <style>
            .mydiv{
                border : 2px solid red;
            }
            button a{
                color: white;
                font-weight: bold;
                text-decoration: none;
            }
            button a:hover{
                color: white;
                font-weight: bold;
            }
            body{
                background: url('https://wallpapertag.com/wallpaper/full/0/b/e/936191-most-popular-cool-money-backgrounds-1920x1080-download.jpg') no-repeat center center/cover; 
            }
            table tr td{
                font-weight: bold;
            }
            
        </style>
    </head>
    <body>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
          <div class="row align-items-center g-5 py-5">
            <div class="col-lg-7 text-center text-lg-start">
              <h1 class="display-4 fw-bold lh-1 mb-3">Sending so much more than money.</h1>
              <p class="col-lg-10 fs-4">
                 
              <table class="table">
                  <tr>
                     <th>Account No. :- </th> 
                     <td><?php echo $row['accNo']?></td>
                  </tr>
                  <tr>
                      <th>Account Holder's Name :-</th>
                      <td><?php echo $row['name']?></td>
                  </tr>
                  <tr>
                      <th>Amount Present In The Account :-</th>
                      <td style="color:black;"><?php echo $row['balance']?></td>
                  </tr>
              </table>
              </p>
           
            </div>
            <div class="col-10 mx-auto col-lg-5">
                <form class="p-5 border rounded-3 bg-light" method="post" action="transaction_add.php">    
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="sender_id" value="<?php echo $row['accNo']?>" required="true" readonly="true">
                  <label for="floatingInput">Credit Transfer From</label>
                </div>    
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="receiver_id" placeholder="Transfer To" required="true">
                  <label for="floatingInput">Money To Be Received By</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingNumber" name="amount_transfered" placeholder="Amount To Be Transferred" required="true">
                  <label for="floatingNumber">Amount To Be Transferred</label>
                </div>
                <div class="checkbox mb-3">
                  <label>
                    <input type="checkbox" value="remember-me"> Remember me
                  </label>
                </div>
                    <button id="sendMoneyBtn" class="w-100 btn btn-lg btn-primary" type="submit">Send Money Now</button>
                <hr class="my-4">
                <small class="text-muted">By using our service, you agree to the terms of use.</small>
              </form>
            </div>
          </div>
        </div>        
        
        
        
        <script>
            
        </script>   
    </body>
</html>