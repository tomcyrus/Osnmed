<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<section class="page-header-area my-course-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="page-title"><?php echo site_phrase('purchase_history'); ?></h1>
                <ul>
                    <li><a href="<?php echo site_url('home/my_courses'); ?>"><?php echo site_phrase('all_courses'); ?></a></li>
                    <li><a href="<?php echo site_url('home/my_wishlist'); ?>"><?php echo site_phrase('wishlists'); ?></a></li>
                    <li><a href="<?php echo site_url('home/my_messages'); ?>"><?php echo site_phrase('my_messages'); ?></a></li>
                    <li><a href="<?php echo site_url('home/purchase_history'); ?>"><?php echo site_phrase('purchase_history'); ?></a></li>
                    <li class="active"><a href=""><?php echo site_phrase('user_profile'); ?></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="user-dashboard-area">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="user-dashboard-box">
                    <div class="user-dashboard-sidebar">
                        <div class="user-box">
                            <img src="<?php echo $this->user_model->get_user_image_url($this->session->userdata('user_id')); ?>" alt="" class="img-fluid">
                            <div class="name"><?php echo $user_details['first_name'].' '.$user_details['last_name']; ?></div>
                        </div>
                        <div class="user-dashboard-menu">
                            <ul>
                                <li><a href="<?php echo site_url('home/profile/user_profile'); ?>"><?php echo site_phrase('profile'); ?></a></li>
                                <li><a href="<?php echo site_url('home/profile/user_credentials'); ?>"><?php echo site_phrase('account'); ?></a></li>
                                <li class="active"><a href="<?php echo site_url('home/profile/user_photo'); ?>"><?php echo site_phrase('photo'); ?></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-dashboard-content">
                        <div class="content-title-box">
                            <div class="title"><?php echo site_phrase('photo'); ?></div>
                            <div class="subtitle"><?php echo site_phrase('update_your_photo'); ?>.</div>
                        </div>
                        <form action="<?php echo site_url('home/update_profile/update_photo'); ?>" enctype="multipart/form-data" method="post">
                            <div class="content-box">
                                <div class="email-group">
                                    <div class="form-group">
                                        <label for="user_image"><?php echo site_phrase('upload_image'); ?>:</label>
                                        <input type="file" class="form-control" name = "user_image" id="user_image">
                                    </div>
                                </div>
                            </div>
                            <div class="content-update-box">
                                <button type="submit" class="btn"><?php echo site_phrase('save'); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
