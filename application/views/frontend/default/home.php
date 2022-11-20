
<!-- Modal -->
<!-- <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Register</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="login">
                    <form action="#" class="row">
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
                        </div>
                        <div class="col-12">
                            <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
                        </div>
                        <div class="col-12">
                            <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
                        </div>
                        <div class="col-12">
                            <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary">SIGN UP</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Modal -->
<br>
<br>
<!-- <br>
<br> -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content rounded-0 border-0 p-4">
            <div class="modal-header border-0">
                <h3>Login</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" class="row">
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
                    </div>
                    <div class="col-12">
                        <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
                    </div>
                    <div class="col-12">
                        <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">LOGIN</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- hero slider -->
<section class="hero-section overlay bg-cover" style="background-image: url('<?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;">
  <div class="container">
    <div class="hero-slider">
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".1"><?php echo get_frontend_settings('banner_title'); ?></h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".4" style="color:white"><?php echo get_frontend_settings('banner_sub_title'); ?></p>
            <a href="<?php echo site_url('home/courses'); ?>" class="btn btn-primary" data-animation-out="fadeOutRight" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInLeft" data-delay-in=".7">Enroll</a>
          </div>
        </div>
        <br>
        <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                            <div class="input-group-append">
                                <button class="btn" type="submit" style="color:white"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Ondo school of naturopathic medicine</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".4">Train to become a Naturopathic Medicine Doctor (2 years Diploma Certificate).  
              3 years Bachelor of Science Naturopathy in any of our affiliated University overseas</p>
            <a href="<?php echo site_url('home/courses'); ?>" class="btn btn-primary" data-animation-out="fadeOutUp" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
      <!-- slider item -->
      <div class="hero-slider-item">
        <div class="row">
          <div class="col-md-8">
            <h1 class="text-white" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">Your bright future is our mission</h1>
            <p class="text-muted mb-4" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">Help your loved ones and friends achieve optimum health</p>
            <a href="tel:" class="btn btn-primary" data-animation-out="fadeOutDown" data-delay-out="5" data-duration-in=".3" data-animation-in="zoomIn" data-delay-in=".7">Apply now</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /hero slider -->

<!-- banner-feature -->
<section class="bg-gray overflow-md-hidden">
  <div class="container-fluid p-0">
    <div class="row no-gutters">
      <!-- <div class="col-xl-4 col-lg-5 align-self-end">
        <img class="img-fluid w-100" src="images/banner/banner-feature.png" alt="banner-feature">
      </div> -->
      <div class="col-xl-8 col-lg-7">
        <div class="row feature-blocks bg-gray justify-content-between">
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <!-- <i class="ti-book mb-xl-4 mb-lg-3 mb-4 feature-icon"></i> -->
            <h2 class="mb-xl-4 mb-lg-3 mb-4">ONDO SCHOOL OF NATUROPATHIC MEDICINE</h2>
            <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p> -->
          </div>
          <!-- <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-blackboard mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Notice Board</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-agenda mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Our Achievements</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div>
          <div class="col-sm-6 col-xl-5 mb-xl-5 mb-lg-3 mb-4 text-center text-sm-left">
            <i class="ti-write mb-xl-4 mb-lg-3 mb-4 feature-icon"></i>
            <h3 class="mb-xl-4 mb-lg-3 mb-4">Admission Now</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
              et dolore magna aliqua. Ut enim ad</p>
          </div> -->
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /banner-feature -->

<!-- about us -->
<section class="section">
<div class="container">
    <div class="row align-items-center">
      <div class="col-md-6 order-2 order-md-1">
        <h2 class="section-title">Traditional Vs. Alternative Medicine: How Are They Different?</h2>
          <p>People who are nursing an illness or disease may turn to a variety of medical treatments for different reasons. 
            Perhaps they know someone who has recovered through a particular kind of medication or therapy and think that it 
            might work for them, too. It is also possible that they find another treatment more attuned with their health beliefs and life values. </p>
        <a href="<?php echo site_url('home/courses'); ?>" class="btn btn-outline-primary">View all courses</a>
      </div>
      <div class="col-md-6 order-1 order-md-2 mb-4 mb-md-0">
      <marquee> <img class="img-fluid w-100" src="  <?php echo base_url() . 'assets/frontend/theme/images/about/about-us.png'; ?>" alt="about image"></marquee> 
      
      </div>
    </div>
  </div>
