

<section class="home-banner-area" style="background-image: url('<?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>');
        background-position: center center;
        background-size: cover;
        background-repeat: no-repeat;
        padding: 170px 0 130px;
        color: #fff;">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <div class="home-banner-wrap">
                    <h2 style="color:white"><?php echo get_frontend_settings('banner_title'); ?></h2>
                    <p><?php echo get_frontend_settings('banner_sub_title'); ?></p>
                    <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="query" placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                            <div class="input-group-append">
                                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>



<!-- <section id="hero-banner" class="hero-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-12 col-xs-12">
            <article class="hero__article-block">
              <h1 class="article__block--title"><?php echo get_frontend_settings('banner_title'); ?></h1>
              <p class="article__block--subtitle"><?php echo get_frontend_settings('banner_sub_title'); ?></p>
              <p class="article__block--contact"> +234 906 962 4263</p>
            </article>
          </div>
          <div class="col-lg-6 col-sm-12 col-xs-12 ">
            <div class="hero__banner-img d-none d-lg-block d-xl-block">
              <img class="img-fluid" src=" <?= base_url("uploads/system/" . get_frontend_settings('banner_image')); ?>">
              <img class="img-fluid" src=" <?php echo base_url() . 'assets/frontend/assets/img/project/banner-profile.png'; ?>">
             
            </div>
          </div>

          <div class="col-lg-3 col-sm-12 col-xs-12">
            <article class="hero__article-short-course-list">
              <div class="course__list--item">
                <p class="course__duration--title">2 MONTHS/NIGHT SHIFT</p>
                <h4 class="course__title"><a href="#" class="">Word Relay</a></h4>
                <p class="course__description">Study with Nigeria No.1 Training Provider in Natural Therapies and medicines.
                </p>
              </div>
              <div class="course__list--item">
                <p class="course__duration--title">2 MONTHS/NIGHT SHIFT</p>
                <h4 class="course__title"><a href="#" class="">Word Relay</a></h4>
                <p class="course__description">We specialize primarily in training prospective students in the knowledge of producing traditional medicines, 
                    packaging and marketing it to people who need them.
                </p>
              </div>
              <div class="course__list--item">
                <p class="course__duration--title">2 MONTHS/NIGHT SHIFT</p>
                <h4 class="course__title"><a href="#" class="">Word Relay</a></h4>
                <p class="course__description">We also certify them which give them the ability to practice anywhere in the country.
                </p>
              </div>
            </article>

           <a href="<?php echo site_url('home/courses'); ?>"><button class="btn btn-primary course--btn" type="button">More Courses</button></a> 
          </div>
        </div>
      </div>
    </section> -->

    <section id="find-your-course-by-search" class="courses-by-search pb-5">
      <div class="container">
        <div class="lms-courses-wrapper">
          <div class="row g-0">
            <div class="col-xs-12  col-sm-12 col-md-7 col-lg-7 bg-light ">
              <div class="course-info p-5">
                <article class="course--details">
                  <h3 class="mb-4">Welcome to<br>
                    <span>Ondo state school of Naturopathic  medicine</span>
                  </h3>
                  <p class="mb-4">Natural Medicine has a long tradition in all, and recent research has begun to prove some of the huge benefits of using natural products. 
                    Whereas much modern medicine has unwelcome side effects, natural products can provide a gentle, yet powerful solution to wide range of physical and emotional
                     problems. As well as relieving symptoms, natural Medicine also works on a deeper level to help patients return to full harmony. Natural Medicine is becoming 
                     ever more popular as more and more people seek out to be CERTIFIED.</p>
                  <a href="<?php echo site_url('home/courses'); ?>" class="mb-4">Browse All Course</a>
                </article>

                <div class="courses-description mt-4">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                      <div class="course-schedule mb-4">
                        <div class="course--location">
                          <div class="media d-flex flex-row">
                            <div class="me-3">
                              <i class="fas fa-clock"></i>
                            </div>
                            <div class="media-body">
                              <h5 class="mt-0">10.30 AM - 07:30 PM</h5>
                              <p>Monday - Friday</p>
                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="col-xs-12  col-sm-12 col-md-7 col-lg-7">
                      <div class="course-location">
                        <div class="media d-flex flex-row">
                          <div class="me-3">
                            <i class="fas fa-globe-americas"></i>
                          </div>
                          <div class="media-body">
                            <h5 class="mt-0">6TH FLOOR, NIGERIA CV6 8FL, ONDO STATE</h5>
                            <p>Office Address</p>
                          </div>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xs-12  col-sm-12 col-md-5 col-lg-5 search-bgcolor">
              <div class="course--searching p-5">
                <div class="course--details">
                  <h3 class="mb-3">Find your course</h3>
                  <form class="" action="<?php echo site_url('home/search'); ?>" method="get">
                  
                 

                    <div class="col-12 ">
                      <label for="course--search" class="form-label">Search</label>
                  
                      <input type="text" class="form-control" id="course--search" name="query" placeholder="<?php echo site_phrase('what_do_you_want_to_learn'); ?>?">
                    </div>
                <br>
                    <div class="col-12">
                      <button type="submit" class="btn btn-primary find__course--btn">Search Course</button>
                    </div>
                  </form>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<section id="admission-course-details" class="admission-course-info py-5 mt-5">
