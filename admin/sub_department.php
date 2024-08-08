<?php
require('top.inc.php');


if(isset($_GET['action']) && $_GET['action']=='delete'){
  $id=get_safe_value($con,$_GET['id']);
  mysqli_query($con,"DELETE FROM `department` WHERE id='$id'");
}



?>
<style>
  .update{
    display:block;
    position:absolute;
    top:20%;
    left:5%;
  }
  .delete{
    display:block;
    position:absolute;
    top:20%;
    right:5%;
  }

</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid" style="margin-top:1rem;">
        <div class="row">
          <!-- /.col --> 
          <?php
          if(isset($_GET['field']) && $_GET['field']!==''){
            $field=get_safe_value($con,$_GET['field']);
          $res=mysqli_query($con,"SELECT * FROM `department` WHERE field='$field'");
          while($row=mysqli_fetch_assoc($res)){
            ?>         
          <div class="col-md-4" >
            <!-- Widget: user widget style 1 -->
            <div class="card card-widget widget-user shadow" id="hover">
              <!-- Add the bg color to the header using any of the bg-* classes -->
              <div class="widget-user-header bg-success">
                <h3 class="widget-user-username" style="font-weight:bold;color:#FFF"><?php echo $row['department'] ?></h3>
              </div>
              <div class="widget-user-image">
                <img class="img-circle " style="border:3px solid darkblue" src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image'] ?>" alt="User Avatar">
              </div>
              <div class="card-footer">
                <div class="row">
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">3,200</h5>
                      <span class="description-text">Teachers</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4 border-right">
                    <div class="description-block">
                      <h5 class="description-header">13,000</h5>
                      <span class="description-text">Students</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-4">
                    <div class="description-block">
                      <h5 class="description-header">35</h5>
                      <span class="description-text">Guardians</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
          <div class="update">
            <a href="department_manage.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Update</a>
          </div>
          <div class="delete">
            <a href="sub_department.php?action=delete&id=<?php echo $row['id'] ?> " class="btn btn-danger">Delete</a>
          </div>
            
            <!-- /.widget-user -->
          </div>
          <?php } }
          ?>
          
                <!-- /.row -->
        </div>
        </div><!-- /.container-fluid -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
  <?php
require('foot.inc.php');
?>
  