</section>
<!-- /about us -->

<!-- courses -->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Our Program</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <!-- <img class="card-img-top rounded-0" src=" <?php echo base_url() . 'assets/frontend/assets/img/program/anatomy.jpeg'; ?>" alt="course thumb"> -->
      <iframe class="card-img-top rounded-0" src="https://www.youtube.com/embed/0K4ZRjkd7bc"></iframe>
      <div class="card-body">
        <!-- <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="">Humanities</a></li>
        </ul> -->
        <a href="#">
          <h4 class="card-title">Anatomy - First Year</h4>
        </a>
        <p class="card-text mb-4"> This is an exceptional certificate program in Natural Medicine for the practitioner 
          seeking to become certified in complementary medicine practice.  </p>
       
      </div>
    </div>
  </div>
  <!-- course item -->

  <!-- course item -->
  
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <!-- <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/assets/img/program/pathology.webp'; ?>" alt="course thumb"> -->
      <iframe class="card-img-top rounded-0" src="https://www.youtube.com/embed/M8IrduJ4Lyw"></iframe>
      <div class="card-body">
        <!-- <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="course-single.html">Humanities</a></li>
        </ul> -->
        <a href="">
          <h4 class="card-title"> Pathology - First Year</h4>
        </a>
        <p class="card-text mb-4">A very good curriculum composed of various courses in Natural Medicine that will effectively educate 
          the student to become a Natural and Alternative Health Practitioner. </p>
       
      </div>
    </div>
  </div>
  <!-- course item -->
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
    <!-- <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/assets/img/program/physiology.jpg'; ?>" alt="course thumb"> -->
    <iframe class="card-img-top rounded-0" src="https://www.youtube.com/embed/nkfunphAKqo"></iframe>
      <div class="card-body">
        <!-- <ul class="list-inline mb-2">
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>02-14-2018</li>
          <li class="list-inline-item"><a class="text-color" href="">Humanities</a></li>
        </ul> -->
        <a href="">
          <h4 class="card-title">Physiology</h4>
        </a>
        <p class="card-text mb-4"> Physiology is the study of how the human body works. It describes the chemistry and physics behind basic body functions, from how molecules behave in cells to how systems of organs work together</p>
       
      </div>
    </div>
  </div>
  <!-- course item -->
  
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">see all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->



<!-- courses 2-->
<section class="section-sm">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">Top Courses</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <a href="<?php echo site_url('home/courses'); ?>" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a>
          </div>
        </div>
      </div>
    </div>
    <!-- course list -->
