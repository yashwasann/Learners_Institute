<?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/php/config.php"); ?>
<!doctype html>
<html lang="en">
   <head>
      <title>Teach with Us | Learners Institute</title>
      <!-- Meta Tags -->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="description" content="Join Learners Institute Today & Excel in your Career with a great Competitive Pay.">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" type="image/x-icon" />
      <link rel="apple-touch-icon" href="<?php echo $base_url; ?>img/favicon/favicon.ico" />
      <!-- Bootstrap CSS , CSS , Font Awesome-->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <link href="<?php echo $base_url; ?>/css/main.css" rel="stylesheet" />
      <link href="<?php echo $base_url; ?>/css/vendor.css" rel="stylesheet" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="<?php echo $base_url; ?>fonts/montserrat/montserrat_font_link.css">
      <!-- owl slider -->
      <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.carousel.min.css">
      <link rel="stylesheet" href="<?php echo $base_url; ?>vendors/owlcarousel/owl.theme.default.min.css">
      <!-- Canonical Tag -->
      <link rel="canonical" href="https://www.learnersinstitute.in/teach_with_us.php">
      <!-- OG Meta Tags -->
      <meta property="og:title" content="Teach with Learners Institute">
      <meta property="og:type" content="article">
      <meta property="og:url" content="https://www.learnersinstitute.in/teach_with_us.php">
      <meta property="og:image" content="https://www.learnersinstitute.in/assets/og_img/class_10/science/ch5.png">
      <meta property="og:description" content="Join Learners Institute Today & Excel in your Career with a great Competitive Pay.">
      <meta property="og:site_name" content="LEARNERS'S INSTITUTE">
      <meta property="og:image:type" content="image/png">
      <meta property="og:image:width" content="1080">
      <meta property="og:image:height" content="1080">
   </head>
   <body>
      <?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/nav.php"); ?>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-7 mob_view_center">
               <div class="mt-5"></div>
               <h1 class="noe display-3">Teach with Us</h1>
               <p class="mont chapter_text"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
               <div style="height:5vh">  </div>
               <h1 class="noe text-center"> How it Works ?</h1>
               <br>
               <div class="row">
                  <div class="col-lg-4 mb-2 col-md-6 col-sm-12">
                     <div class="card border-0 text-center">
                       <div class="text-center">
                         <img src="<?php echo $base_url; ?>img/icons/form.webp" alt=""class="" width="150px" height="150px">
                       </div>
                        <div class="card-body">
                           <div class="card-title">
                              <h5 class="mont fw-bold">Application Form</h5>
                           </div>
                           <p class="mont fw-light">Help us to Know about us by filling this form
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mb-2 col-md-6 col-sm-12">
                     <div class="card border-0 text-center">
                       <div class="text-center">
                         <img src="<?php echo $base_url; ?>img/icons/add-video.png" alt=""class="" width="150px" height="150px">
                       </div>
                        <div class="card-body">
                           <div class="card-title">
                              <h5 class="mont fw-bold">Show us your Skills</h5>
                           </div>
                           <p class="mont fw-light">Send us a 5 - 10 min. Video of your Expertise Subject
                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4 mb-2 col-md-6 col-sm-12">
                     <div class="card border-0 text-center">
                       <div class="text-center mt-4">
                         <img src="<?php echo $base_url; ?>img/icons/video-call.png" alt=""class="" width="135px" height="135px">
                       </div>
                        <div class="card-body">
                           <div class="card-title">
                              <h5 class="mont fw-bold">Interview</h5>
                           </div>
                           <p class="mont fw-light">Lets meet in Person or Virtually
                           </p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-5">
               <div class="book_a_free_class_div px-4 py-3">
                  <p class="cls_header mont">Personal Information *</p>
                  <form class="" method="post">
                     <div class="row">
                        <div class="col-lg-6 mb-3">
                           <input type="text" name="" value="" style="text-transform: capitalize;" class="form-control book_a_cls_inpt" required placeholder="Full Name *">
                        </div>
                        <div class="col-lg-6 mb-3">
                           <input type="text" name="" value="" class="form-control book_a_cls_inpt" pattern="([6-9]{1})([0-9]{9})$" required placeholder="Mobile No. *">
                        </div>
                     </div>
                     <div class="row">
                        <div class="col-lg-6 mb-3">
                           <input type="email" name="" value="" class="form-control book_a_cls_inpt" required placeholder="E - Mail *">
                        </div>
                        <div class="col-lg-6 mb-3">
                           <select class="form-select book_a_cls_inpt" name="" onchange="print_city('state', this.selectedIndex);" id="sts">
                           </select>
                        </div>
                     </div>
                     <div class="row">
                       <div class="col-lg-6">
                         <select id ="state" class="form-select book_a_cls_inpt d-none mb-2" required>
                           <option value="">Select City</option>
                         </select>

                       </div>
                     </div>
                     <div class="mt-1">
                        <p class="pl-5 mont fw-600">Higest Qualification * &nbsp; </p>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
                           <label class="form-check-label jost" for="inlineRadio1">College Student</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                           <label class="form-check-label jost" for="inlineRadio2">Graduate</label>
                        </div>
                        <br>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3">
                           <label class="form-check-label jost" for="inlineRadio3">Post Graduate</label>
                        </div>
                     </div>
                     <div class="mt-3">
                        <p class="pl-5 mont fw-600">Experience *</p>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4">
                           <label class="form-check-label jost" for="inlineRadio4">Fresher</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5">
                           <label class="form-check-label jost" for="inlineRadio5">1 - 3 Years</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio6" value="option6">
                           <label class="form-check-label jost" for="inlineRadio6">3 - 5 Years</label>
                        </div>
                        <div class="form-check form-check-inline">
                           <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio7" value="option7">
                           <label class="form-check-label jost" for="inlineRadio7">5 + Years</label>
                        </div>
                     </div>
                     <br>
                     <div class="">
                        <select class="pl-5 mont form-select form-control book_a_cls_inpt" required>
                           <option value="" selected class="jost">Choose the Subject that you prefer to teach *</option>
                           <option value="math_5_8" class="jost">Mathematics : Class 5th - 8th</option>
                           <option value="science_5_8" class="jost">Science : Class 5th - 8th</option>
                           <option value="sst_5_8" class="jost">Social Science : Class 5th - 8th</option>
                           <option value="math_9_10" class="jost">Mathematics : Class 9th - 10th</option>
                           <option value="science_9_10" class="jost">Science : Class 9th - 10th</option>
                           <option value="sst_9_10" class="jost">Social Science : Class 9th - 10th</option>
                           <option value="math_11_12" class="jost">Mathematics : Class 11th - Class 12th</option>
                           <option value="physics_11_12" class="jost">Physics : Class 11th - Class 12th</option>
                           <option value="chemistry_11_12" class="jost">Chemistry : Class 11th - Class 12th</option>
                           <option value="biology_11_12" class="jost">Biology : Class 11th - Class 12th</option>
                           <option value="accounts_11_12" class="jost">Accountancy : Class 11th - Class 12th</option>
                           <option value="bst_11_12" class="jost">Business Studies : Class 11th - Class 12th</option>
                           <option value="eco_11_12" class="jost">Economics : Class 11th - Class 12th</option>
                           <option value="history_11_12" class="jost">History : Class 11th - Class 12th</option>
                           <option value="pol_sci_11_12" class="jost">Political Science : Class 11th - Class 12th</option>
                           <option value="geo_11_12" class="jost">Geography : Class 11th - Class 12th</option>
                           <option value="psychology_11_12" class="jost">Psychology : Class 11th - Class 12th</option>
                           <option value="others" class="jost">Others</option>
                        </select>
                     </div>
                     <br>
                     <div class="d-flex">
                        <div class="mb-3">
                           <p class="pl-5 mont fw-600">Upload your Resume *
                              <br>
                              <small class="size-14 mont fw-light"><i>File Should only be in .docx, .pdf Format</i></small>
                           </p>
                           <input class="form-control form-control-sm book_a_cls_file jost" id="formFileSm" type="file" accept=".doc,.docx,application/msword, application/pdf, text/plain, application/vnd.openxmlformats-officedocument.wordprocessingml.document" required>
                        </div>
                     </div>
                     <br>
                     <div class="text-center">
                        <button type="submit" name="" class="btn btn-primary btn-lg rounded-pill text-black jost fw-bold">Submit My Application</button>
                     </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
      <hr>
      <br><br>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center mb-4">
               <div class="card custom-card-border-with-radius">
                  <div class="row justify-content-center">
                     <div class="col-lg-2 col-md-6 text-center subject_img">
                        <img src="<?php echo $base_url; ?>img/icons/time.png" alt="Class 10 Maths" width="75px" height="75px">
                     </div>
                     <div class="col-lg-10">
                        <p class="mont fw-bold pt-4">Flexible Work <br>
                           Hour
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center mb-4">
               <div class="card custom-card-border-with-radius">
                  <div class="row justify-content-center">
                     <div class="col-lg-2 col-md-6 text-center subject_img">
                        <img src="<?php echo $base_url; ?>img/icons/idea.png" alt="Class 10 Maths" width="75px" height="75px">
                     </div>
                     <div class="col-lg-10">
                        <p class="mont fw-bold pt-4">Learn & Upgrade <br>
                           your Skills
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center mb-4">
               <div class="card custom-card-border-with-radius">
                  <div class="row justify-content-center">
                     <div class="col-lg-2 col-md-6 text-center subject_img">
                        <img src="<?php echo $base_url; ?>img/icons/networking.png" alt="Class 10 Maths" width="75px" height="75px">
                     </div>
                     <div class="col-lg-10">
                        <p class="mont fw-bold pt-4">Connect with <br>
                           Experts
                        </p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 mb-2 text-center mb-4">
               <div class="card custom-card-border-with-radius">
                  <div class="row justify-content-center">
                     <div class="col-lg-2 col-md-6 text-center subject_img">
                        <img src="<?php echo $base_url; ?>img/icons/card.png" alt="Class 10 Maths" width="75px" height="75px">
                     </div>
                     <div class="col-lg-10">
                        <p class="mont fw-bold pt-4">Competitive <br>
                           Pay
                        </p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br>
      <div class="container">
         <h1 class="noe text-center ">Current Openings</h1>
         <br>
         <div class="subject_cards">
            <div class="row justify-content-center">
               <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ">
                  <div class="card card_current_opening">
                     <div class="card-header bg-transparent">
                        <p class="mont mt-3 fw-bolder h5 lh-sm">Computer Science <br> (Python)
                        </p>
                        <p class="mont fw-light pt-2">Class 11 - 12</p>
                     </div>
                     <div class="card-body">
                        <p class="mont"><i>Educator's Responsibilities</i></p>
                        <p class="mont">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="text-center">
                           <a href="#" class="rounded-pill lh-5 btn btn-light border btn-sm fw-bolder two-btn mb-3 jost">
                           APPLY FOR THIS JOB
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ">
                  <div class="card card_current_opening">
                     <div class="card-header bg-transparent">
                        <p class="mont mt-3 fw-bolder h5 lh-sm">Computer Science <br> (Python)
                        </p>
                        <p class="mont fw-light pt-2">Class 11 - 12</p>
                     </div>
                     <div class="card-body">
                        <p class="mont"><i>Educator's Responsibilities</i></p>
                        <p class="mont">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="text-center">
                           <a href="#" class="rounded-pill lh-5 btn btn-light border btn-sm fw-bolder two-btn mb-3 jost">
                           APPLY FOR THIS JOB
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ">
                  <div class="card card_current_opening">
                     <div class="card-header bg-transparent">
                        <p class="mont mt-3 fw-bolder h5 lh-sm">Computer Science <br> (Python)
                        </p>
                        <p class="mont fw-light pt-2">Class 11 - 12</p>
                     </div>
                     <div class="card-body">
                        <p class="mont"><i>Educator's Responsibilities</i></p>
                        <p class="mont">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="text-center">
                           <a href="#" class="rounded-pill lh-5 btn btn-light border btn-sm fw-bolder two-btn mb-3 jost">
                           APPLY FOR THIS JOB
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ">
                  <div class="card card_current_opening">
                     <div class="card-header bg-transparent">
                        <p class="mont mt-3 fw-bolder h5 lh-sm">Computer Science <br> (Python)
                        </p>
                        <p class="mont fw-light pt-2">Class 11 - 12</p>
                     </div>
                     <div class="card-body">
                        <p class="mont"><i>Educator's Responsibilities</i></p>
                        <p class="mont">
                           Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.
                        </p>
                        <div class="text-center">
                           <a href="#" class="rounded-pill lh-5 btn btn-light border btn-sm fw-bolder two-btn mb-3 jost">
                           APPLY FOR THIS JOB
                           </a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="container">
         <div class="profound_teachers">
            <h1 class="noe text-center">Our Profound Teachers</h1>
            <br>
            <div class="row  justify-content-center">
               <!-- teachers profile starts here -->
               <div class="col-lg-5 col-md-6 col-sm-12 mb-3 educator-cards">
                  <div class="card">
                     <div class="card-body">
                        <h2 class="educator_name mont fw-bolder">Yash Wasan</h2>
                        <p class="educator_degree mont">Math, Coding Educator</p>
                        <!-- <div class="educator_image ">
                           <img src="<?php //echo $base_url; ?>img/icons/" alt="">
                        </div> -->
                        <div class="row">
                           <div class="col">
                              <p class="educator_intro jost"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <b>dolore magna</b> </p>
                           </div>
                           <ul class="nav flex-column social-icon-gorup">
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link " href="#"><i class="fab fa-whatsapp"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/book.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>500+</b> </h6>
                                 <p class="mt-0"><small>Students Taught</small> </p>
                              </div>
                           </div>
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/certificate.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>M.Tech (CSE)</b> </h6>
                                 <p class="mt-0"><small>Highest Qualification</small> </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- teachers profile ends here -->
               <!-- teachers profile starts here -->
               <div class="col-lg-5 col-md-6 col-sm-12 mb-3 educator-cards">
                  <div class="card">
                     <div class="card-body">
                        <h2 class="educator_name mont fw-bolder">Mr. Mohit</h2>
                        <p class="educator_degree mont">Chemistry Educator</p>
                        <!-- <div class="educator_image ">
                           </div> -->
                        <div class="row">
                           <div class="col">
                              <p class="educator_intro jost"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <b>dolore magna</b> </p>
                           </div>
                           <ul class="nav flex-column social-icon-gorup">
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link " href="#"><i class="fab fa-whatsapp"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/book.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>800+</b> </h6>
                                 <p class="mt-0"><small>Students Taught</small> </p>
                              </div>
                           </div>
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/certificate.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>M.Tech, M.Phil, B.eD</b></h6>
                                 <p class="mt-0"><small>Highest Qualification</small> </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- teachers profile ends here -->
            </div>
            <div class="row  justify-content-center">
               <!-- teachers profile starts here -->
               <div class="col-lg-5 col-md-6 col-sm-12 mb-3 educator-cards">
                  <div class="card">
                     <div class="card-body">
                        <h2 class="educator_name mont fw-bolder">Prince Panwar</h2>
                        <p class="educator_degree mont">Accounts & Economics Educator</p>
                        <!-- <div class="educator_image ">
                           <img src="<?php //echo $base_url; ?>img/icons/" alt="">
                        </div> -->
                        <div class="row">
                           <div class="col">
                              <p class="educator_intro jost"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <b>dolore magna</b> </p>
                           </div>
                           <ul class="nav flex-column social-icon-gorup">
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link " href="#"><i class="fab fa-whatsapp"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/book.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>300+</b> </h6>
                                 <p class="mt-0"><small>Students Taught</small> </p>
                              </div>
                           </div>
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/certificate.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>M.Com</b> </h6>
                                 <p class="mt-0"><small>Highest Qualification</small> </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- teachers profile ends here -->
               <!-- teachers profile starts here -->
               <div class="col-lg-5 col-md-6 col-sm-12 mb-3 educator-cards">
                  <div class="card">
                     <div class="card-body">
                        <h2 class="educator_name mont fw-bolder">Pooja Pathania</h2>
                        <p class="educator_degree mont">NPTT Educator</p>
                        <!-- <div class="educator_image ">
                           </div> -->
                        <div class="row">
                           <div class="col">
                              <p class="educator_intro jost"> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et <b>dolore magna</b> </p>
                           </div>
                           <ul class="nav flex-column social-icon-gorup">
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-facebook"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link" href="#"><i class="fab fa-linkedin"></i></a>
                              </li>
                              <li class="nav-item social-icon">
                                 <a class="nav-link " href="#"><i class="fab fa-whatsapp"></i></a>
                              </li>
                           </ul>
                        </div>
                        <div class="row justify-content-center">
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/book.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>600+</b> </h6>
                                 <p class="mt-0"><small>Kids Taught</small> </p>
                              </div>
                           </div>
                           <div class="col d-flex">
                              <span class="icon">
                              <img src="<?php echo $base_url; ?>img/icons/certificate.png" alt="" height="40px" width="40px">
                              </span>
                              <div class="content">
                                 <h6 class="mb-0"><b>M.Com, M.eD</b> </h6>
                                 <p class="mt-0"><small>Highest Qualification</small> </p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- teachers profile ends here -->
            </div>
         </div>
      </div>
      <div class="container">
        <div class="">
           <h1 class="noe text-center">Perks & Benefits</h1>
           <br>
           <div class="row justify-content-center">
             <div class="col-lg-6">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </div>
             <div class="col-lg-6">
               <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
             </div>
           </div>
        </div>
      </div>
        <div class="container what_student_saying">
          <h1 class="noe text-center ">What Students are Saying About Us</h1>
          <br>
          <div class="owl-carousel owl-theme mt-2">
             <div class="card item py-3 card_1 mb-4 mt-4 px-3">
                <div class="card-body text-center">
                   <p class="card-title text-dark mont">
                      This Institute was very good I studied information practice from yash sir they teach me very nicely and the content in this was very easy to understand and learn 😊thank you!
                   </p>
                   <p class="text-black mont fw-light">Prerna Chadha <br>Class 12 Student</p>
                </div>
             </div>
             <div class="card item py-3 card_2 mb-4 mt-4 px-3">
                <div class="card-body text-center">
                   <p class="card-title text-dark mont">
                      This Institute was very good I studied information practice from yash sir they teach me very nicely and the content in this was very easy to understand and learn 😊thank you!
                   </p>
                   <p class="text-black mont fw-light">Prerna Chadha <br>Class 12 Student</p>
                </div>
             </div>
             <div class="card item py-3 card_3 mb-4 mt-4 px-3">
                <div class="card-body text-center">
                   <p class="card-title text-dark mont">
                      This Institute was very good I studied information practice from yash sir they teach me very nicely and the content in this was very easy to understand and learn 😊thank you!
                   </p>
                   <p class="text-black mont fw-light">Prerna Chadha <br>Class 12 Student</p>
                </div>
             </div>
             <div class="card item py-3 card_4 mb-4 mt-4 px-3">
                <div class="card-body text-center">
                   <p class="card-title text-dark mont">
                      This Institute was very good I studied information practice from yash sir they teach me very nicely and the content in this was very easy to understand and learn 😊thank you!
                   </p>
                   <p class="text-black mont fw-light">Prerna Chadha <br>Class 12 Student</p>
                </div>
             </div>
          </div>
          <div class="text-center">
            <button type="button" class="rounded-pill btn btn-primary text-reset  btn-lg fw-bolder res_pad book_a_free_class_btn jost"><a href="#" class="text-reset text-decoration-none">BOOK A FREE CLASS</a></button>
          </div>
        </div>
        <br>
      <!-- Footer Starts Here -->
      <?php include($_SERVER['DOCUMENT_ROOT']."/learnersV5/footer.php"); ?>
      <!-- footer ends here -->
      <!-- Option 1: Bootstrap Bundle with Popper -->
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="<?php echo $base_url; ?>vendors/owlcarousel/owl.carousel.min.js"></script>
      <script src="<?php echo $base_url; ?>js/slider.js"></script>
      <script src="<?php echo $base_url; ?>js/city.js"></script>
      <script language="javascript">print_state("sts");</script>
   </body>
</html>
