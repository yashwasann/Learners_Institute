<?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/php/config.php"); ?>
<!doctype html>
<html lang="en">
   <head>
      <title>Share Your Experience | Learners Institute</title>
      <!-- Meta Tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Book a Free 60 Min. Trial Class today with the Top Educators at Learners Institute.">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" type="image/x-icon" />
      <link rel="apple-touch-icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" />
      <!-- Bootstrap CSS , CSS , Font Awesome-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="<?php echo $base_url; ?>/css/main.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>fonts/montserrat/montserrat_font_link.css">
      <!-- owl slider -->
      <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.theme.default.min.css">
      <!-- Canonical Tag -->
      <link rel="canonical" href="https://www.learnersinstitute.in/ncert_solutions/class_10/science/chapter_5.php">
      <!-- OG Meta Tags -->
      <meta property="og:title" content="Free Trial Class">
      <meta property="og:type" content="article">
      <meta property="og:url" content="https://www.learnersinstitute.in/booking.php">
      <meta property="og:image" content="https://www.learnersinstitute.in/assets/og_img/booking.svg">
      <meta property="og:description" content="Book a Free 60 Min. Trial Class Today with Learners Institute.">
      <meta property="og:site_name" content="LEARNERS'S INSTITUTE">
      <meta property="og:image:type" content="image/svg">
   </head>
   <body class="book_cls_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-4 mob_view_center">
               <div class="mt-3"></div>
               <a class="navbar-brand" href="https://www.learnersinstitute.in/"><img src="<?php echo $base_url; ?>/img/logo/learners_header_logo.webp" width="250" alt="Learners Institute"> </a>
               <br>
               <h1 class="noe display-3 mt-5 pt-3">Share Your <br> Experience</h1>
            </div>
            <div class="col-lg-8 mt-5">
               <div class="book_a_free_class_div px-4 py-3">
                  <p class="cls_header mont">Personal Information *</p>
                  <form method="post">
                     <div class="row">
                        <div class="col-lg-4 mb-3">
                           <input type="text" name="name" value="" class="form-control book_a_cls_inpt" required placeholder="Name *">
                        </div>
                        <div class="col-lg-4 mb-3">
                           <input type="tel" name="contact" value="" class="form-control book_a_cls_inpt" pattern="([6-9]{1})([0-9]{9})$" required placeholder="Mobile No. *">
                        </div>
                        <div class="col-lg-4 mb-3">
                           <input type="email" name="email" value="" class="form-control book_a_cls_inpt" required placeholder="E - Mail *">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-4 mb-3">
                          <input type="text" name="" value="" class="form-control book_a_cls_inpt" required placeholder="School Name *">
                        </div>
                        <div class="col-lg-4 mb-3">
                          <input type="text" name="" value="" class="form-control book_a_cls_inpt" required placeholder="Teacher Name *">
                        </div>
                        <div class="col-lg-4 mb-3">
                           <select class="form-select book_a_cls_inpt" name="" onchange="print_city('state', this.selectedIndex);" id="sts">

                           </select>
                     </div>
                     <div class="row">
                       <div class="col-lg-4 mb-3">
                         <select id ="state" class="form-select book_a_cls_inpt d-none" required>
                           <option value="">Select City</option>
                         </select>

                       </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6 mb-3">
                          <select class="form-select book_a_cls_inpt jost" name="" required>
                             <option value="" class="">Class you Studies with Us </option>
                             <option value="">1</option>
                             <option value="">2</option>
                             <option value="">3</option>
                             <option value="">4</option>
                          </select>
                       </div>
                       <div class="col-lg-6 mb-3">
                          <select class="form-select book_a_cls_inpt jost" name="" required>
                             <option value="" class="">Subject you Studies with Us </option>
                             <option value="">1</option>
                             <option value="">2</option>
                             <option value="">3</option>
                             <option value="">4</option>
                          </select>
                       </div>
                     </div>
                     <br><br><br>
                     <div class="row">
                       <div class="col-lg-6">
                         <p class="pl-5 mont fw-600">
                           Upload your Video Explaining your Experience with Us *
                         </p>
                       </div>
                       <div class="col-lg-6 text-center mb-4 upload_btn_mob">
                         <button type="button" name="" class="btn two-btn rounded-pill btn-md  fw-bolder jost" id="front_end_file_btn">UPLOAD VIDEO <i class="fas fa-upload"></i></button>
                       </div>
                     </div>
                     <br>
                     <input class="form-control form-control-sm book_a_cls_file jost d-none" id="upload_video_hidden_btn" type="file" accept="video/x-msvideo" required>

                     <div class="row">
                       <div class="col-lg-12">
                         <textarea name="name" rows="4" cols="80" class="form-control book_a_cls_inpt" placeholder="Write your Message *."></textarea>
                       </div>
                     </div>

                     <div class="text-center mt-3">
                        <a href="#" name="" class="btn btn-primary btn-md rounded-pill text-black jost fw-bold">SHARE MY STORY</a>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <br>
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="<?php echo $base_url; ?>js/city.js"></script>
      <script language="javascript">print_state("sts");</script>

      <!-- customjs -->
      <script type="text/javascript">
      $("#front_end_file_btn").click(function(){
          $("#upload_video_hidden_btn").click();

      });
      </script>
   </body>
</html>