<div class="container">
<div class="admission-student-counter">
               <div class="row">
                   <div class="col-6 col-lg-3">
                      <div class="home-fact-box mr-md-auto mr-auto">
                       <i class="fas fa-bullseye float-left"></i>
                     <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500"><?php $courses = $this->crud_model->get_courses(); ?></h6>
                        <p class="m-0px font-w-600"><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo $number_of_courses . ' ' . site_phrase('online_courses'); ?>
                        <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                     </div>
                  </div>
                    </div>

                   <div class="col-6 col-lg-3">
                   <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-check float-left"></i>
                     <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500"> <?php $courses = $this->crud_model->get_courses(); ?></h6>
                        <p class="m-0px font-w-600"><?php echo site_phrase('expert_instruction'); ?></p>
                        <p><?php echo site_phrase('find_the_right_course_for_you'); ?></p>
                     </div>
                  </div>
                    </div>

                    <div class="col-6 col-lg-3">
                    <div class="home-fact-box mr-md-auto mr-auto">
                    <i class="fa fa-clock float-left"></i>
                     <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500"> <?php $courses = $this->crud_model->get_courses(); ?></h6>
                        <p class="m-0px font-w-600"><?php echo site_phrase('lifetime_access'); ?></p>
                        <p><?php echo site_phrase('learn_on_your_schedule'); ?></p>
                     </div>
                  </div>
                    </div>

                    <div class="col-6 col-lg-3">
                      <div class="home-fact-box mr-md-auto mr-auto">
                       <i class="fas fa-bullseye float-left"></i>
                     <div class="count-data text-center">
                        <h6 class="count h2" data-to="500" data-speed="500"> <?php $courses = $this->crud_model->get_courses(); ?></h6>
                        <p class="m-0px font-w-600"><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo $number_of_courses . ' ' . site_phrase('online_courses'); ?>
                        <p><?php echo site_phrase('explore_a_variety_of_fresh_topics'); ?></p>
                     </div>
                  </div>
                    </div>

                  
               </div>
            </div>
</div>
</section>
<section id="program-section" class="course-program pb-5 mt-5">
      <div class="container">
        <div class="program--header mb-5">
          <h3>Our Program</h3>
        </div>
        <div class="row no-gutters">
          <div class="col-xl-6 col-12 mb-5 mb-xl-0">
            <div class="media media-news">
              <div class="media-img">
                <img src="   <?php echo base_url() . 'assets/frontend/assets/img/program/img2.png'; ?>" alt="Generic placeholder image">
             
              </div>
              <div class="media-body">
                <!-- <span class="media-date">25 july 2017</span> -->
                <h5 class="mt-0 sep">CERTIFICATE IN NATURAL MEDICINE (C.N.M)</h5>
                <p class="mb-3">This is an exceptional certificate program in Natural Medicine for the practitioner seeking to become certified in complementary medicine practice. 
                    The course takes us through some of the modern concepts and principle in the field of natural medicine</p>
                <!-- <a href="#">View More</a> -->
              </div>
            </div>
          </div>
          
          <div class="col-xl-6 col-12">
            <div class="media media-news">
              <div class="media-img">
                <img src=" <?php echo base_url() . 'assets/frontend/assets/img/program/img3.jpg'; ?>" alt="Generic placeholder image">
               
              </div>
              <div class="media-body">
                <!-- <span class="media-date">13 August 2018</span> -->
                 <h5 class="mt-0 sep"> DIPLOMA IN NATURAL MEDICINE ( D.N.M)</h5>
                <p class="mb-3">This is an impressive professional diploma program in Natural Medicine with a major focus in Functional Nephropathy.
                It comes with a science-based curriculum that combines Naturopathy and Functional Medicine. </p>
                <!-- <a href="#">View More</a> -->
              </div>
            </div>
          </div>
        </div>
        
        <div class="row no-gutters mt-5">
          <div class="col-xl-6 col-12 mb-5 mb-xl-0">
            <div class="media media-news">
              <div class="media-img">
                <img src="<?php echo base_url() . 'assets/frontend/assets/img/program/img4.jpg'; ?>" alt="Generic placeholder image">
           
              </div>
              <div class="media-body">
                <!-- <span class="media-date">25 july 2017</span> -->
                <h5 class="mt-0 sep">ADVANCED DIPLOMA (ASSOCIATE DEGREE) IN NATURAL MEDICINE</h5>
                <p class="mb-3">A very good curriculum composed of various courses in Natural Medicine that will effectively educate the student to become a Natural and Alternative Health Practitioner. It is a 7 month course that follows from what the students have already learned at the Diploma level and climaxes with a Dissertation.
                    Duration of program : 7 Months</p>
                <!-- <a href="#">View More</a> -->
              </div>
            </div>
          </div>
          
          <div class="col-xl-6 col-12">
            <div class="media media-news">
              <div class="media-img">
                <img src="<?php echo base_url() . 'assets/frontend/assets/img/program/img5.jpg'; ?>" alt="Generic placeholder image">
                
              </div>
              <div class="media-body">
                <!-- <span class="media-date">13 August 2018</span> -->
                 <h5 class="mt-0 sep"> Pathology - First Year</h5>
                <p class="mb-3">A very good curriculum composed of various courses in Natural Medicine that will effectively educate the student to become a Natural and Alternative Health Practitioner. It is a 7 month course that follows from what the students have already learned at the Diploma level and climaxes with a Dissertation.
                    Duration of program : 7 Months</p>
                <!-- <a href="#">View More</a> -->
              </div>
            </div>
          </div>
        </div>
    </div>
    </section>





