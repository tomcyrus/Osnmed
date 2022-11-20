<footer>
  <!-- newsletter -->
  <div class="newsletter">
    <div class="container">
      <div class="row">
        <div class="col-md-9 ml-auto bg-primary py-5 newsletter-block">
        <!-- <h3 class="mb-3">Who can enrol</h3>
            <h4>Board Certified or Licensed Practitioners. Also open to Natural health practitioners or 
                individuals that have completed coursework in anatomy, physiology, and pathology</h4> -->
          <h3 class="text-white">Subscribe Now</h3>
          <form action="#">
            <div class="input-wrapper">
              <input type="email" class="form-control border-0" id="newsletter" name="newsletter" placeholder="Enter Your Email...">
              <button type="submit" value="send" class="btn btn-primary">Join</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- footer content -->
  <div class="footer bg-footer section border-bottom">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
          <!-- logo -->
          <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="logo"  width="75px"></a>
          <ul class="list-unstyled">
            <li class="mb-2" style="color:white">Office 50, Adewumi Abitoye street, Beside Babalola Hospital<br>Oshokoti, Akure, Ondo State</li>
            <li class="mb-2" style="color:white">+2349045327828</li>
            <li class="mb-2" style="color:white">info@osnmed.com</li>
          </ul>
        </div>
        <!-- company -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">COMPANY</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/about_us'); ?>">About Us</a></li>
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/privacy_policy'); ?>">Privacy Policy</a></li>
            
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/terms_and_condition'); ?>">Terms & Condition</a></li>
          </ul>
        </div>
        <!-- links -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LINKS</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/courses'); ?>">Courses</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="events.html">Events</a></li> -->
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/contact'); ?>">Contact</a></li>
            <li class="mb-3"><a class="text-color" href="<?php echo site_url('home/login'); ?>">Login</a></li>
            <!-- <li class="mb-3"><a class="text-color" href="scholarship.html"> Our Programs</a></li> -->
          </ul>
        </div>
        <!-- support -->
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
          <h4 class="text-white mb-5">LANGUAGE</h4>
          <ul class="list-unstyled">
            <li class="mb-3"><select class="language_selector" onchange="switch_language(this.value)">
                <?php
                 $languages = $this->crud_model->get_all_languages();
                 foreach ($languages as $language): ?>
                    <?php if (trim($language) != ""): ?>
                        <option value="<?php echo strtolower($language); ?>" <?php if ($this->session->userdata('language') == $language): ?>selected<?php endif; ?>><?php echo ucwords($language);?></option>
                    <?php endif; ?>
                <?php endforeach; ?>
            </select></li>
     
          </ul>
        </div>
        
        <!-- support -->
        
      </div>
    </div>
  </div>
  <!-- copyright -->
  <div class="copyright py-4 bg-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 text-sm-left text-center">
          <p class="mb-0">Copyright &copy;
            <script>
              var CurrentYear = new Date().getFullYear()
              document.write(CurrentYear)
            </script> 
            , designed & developed by <a href="<?php echo get_settings('footer_link'); ?>" class="text-muted"><?php echo get_settings('footer_text'); ?></a>
          </p>
        </div>
        <div class="col-sm-5 text-sm-right text-center">
          <ul class="list-inline">
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://facebook.com/themefisher/"><i class="ti-facebook text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://twitter.com/themefisher"><i class="ti-twitter-alt text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://github.com/themefisher"><i class="ti-github text-primary"></i></a></li>
            <li class="list-inline-item"><a class="d-inline-block p-2" href="https://instagram.com/themefisher/"><i class="ti-instagram text-primary"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- PAYMENT MODAL -->
<!-- Modal -->
<?php
$paypal_info = json_decode(get_settings('paypal'), true);
$stripe_info = json_decode(get_settings('stripe_keys'), true);
if ($paypal_info[0]['active'] == 0) {
  $paypal_status = 'disabled';
}else {
  $paypal_status = '';
}
if ($stripe_info[0]['active'] == 0) {
  $stripe_status = 'disabled';
}else {
  $stripe_status = '';
}
?>

