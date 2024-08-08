<?php
require('top.inc.php');
?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">STUDENTS</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
            <?php
            if(isset($_GET['field']) && $_GET['field']!==''){
                $field=get_safe_value($con,$_GET['field']);
            $res=mysqli_query($con,"SELECT * FROM `department` WHERE field='$field'");
            while($row=mysqli_fetch_assoc($res)){
              $department=$row['department'];
            ?>         
            <div class="col-12 col-sm-6 col-md-3">
                <div class="info-box">
                <span class="info-box-icon bg-primary elevation-1"><i class="fas fa-users"></i></span>

                <div class="info-box-content">
                    <span class="info-box-text">Departmemnts of <?php echo $row['department'] ?></span>
                    <a href="data_student.php?specialization=<?php echo $row['department'] ?>"><span class="info-box-number">
                    <?php
                    $sres=mysqli_query($con,"select * from `student` where specialization='$department'");
                    $count=mysqli_num_rows($sres);
                    ?>
                    <small><?php echo $count ?> ဦး</small>
                    </span></a>
                </div>
                <!-- /.info-box-content -->
                </div>
                <!-- /.info-box -->
            </div>
            <?php } } ?>
            <!-- /.row -->
        </div>
    </section>
</div>

<?php
require('foot.inc.php');
?>