<div class="row justify-content-center">
    <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
         $cart_items = $this->session->userdata('cart_items');
          foreach ($top_courses as $top_course) : ?>
  <!-- course item -->
  <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>">
  <div class="col-lg-4 col-sm-6 mb-5">
    <div class="card p-0 border-primary rounded-0 hover-shadow">
      <img class="card-img-top rounded-0" src=" <?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>" alt="course thumb">
     
      <div class="card-body">
        <ul class="list-inline mb-2">
        <?php if ($top_course['last_modified'] == "") : ?>
          <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo site_phrase('') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?></li>
                                    <?php else : ?>
                                      <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i><?php echo site_phrase('') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?></li>
                                    <?php endif; ?>
          
          <li class="list-inline-item"><a class="text-color" href="">Author</a></li>
        </ul>
        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>">
          <h4 class="card-title"><?php echo $top_course['title']; ?></h4>
        </a>
        <p class="card-text mb-4"> <?php echo $top_course['short_description']; ?></p>
        <p class="card-text mb-4">
        <?php
             $outcomes = json_decode($top_course['outcomes']);
                foreach ($outcomes as $outcome) : ?>
                    <li><?php echo $outcome; ?></li>
                  <?php endforeach; ?>
        </p>
        
     <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>" class="btn btn-primary btn-sm">Apply now</a>
     &nbsp;
     <?php if ($top_course['is_free_course'] == 1) : ?>
     <a class="btn btn-primary btn-sm"><?php echo site_phrase('free'); ?></a>
     <?php else : ?>
         <?php if ($top_course['discount_flag'] == 1) : ?>
          <a  class="btn btn-primary btn-sm"><small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?><?php echo site_phrase('free'); ?></a>
          <?php else : ?>
            <a class="btn btn-white btn-sm"><?php echo currency($top_course['price']); ?></a>
            <br>
            <a class="text-left text-secondary d-inline-block course-compare" style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;" href="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($top_course['title'])) . '&&course-id-1=' . $top_course['id']); ?>">
                  <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                     </a>
            <?php endif; ?>
               <?php endif; ?>
               
      </div>

      <ul class="list-inline mb-2">
      <?php if ($top_course['course_type'] == 'general') : ?>
          <li class="list-inline-item"><i class="fas fa-play-circle mr-1 text-color"></i>
          <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
        </li>
        <li class="list-inline-item"><i class="far fa-clock mr-1 text-color"></i>
        <?php
                                                $total_duration = 0;
                                                $lessons = $this->crud_model->get_lessons('course', $top_course['id'])->result_array();
                                                foreach ($lessons as $lesson) {
                                                    if ($lesson['lesson_type'] != "other") {
                                                        $time_array = explode(':', $lesson['duration']);
                                                        $hour_to_seconds = $time_array[0] * 60 * 60;
                                                        $minute_to_seconds = $time_array[1] * 60;
                                                        $seconds = $time_array[2];
                                                        $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                    }
                                                }
                                                echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                ?>
      
      </li>
      <?php elseif ($top_course['course_type'] == 'scorm') : ?>
      <li class="list-inline-item"><i class="ti-calendar mr-1 text-color"></i>
      <?= site_phrase('scorm_course'); ?>
      </li>
        <?php endif; ?>
          
        <li class="list-inline-item"><i class="fas fa-closed-captioning mr-1 text-color"></i><?php echo ucfirst($top_course['language']); ?></a></li>
        </ul>
    </div>
    
  </div>
      </a>
      
  <?php endforeach; ?>
</div>
<!-- /course list -->
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">sell all</a>
      </div>
    </div>
  </div>
</section>
<!-- /courses -->

<!-- cta -->
<section class="section bg-primary">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2 class="section-title text-white">Become a Certified Super Caregiver</h2>
        <h4 class="section-title text-white">Introducing HCAP (Health Care Aide Certificate Program)</h4>
        <h6 class="text-white font-secondary mb-0">Enrol for our 12-week Health Care Aide Certification Program, designed to help you gain the requisite skills to become a provider of homecare services at a cost of NGN 300,000</h6>
        <br>
        <a href="<?php echo site_url('home/caregiver'); ?>" class="btn btn-light">Enroll</a>
      </div>
    </div>
  </div>
</section>
<!-- /cta -->

