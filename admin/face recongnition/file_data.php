<?php
require('../connection.inc.php');
require('../function.inc.php');

$file=array();
$res=mysqli_query($con,"SELECT `name` FROM `image`");
while($row=mysqli_fetch_assoc($res)){
  $file[]=$row['name'];
}


echo json_encode($file);
?>