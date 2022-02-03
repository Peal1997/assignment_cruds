<?php

include_once "app/functions.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mrrriage</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
     <?php
       if(isset ($_POST['submit'])){
        echo   $name = $_POST['name'];
        echo  $dob = $_POST['dob'];
        echo  $gender = $_POST['gender'] ?? '';
        if(empty($name) || empty($dob) || empty($gender))
        {
            $msg = validate('All feilds are required  !');
        }
        else{
           $output  = marriage($name , $dob ,$gender);
        }
     

       }
     
     
     
     ?>
    <div class="user-form w-25 mx-auto my-5">
        <div class="card shadow">
            <div class="card-header">
                <h2 class ="card-title">Check your marriage Age</h2>
            </div>
            <div class="card-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label for ="name"> Name</label><input class ="form-control" type ="text" name ="name" id="name">
                    </div>
                    <div class="form-group">
                        <label for ="dob"> Date of birth</label><input class= "form-control"type ="text" name ="dob" id="dob">
                    </div>
                    
                    <div class="form-group">
                    <input type="radio" name="gender" id="Male"value="Male"><label for="Male">Male</label>
                    <input type="radio" name="gender" id="Female" value="Female"><label for="Female">Female</label>  
                    </div>
                    <div class="form-group">
                 <input name ="submit" class="btn btn-primary" type="submit"value="Check">
                 </div>   




                </form>

            </div>
            <div class="card-footer"></div>
            <?php echo $output ?? '';?>
        </div>
    </div>

<script src="assets/js/bootstrap.bundle.min.js"></script>    
<script src="assets/js/scripts.js"></script>    
</body>
</html>