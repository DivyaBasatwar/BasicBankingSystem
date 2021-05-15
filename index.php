<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
        <title><?php echo 'Bank Golden Horizon'; ?></title>
        <style>
            
            #banner_image{
                padding-top: 75px;;
                padding-bottom: 50px;
                text-align: center;
                color: #f8f8f8;
                margin-top: 50px;
                background: url("https://img.freepik.com/free-vector/businessman-watering-dollar-plant-growth-wealth-investment-concept-bank-building-exterior_48369-19931.jpg?size=626&ext=jpg") no-repeat center center/cover;
                height : 100%;   
            }
            .banner_content{
                position: relative;
                padding-top: 6%;
                padding-bottom: 6%;
                margin-top: 12%;
                margin-bottom: 12%;
                background-color: rgba(0,0,0,0.3);
                max-width: 660PX;               
            }
 
            button a{
                font-weight: bold;
                text-decoration: none;
            }
        </style>
    </head>
    <body>
        <?php
        // put your code here
        include 'header.php';
        ?>
          
        <br><br>
        <div id="banner_image">
            <div class="container h-100">
                <div class="row h-100 justify-content-center align-items-center">
                    <div class="col-md-6">  
                      <div class="banner_content">
                         <h1>Welcome To Bank Golden Horizon</h1> 
                         <p>Where you know your banker and your banker knows you.</p>
                         <button class="btn btn-danger btn-lg active"><a data-toggle="modal" href="#">Know More</a></button>
                      </div>
                    </div>
                </div>    
            </div>
        </div>   

        
        
        <?php 
        include 'footer.php';
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>        
    </body>
</html>
