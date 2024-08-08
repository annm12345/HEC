<?php
require('top.inc.php');
$art_count='';
$science_count='';
$computer_count='';
$mpa_count='';
$language_count='';
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
</style>
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <h5 class="mb-2" style="font-size:2rem;margin-bottom:2rem;">Departments of High Education Center</h5>
        <div class="row"> 
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php
                $res=mysqli_query($con,"SELECT `field` FROM `department` WHERE field='art'");
                $row=mysqli_fetch_assoc($res);
                $art_count=mysqli_num_rows($res);
                ?>
               
                <h3><?php echo $art_count ?></h3>

                <p>MASTER OF ART</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="sub_department.php?field=art" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
              <?php
                $res=mysqli_query($con,"SELECT `field` FROM `department` WHERE field='science'");
                $row=mysqli_fetch_assoc($res);
                $science_count=mysqli_num_rows($res);
                ?>
               
                <h3><?php echo $science_count ?></h3>


                <p>MASTER OF SCIENCE</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="sub_department.php?field=science" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
              <?php
                $res=mysqli_query($con,"SELECT `field` FROM `department` WHERE field='computer'");
                $row=mysqli_fetch_assoc($res);
                $computer_count=mysqli_num_rows($res);
                ?>
               
                <h3><?php echo $computer_count ?></h3>

                <p>COMPUTER</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="sub_department.php?field=computer" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-danger">
              <div class="inner">
              <?php
                $res=mysqli_query($con,"SELECT `field` FROM `department` WHERE field='mba'");
                $row=mysqli_fetch_assoc($res);
                $mpa_count=mysqli_num_rows($res);
                ?>
               
                <h3><?php echo $mpa_count ?></h3>

                <p>MASTER OF PEOPLE ADMINISTRATION</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="sub_department.php?field=mba" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
              <?php
                $res=mysqli_query($con,"SELECT `field` FROM `department` WHERE field='language'");
                $row=mysqli_fetch_assoc($res);
                $mpa_count=mysqli_num_rows($res);
                ?>
               
                <h3><?php echo $mpa_count ?></h3>

                <p>DIPLOMA OF FOREIGN LANGUAGE</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="sub_department.php?field=LANGUAGE" class="small-box-footer">
                More info <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row">
            <a href="department_manage.php" class="btn">ADD</a>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>

    <a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
      <i class="fas fa-chevron-up"></i>
    </a>
  </div>
  <!-- /.content-wrapper -->

<?php
require('foot.inc.php');
?>