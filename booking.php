<?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/php/config.php"); ?>
<!doctype html>
<html lang="en">

<head>
  <title>Book a Free Trial Class | Learners Institute</title>
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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"
    referrerpolicy="no-referrer" />
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
  <!-- <script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f57e694e13a3600124619dd&product=sticky-share-buttons' async='async'></script> -->
</head>

<body class="book_cls_bg">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 mob_view_center">
        <div class="mt-3"></div>
        <a class="navbar-brand" href="https://www.learnersinstitute.in/"><img src="<?php echo $base_url; ?>/img/logo/learners_header_logo.webp" width="250" alt="Learners Institute"> </a>
        <br>
        <h1 class="noe display-3 mt-5 pt-3">Book a Free<br>Trial Class</h1>
      </div>
      <div class="col-lg-8">
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
                <select class="form-select book_a_cls_inpt jost" name="" required>
                  <option value="" class="">Preferred Time Slot </option>
                  <option value="9_12">9 AM - 12 PM</option>
                  <option value="12_3">12 PM - 3 PM</option>
                  <option value="3_6">3 PM - 6 PM</option>
                  <option value="6_9">6 PM - 9 PM</option>
                </select>
              </div>
              <div class="col-lg-4 mb-3">
                <select class="form-select book_a_cls_inpt" name="" onchange="print_city('state', this.selectedIndex);" id="sts">
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-4">
                <select id="state" class="form-select book_a_cls_inpt d-none mb-2" required>
                  <option value="">Select City</option>
                </select>

              </div>
            </div>
            <p class="pl-5 mont fw-600">Select the Student's Grade *</p>
            <div class="text-center" role="group" aria-label="Basic radio toggle button group">
              <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio1">KG</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio2">1</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio3">2</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio4">3</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio5">4</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio6">5</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio7">6</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio8">7</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio9" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio9">8</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio10" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio10">9</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio11" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio11">10</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio12" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio12" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 11 Science">11 - S</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio13" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio13" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 11 Commerce">11 - C</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio14" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio14" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 11 Humanities (Arts)">11 - H</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio15" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio15" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Science">12 - S</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio16" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio16" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Commerce">12 - C</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio17" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio17" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Humanities (Arts)">12 - H</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio18" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio18">IIT - JEE</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio19" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio19">NEET</label>
              <input type="radio" class="btn-check" name="btnradio" id="btnradio20" autocomplete="off">
              <label class="btn btn-outline-warning bd-radius" for="btnradio20">UG Courses</label>
            </div>
            <br>
            <div class="select_subject">
              <p class="pl-5 mont fw-600">Select the Subject *</p>
              <div class="text-center" role="group" aria-label="Basic checkbox toggle button group">
                <input type="checkbox" class="btn-check" id="btncheck1" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck1">English</label>
                <input type="checkbox" class="btn-check" id="btncheck2" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck2">Math</label>
                <input type="checkbox" class="btn-check" id="btncheck3" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck3">Applied Math</label>
                <input type="checkbox" class="btn-check" id="btncheck4" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck4">Science</label>
                <input type="checkbox" class="btn-check" id="btncheck5" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck5">Social Science</label>
                <input type="checkbox" class="btn-check" id="btncheck6" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck6">Physics</label>
                <input type="checkbox" class="btn-check" id="btncheck7" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck7">Chemistry</label>
                <input type="checkbox" class="btn-check" id="btncheck8" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck8">Biology</label>
                <input type="checkbox" class="btn-check" id="btncheck9" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck9">Computer Science</label>
                <input type="checkbox" class="btn-check" id="btncheck10" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck10">Typography & Computer Application</label>
                <input type="checkbox" class="btn-check" id="btncheck11" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck11">Accountancy</label>
                <input type="checkbox" class="btn-check" id="btncheck12" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck12">Business Studies</label>
                <input type="checkbox" class="btn-check" id="btncheck13" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck13">Economics</label>
                <input type="checkbox" class="btn-check" id="btncheck14" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck14">Informative Practices</label>
                <input type="checkbox" class="btn-check" id="btncheck15" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck15">History</label>
                <input type="checkbox" class="btn-check" id="btncheck16" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck16">Political Science</label>
                <input type="checkbox" class="btn-check" id="btncheck17" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck17">Geography</label>
                <input type="checkbox" class="btn-check" id="btncheck18" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck18">Sociology</label>
                <input type="checkbox" class="btn-check" id="btncheck19" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck19">Psychology</label>
                <input type="checkbox" class="btn-check" id="btncheck20" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck20">Coding</label>
                <input type="checkbox" class="btn-check" id="btncheck21" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck21">Bank Exams</label>
                <input type="checkbox" class="btn-check" id="btncheck22" autocomplete="off">
                <label class="btn btn-outline-warning rounded-pill" for="btncheck22">Others</label>
              </div>
            </div>
            <div class="d-flex mt-4">
              <p class="pl-5 mont fw-600">Do you have PC/Laptop ? * &nbsp; </p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                <label class="form-check-label jost" for="inlineRadio1">Yes</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label jost" for="inlineRadio2">No</label>
              </div>
            </div>
            <div class="d-flex mt-1 mob_flex">
              <p class="pl-5 mont fw-600">Teacher Preference * &nbsp; </p>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                <label class="form-check-label jost" for="inlineRadio3">Male</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                <label class="form-check-label jost" for="inlineRadio4">Female</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                <label class="form-check-label jost" for="inlineRadio5">Prefer not to say</label>
              </div>
            </div>
            <div class="text-center mt-3">
              <button type="submit" name="" class="btn btn-primary btn-md rounded-pill text-black jost fw-bold">BOOK MY CLASS NOW</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <br>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer">
  </script>
  <script src="<?php echo $base_url; ?>js/city.js"></script>
  <script language="javascript">
    print_state("sts");
  </script>
  <script type="text/javascript">
    var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
    var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
      return new bootstrap.Tooltip(tooltipTriggerEl)
    });
  </script>
</body>

</html>
