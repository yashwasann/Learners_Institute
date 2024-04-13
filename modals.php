<!-- Book a free class modal ends here -->

<div class="modal fade" id="book_a_cls_modal" tabindex="-1" aria-labelledby="book_a_cls_modal" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header border-0">
        <!-- <h5 class="modal-title" id="exampleModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container-fluid">
          <div class="book_a_free_class_div">
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
                    <select id ="state" class="form-select book_a_cls_inpt d-none mb-2" required>
                      <option value="">Select City</option>
                    </select>

                  </div>
                </div>
                <p class="pl-5 mont fw-600">Select the Student's Grade *</p>
                <div class="text-center" role="group" aria-label="Basic radio toggle button group">
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" >
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
                   <label class="btn btn-outline-warning bd-radius" for="btnradio13"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 11 Commerce">11 - C</label>
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio14" autocomplete="off">
                   <label class="btn btn-outline-warning bd-radius" for="btnradio14"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 11 Humanities (Arts)">11 - H</label>
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio15" autocomplete="off">
                   <label class="btn btn-outline-warning bd-radius" for="btnradio15"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Science">12 - S</label>
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio16" autocomplete="off">
                   <label class="btn btn-outline-warning bd-radius" for="btnradio16"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Commerce">12 - C</label>
                   <input type="radio" class="btn-check" name="btnradio" id="btnradio17" autocomplete="off">
                   <label class="btn btn-outline-warning bd-radius" for="btnradio17"data-bs-toggle="tooltip" data-bs-placement="bottom" title="Class 12 Humanities (Arts)">12 - H</label>
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
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>

<!-- Book a free class modal ends here -->

<!--fullpage menu Modal Starts Here -->
<div class="modal fade full-page-menu" id="fullpage_menu" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="fullpage_menuLabel" aria-hidden="true">
   <div class="modal-dialog modal-fullscreen">
      <div class="modal-content bg-menu-custom">
         <div class="modal-header border-0">
            <!-- <h5 class="modal-title" id="fullpage_menuLabel">Modal title</h5> -->
            <button type="button" class="btn-lg btn text-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body text-center">
            <div class="container-fluid">
               <ul class="nav flex-column modal-menu jost">
                  <li class="nav-item">
                     <a class="nav-link text-white" aria-current="page" href="#">HOME</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">NCERT SOLUTIONS</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link text-white" href="#">STUDY MATERIALS</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">CBSE SYLLABUS 2021 - 2022</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-white" href="#">CONTACT US</a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>
<!--fullpage menu Modal Ends Here -->
