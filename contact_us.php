<?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/php/config.php"); ?>
<!doctype html>
<html lang="en">
<head>
  <title>Contact Us</title>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Favicon -->
  <link rel="shortcut icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" type="image/x-icon" />
  <link rel="apple-touch-icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" />
  <!-- Bootstrap CSS , CSS , Font Awesome-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link href="<?php echo $base_url; ?>/css/main.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="<?php echo $base_url; ?>fonts/montserrat/montserrat_font_link.css">
  <!-- owl slider -->
  <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.theme.default.min.css">
  <!-- Canonical Tag -->
  <link rel="canonical" href="https://www.learnersinstitute.in/contact_us.php">
</head>

<body class="bg-custom">
  <div class="container-fluid">
    <div class="mt-3"></div>
    <a class="navbar-brand" href="https://www.learnersinstitute.in/"><img src="<?php echo $base_url; ?>/img2/logo/header logo.png" width="100px" alt="Learners Institute"> </a>
    <div class="container">
      <h1 class="noe display-3">REACH US TODAY </h1>
      <br>
      <p class="mont size-19">We're Keen on talking <br> about anything with you.
      </p>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
          <h5 class="mont fw-bolder">E MAIL</h5>
          <p><a href="#" class="text-decoration-none text-white size-20 fw-bold jost">contact@learnersinstitute.in</a></p>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
          <h5 class="mont fw-bolder">LOCATION</h5>
          <a href="#" class="text-decoration-none text-white size-20 fw-bold jost">West Delhi, New Delhi-110018,<br> India</a>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
          <h5 class="mont fw-bolder">LEAVE US A MESSAGE</h5>
          <button type="button" name="" class="btn btn-sm border-custom mont fw-bolder rounded-pill btn-light px-4" data-bs-toggle="modal" data-bs-target="#exampleModal">WRITE US!</button>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-sm-12 mb-2">
          <h5 class="mont fw-bolder">PHONE</h5>
          <p><a href="#" class="text-decoration-none text-white size-20 fw-bold jost">+91-9818-54-1998</a></p>
        </div>
        <div class="col-lg-8 col-md-6 col-sm-12 mb-2">
          <h5 class="mont fw-bolder">SOCIAL</h5>
          <p class="text-white size-20 jost">
            <a href="https://wa.me/919818541998" class="text-decoration-none text-white size-20 fw-bold jost contact_social">WHATSAPP</a>
            <a href="https://www.facebook.com/learnersinstitute" class="text-decoration-none text-white size-20 fw-bold jost contact_social">FACEBOOK</a>
            <a href="https://www.instagram.com/learnersinstitute" class="text-decoration-none text-white size-20 fw-bold jost contact_social">INSTAGRAM</a>
            <a href="https://www.twitter.com/learners25" class="text-decoration-none text-white size-20 fw-bold jost contact_social">TWITTER &nbsp; &nbsp;</a>
            <a href="https://www.youtube.com/channel/UCA3thvjzwPTsQNkAqgd4N5g" class="text-decoration-none text-white size-20 fw-bold jost contact_social">YOUTUBE &nbsp; &nbsp;</a>
            <a href="https://g.page/learnersinstitute?share" class="text-decoration-none text-white size-20 fw-bold jost contact_social">GOOGLE</a>
          </p>
        </div>
      </div>

    </div>

  </div>

<style media="screen">
  .contact_social{
    margin-right: 25px!important;
  }
</style>
  <!-- contact us modal starts here -->
  <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
      <div class="modal-content">
        <div class="modal-header border-0">
          <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
           <div class="container-fluid">
              <div class="container">
                <form class="" method="post">
                  <h1 class="noe mb-3" style="font-size: 70px;">Write Us</h1>
                   <div class="row justify-content-center">
                      <div class="col-lg-4 mb-5">
                         <input type="text" name="" value="" class="form-control book_a_cls_inpt" required placeholder="Full Name *">
                      </div>
                      <div class="col-lg-4 mb-5">
                         <input type="text" name="" value="" class="form-control book_a_cls_inpt" pattern="([6-9]{1})([0-9]{9})$" required placeholder="Mobile No.*">
                      </div>
                      <div class="col-lg-4 mb-5">
                         <input type="email" name="" value="" class="form-control book_a_cls_inpt" required placeholder="E - Mail *">
                      </div>
                   </div>
                   <div class="row">
                      <div class="col-lg-4 mb-5">
                        <select class="form-select book_a_cls_inpt" name="" onchange="print_city('state', this.selectedIndex);" id="sts">
                        </select>
                      </div>
                      <!-- do not copy this city code because its custom for only this page.(N.B: you can copy form other page) -->
                      <div class="col-lg-4 mb-5">
                        <select id ="state" class="form-select book_a_cls_inpt  mb-3" required>
                          <option value="">Select City</option>
                        </select>
                      </div>
                      <div class="col-lg-4 mb-5">
                        <select  class="form-select book_a_cls_inpt  mb-3" required>
                          <option value="">Your Query is regarding *</option>
                          <option value="">Online Classes</option>
                          <option value="">Offline Classes</option>
                          <option value="">Re-Scheduling or Cancelling a Class</option>
                          <option value="">Online Study Material</option>
                          <option value="">Others</option>
                        </select>
                      </div>
                   </div>
                   <div class="row justify-content-center mt-5">
                     <div class="col-lg-12">
                       <textarea name="name" rows="4" cols="80" class="form-control book_a_cls_inpt" placeholder="Write your Message *"></textarea>
                     </div>
                   </div>
                   <div class="text-center mt-5">
                        <button type="submit" name="" class="btn btn-primary btn-lg rounded-pill text-black jost fw-bold">SEND MY QUERY</button>
                   </div>
                </form>
              </div>

           </div>
        </div>
      </div>
    </div>
  </div>
  <!-- contact us modal ends here -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="<?php echo $base_url; ?>vendors/owlcarousel/owl.carousel.min.js"></script>
  <script src="<?php echo $base_url; ?>js/slider.js"></script>
  <script src="<?php echo $base_url; ?>js/city.js"></script>
  <script language="javascript">print_state("sts");</script>
</body>

</html>
