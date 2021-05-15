<?php
  include 'header.php';
  echo '<br/><br/><br/><br/><br/>';
  $customer_id = $_GET['id'];
  
  $con = mysqli_connect("localhost:3308","root","","bankingsystem") or die(mysqli_error($con));
  $select_query = "SELECT * FROM customers WHERE accNo=$customer_id";
  $select_query_result = mysqli_query($con, $select_query); 
  $row = mysqli_fetch_array($select_query_result);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo 'Bank Golden Horizon'; ?></title>
    </head>
    <body>
      
        <div class="card">
          <h5 class="card-header">Details Of The Customer</h5>
          <div class="card-body">
              <table>
                  <tr>
                      <th>Account No. :-</th>
                      <td><?php echo $row['accNo']?></td>    
                  </tr>
                  <tr>
                      <th>Name :- </th>
                      <td><?php echo $row['name']?></td>    
                  </tr>
                  <tr>
                      <th>Account Type :- </th>
                      <td><?php echo $row['accType']?></td>    
                  </tr>
                  <tr>
                      <th>Current Balance :- </th>
                      <td><?php echo $row['balance']?></td>    
                  </tr>
                  <tr>
                      <th>Email Id :- </th>
                      <td><?php echo $row['email_id']?></td>    
                  </tr>
                  <tr>
                      <th>Phone :- </th>
                      <td><?php echo $row['phone']?></td>    
                  </tr>
                  <tr>
                      <th>Address :- </th>
                      <td><?php echo $row['address']?></td>    
                  </tr>
              </table>
              
              
<!--            <h5 class="card-title">Account No. :- <?php echo $row['accNo']?> </h5>  
            <h5 class="card-title">Name :- <?php echo $row['name']?></h5>
            <h5 class="card-title">Account Type :- <?php echo $row['accType']?></h5>
            <h5 class="card-title">Current Balance :- <?php echo $row['balance']?></h5>
            <h5 class="card-title">Email Id :- <?php echo $row['email_id']?></h5>
            <h5 class="card-title">Phone :- <?php echo $row['phone']?></h5>
            <h5 class="card-title">Address :- <?php echo $row['address']?></h5>-->
            <a href="transaction.php?id=<?php echo $row['accNo']?>" class="btn btn-primary">Make A Transaction</a>
          </div>
        </div>        
    </body>
</html>

<?php
  include 'footer.php';
?>