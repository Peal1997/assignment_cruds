<?php
//autoload file
include_once "./autoload.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student signup</title>
    <!-- bootstrape 5 -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--main css file-->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>


    <div class="user-form w-25 mx-auto my-5">
        <a class="btn btn-primary" href="./user.php">All users</a>
        <br>
        <br>
    <?php

         if(isset ($_POST['submit'])){
            echo $name = $_POST['name'];
             $email = $_POST['email'];
             $cell = $_POST['cell'];
             $username = $_POST['username'];
             $edu = $_POST['edu'];
             $submit = $_POST['submit'];
             $gender = $_POST['gender'] ?? '';
             $file_name= photoupload($_FILES['photo'] , 'photos/');

             //file info
             

            $email_check = emailcheck($email) == false ? '<sapan style ="color : red" >*Required</sapan>' : '';

             if( empty($name) || empty($email) || empty($cell) || empty($username))
             {
                 $msg = validate('All fields are required');
             }
             else if(emailcheck($email) == false){
            $msg = validate('Invalid email address','warning');
             }
             else{

                $msg = validate('Data stable','success');
                clear();

               //$file_name= photoupload($_FILES['photo'] , 'photos/');

                connect() -> query("INSERT INTO users (name, email, cell, uname, education , gender , photo) 
                values ('$name','$email','$cell','$username','$edu','$gender' , '$file_name')");

                //file feature  
             }
             
         }
    ?>
        <div class="card shadow">
            <div class="card-header">
              <h2 clas="card-title">Create an account</h2>
            </div>
        
            <div class="card-body">
                <?php echo $msg ?? '';?>

            <form action ="" method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                    <label for = "">Name</label>
                    <input name ="name" type="text" value="<?php echo old('name') ?>" class="form-control">
                    </div>    
                <div class="form-group">
                    <label for = "">Email</label>
                    <input name ="email"type="text" value="<?php echo old('email') ?>"  class="form-control">
                   <?php echo $email_check ?? ''; ?>
               </div>
               <div class="form-group">
                    <label for = "">Cell</label>
                    <input name ="cell" type="text"  value="<?php echo old('cell') ?>"  class="form-control">
                </div> 
                <div class="form-group">
                    <label for = "">Username</label>
                    <input name ="username" type="text" value="<?php echo old('username') ?>"  class="form-control">
                </div>
                <div class="form-group">
                    <label for = "">Education</label>
                   <select class="form-control"name="edu" id="">
                       <option value="--Select--">--Select--</option>

                       <option <?php echo (old('edu') == 'PEC') ? 'selected' : ''; ?> value="PEC">PEC</option>
                       <option <?php echo (old('edu') == 'JSC') ? 'selected' : ''; ?> value="JSC">JSC</option>
                       <option <?php echo (old('edu') == 'SSC') ? 'selected' : ''; ?> value="SSC">SSC</option>
                       <option <?php echo (old('edu') == 'HSC') ? 'selected' : ''; ?> value="HSC">HSC</option>
                   </select>
                
                </div>
                <div class="form-group">
                    <label for = "">Gender</label>
                    <input <?php echo (old('gender') == 'Male') ? 'checked' : ''; ?> name="gender" type="radio" id="Male" value="Male"><label for ="Male">Male </label>
        
                    <input <?php echo (old('gender') == 'Female') ? 'checked' : ''; ?> name="gender" type="radio" id="Female" value="Female"><label FOR="Female">Female </label>
                 
                </div>   
                <div class="form-group">
                   <input name="agree" type="checkbox" id="check" ><label for="check">I agree</label>
               </div> 
               <div class="form-group">
                   <input name="photo" type="file">
               </div>               
                <div class="form-group">
                   <input name= "submit" type="submit" class="btn btn-primary" value = "Sign up">
               </div>
              
               
            </form>

        </div>
    </div>
<!-- bootstrape 5 Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src ="assets/js/jquery-3.6.0.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>