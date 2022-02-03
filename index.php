<?php include_once "data.php";?>
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

<section class="team" >
    <div class="container my-5">
     <div class="row">
     <?php foreach($devs as $data):?> 
        <?php if($data['location']=='Mirpur'):?> 
         <div class="col-md-4 my-3">
           <div class="team-member">
           <div class="card shadow">
               <img style = "height:200px ; object-fit:cover" src="<?php echo $data['photo']?>"
                alt="" class="card-image">
               <div class="card-body">
                   <h2><?php echo $data['name']; ?></h2>
                   <h4><?php echo $data['skill']; ?></h4>
                   <p> Location : <?php echo $data['location']; ?></p>              
                </div>
           </div>    
           </div>  
        </div>
        <?php endif; ?> 
        <?php endforeach;?>
    </div>
</section>
<!-- bootstrape 5 Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/scripts.js"></script>
</body>
</html>