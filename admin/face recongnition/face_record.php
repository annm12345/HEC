
<?php
require('../../connection.inc.php');
require('../../function.inc.php');
$msg='';
if(isset($_POST['upload'])){
    $fname=get_safe_value($con,$_POST['fname']);
    date_default_timezone_set('Asia/Yangon');
    $added_on=date('Y-m-d H:i:s');
   
    $res=mysqli_query($con,"SELECT * FROM `image` where `name`='$fname'");
    if(mysqli_num_rows($res)>0){
        ?>
        <script>
            window.alert('Your Name is already exist');
        </script>
        <?php
    }else{
        mysqli_query($con,"INSERT INTO `image`(`Name`,`path`,`added_on`) VALUES ('$fname','face recongnition/labels/$fname/','$added_on')");
        mkdir($fname);
        ?>
        <script>
            window.location.href='../../webcam.php?name=<?php echo $fname ?>';
        </script>
        <?php

    }    
 
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Face record</title>
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./../../plugins/fontawesome-free/css/all.min.css">
  <!----FONTAWSOME CDN-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="./../../plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="./../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="./../../plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./../../dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="./../../plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="./../../plugins/daterangepicker/daterangepicker.css">
  <style>
    .container{
        width:100%;
        margin-top:2rem;
        display:flex;
        justify-content:center;
        align-items:center;
    }
  </style>
</head>

<body>
    <div class="container">
    <section class="content" style="width:100%">
        <div class="container-fluid">
            <div class="row" >
                <a class="btn btn-success" href="../../index.php">Home</a>
            </div>
        <div class="row" style="margin-top:2rem;">
            <?php
            echo $msg;
            ?>

        <form action="" id="form" method="post" style="display:flex;gap:2rem;flex-direction:column;width:100%">
            <input type="text" class="form-control" name="fname" id="fname" style="width:100%" placeholder="Please Enter File Name">
            <input type="submit" class="btn btn-primary" name="upload" style="width:max-content;">
        </form>
        </div>
        </div>
    </section>
    </div>
</body>
</html>


    