<!-- success story -->
<section class="section bg-cover" data-background="<?php echo base_url() . 'assets/frontend/theme/images/backgrounds/hh.jpeg'; ?>">

  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-sm-4 position-relative success-video">
        <a class="play-btn venobox" href="https://youtu.be/nA1Aqp0sPQo" data-vbtype="video">
          <i class="ti-control-play"></i>
        </a>
      </div>
      <div class="col-lg-6 col-sm-8">
        <div class="bg-white p-5">
          <h2 class="section-title">Department</h2>
          <p>The focus of The Alternative and Traditional medicine (ATM) includes; the organization of training and research programmes in ATM practices and products; 
            sensitization, public education and advocacy with respect to ATM, that will lead to increased confidence in the safety and use of ATM practices; 
            and the promotion of integrative and holistic ATM with allopathic practices. The Institute will be involved in the production and preservation of 
            natural products with medicinal properties to facilitate scientific studies.</p>
            <p>ATM is a strategic and unique Institute that would address the challenges and bridge the gaps with regards to the practice of ATM and its related fields
               in Nigeria. ATM will liaise appropriately with other state institutions and collaborate effectively with all stakeholders and partners in all its 
               activities and functions in order to perform efficiently and ensure that all standards set for ATM practices are followed and targets achieved.</p>
               <p>The Alternative and Traditional medicine (ATM), ATM is comprised of six departments, namely:<br>

<li>Department of Traditional Medicine</li>
<li>Alternative And Traditional Medicine</li>
<li>Department of Natural Products Sourcing</li>
<li>Department of Education and Advocacy</li>
<li>Clinical Department</li>
<li>Drug Production Department</li>
<li>Ultrasound Training</li>

</p>
          
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /success story -->

<!-- events -->
<section class="section bg-gray">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <div class="d-flex align-items-center section-title justify-content-between">
          <h2 class="mb-0 text-nowrap mr-3">We also Teach</h2>
          <div class="border-top w-100 border-primary d-none d-sm-block"></div>
          <div>
            <!-- <a href="" class="btn btn-sm btn-outline-primary ml-sm-3 d-none d-sm-block">see all</a> -->
          </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept1.jpg'; ?>" alt="event thumb">
       <a href="<?php echo site_url('home/sign_up'); ?>">
        <div class="card-date"><span>1</span><br>Enroll Now</div>
        </a>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Learn how To</p>

  <a href="<?php echo site_url('home/sign_up'); ?>"><h4 class="card-title">
Enrol now to learn how to make your own natural medicines</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src=" <?php echo base_url() . 'assets/frontend/assets/img/courses/dept2.jpg'; ?>" alt="event thumb">
        <a href="<?php echo site_url('home/sign_up'); ?>">
        <div class="card-date"><span>2</span><br>Enroll Now</div>
        </a>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Packaging</p>
        

        <a href="<?php echo site_url('home/sign_up'); ?>"><h4 class="card-title">We also teach you how to package these product to be acceptable to users</h4></a>
      </div>
    </div>
  </div>
  <!-- event -->
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src=" <?php echo base_url() . 'assets/frontend/assets/img/courses/dept4.jpg'; ?>" alt="event thumb">
        <a href="<?php echo site_url('home/sign_up'); ?>">
        <div class="card-date"><span>3</span><br>Enroll Now</div>
        </a>
      </div>
      <div class="card-body">
        <!-- location -->
        <p><i class="ti-location-pin text-primary mr-2"></i>Mentorship</p>
        <a href="<?php echo site_url('home/sign_up'); ?>"><h4 class="card-title">You also get to be mentored in the field on scaling, branding etc.</h4></a>
      </div>
    </div>
  </div>
</div>
    <!-- mobile see all button -->
    <div class="row">
      <div class="col-12 text-center">
        <a href="" class="btn btn-sm btn-outline-primary d-sm-none d-inline-block">see all</a>
      </div>
    </div>
  </div>
</section>
<!-- /events -->