<!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true" reset-on-close="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content edit-rating-modal">
      <div class="modal-header">
        <h5 class="modal-title step-1" data-step="1"><?php echo site_phrase('step').' 1'; ?></h5>
        <h5 class="modal-title step-2" data-step="2"><?php echo site_phrase('step').' 2'; ?></h5>
        <h5 class="m-progress-stats modal-title">
          &nbsp;of&nbsp;<span class="m-progress-total"></span>
        </h5>

        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="m-progress-bar-wrapper">
        <div class="m-progress-bar">
        </div>
      </div>
      <div class="modal-body step step-1">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-rating-box">
                <h4 class="rating-title"><?php echo site_phrase('how_would_you_rate_this_course_overall'); ?>?</h4>
                <fieldset class="your-rating">

                  <input type="radio" id="star5" name="rating" value="5" />
                  <label class = "full" for="star5"></label>

                  <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                  <label class="half" for="star4half"></label> -->

                  <input type="radio" id="star4" name="rating" value="4" />
                  <label class = "full" for="star4"></label>

                  <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                  <label class="half" for="star3half"></label> -->

                  <input type="radio" id="star3" name="rating" value="3" />
                  <label class = "full" for="star3"></label>

                  <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                  <label class="half" for="star2half"></label> -->

                  <input type="radio" id="star2" name="rating" value="2" />
                  <label class = "full" for="star2"></label>

                  <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                  <label class="half" for="star1half"></label> -->

                  <input type="radio" id="star1" name="rating" value="1" />
                  <label class = "full" for="star1"></label>

                  <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                  <label class="half" for="starhalf"></label> -->

                </fieldset>
              </div>
            </div>
            <div class="col-md-6">
              <div class="modal-course-preview-box">
                <div class="card">
                  <img class="card-img-top img-fluid" id = "course_thumbnail_1" alt="">
                  <div class="card-body">
                    <h5 class="card-title" class = "course_title_for_rating" id = "course_title_1"></h5>
                    <p class="card-text" id = "instructor_details">

                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="modal-body step step-2">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-6">
              <div class="modal-rating-comment-box">
                <h4 class="rating-title"><?php echo site_phrase('write_a_public_review'); ?></h4>
                <textarea id = "review_of_a_course" name = "review_of_a_course" placeholder="<?php echo site_phrase('describe_your_experience_what_you_got_out_of_the_course_and_other_helpful_highlights').'. '.site_phrase('what_did_the_instructor_do_well_and_what_could_use_some_improvement') ?>?" maxlength="65000" class="form-control"></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <div class="modal-course-preview-box">
                <div class="card">
                  <img class="card-img-top img-fluid" id = "course_thumbnail_2" alt="">
                  <div class="card-body">
                    <h5 class="card-title" class = "course_title_for_rating" id = "course_title_2"></h5>
                    <p class="card-text">
                      -
                      <?php
                      $admin_details = $this->user_model->get_admin_details()->row_array();
                      echo $admin_details['first_name'].' '.$admin_details['last_name'];
                      ?>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <input type="hidden" name="course_id" id = "course_id_for_rating" value="">
      <div class="modal-footer">
        <button type="button" class="btn btn-primary next step step-1" data-step="1" onclick="sendEvent(2)"><?php echo site_phrase('next'); ?></button>
        <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2" onclick="sendEvent(1)"><?php echo site_phrase('previous'); ?></button>
        <button type="button" class="btn btn-primary publish step step-2" onclick="publishRating($('#course_id_for_rating').val())" id = ""><?php echo site_phrase('publish'); ?></button>
      </div>
    </div>
  </div>
</div><!-- Modal -->

<script type="text/javascript">
    function switch_language(language) {
        $.ajax({
            url: '<?php echo site_url('home/site_language'); ?>',
            type: 'post',
            data: {language : language},
            success: function(response) {
                setTimeout(function(){ location.reload(); }, 500);
            }
        });
    }
</script>


<script>
    var url = 'https://wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget.js?36813';
    var s = document.createElement('script');
    s.type = 'text/javascript';
    s.async = true;
    s.src = url;
    var options = {
  "enabled":true,
  "chatButtonSetting":{
      "backgroundColor":"#4dc247",
      "ctaText":"Message Us",
      "borderRadius":"30",
      "marginLeft":"0",
      "marginBottom":"50",
      "marginRight":"50",
      "position":"right"
  },
  "brandSetting":{
      "brandName":"ONDO SCHOOL OF NATUROPATHIC MEDICINE",
      "brandSubTitle":"OSNMED",
      "brandImg":"https://osnmed.com/uploads/system/8b553499a54d99824a0512b7d679bd05.png",
      "welcomeText":"Hi there!\nHow can I help you?",
      "messageText":"Hello, I have a question......",
      "backgroundColor":"#185458",
      "ctaText":"Start Chat",
      "borderRadius":"25",
      "autoShow":false,
      "phoneNumber":"2349045327828"
  }
};
    s.onload = function() {
        CreateWhatsappChatWidget(options);
    };
    var x = document.getElementsByTagName('script')[0];
    x.parentNode.insertBefore(s, x);
</script>