<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title"><?php echo site_phrase('top_courses'); ?></h2>

                <!-- Animated page loader -->
                <?php include "animated-page-loader.php"; ?>

                <div class="course-carousel shown-after-loading" style="display: none;">
                    <?php $top_courses = $this->crud_model->get_top_courses()->result_array();
                    $cart_items = $this->session->userdata('cart_items');
                    foreach ($top_courses as $top_course) : ?>
                        <div class="course-box-wrap">
                            <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>" class="has-popover">
                                <div class="course-box">
                                    <div class="course-image">
                                        <img src="<?php echo $this->crud_model->get_course_thumbnail_url($top_course['id']); ?>" alt="" class="img-fluid">
                                    </div>
                                    <div class="course-details">
                                        <h5 class="title"><?php echo $top_course['title']; ?></h5>
                                        <p class="instructors"><?php echo $top_course['short_description']; ?></p>
                                        <div class="rating">
                                            <?php
                                            $total_rating =  $this->crud_model->get_ratings('course', $top_course['id'], true)->row()->rating;
                                            $number_of_ratings = $this->crud_model->get_ratings('course', $top_course['id'])->num_rows();
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
                                            <p class="text-left text-secondary d-inline-block course-compare" style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;" redirect_to="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($top_course['title'])) . '&&course-id-1=' . $top_course['id']); ?>">
                                                <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                            </p>
                                            <?php if ($top_course['is_free_course'] == 1) : ?>
                                                <p class="price text-right d-inline-block float-right"><?php echo site_phrase('free'); ?></p>
                                            <?php else : ?>
                                                <?php if ($top_course['discount_flag'] == 1) : ?>
                                                    <p class="price text-right d-inline-block float-right"><small><?php echo currency($top_course['price']); ?></small><?php echo currency($top_course['discounted_price']); ?></p>
                                                <?php else : ?>
                                                    <p class="price text-right d-inline-block float-right"><?php echo currency($top_course['price']); ?></p>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </a>

                            <div class="webui-popover-content">
                                <div class="course-popover-content">
                                    <?php if ($top_course['last_modified'] == "") : ?>
                                        <div class="last-updated"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['date_added']); ?></div>
                                    <?php else : ?>
                                        <div class="last-updated"><?php echo site_phrase('last_updated') . ' ' . date('D, d-M-Y', $top_course['last_modified']); ?></div>
                                    <?php endif; ?>

                                    <div class="course-title">
                                        <a href="<?php echo site_url('home/course/' . rawurlencode(slugify($top_course['title'])) . '/' . $top_course['id']); ?>"><?php echo $top_course['title']; ?></a>
                                    </div>
                                    <div class="course-meta">
                                        <?php if ($top_course['course_type'] == 'general') : ?>
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                <?php echo $this->crud_model->get_lessons('course', $top_course['id'])->num_rows() . ' ' . site_phrase('lessons'); ?>
                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
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
                                            </span>
                                        <?php elseif ($top_course['course_type'] == 'scorm') : ?>
                                            <span class="badge badge-light"><?= site_phrase('scorm_course'); ?></span>
                                        <?php endif; ?>
                                        <span class=""><i class="fas fa-closed-captioning"></i><?php echo ucfirst($top_course['language']); ?></span>
                                    </div>
                                    <div class="course-subtitle"><?php echo $top_course['short_description']; ?></div>
                                    <div class="what-will-learn">
                                        <ul>
                                            <?php
                                            $outcomes = json_decode($top_course['outcomes']);
                                            foreach ($outcomes as $outcome) : ?>
                                                <li><?php echo $outcome; ?></li>
                                            <?php endforeach; ?>
                                        </ul>
                                    </div>
                                    <div class="popover-btns">
                                        <?php if (is_purchased($top_course['id'])) : ?>
                                            <div class="purchased">
                                                <a href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('already_purchased'); ?></a>
                                            </div>
                                        <?php else : ?>
                                            <?php if ($top_course['is_free_course'] == 1) :
                                                if ($this->session->userdata('user_login') != 1) {
                                                    $url = "#";
                                                } else {
                                                    $url = site_url('home/get_enrolled_to_free_course/' . $top_course['id']);
                                                } ?>
                                                <a href="<?php echo $url; ?>" class="btn add-to-cart-btn big-cart-button" onclick="handleEnrolledButton()"><?php echo site_phrase('get_enrolled'); ?></a>
                                            <?php else : ?>
                                                <button type="button" class="btn add-to-cart-btn <?php if (in_array($top_course['id'], $cart_items)) echo 'addedToCart'; ?> big-cart-button-<?php echo $top_course['id']; ?>" id="<?php echo $top_course['id']; ?>" onclick="handleCartItems(this)">
                                                    <?php
                                                    if (in_array($top_course['id'], $cart_items))
                                                        echo site_phrase('added_to_cart');
                                                    else
                                                        echo site_phrase('add_to_cart');
                                                    ?>
                                                </button>
                                            <?php endif; ?>
                                            <button type="button" class="wishlist-btn <?php if ($this->crud_model->is_added_to_wishlist($top_course['id'])) echo 'active'; ?>" title="Add to wishlist" onclick="handleWishList(this)" id="<?php echo $top_course['id']; ?>"><i class="fas fa-heart"></i></button>
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