<!-- teachers -->
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12">
        <h2 class="section-title">Our Mission</h2>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <!-- <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/theme/images/teachers/teacher-1.jpg'; ?>" alt="teacher"> -->
          
          <div class="card-body">
            <!-- <a href="">
              <h4 class="card-title">Jacke Masito</h4>
            </a> -->
            <p>To provide thorough, practice-orientated training in natural therapies such as Traditional Medicine, Nutrition, 
              Herbal Medicine, Acupuncture, Homeopathy, and Naturopathy.</p>
           
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/theme/images/teachers/owner.jpeg'; ?>" alt="teacher">
          <div class="card-body">
            <!-- <a href=""> -->
              <h4 class="card-title">Dr. Ade Daniels. Nat. PhD ( Hon).</h4>
            <!-- </a> -->
            <p>Founder</p>
            <ul class="list-inline">
              <li class="list-inline-item"><a class="text-color" href="https://facebook.com/themefisher"><i class="ti-facebook"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://twitter.com/themefisher"><i class="ti-twitter-alt"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://github.com/themefisher"><i class="ti-google"></i></a></li>
              <li class="list-inline-item"><a class="text-color" href="https://instagram.com/themefisher/"><i class="ti-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
      <!-- teacher -->
      <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
        <div class="card border-0 rounded-0 hover-shadow">
          <!-- <img class="card-img-top rounded-0" src="<?php echo base_url() . 'assets/frontend/theme/images/teachers/teacher-3.jpg'; ?>" alt="teacher"> -->
          <div class="card-body">
            <!-- <a href="">
              <h4 class="card-title">John Doe</h4>
            </a> -->
            <p>To make sure OSNM courses are widely recognised and respected in the Nigeria and internationally..
        To continuously raise the profile of natural therapies in society</p>
          
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- /teachers -->

<!-- blog -->
<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="mb-0 text-nowrap mr-3"><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></h2>
                <!-- Animated page loader -->
                <?php include "animated-page-loader.php"; ?>
