<!-- header -->
<?php
$user_details = $this->user_model->get_user($this->session->userdata('user_id'))->row_array();
?>
<header class="fixed-top header">
  <!-- top header -->
   <!-- top header -->
   <div class="top-header py-2 " style="background-color: #adff2f ;">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-lg-4 text-center text-lg-left">
          <h3> <a class="text-color mr-3" href="tel:+2349045327828 " style="color:black ;"><strong>CALL</strong >+2349045327828</a></h3>
          
        </div>
      </div>
    </div>
  </div>
        <!-- <?php include 'menu.php'; ?> -->
        <div class="col-lg-8 text-center text-lg-right">
          <ul class="list-inline">
          

           <!-- <form class="inline-form" action="<?php echo site_url('home/search'); ?>" method="get" style="width: 100%;">
            <div class="input-group search-box mobile-search">
              <input type="text" name = 'query' class="form-control" placeholder="<?php echo site_phrase('search_for_courses'); ?>">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form> -->
            <!-- <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php echo site_url('home/login'); ?>" ><?php echo site_phrase('log_in'); ?></a></li>
            <li class="list-inline-item"><a class="text-uppercase text-color p-sm-2 py-2 px-0 d-inline-block" href="<?php echo site_url('home/sign_up'); ?>" ><?php echo site_phrase('sign_up'); ?></a></li> -->
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- navbar -->
  <div class="navigation w-100">
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-dark p-0">
        <a class="navbar-brand" href="<?php echo site_url(''); ?>"><img src="<?php echo base_url('uploads/system/'.get_frontend_settings('dark_logo')); ?>" alt="logo" height="74px"></a>
        <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigation">
          <ul class="navbar-nav ml-auto text-center">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url(''); ?>"><?php echo site_phrase('Home'); ?></a>
            </li>
            <!-- <li class="nav-item @@about">
              <a class="nav-link" href="<?php echo site_url('home/about_us'); ?>"><?php echo site_phrase('About'); ?></a>
            </li> -->
            <li class="nav-item @@courses">
              <a class="nav-link" href="<?php echo site_url('home/courses'); ?>">COURSES</a>
            </li>
            <li class="nav-item @@contact">
              <a class="nav-link" href="<?php echo site_url('home/diseases'); ?>">A-Z Diseases</a>
            </li>
            <!-- <li class="nav-item @@events">
              <a class="nav-link" href="<?php echo site_url('home/gallery'); ?>">GALLERY</a>
            </li> -->
            <li class="nav-item @@blog">
            <?php if (get_settings('allow_instructor') == 1) : ?>
              <a class="nav-link" href="<?php echo site_url('user'); ?>"><?php echo site_phrase('Caregiver'); ?></a>
          <?php endif; ?>
            </li>
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                STUDENT INFO
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('my_courses'); ?></a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('home/my_wishlist'); ?>"><?php echo site_phrase('my_wishlist'); ?></a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('home/my_messages'); ?>"><?php echo site_phrase('my_messages'); ?></a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('home/purchase_history'); ?>"><?php echo site_phrase('purchase_history'); ?></a></li>
                <li><a class="dropdown-item" href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo site_phrase('user_profile'); ?></a></li>
                <?php if (addon_status('customer_support')) : ?>
                <li><a class="dropdown-item" href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo site_phrase('user_profile'); ?></a></li>
                <?php endif; ?>
                
              </ul>
            </li>

           
            
            <li class="nav-item dropdown view">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               CATEGORIES
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <?php
              $categories = $this->crud_model->get_categories()->result_array();
              foreach ($categories as $key => $category):?>
                <li><a class="dropdown-item" href="javascript:;" onclick="redirect_to('<?php echo site_url('home/courses?category='.$category['slug']); ?>')" >
              </a>
               
    
                
                <li class="dropdown-item dropdown dropleft is-hidden">
                  <a class="dropdown-toggle" href="#" id="navbarDropdownSubmenu" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <?php echo $category['name']; ?>
                  </a>
                  
                  <ul class="dropdown-menu dropdown-submenu" aria-labelledby="navbarDropdownSubmenu">
                  <?php
                  $sub_categories = $this->crud_model->get_sub_categories($category['id']);
                   foreach ($sub_categories as $sub_category): ?>
                    <li><a class="dropdown-item" href="<?php echo site_url('home/courses?category='.$sub_category['slug']); ?>"><?php echo $sub_category['name']; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <?php endforeach; ?>
              </ul>
            </li>
    
            <!-- <li class="nav-item @@contact">
              <a class="nav-link" href="#"><?php echo $user_details['first_name'] . ' ' . $user_details['last_name']; ?></a>
            </li> -->

            <li class="nav-item @@contact">
              <a class="nav-link" href="<?php echo site_url('login/logout/user'); ?>"><?php echo site_phrase('log_out'); ?></a>
            </li>
           
            <li class="nav-item @@contact">
            <a class="nav-link" href="" style="width: 50px">   <img  src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="" class="img-fluid">
                   </a> </li>         
                        

            
            
            <li class="nav-item @@contact">
            <div class="cart-box menu-icon-box" id = "cart_items">
            <?php include 'cart_items.php'; ?>
          </div>
            </li>
          </ul>
        </div>
      </nav>
    </div>
    
    <div class="top-header2 py-2 " style="background-color: green; height: 60px;">
      <div class="container" style="position: fixed; ">
        <div class="row no-gutters">
          <marquee> <a class="text-color mr-3" href="tel:+2349045327828"><h2 style="color: white;">Admission currently ongoing
            <button  class="buttonnow">Apply now</button>
          </h2></a> </marquee>
         
        
         </div>
         <style>
          .buttonnow {
  background-color: #fff;
  border-radius:8px;
  color: green;
  height:30px;

  /* padding: 15px; */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin-bottom: 60px;
  cursor: pointer;
}
         </style>
      </div>
    </div>
  </div>
</header>
<!-- /header -->