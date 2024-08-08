<?php
require('top.inc.php');
?>

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
          <div class="col-sm-12 col-md-6">
            <form action="" method="post">
            <div id="example1_filter" class="dataTables_filter">
              <label>Select Department</label>
              <select name="department" id="" class="form-control">
                <option value="">Select Department</option>
                <?php
                $res=mysqli_query($con,"SELECT * FROM `department` ORDER BY `department`.`id` ASC");
                while($row=mysqli_fetch_assoc($res)){
                    ?>
                    <option value="<?php echo $row['department'] ?>"><?php echo $row['department'] ?></option>
                <?php }
                ?>
              </select>
            </div>
            <div id="example1_filter" class="dataTables_filter">
              <label>Select Class</label>
              <select name="class" id="" class="form-control">
                <option value="">Select Class</option>
                <option value="q">Qualified</option>
                <option value="f1">Final part 1</option>
                <option value="q">Final part 2</option>
              </select>
            </div> 
            <div id="example1_filter" class="dataTables_filter">
              <label>Select Date<input type="date" class="form-control form-control-sm" placeholder="" aria-controls="example1" id="" name="date"></label>
            </div>       
            <div id="example1_filter" class="dataTables_filter">
              <label><input type="submit" class="btn btn-primary" placeholder="" aria-controls="example1" id="" value="Find" name="find"></label>
            </div>
            </form>
          </div>
       </div>
      <div class="row">
          <div class="col-sm-12 col-md-6">
            <div id="example1_filter" class="dataTables_filter">
              <label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="example1" id="message-search"></label>
            </div>
          </div>
       </div>
        
      </div> 
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">!Do not copy the data, take a secure.</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body" >
                <table id="example2" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>စဉ်</th>
                    <th>ဓာတ်ပုံ</th>
                    <th>ပြန်တမ်းဝင်အမှတ်</th>
                    <th>အဆင့်</th>
                    <th>အမည်</th>
                    <th>အထူးပြု</th>
                    <th>ရက်စွဲ</th>
                    <th>အတန်းတက်ချိန်</th>
                    <th>အတန်းဆင်းချိန်</th>
                    <th>မှတ်ချက်</th>
                  </tr>
                  </thead>
                  <tbody >
                    <?php
                    if(isset($_POST['find']) && $_POST['find']!=''){
                        $department=get_safe_value($con,$_POST['department']);
                        $class=get_safe_value($con,$_POST['class']);
                        $date=get_safe_value($con,$_POST['date']);
                        $find_res= mysqli_query($con,"SELECT * FROM `attended_record` where `date`='$date'");
                        while($find_row=mysqli_fetch_assoc($find_res)){
                            $qr_text=$find_row['qr_text'];
                            $date_on=$find_row['date'];
                            $timein=$find_row['timein'];
                            $timeout=$find_row['timeout'];
                            $day_complete=$find_row['day_complete'];
                            
                    
                      $res=mysqli_query($con,"SELECT * FROM `student` WHERE qr_id='$qr_text' and specialization='$department' and class='$class'");
                      $count=mysqli_num_rows($res);
                      while($row=mysqli_fetch_assoc($res)){
                    ?>
                  <tr id="table">
                    <td> <?php echo $row['id']?></td>
                    <td><img src="<?php echo PRODUCT_IMAGE_SITE_PATH.$row['image'] ?>" alt="" style="width:100px;"></td>
                    <td><?php echo $row['bc'] ?></td>
                    <td><?php echo $row['rank'] ?></td>
                    <td class="students"><?php echo $row['name'] ?></td>
                    <td><?php echo $row['specialization'] ?></td>
                    <td><?php echo $date_on ?></td>
                    <td><?php echo $timein ?></td>
                    <td><?php echo $timeout ?></td>
                    <td>
                        <?php
                        if($day_complete=='0'){
                            echo "<p> Absent </p>";
                        }else if($day_complete=='1'){
                            echo '<p style="color:lightred"> Present </p>';
                        }
                        ?>
                    </td>
                  </tr>
                  <?php  } }  } ?>
              
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
<script>
const table=document.querySelectorAll('#table');
const messageSearch=document.querySelector('#message-search');
const searchMessage=()=>{
    const val =messageSearch.value.toLowerCase();
    console.log(val);
    table.forEach(chat=>{
        let name = chat.querySelector('.students').textContent.toLowerCase();
        if(name.indexOf(val)!=-1){
            chat.style.display='';
        }else{
            chat.style.display='none';
        }
    })
    
}
//Search chat
messageSearch.addEventListener('keyup',searchMessage);
</script>


<?php
require('foot.inc.php');

?>
