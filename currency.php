<?php

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
<?php
       if(isset ($_POST['submit'])){
         $amount = $_POST['amount'];
         $currency = $_POST['currency'] ?? '';
        if(empty($amount) || empty($currency))
        {
            $msg = validate('All feilds are required  !');
        }
        else{
           $output  = checkcurrency($currency , $amount);
        }
        
       
       }
       ?>
<div class="user-form w-25 mx-auto my-5">
    <div class="card shadow">
        <div class="card-header">
            <h2 class="card-title">Currency calculator</h2>
        </div>
        <div class="card-body">
            <!--form-->
            <?php  echo $msg ?? '';?>
            <form action="" method="POST">
                <div class="form-group">
                 <label for="amount">Amount</label>
                 <input class="form-control" type="text" name="amount" id="amount" value="">
                 </div>
                <!--Options-->
                 <div class="form-group">
                        <input type="radio" name="currency" id="USD" value="USD"><label for="USD">USD</label>
                        
                        
                        
                        <input type="radio" name="currency" id="CAD"value="CAD"><label for="CAD">CAD</label>
                        
                       
                        <input type="radio" name="currency" id="Euro"value="Euro"><label for="Euro">Euro</label>
                        
                        
                        <input type="radio" name="currency" id="Pound"value="Pound"><label for="Pound">Pound</label>
                        
                        
                        <input type="radio" name="currency" id="Won" value="Won"><label for="Won">Won</label>
                </div>  
                 <div class="form-group">
                 <input name ="submit" class="btn btn-primary" type="submit"value="Check">
                 </div>
              

            </form>
        </div>
        <div class="card-footer">
            <?php echo $output ?? '' ;?>
        </div>

    </div>
</div>
<!--bootstrape 5 Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>   
</body>
</html>