<br>
                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php
                    $latest_courses = $this->crud_model->get_latest_10_course();
                    foreach ($latest_courses as $latest_course) : ?>
                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>" class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="<?php echo $this->crud_model->get_course_thumbnail_url($latest_course['id']); ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo $latest_course['title']; ?></h5>
                                        <p class="instructors">
                                            <?php
                                            if ($latest_course['multi_instructor']) {
                                                $instructor_details = $this->user_model->get_multi_instructor_details_with_csv($latest_course['user_id']);
                                                foreach ($instructor_details as $key => $instructor_detail) {
                                                    echo $instructor_detail['first_name'] . ' ' . $instructor_detail['last_name'];
                                                    echo $key + 1 == count($instructor_details) ? '' : ', ';
                                                }
                                            } else {
                                                $instructor_details = $this->user_model->get_all_user($latest_course['user_id'])->row_array();
                                                echo $instructor_details['first_name'] . ' ' . $instructor_details['last_name'];
                                            }
                                            ?>
                                        </p>
                                        <div class="rating">
                                            <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $latest_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $latest_course['id'])->num_rows();
                                            if ($number_of_ratings > 0) {
                                                $average_ceil_rating = ceil($total_rating / $number_of_ratings);
                                            } else {
                                                $average_ceil_rating = 0;
                                            }

                                            for ($i = 1; $i < 6; $i++) : ?>
                                                <?php if ($i <= $average_ceil_rating) : ?>
                                                    <i class="fas fa-star filled"></i>
                                                <?php else : ?>
                                                    <i class="fas fa-star"></i>
                                                <?php endif; ?>
                                            <?php endfor; ?>
                                            <span class="d-inline-block average-rating"><?php echo $average_ceil_rating; ?></span>
                                        </div>

                                        <div class="d-block">
                                           <a href="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($latest_course['title'])) . '&&course-id-1=' . $latest_course['id']); ?>" > <p class="text-left text-secondary d-inline-block course-compare" style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;" >
                                                <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                            </p></a>
                                            <?php if ($latest_course['is_free_course'] == 1) : ?>
                                                <p class="price text-right d-inline-block float-right"><?php echo site_phrase('free'); ?></p>
                                            <?php else : ?>
                                                <?php if ($latest_course['discount_flag'] == 1) : ?>
                                                    <p class="price text-right d-inline-block float-right"><small><?php echo currency($latest_course['price']); ?></small><?php echo currency($latest_course['discounted_price']); ?></p>
                                                <?php else : ?>
                                                    <p class="price text-right d-inline-block float-right"><?php echo currency($latest_course['price']); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <?php if ($latest_course['last_modified'] == "") : ?>
                                        <div class="last-updated"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['date_added']); ?></div>
                                    <?php else : ?>
                                        <div class="last-updated"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $latest_course['last_modified']); ?></div>
                                    <?php endif; ?>

                                    <div class="course-title">
                                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($latest_course['title'])) . '/' . $latest_course['id']); ?>"><?php echo $latest_course['title']; ?></a>
                                    </div>
                                    <div class="course-meta">
                                        <?php if ($latest_course['course_type'] == 'general') : ?>
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                <?php echo $this->crud_model->get_lessons('course', $latest_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                <?php
                                                $total_duration = 0;
                                                $lessons = $this->crud_model->get_lessons('course', $latest_course['id'])->result_array();
                                                foreach ($lessons as $lesson) {
                                                    if ($lesson['lesson_type'] != "other") {
                                                        $time_array = explode(':', $lesson['duration']);
                                                        $hour_to_seconds = $time_array[0] * 60 * 60;
                                                        $minute_to_seconds = $time_array[1] * 60;
                                                        $seconds = $time_array[2];
                                                        $total_duration += $hour_to_seconds + $minute_to_seconds + $seconds;
                                                    }
                                                }
                                                echo gmdate("H:i:s", $total_duration) . ' ' . site_phrase('hours');
                                                ?>
                                            </span>
                                        <?php elseif ($latest_course['course_type'] == 'scorm') : ?>
                                            <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                        <?php endif; ?>
                                        <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($latest_course['language']); ?></span>
                                    </div>
                                    <div class="course-subtitle"><?php echo $latest_course['short_description']; ?></div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <?php
                                            $outcomes = json_decode($latest_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                                <li><?php echo $outcome; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <?php if (is_purchased($latest_course['id'])) : ?>
                                            <div class="purchased">
                                                <a href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                            </div>
                                        <?php else : ?>
                                            <?php if ($latest_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $latest_course['id']);
                                                } ?>
                                                <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button" onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                            <?php else : ?>
                                                <button type="button" class="btn add-to-cart-btn <?php if (in_array($latest_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $latest_course['id']; ?>" id="<?php echo $latest_course['id']; ?>" onclick="handleCartItems(this)">
                                                    <?php
                                                    if (in_array($latest_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                                </button>
                                            <?php endif; ?>
                                            <button type="button" class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($latest_course['id'])) echo 'active'; ?>" title="Add to wishlist" onclick="handleWishList(this)" id="<?php echo $latest_course['id']; ?>"><i class="fas fa-heart"></i></button>
                                        <?php endif; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    function handleWishList(elem) {

        $.ajax({
            url: '<?php echo site_url('home/handleWishList'); ?>',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

    function handleCartItems(elem) {
        url1 = '<?php echo site_url('home/handleCartItems'); ?>';
        url2 = '<?php echo site_url('home/refreshWishList'); ?>';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('add_to_cart'); ?>");
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("<?php echo site_phrase('added_to_cart'); ?>");
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });
            }
        });
    }

    function handleEnrolledButton() {
        $.ajax({
            url: '<?php echo site_url('home/isLoggedIn'); ?>',
            success: function(response) {
                if (!response) {
                    window.location.replace("<?php echo site_url('login'); ?>");
                }
            }
        });
    }

    $(document).ready(function() {
        if (!/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
            if ($(window).width() >= 840) {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'horizontal',
                    delay: {
                        show: 500,
                        hide: null
                    },
                    width: 330
                });
            } else {
                $('a.has-popover').webuiPopover({
                    trigger: 'hover',
                    animation: 'pop',
                    placement: 'vertical',
                    delay: {
                        show: 100,
                        hide: null
                    },
                    width: 335
                });
            }
        }
    });

    $('.course-compare').click(function(e) {
        e.preventDefault()
        var redirect_to = $(this).attr('redirect_to');
        window.location.replace(redirect_to);
    });
</script>