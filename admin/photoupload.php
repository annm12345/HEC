<?php
require('connection.inc.php');
require('function.inc.php');
if(isset($_GET['name'])){
    $name=$_GET['name'];
}
// new filename
$res=mysqli_query($con,"SELECT * FROM `image` where name='$name'");
$count=mysqli_num_rows($res);
if($count>0){
    $row=mysqli_fetch_assoc($res);
    $path=$row['path'];
    $filename = $path.'1.jpg';

if (file_exists($filename)) {
    if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')&& file_exists($path.'5.jpg') && file_exists($path.'6.jpg')&& file_exists($path.'7.jpg')&& file_exists($path.'8.jpg')&& file_exists($path.'9.jpg')) {
        $filename='10.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
        
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')&& file_exists($path.'5.jpg') && file_exists($path.'6.jpg')&& file_exists($path.'7.jpg')&& file_exists($path.'8.jpg')) {
        $filename='9.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')&& file_exists($path.'5.jpg') && file_exists($path.'6.jpg')&& file_exists($path.'7.jpg')) {
        $filename='8.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')&& file_exists($path.'5.jpg') && file_exists($path.'6.jpg')) {
        $filename='7.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')&& file_exists($path.'5.jpg') ) {
        $filename='6.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')&& file_exists($path.'4.jpg')) {
        $filename='5.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }else if (file_exists($filename) && file_exists($path.'2.jpg')&& file_exists($path.'3.jpg')) {
        $filename='4.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
        
      }else if (file_exists($filename) && file_exists($path.'2.jpg')) {
        $filename='3.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
        
      }else{
        $filename='2.jpg';
        mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
        if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
        $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
        }
      }
} else {
    $filename='1.jpg';
    mysqli_query($con,"INSERT INTO `image_file`(`name`, `filename`) VALUES ('$name','$filename')");
    
    if( move_uploaded_file($_FILES['webcam']['tmp_name'],$path.$filename) ){
    $url = 'http://' . $_SERVER['HTTP_HOST'] . dirname($_SERVER['REQUEST_URI']) . $path. $filename;
    }
   
}
        
    

    
}else{
    window.alert(" File does not exist");
}


// Return image url
echo $url;
echo $name;