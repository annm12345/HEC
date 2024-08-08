<?php
require ('top.php');
$msg='';

if(isset($_POST['text'])){
    $text=get_safe_value($con,$_POST['text']);
    date_default_timezone_set('Asia/Yangon');
    $date=date('Y-m-d');
    $time=date('H:i:s');
    $res=mysqli_query($con,"SELECT * FROM `student` WHERE qr_id='$text'");
    $count=mysqli_num_rows($res);
    if($count>0){
        $scan_res=mysqli_query($con,"SELECT * FROM `attended_record` WHERE qr_text='$text' AND date='$date' AND day_complete='0'");
        if(mysqli_num_rows($scan_res)>0){
            mysqli_query($con,"UPDATE `attended_record` SET `timeout`='$time',`day_complete`='1' WHERE qr_text='$text' AND date='$date' AND day_complete='0'");
            $msg="Successfully Time Out!";
        }else{
            mysqli_query($con,"INSERT INTO `attended_record`(`qr_text`, `timein`, `date`, `day_complete`) VALUES ('$text','$time','$date','0')");
            $msg="Successfully IN!";  
        }
    
    
}
}



?>
<style>
    table{
        width:100%;
        border-collapse:collapse;
    }
    table th{
        color:#fff;
        background:#000;
    }
    table td,table th{
        border:1px solid #ffff;
        padding: 20px;
    }
    @media screen and (max-width:1024px) {

        table td:nth-child(1),table th:nth-child(1),table td:nth-child(3),table td:nth-child(4),table th:nth-child(3),th:nth-child(4){
            display:none;
        }
    }
    @media screen and (max-width:600px) {

        table td:nth-child(1),table th:nth-child(1),table td:nth-child(2),table td:nth-child(3),table td:nth-child(4),table th:nth-child(2),table th:nth-child(3),th:nth-child(4){
            display:none;
        }
        table td:nth-child(6),table th:nth-child(6){
            display:none;
        }
    }


</style>

<section class="Scan" style="margin-bottom:1rem;">
    <div class="container scan_container">
        <div>
            <video src="" id="preview" width="100%" autoplay></video>
        </div>
        <div>
            <form action="" method="post">
                <label for="">SCAN QR CODE</label>
                <input type="text" name="text" id="text" readonny="" placeholder="Scan qrcode">
            </form>
            
        </div>
    </div>
    <div class="container record_container" style="margin-top:1rem;">
    <table id="table" class="table table-bordered table-hover" >
                  <thead>
                  <tr>
                    <th>စဉ်</th>
                    <th>ဓာတ်ပုံ</th>
                    <th>ပြန်တမ်းဝင်အမှတ်</th>
                    <th>အဆင့်</th>
                    <th>အမည်</th>
                    <th>အထူးပြု</th>
                    <th>Time In</th>
                    <th>Time Out</th>
                    <th>Date</th>
                  </tr>
                  </thead>
                  <tbody >
                    <?php
                      $scan_res=mysqli_query($con,"SELECT `qr_text`,`timein`,`timeout`,`date` FROM `attended_record` WHERE DATE(date)=CURDATE()");
                      while($scan_row=mysqli_fetch_assoc($scan_res)){
                        $student_id=$scan_row['qr_text'];
                        $timeIn=$scan_row['timein'];
                        $timeOut=$scan_row['timeout'];
                        $date=$scan_row['date'];
                        $res=mysqli_query($con,"SELECT * FROM `student` WHERE qr_id='$student_id'");
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
                    <td><?php echo $timeIn ?></td>
                    <td><?php echo $timeOut ?></td>
                    <td><?php echo $date?></td>
                  </tr>
                  <?php  } } ?>
              
                  </tbody>
                </table>
    </div>
    
</section>

<script>
    let scanner = new Instascan.Scanner({video:document.getElementById('preview')});
    Instascan.Camera.getCameras().then(function(cameras){
        if(cameras.length > 0){
            scanner.start(cameras[0]);
        }else{
            alert('No Camera Found');
        }
    }).catch(function(e){
        console.console.error(e);
    });

    scanner.addListener('scan',function(c){
        document.getElementById('text').value=c;
        document.forms[0].submit();
    });
</script>

<?php
require ('foot.php');
?>