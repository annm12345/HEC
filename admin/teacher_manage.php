<?php
require('top.inc.php');

$bc='';
$image='';
$rank='';
$name='';
$specialization='';
$unit='';
$date_birth='';
$team='';
if(isset($_GET['id']) && $_GET['id']!=''){
  $id=get_safe_value($con,$_GET['id']);
  $res=mysqli_query($con,"SELECT * FROM `teacher` WHERE id='$id'");
  $check=mysqli_num_rows($res);
  if($check>0){
    $row=mysqli_fetch_assoc($res);
    $bc=$row['bc'];
    $image=$row['image'];
    $rank=$row['rank'];
    $name=$row['name'];
    $specialization=$row['specialization'];
    $unit=$row['unit'];
    $date_birth=$row['date_of_birth'];
    $team=$row['team'];
  }
  

}
if(isset($_POST['upload'])){
    $image=$_FILES['image']['name'];
    $image_temp_name=$_FILES['image']['tmp_name'];
    move_uploaded_file($image_temp_name,'../media/image/'.$image);
    $bc=get_safe_value($con,$_POST['bc']);
    $rank=get_safe_value($con,$_POST['rank']);
    $name=get_safe_value($con,$_POST['name']);
    $specialization=get_safe_value($con,$_POST['specialization']);
    $unit=get_safe_value($con,$_POST['unit']);
    $date_birth=get_safe_value($con,$_POST['date_birth']);
    $team=get_safe_value($con,$_POST['team']);
    $added_on=date('Y-m-d h:i:s');

    $res=mysqli_query($con,"SELECT * FROM `teacher` WHERE bc='$bc'");
    $count=mysqli_num_rows($res);
    if($count>0){
      mysqli_query($con,"UPDATE `teacher` SET `image`='$image',`bc`='$bc',`rank`='$rank',`name`='$name',`specialization`='$specialization',`unit`='$unit',`date_of_birth`='$date_birth',`team`='$team',`reg_date`='$added_on' WHERE id='$id'");
      ?>
      <script>
        window.location.href='data_teacher.php?specialization=<?php echo $specialization ?>';
      </script>
      <?php
    }else{
      mysqli_query($con,"INSERT INTO `teacher`(`image`, `bc`, `rank`, `name`, `specialization`, `unit`, `date_of_birth`, `team`, `reg_date`) VALUES ('$image','$bc','$rank','$name','$specialization','$unit','$date_birth','$team','$added_on')");
      ?>
      <script>
        window.location.href='data_teacher.php?specialization=<?php echo $specialization ?>';
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
        
        <h5 class="mb-2" style="font-size:2rem;margin-bottom:2rem;">Upload or Add Teachers</h5>
        <div class="row">
            <form action="" method="post" enctype="multipart/form-data">
                
                <div class="form-group">
                    <label for="exampleInputFile">File input</label>
                      <div class="custom-file">
                          <input type="file" class="" id="exampleInputFile" placeholder="Upload the Image" name="image" required value="<?php echo $image ?>">
                      </div> 
                </div>
                <div>
                    <label for="">ပြန်တမ်းဝင်အမှတ်</label>
                    <input type="text" class="form-control" placeholder="ပြန်တမ်းဝင်အမှတ်" name="bc" required value="<?php echo $bc ?>">
                </div>
                <div>
                    <label for="">အဆင့်</label>
                    <input type="text" class="form-control" placeholder="အဆင့်" name="rank" required value="<?php echo $rank ?>">
                </div>
                <div>
                    <label for="">အမည်</label>
                    <input type="text" class="form-control" placeholder="အမည်" name="name" required value="<?php echo $name ?>">
                </div>
                <div>
                    <label for="">အထူးပြုဘာသာရပ်</label>
                    <select name="specialization" class="form-control" id="" required>
                      <option value="">Select Field</option>
                      <?php
                      if($row['specialization']=='MYANMAR'){
                        echo"<option value='MYANMAR' selected>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='ENGLISH'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH' selected>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='HISTORY'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY' selected>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='GEOGRAPHY'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY' selected>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='MATH'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH' selected>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='PHYSICS'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS' selected>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='NUCLEAR PHYSICS'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS' selected>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='CHEMISTRY'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY' selected>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='NUCLEAR CHEMISTRY'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY' selected>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='COMPUTER SCIENCE'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE' selected>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='COMPUTER TECHNOLOGY'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY' selected>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='MASTER OF PUBLIC ADMINISTRATION'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION' selected>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='INTERNATIONAL RELATIONSHIP'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP' selected>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      else if($row['specialization']=='ELECTRONIC'){
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC' selected>ELECTRONIC</option>";                        
                      }
                      else{
                        echo"<option value='MYANMAR'>MYANMAR</option>
                        <option value='ENGLISH'>ENGLISH</option>
                        <option value='HISTORY'>HISTORY</option>
                        <option value='GEOGRAPHY'>GEOGRAPHY</option>
                        <option value='MATH'>MATH</option>
                        <option value='PHYSICS'>PHYSICS</option>
                        <option value='NUCLEAR PHYSICS'>NUCLEAR PHYSICS</option>
                        <option value='CHEMISTRY'>CHEMISTRY</option>
                        <option value='NUCLEAR CHEMISTRY'>NUCLEAR CHEMISTRY</option>
                        <option value='COMPUTER SCIENCE'>COMPUTER SCIENCE</option>
                        <option value='COMPUTER TECHNOLOGY'>COMPUTER TECHNOLOGY</option>
                        <option value='MASTER OF PUBLIC ADMINISTRATION'>MASTER OF PUBLIC ADMINISTRATION</option>
                        <option value='INTERNATIONAL RELATIONSHIP'>INTERNATIONAL RELATIONSHIP</option>
                        <option value='ELECTRONIC'>ELECTRONIC</option>";                        
                      }
                      ?>
                    </select>
                </div>
                <div>
                    <label for="">တပ်</label>
                    <input type="text" class="form-control" placeholder="တပ်" name="unit" required value="<?php echo $unit ?>">
                </div>
                <div>
                    <label for="">မွေးသက္ကရာဇ်</label>
                    <input type="text" class="form-control" placeholder="မွေးသက္ကရာဇ်" name="date_birth" required value="<?php echo $date_birth ?>">
                </div>
                <div>
                    <label for="">အားကစားအသင်း</label>
                    <input type="text" class="form-control" placeholder="အားကစားအသင်း" name="team" required value="<?php echo $team ?>">
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