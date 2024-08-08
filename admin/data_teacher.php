<?php
require('top.inc.php');
if(isset($_GET['specialization']) && $_GET['specialization']!=''){
  $specialization=$_GET['specialization'];
}  
if(isset($_GET['id']) && $_GET['id']!=''){
  $id=$_GET['id'];
  mysqli_query($con,"DELETE FROM `teacher` WHERE id='$id'");
  ?>
  <script>
      //window.location.href="data_teacher.php?specialization=<?php echo $specialization ?>";
  </script>
  <?php
  } 

?>
<!-- DataTables -->

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Tables</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">!Do not copy the data, take a secure.</h3>
                <div style="display:flex;position:absolute;top:5px;right:20px;">
                  <a href="teacher_manage.php" class="btn btn-primary">ADD</a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>စဉ်</th>
                    <th>ဓာတ်ပုံ</th>
                    <th>ပြန်တမ်းဝင်အမှတ်</th>
                    <th>အဆင့်</th>
                    <th>အမည်</th>
                    <th>အထူးပြု</th>
                    <th>တပ်</th>
                    <th>မွေးသက္ကရာဇ်</th>
                    <th>အားကစားအသင်း</th>
                    <th></th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    if(isset($_GET['specialization']) && $_GET['specialization']!=''){
                      $specialization=$_GET['specialization'];                      
                      $res=mysqli_query($con,"SELECT * FROM `teacher` WHERE specialization='$specialization'");
                      $count=mysqli_num_rows($res);
                      while($row=mysqli_fetch_assoc($res)){
                ?>
              <tr>
                <?php
                 
                for($n=1;$n<=$count;$n++){
                ?>
                  <td> <?php echo $n ?></td>
                <?php } ?>
                <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image'] ?>" alt="" style="width:100px;"></td>
                <td><?php echo $row['bc'] ?></td>
                <td><?php echo $row['rank'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['specialization'] ?></td>
                <td><?php echo $row['unit'] ?></td>
                <td><?php echo $row['date_of_birth'] ?></td>
                <td><?php echo $row['team'] ?></td>
                <td><a href="teacher_manage.php?id=<?php echo $row['id']; ?>" class="btn btn-info">EDIT</a> | <a href="data_teacher.php?action=delete&id=<?php echo $row['id']; ?>&specialization=<?php echo $row['specialization'] ?>" class="btn btn-danger">DELETE</a></td>
              </tr>
              <?php } }  ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->
          </div>
        </div>     
    </section>
</div>

<?php
require('foot.inc.php');
?>