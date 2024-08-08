<?php
require('top.inc.php');

$department='';
$image_required='required';
$field='';
$desc='';
$status='';
$msg='';

if(isset($_GET['id']) && $_GET['id']!=''){
  $id=get_safe_value($con,$_GET['id']);
  $res=mysqli_query($con,"SELECT * FROM `department` WHERE id='$id'");
  $check=mysqli_num_rows($res);
  if($check>0){
    $row=mysqli_fetch_assoc($res);
    $department=$row['department'];
    $image=$row['image'];
    $field=$row['field'];
    $desc=$row['desc'];
    $status=$row['status'];
  }

}
if(isset($_POST['upload'])){
    $department=get_safe_value($con,$_POST['department']);
    $image=$_FILES['image']['name'];
    $image_temp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp_name,'../media/image/'.$image);
    $field=get_safe_value($con,$_POST['field']);
    $desc=get_safe_value($con,$_POST['desc']);
    $status=get_safe_value($con,$_POST['status']);
    $res=mysqli_query($con,"SELECT * FROM `department` WHERE department='$department'");
    $count=mysqli_num_rows($res);
    if($count>0){
      mysqli_query($con,"UPDATE `department` SET `department`='$department',`image`='$image',`field`='$field',`desc`='$desc',`status`='$status' WHERE id='$id'");
      ?>
      <script>
        window.location.href='sub_department.php?field=<?php echo $field ?>';
      </script>
      <?php
    }else{
      mysqli_query($con,"INSERT INTO `department`( `department`, `image`,`field`, `desc`, `status`) VALUES ('$department','$image','$field','$desc','$status')");
      ?>
      <script>
        window.location.href='department.php';
      </script>
      <?php
    }
    

}

?>
<style>
  .btn{
    padding:1rem;
    background:darkblue;
    color:#fff;
  }
  .btn:hover{
    cursor:pointer;
    color:darkblue;
    background:gray;
  }
  form{
    display:flex;
    flex-direction:column;
    width:100%;
    gap:1rem;
  }
  form>div{
    display:flex;
    flex-direction:column;
  }
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
        <h5 class="mb-2" style="font-size:2rem;margin-bottom:2rem;">Upload or Add Department</h5>
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                <div>
                    <label for="">Department</label>
                    <input type="text" class="form-control" placeholder="Enter Department Name" name="department" required value="<?php echo $department ?>">
                </div>
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                      <div class="custom-file">
                          <input type="file" class="" id="exampleInputFile" placeholder="Upload the Image" name="image" required value="<?php echo $image ?>">
                      </div> 
                </div>
                <div>
                    <label for="">Field</label>
                    <select name="field" class="form-control" id="" required>
                      <option value="">Select Field</option>
                      <?php
                      if($row['field']=='art'){
                        echo"<option value='art' selected>ART</option>
                        <option value='science'>SCIENCE</option>
                        <option value='computer'>COMPUTER</option>
                        <option value='mba'>MPA</option>
                        <option value='language'>FOREIGN LANGUAGE</option>";
                      }
                      else if($row['field']=='science'){
                        echo"<option value='art'>ART</option>
                        <option value='science' selected>SCIENCE</option>
                        <option value='computer'>COMPUTER</option>
                        <option value='mba'>MPA</option>
                        <option value='language'>FOREIGN LANGUAGE</option>";
                      }
                      else if($row['field']=='computer'){
                        echo"<option value='art'>ART</option>
                        <option value='science'>SCIENCE</option>
                        <option value='computer' selected>COMPUTER</option>
                        <option value='mba'>MPA</option>
                        <option value='language'>FOREIGN LANGUAGE</option>";
                      }
                      else if($row['field']=='mba'){
                        echo"<option value='art'>ART</option>
                        <option value='science'>SCIENCE</option>
                        <option value='computer'>COMPUTER</option>
                        <option value='mba' selected>MPA</option>
                        <option value='language'>FOREIGN LANGUAGE</option>";
                      }
                      else if($row['field']=='language'){
                        echo"<option value='art'>ART</option>
                        <option value='science'>SCIENCE</option>
                        <option value='computer'>COMPUTER</option>
                        <option value='mba'>MPA</option>
                        <option value='language' selected>FOREIGN LANGUAGE</option>";
                      }
                      else{
                        echo"<option value='art'>ART</option>
                        <option value='science'>SCIENCE</option>
                        <option value='computer'>COMPUTER</option>
                        <option value='mba'>MPA</option>
                        <option value='language'>FOREIGN LANGUAGE</option>";
                      }
                      ?>
                    </select>
                </div> 
                <div>
                    <label for="">Description</label>
                    <textarea class="form-control" placeholder="Enter Description" name="desc" required value="<?php echo $desc ?>"></textarea >
                </div>
                <div>
                    <label for="">Status</label>
                    <textarea class="form-control" placeholder="Enter Status" name="status" required value="<?php echo $status ?>"></textarea>
                </div>  
                <div>
                    <input type="submit" placeholder="Upload" name="upload" class="btn btn-primary">
                </div>               
            </form>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>


<?php
require('foot.inc.php');
?>