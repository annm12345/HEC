<?php
require('connection.inc.php');
require('function.inc.php');
if(isset($_GET['name'])){
    $name=$_GET['name'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Capturing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.min.js" integrity="sha512-dQIiHSl2hr3NWKKLycPndtpbh5iaHLo6MwrXm7F0FM5e+kL2U16oE9uIwPHUl6fQBeCthiEuV/rzP3MiAB8Vfw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/webcamjs/1.0.26/webcam.js" integrity="sha512-AQMSn1qO6KN85GOfvH6BWJk46LhlvepblftLHzAv1cdIyTWPBKHX+r+NOXVVw6+XQpeW4LJk/GTmoP48FLvblQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="dist/js/sweetalert.min.js"></script>
    <script src="dist/js/webcam.min.js"></script>
    <style>
        #uploadPhoto:hover{
            background:lightblue;
            border: none;
        }
    </style>
</head>
<body>
    <section class="bg-light">
        <div class="container-fluid">
            <div class="row text-center align-items-center" style="height: 100vh;">
                <div class="col-sm-12 col-md-6 mx-auto">
                    <h1 class="text-success mb-5">
                        Capture Photos
                    </h1>
                    <button class="btn btn-warning text-white" id="accesscamera" data-bs-toggle="modal" data-bs-target="#photoModal">
                        Capture Photo
                    </button>
                    <p class="text-dark " style="text-align: justify; margin-top: 1rem;">
                        <i class="fa-solid fa-circle-exclamation" style="margin-right: 0.5rem;color: red;"></i>သင်တန်းသားအရာရှိများအနေဖြင့်မိမိ၏မျက်နှာပုံစံများအား ရှုထောာင့်မျိုးစုံမှ စနစ်တကျရိုက်ယူပေးပါ။ File name ထည့်သွင်းရာတွင်လည်း ပြန်တမ်းဝင်အမှတ် ၊ အဆင့် ၊ အမည် တို့ကို ပြည့်စုံမှန်ကန်စွာထည့်သွင်းပေးရန်လိုအပ်ပါသည်။ ဖြည့်သွင်းထားပြီးသော အရာရှိများ အနေဖြင့် ထပ်မံ ရိုက်ကူးရန်မလိုအပ်ပါ။ လိုအပ်ပါက Admin Team မှ သတိပေးသွားမည်ဖြစ်ပါသည်။
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-------MODAL-->

    <div class="modal fade" id="photoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Capture Photo</h1>
              <button type="button" class="btn close" data-bs-dismiss="modal" aria-label="Close"><i class="fa-solid fa-power-off"></i></button>
            </div>
            <div class="modal-body">
              <div class="">
                <div id="my_camera" class="d-block mx-auto rounded overflow-hidden">

                </div>
                <div id="results" class="d-none"></div>
                <form action="" method="post" id="photoForm">
                    <input type="hidden" name="photoStore" id="photoStore">
                </form>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-warning mx-auto text-white" id="takePhoto" onclick="take_snapshot()">Capture Photo</button>
              <button type="button" class="btn btn-warning mx-auto text-white d-none" id="retakePhoto" >Retake</button>
              <button type="submit" class="btn btn-warning mx-auto text-white d-none" id="uploadPhoto" form="photoForm">Upload</button>
            </div>
          </div>
        </div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>

    <script >
      $(document).ready(function(){
    Webcam.set({
        width: 320,
        height: 240,
        image_format: 'jpeg',
        jpeg_quality: 90
    });
    
    $('#accesscamera').on('click',function(){
        
        Webcam.attach('#my_camera');
    });

    $('#retakePhoto').on('click',function(){
        $('#my_camera').addClass('d-block');
        $('#my_camera').removeClass('d-none');

        $('#results').addClass('d-none');

        $('#takePhoto').removeClass('d-none');
        $('#takePhoto').addClass('d-block');

        $('#retakePhoto').removeClass('d-block');
        $('#retakePhoto').addClass('d-none');

        $('#uploadPhoto').removeClass('d-block');
        $('#uploadPhoto').addClass('d-none');
    });

    $('#photoForm').on('submit',function(e){
       e.preventDefault();
        // Get base64 value from <img id='imageprev'> source
        var base64image = document.getElementById("imageprev").src;

        Webcam.upload( base64image, 'photoupload.php?name=<?php echo $name ?>', function(code, text) {
                console.log('Save successfully');
                console.log(text);
        });
       
    });

})

function take_snapshot(){
    //take snapshot
    Webcam.snap( function(data_uri) {
        // display results in page
        document.getElementById('results').className="d-block mx-auto rounded"
        document.getElementById('results').innerHTML = 
         '<img id="imageprev" src="'+data_uri+'"/>';
     } );

     $('#my_camera').removeClass('d-block');
     $('#my_camera').addClass('d-none');

     $('#results').removeClass('d-none');
     
     $('#takePhoto').removeClass('d-block');
     $('#takePhoto').addClass('d-none');

     $('#retakePhoto').removeClass('d-none');
     $('#retakePhoto').addClass('d-block');

     $('#uploadPhoto').removeClass('d-none');
     $('#uploadPhoto').addClass('d-block');


}
    </script>
</body>
</html>