<section id="admission-section" class="admission-wrapper py-5 mb-5">
<div class="container">
<div class="related-course">









               
            <h3 class="my-4">Department</h3>


            <section id="admission-course-details" class="admission-course-info py-3 mt-1">
<div class="container">
<div class="admission-student-counter">
<h6>The focus of The Alternative and Traditional medicine (ATM) includes; the organization of training and research programmes in ATM practices and products; 
sensitization, public education and advocacy with respect to ATM, that will lead to increased confidence in the safety and use of ATM practices; and the promotion 
of integrative and holistic ATM with allopathic practices. The Institute will be involved in the production and preservation of natural products with medicinal 
properties to facilitate scientific studies.</h6>
<br>
<h6>ATM is a strategic and unique Institute that would address the challenges and bridge the gaps with regards to the practice of ATM and its related fields in Nigeria. 
ATM will liaise appropriately with other state institutions and collaborate effectively with all stakeholders and partners in all its activities and functions in order 
to perform efficiently and ensure that all standards set for ATM practices are followed and targets achieved.</h6>
<br>
<h6>The Alternative and Traditional medicine (ATM), ATM is comprised of six departments, namely:</h6>
<br>
</div>
   </div>
        </section>

            <div class="row">

               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src=" <?php echo base_url() . 'assets/frontend/assets/img/courses/dept1.jpg'; ?>" class="figure-img img-fluid rounded" alt="Javascript">
          
                        <figcaption class="figure-caption">Department of Traditional Medicine</figcaption>
                      </figure>
                  </a>
               </div>

               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept2.jpg'; ?>" class="figure-img img-fluid rounded" alt="React">
                        <figcaption class="figure-caption">Alternative And Traditional Medicine</figcaption>
                      </figure>
                  </a>
               </div>

               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept3.webp'; ?>" class="figure-img img-fluid rounded" alt="Chemistry">
                        <figcaption class="figure-caption">Department of Natural Products Sourcing</figcaption>
                      </figure>
                  </a>
               </div>

               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/course4.jpg'; ?>" class="figure-img img-fluid rounded" alt="Chemistry">
                        <figcaption class="figure-caption">Clinical Department</figcaption>
                      </figure>
                     
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept7.jpg'; ?>" class="figure-img img-fluid rounded" alt="Chemistry">
                        <figcaption class="figure-caption">Department of Education and Advocacy</figcaption>
                      </figure>
                     
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept6.webp'; ?>" class="figure-img img-fluid rounded" alt="Chemistry">
                        <figcaption class="figure-caption">Drug Production Department</figcaption>
                      </figure>
                     
                  </a>
               </div>
               <div class="col-md-3 col-sm-6 mb-4">
                  <a href="#">
                     <figure class="figure">
                        <img src="<?php echo base_url() . 'assets/frontend/assets/img/courses/dept4.jpg'; ?>" class="figure-img img-fluid rounded" alt="Chemistry">
                        <figcaption class="figure-caption">Ultrasound Training</figcaption>
                      </figure>
                     
                  </a>
               </div>

            </div>
            </div>
         </div>
      </section>


<section class="course-carousel-area">
    <div class="container-lg">
        <div class="row">
            <div class="col">
                <h2 class="course-carousel-title"><?php echo site_phrase('top') . ' 10 ' . site_phrase('latest_courses'); ?></h2>

                <!-- Animated page loader -->
                <?php include "animated-page-loader.php"; ?>

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
                                            <p class="text-left text-secondary d-inline-block course-compare" style="font-size: 13px; cursor : pointer; font-weight : 500; color : #4d98ad !important;" redirect_to="<?php echo site_url('home/compare?course-1=' . rawurlencode(slugify($latest_course['title'])) . '&&course-id-1=' . $latest_course['id']); ?>">
                                                <i class="fas fa-balance-scale"></i> <?php echo site_phrase('compare'); ?>
                                            </p>
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

