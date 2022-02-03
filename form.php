<?php
//autoload file
include_once "app/functions.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrape 5</title>
    <!-- bootstrape 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--main css file-->
    <link rel="styleaheet" href="assets/css/style.css">
</head>
<body>


    <div class="user-form w-25 mx-auto my-5">
    <?php
        
           echo $_GET['name'];
           echo  $_GET['year'];
           

        
      
        

        ?>
        <div class="card shadow">
            <div class="card-header">
              <h2 clas="card-title">Check your age</h2>
            </div>
        
            <div class="card-body">

            <form action ="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for = "">Name</label>
                    <input name ="name" type="text" class="form-control">
                    </div>    
                <div class="form-group">
                    <label for = "">Year</label>
                    <input name ="year"type="text" class="form-control">
               </div>
               <div class="form-group">
                   <input name= "submit" type="submit" class="btn btn-primary" value = "check">
               </div>
            </form>

        </div>
    </div>
    
    






<!-- bootstrape 5 Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>