<section id="testmonial-section" class="lms-textmonial pb-5 mt-5">
      <div class="container">
        <div class="testmonial-wrapper">
          <div class="testmonial--header mb-5">
              <h3>Traditional Vs. Alternative Medicine: How Are They Different?</h3>
              <br>
                 <h6> People who are nursing an illness or disease may turn to a variety of medical treatments for different reasons. 
                    Perhaps they know someone who has recovered through a particular kind of medication or therapy and think that it might 
                    work for them, too. It is also possible that they find another treatment more attuned with their health beliefs and life values.  
                  courses.</h6>
                  <br>
                  <h3>Our Mission</h3>
          </div>
          <div class="row">
            <div class="col-md-7">
              <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                  <!-- Slides -->
                  <div class="swiper-slide">
                    <img src="  <?php echo base_url() . 'assets/frontend/assets/img/testmonial/test.png'; ?>">
                  
                    <div class="slider-content">
                      <figure class="text-end">
                        <blockquote class="blockquote">
                          <p>To provide thorough, practice-orientated training in natural therapies such as Traditional Medicine, Nutrition,
                             Herbal Medicine, Acupuncture, Homeopathy, and Naturopathy.</p>
                        </blockquote>
                        <!-- <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption> -->
                      </figure>
                    </div>
                  </div>

                  <div class="swiper-slide">
                  <img src="  <?php echo base_url() . 'assets/frontend/assets/img/testmonial/test.png'; ?>">
                    <div class="slider-content">
                      <figure class="text-end">
                        <blockquote class="blockquote">
                          <p>To train students to become highly competent, successful practitioners.</p>
                        </blockquote>
                        <!-- <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption> -->
                      </figure>
                    </div>
                  </div>

                  <div class="swiper-slide">
                  <img src="  <?php echo base_url() . 'assets/frontend/assets/img/testmonial/test.png'; ?>">
                    <div class="slider-content">
                      <figure class="text-end">
                        <blockquote class="blockquote">
                          <p>To make sure OSNM courses are widely recognised and respected in the Nigeria and internationally..
                            To continuously raise the profile of natural therapies in society</p>
                        </blockquote>
                        <!-- <figcaption class="blockquote-footer">
                          Someone famous in <cite title="Source Title">Source Title</cite>
                        </figcaption> -->
                      </figure>
                    </div>
                  </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- Progressbar -->
                <div class="swiper-progress-bar">
                  <span class="slide_progress-bar"></span>
                </div>
              </div>
            </div>

            <div class="col-md-5">
              <div class="counter-wrapper">
                <div class="counter-item">
                  <div class="counter-box">
                    <span class="counter-num">100</span>
                    <p class="counter-name">STUDENT</p>
                  </div>

                  <div class="counter-box">
                    <span class="counter-num">22</span>
                    <p class="counter-name">TEACHER</p>
                  </div>

                  <div class="counter-box">
                    <span class="counter-num"><?php
                            $status_wise_courses = $this->crud_model->get_status_wise_courses();
                            $number_of_courses = $status_wise_courses['active']->num_rows();
                            echo $number_of_courses ; ?></span>
                    <p class="counter-name">COURSE</p>
                  </div>

                </div>
                <svg id="short-info-counter " data-name="Layer 1" xmlns="http://www.w3.org/2000/svg"  viewBox="0 0 800 300"><path id="b659e8b5-7e24-4e9b-ab8e-27842b197401" data-name="Path 438" d="M217.77176,566.343a17.58427,17.58427,0,0,0,16.98013-2.991c5.94728-4.99209,7.81231-13.21366,9.32907-20.82834L248.56858,520l-9.39515,6.46911c-6.75688,4.65223-13.66552,9.45394-18.34348,16.19234s-6.71882,15.93761-2.96132,23.22918" transform="translate(-194.5 -298)" fill="#e6e6e6"/><path id="bfce889d-851c-4599-b1ba-72c9c39792e6" data-name="Path 439" d="M219.22247,595.18022c-1.18251-8.61522-2.39918-17.34184-1.56772-26.04943.73684-7.73336,3.09625-15.2853,7.89965-21.48006a35.73253,35.73253,0,0,1,9.16783-8.30783c.91655-.57839,1.76033.874.84769,1.45016a33.97047,33.97047,0,0,0-13.43763,16.2125c-2.92549,7.44053-3.39524,15.55183-2.89133,23.456.30459,4.77987.95183,9.5284,1.60187,14.27133a.87009.87009,0,0,1-.58678,1.033.8449.8449,0,0,1-1.033-.58676Z" transform="translate(-194.5 -298)" fill="#f2f2f2"/><path id="ac886c1d-ef9d-4a77-9e33-50e4cbfa9f0b" data-name="Path 442" d="M227.73409,581.35626a12.94434,12.94434,0,0,0,11.27866,5.823c5.711-.271,10.47016-4.25524,14.754-8.039l12.67337-11.18963-8.38733-.40143c-6.03182-.28891-12.21929-.5599-17.96443,1.30232s-11.0435,6.337-12.09387,12.28369" transform="translate(-194.5 -298)" fill="#e6e6e6"/><path id="f8957600-c762-4aa2-be12-aeea5f20d384" data-name="Path 443" d="M215.87986,600.13256c5.69307-10.0732,12.296-21.26842,24.09536-24.84675a26.88752,26.88752,0,0,1,10.13421-1.04646c1.07613.093.80737,1.75136-.26652,1.659a24.97945,24.97945,0,0,0-16.1733,4.27878A42.03757,42.03757,0,0,0,222.55332,592.173c-1.841,2.80344-3.48986,5.72556-5.13878,8.64376C216.88767,601.74956,215.34683,601.076,215.87986,600.13256Z" transform="translate(-194.5 -298)" fill="#f2f2f2"/><path id="f5e70a17-e793-41c1-a2dd-69237c970f4c" data-name="Path 438" d="M738.52678,553.17582a24.21461,24.21461,0,0,0,23.38269-4.11877c8.18977-6.87442,10.758-18.196,12.84671-28.68191l6.17972-31.01657-12.93769,8.90836c-9.30465,6.40642-18.81827,13.01867-25.26012,22.29786s-9.25222,21.94707-4.07792,31.988" transform="translate(-194.5 -298)" fill="#e6e6e6"/><path id="b90780e1-a28a-4a8c-9c47-a4f5fb7f1aa8" data-name="Path 439" d="M740.5245,592.88638c-1.6284-11.86369-3.30382-23.88079-2.15885-35.87167,1.01467-10.64932,4.26374-21.04881,10.87831-29.57938a49.20592,49.20592,0,0,1,12.62466-11.44039c1.26215-.79648,2.42409,1.20354,1.16733,1.997a46.77943,46.77943,0,0,0-18.50445,22.32562c-4.02858,10.24607-4.67546,21.41582-3.98155,32.3003.41944,6.58217,1.31075,13.1212,2.20588,19.65251a1.19816,1.19816,0,0,1-.808,1.4225,1.16348,1.16348,0,0,1-1.42253-.808Z" transform="translate(-194.5 -298)" fill="#f2f2f2"/><path id="b244f669-d0df-4dab-b5dc-a763144460fd" data-name="Path 442" d="M752.24552,573.84993a17.82513,17.82513,0,0,0,15.53142,8.01861c7.8644-.37318,14.41806-5.85972,20.31712-11.07026l17.452-15.4088-11.54987-.55281c-8.30619-.39784-16.82672-.771-24.73813,1.79338s-15.20758,8.72639-16.654,16.91541" transform="translate(-194.5 -298)" fill="#e6e6e6"/><path id="e7416fa3-7efb-4d63-8b89-2e15a53e835a" data-name="Path 443" d="M735.92151,599.70607c7.83972-13.87143,16.93235-29.28794,33.1808-34.21552a37.02609,37.02609,0,0,1,13.95545-1.44105c1.48189.128,1.1118,2.41174-.367,2.28454a34.39829,34.39829,0,0,0-22.27164,5.89215c-6.27994,4.27453-11.16975,10.21755-15.30781,16.51907-2.53511,3.86051-4.80576,7.88445-7.07642,11.903C737.30934,601.93277,735.1875,601.00523,735.92151,599.70607Z" transform="translate(-194.5 -298)" fill="#f2f2f2"/><path d="M665.04913,344.4563a3.67458,3.67458,0,0,1-2.04749-4.441,1.76625,1.76625,0,0,0,.0799-.40753h0a1.84257,1.84257,0,0,0-3.31046-1.22119h0a1.766,1.766,0,0,0-.2039.36178,3.67459,3.67459,0,0,1-4.441,2.04749,1.76539,1.76539,0,0,0-.40754-.0799h0a1.84259,1.84259,0,0,0-1.2212,3.31046h0a1.76552,1.76552,0,0,0,.36181.20389,3.67462,3.67462,0,0,1,2.04748,4.441,1.76574,1.76574,0,0,0-.07991.40753h0A1.84257,1.84257,0,0,0,659.13728,350.3h0a1.76582,1.76582,0,0,0,.2039-.36179,3.67458,3.67458,0,0,1,4.441-2.04748,1.767,1.767,0,0,0,.40755.07989h0a1.84256,1.84256,0,0,0,1.22119-3.31045h0A1.76749,1.76749,0,0,0,665.04913,344.4563Z" transform="translate(-194.5 -298)" fill="#cbcbcb" style="isolation:isolate"/><path d="M735.04913,507.4563a3.67458,3.67458,0,0,1-2.04749-4.441,1.76625,1.76625,0,0,0,.0799-.40753h0a1.84257,1.84257,0,0,0-3.31046-1.22119h0a1.766,1.766,0,0,0-.2039.36178,3.67459,3.67459,0,0,1-4.441,2.04749,1.76539,1.76539,0,0,0-.40754-.0799h0a1.84259,1.84259,0,0,0-1.2212,3.31046h0a1.76552,1.76552,0,0,0,.36181.20389,3.67462,3.67462,0,0,1,2.04748,4.441,1.76574,1.76574,0,0,0-.07991.40753h0A1.84257,1.84257,0,0,0,729.13728,513.3h0a1.76582,1.76582,0,0,0,.2039-.36179,3.67458,3.67458,0,0,1,4.441-2.04748,1.767,1.767,0,0,0,.40755.07989h0a1.84256,1.84256,0,0,0,1.22119-3.31045h0A1.76749,1.76749,0,0,0,735.04913,507.4563Z" transform="translate(-194.5 -298)" fill="#f1f1f1" style="isolation:isolate"/><path d="M368.04913,412.4563a3.67458,3.67458,0,0,1-2.04749-4.441,1.76625,1.76625,0,0,0,.0799-.40753h0a1.84257,1.84257,0,0,0-3.31046-1.22119h0a1.766,1.766,0,0,0-.2039.36178,3.67459,3.67459,0,0,1-4.441,2.04749,1.76539,1.76539,0,0,0-.40754-.0799h0a1.84259,1.84259,0,0,0-1.2212,3.31046h0a1.76552,1.76552,0,0,0,.36181.20389,3.67462,3.67462,0,0,1,2.04748,4.441,1.76574,1.76574,0,0,0-.07991.40753h0A1.84257,1.84257,0,0,0,362.13728,418.3h0a1.76582,1.76582,0,0,0,.2039-.36179,3.67458,3.67458,0,0,1,4.441-2.04748,1.767,1.767,0,0,0,.40755.07989h0a1.84256,1.84256,0,0,0,1.22119-3.31045h0A1.76749,1.76749,0,0,0,368.04913,412.4563Z" transform="translate(-194.5 -298)" fill="#f1f1f1" style="isolation:isolate"/><circle cx="326.65376" cy="50" r="6" fill="#f1f1f1" style="isolation:isolate"/><circle cx="646.65376" cy="34" r="6" fill="#6c63ff"/><circle cx="180.65376" cy="6" r="6" fill="#cbcbcb"/><circle cx="157.57996" cy="241.62342" r="43.06733" fill="#2f2e41"/><rect x="137.95433" y="275.42311" width="13.08374" height="23.44171" fill="#2f2e41"/><rect x="164.12183" y="275.42311" width="13.08373" height="23.44171" fill="#2f2e41"/><ellipse cx="148.85742" cy="299.1374" rx="10.90314" ry="4.08868" fill="#2f2e41"/><ellipse cx="175.02496" cy="298.59223" rx="10.90314" ry="4.08868" fill="#2f2e41"/><ellipse cx="393.18361" cy="515.50225" rx="23.89244" ry="7.50055" transform="translate(-443.88763 131.25771) rotate(-45.0221)" fill="#2f2e41"/><ellipse cx="300.47826" cy="518.50225" rx="7.50055" ry="23.89244" transform="translate(-473.06891 66.11269) rotate(-44.9779)" fill="#2f2e41"/><circle cx="155.76794" cy="235.5202" r="14.71921" fill="#fff"/><circle cx="155.76794" cy="235.5202" r="4.90643" fill="#3f3d56"/><path d="M361.95247,560.74273a9.57244,9.57244,0,0,1-18.83533,3.42884h0l-.00336-.0185c-.94177-5.20214,3.08039-7.043,8.28254-7.98474S361.01076,555.54065,361.95247,560.74273Z" transform="translate(-194.5 -298)" fill="#fff"/><path d="M394.31009,584.82347a3.6605,3.6605,0,0,0-3.65632,3.65632v7.63736a3.66049,3.66049,0,0,0,3.65632,3.65632l58.8298,0a3.66049,3.66049,0,0,0,3.65632-3.65631v-7.63737a3.6605,3.6605,0,0,0-3.65632-3.65632Z" transform="translate(-194.5 -298)" fill="#e5e5e5"/><path d="M428.142,579.7372a1.58575,1.58575,0,0,0-2.166.58036l-2.18619,3.78672-2.14238-4.23416a1.58551,1.58551,0,1,0-2.82945,1.43164l1.66723,3.2952h-.611V600h8.15454l0-15.403h-.8616l1.5553-2.6938A1.58577,1.58577,0,0,0,428.142,579.7372Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><path d="M350.97091,511.375a76.08526,76.08526,0,0,1-22.56494-3.44727,2.52873,2.52873,0,0,1-1.7522-2.39746V488a2.50294,2.50294,0,0,1,2.5-2.5h44a2.50294,2.50294,0,0,1,2.5,2.5v17.52a2.50606,2.50606,0,0,1-1.77881,2.39941A79.18482,79.18482,0,0,1,350.97091,511.375Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><path d="M375.15377,488v2.93l-23.81006,8.35a2.01556,2.01556,0,0,1-1.37012-.02l-22.81982-8.57V488a2.00583,2.00583,0,0,1,2-2h44A2.00583,2.00583,0,0,1,375.15377,488Z" transform="translate(-194.5 -298)" opacity="0.2"/><path d="M350.67745,495.8916a2.50248,2.50248,0,0,1-.87866-.15869l-34.10107-12.80469a2.50017,2.50017,0,0,1,.06958-4.70605l32.08544-10.97656a2.52519,2.52519,0,0,1,1.59961-.00684l35.81006,11.937a2.5,2.5,0,0,1,.03638,4.731l-33.79468,11.84472A2.49712,2.49712,0,0,1,350.67745,495.8916Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><polygon points="125.154 197 124.154 197 124.154 182.5 154.654 182.5 154.654 183.5 125.154 183.5 125.154 197" fill="#3f3d56"/><circle cx="124.65377" cy="198" r="2" fill="#3f3d56"/><circle cx="406.57996" cy="241.62342" r="43.06733" fill="#2f2e41"/><rect x="386.95433" y="275.42311" width="13.08374" height="23.44171" fill="#2f2e41"/><rect x="413.12183" y="275.42311" width="13.08373" height="23.44171" fill="#2f2e41"/><ellipse cx="397.85742" cy="299.1374" rx="10.90314" ry="4.08868" fill="#2f2e41"/><ellipse cx="424.02496" cy="298.59223" rx="10.90314" ry="4.08868" fill="#2f2e41"/><ellipse cx="642.18361" cy="515.50225" rx="23.89244" ry="7.50055" transform="translate(-370.8893 307.39519) rotate(-45.0221)" fill="#2f2e41"/><ellipse cx="556.47826" cy="556.50225" rx="23.89244" ry="7.50055" transform="translate(-412.52142 398.19135) rotate(-55.22521)" fill="#2f2e41"/><circle cx="404.76794" cy="235.5202" r="14.71921" fill="#fff"/><circle cx="409.76794" cy="230.5202" r="4.90643" fill="#3f3d56"/><path d="M616.9152,560.74273c1.44394,5.20124-3.81561,10.18525-11.74756,11.13208s-15.53264-2.502-16.97658-7.70324h0l-.00512-.0185c-1.43622-5.20214,4.69762-7.043,12.631-7.98474S615.47908,555.54065,616.9152,560.74273Z" transform="translate(-194.5 -298)" fill="#fff"/><path d="M586.01091,514.27649a76.08549,76.08549,0,0,1-22.22192,5.2198,2.52873,2.52873,0,0,1-2.52011-1.57069L554.729,501.66092a2.50294,2.50294,0,0,1,1.38685-3.25218l40.82342-16.41486a2.50294,2.50294,0,0,1,3.25218,1.38685l6.53611,16.25516a2.50606,2.50606,0,0,1-.75525,2.8898A79.18506,79.18506,0,0,1,586.01091,514.27649Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><path d="M599.7275,483.56726l1.09307,2.71846-18.976,16.62991a2.01554,2.01554,0,0,1-1.27867.49257l-24.36952.562-1.00355-2.4958a2.00583,2.00583,0,0,1,1.10948-2.60174l40.82343-16.41487A2.00584,2.00584,0,0,1,599.7275,483.56726Z" transform="translate(-194.5 -298)" opacity="0.2"/><path d="M579.96232,500.02039a2.50243,2.50243,0,0,1-.87443.18056l-36.41613.84167a2.50018,2.50018,0,0,1-1.69111-4.39226l25.67407-22.15407a2.52524,2.52524,0,0,1,1.48158-.6031l37.678-2.28427a2.5,2.5,0,0,1,1.7987,4.37584L580.677,499.582A2.497,2.497,0,0,1,579.96232,500.02039Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><polygon points="356.346 212.767 355.418 213.14 350.009 199.687 378.307 188.308 378.68 189.236 351.309 200.242 356.346 212.767" fill="#3f3d56"/><circle cx="356.25493" cy="213.88135" r="2" fill="#3f3d56"/><path d="M765.03745,437.869A76.08531,76.08531,0,0,1,747.704,423.016a2.52874,2.52874,0,0,1-.22029-2.96133l9.26552-14.88156a2.50294,2.50294,0,0,1,3.44362-.80091l37.35187,23.25592a2.503,2.503,0,0,1,.80091,3.44363l-9.2601,14.87285a2.50607,2.50607,0,0,1-2.77823,1.0967A79.18479,79.18479,0,0,1,765.03745,437.869Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><path d="M797.92113,430.80747l-1.54863,2.48728-24.62586-5.49625a2.0156,2.0156,0,0,1-1.15252-.74116l-14.84226-19.33641,1.42178-2.28356a2.00583,2.00583,0,0,1,2.7549-.64072l37.35187,23.25592A2.00583,2.00583,0,0,1,797.92113,430.80747Z" transform="translate(-194.5 -298)" opacity="0.2"/><path d="M772.972,424.56989a2.50263,2.50263,0,0,1-.662-.59912l-22.18077-28.89389a2.50018,2.50018,0,0,1,2.54642-3.95822l33.03913,7.64049a2.52525,2.52525,0,0,1,1.36153.83966l24.09015,29.06058a2.50005,2.50005,0,0,1-2.46964,4.03537l-34.949-7.8069A2.49731,2.49731,0,0,1,772.972,424.56989Z" transform="translate(-194.5 -298)" fill="#6c63ff"/><polygon points="552.607 109.416 551.758 108.887 559.422 96.578 585.314 112.699 584.785 113.547 559.742 97.955 552.607 109.416" fill="#3f3d56"/><circle cx="551.65404" cy="110.00027" r="2" fill="#3f3d56"/><circle cx="674.72758" cy="192.62342" r="43.06733" fill="#2f2e41"/><rect x="893.07258" y="514.64598" width="13.08374" height="23.44171" transform="translate(-336.98367 248.35991) rotate(-31.43113)" fill="#2f2e41"/><rect x="870.74471" y="528.29163" width="13.08373" height="23.44171" transform="translate(-347.37573 238.71877) rotate(-31.43113)" fill="#2f2e41"/><ellipse cx="902.14742" cy="538.87471" rx="10.90314" ry="4.08868" transform="translate(-343.13452 251.51609) rotate(-31.43113)" fill="#2f2e41"/><ellipse cx="879.53522" cy="552.05521" rx="10.90314" ry="4.08868" transform="translate(-353.32574 241.65844) rotate(-31.43113)" fill="#2f2e41"/><ellipse cx="828.12393" cy="466.50225" rx="7.50055" ry="23.89244" transform="translate(-281.91356 423.85434) rotate(-44.9779)" fill="#2f2e41"/><ellipse cx="913.82928" cy="507.50225" rx="7.50055" ry="23.89244" transform="translate(-320.74534 313.8443) rotate(-34.77479)" fill="#2f2e41"/><circle cx="661.5396" cy="180.5202" r="14.71921" fill="#fff"/><circle cx="656.5396" cy="175.5202" r="4.90643" fill="#3f3d56"/><path d="M837.08533,503.07331c-2.79112,4.573.92772,10.75961,8.30629,13.81815s15.62275,1.83086,18.41387-2.74214h0l.00991-.01627c2.78393-4.576-2.62325-7.99955-10.00454-11.05358S839.86916,498.49737,837.08533,503.07331Z" transform="translate(-194.5 -298)" fill="#fff"/><path d="M854.77685,436.54712c3.84558-15.487,20.82056-24.60077,37.91474-20.35617s27.83429,20.24029,23.9887,35.72729-16.60394,15.537-33.69812,11.29236S850.93127,452.03415,854.77685,436.54712Z" transform="translate(-194.5 -298)" fill="#e6e6e6"/><path d="M1004.5,602h-809a1,1,0,0,1,0-2h809a1,1,0,0,1,0,2Z" transform="translate(-194.5 -298)" fill="#cbcbcb"/></svg>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>



<section id="banner-section" class="brocheure-banner pb-5 mt-5">
      <div class="container">
        <div class="banner-bg">
          <div class="banner-title px-4 py-5">
            <h1 class="mb-3">Who can enrol</h1>
            <p>Board Certified or Licensed Practitioners. Also open to Natural health practitioners or 
                individuals that have completed coursework in anatomy, physiology, and pathology</p>
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