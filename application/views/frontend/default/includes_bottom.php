 <script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/modernizr-3.5.0.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/vendor/jquery-3.2.1.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/popper.min.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/frontend/default/js/bootstrap.min.js'; ?>"></script>

<?php if ($page_name == "home") : ?>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/slick.min.js'; ?>"></script>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/jquery.webui-popover.min.js'; ?>"></script>
<?php endif; ?>

<?php if ($page_name == "user_profile") : ?>
	<script src="<?php echo base_url() . 'assets/frontend/default/js/tinymce.min.js'; ?>"></script>
<?php endif; ?>

<script src="<?php echo base_url() . 'assets/frontend/default/js/main.js'; ?>"></script>
<script src="<?php echo base_url() . 'assets/global/toastr/toastr.min.js'; ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.2.2/jquery.form.min.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script>


<!-- <script src="<?php echo base_url() . 'assets/frontend/assets/js/vendor/jquery-3.6.0.min.js'; ?>"></script> -->

  <!-- <script src="<?php echo base_url() . 'assets/frontend/assets/js/bootstrap.min.js'; ?>"></script>

  <script src="  <?php echo base_url() . 'assets/frontend/assets/js/vendor/swiper-bundle.js'; ?>"></script>

  <script src=" <?php echo base_url() . 'assets/frontend/assets/js/vendor/swiper-bundle.min.js'; ?>"></script>
 
  <script src="  <?php echo base_url() . 'assets/frontend/assets/js/vendor/plugin.js'; ?>"></script>

  <script src="  <?php echo base_url() . 'assets/frontend/assets/js/main.js'; ?>"></script> -->


  <script src="<?php echo base_url() . 'assets/frontend/theme/plugins/jQuery/jquery.min.js'; ?>"></script>
  
<!-- Bootstrap JS -->
<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/bootstrap/bootstrap.min.js'; ?>"></script>

<!-- slick slider -->
<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/slick/slick.min.js'; ?>"></script>

<!-- aos -->
<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/aos/aos.js'; ?>"></script>

<!-- venobox popup -->
<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/venobox/venobox.min.js'; ?>"></script>

<!-- filter -->
<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/filterizr/jquery.filterizr.min.js'; ?>"></script>

<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU"></script>

<script src="<?php echo base_url() . 'assets/frontend/theme/plugins/google-map/gmap.js'; ?>"></script>


<!-- Main Script -->
<script src="<?php echo base_url() . 'assets/frontend/theme/js/script.js'; ?>"></script>



<!-- SHOW TOASTR NOTIFIVATION -->
<?php if ($this->session->flashdata('flash_message') != "") : ?>

	<script type="text/javascript">
		toastr.success('<?php echo $this->session->flashdata("flash_message"); ?>');
	</script>

<?php endif; ?>

<?php if ($this->session->flashdata('error_message') != "") : ?>

	<script type="text/javascript">
		toastr.error('<?php echo $this->session->flashdata("error_message"); ?>');
	</script>

<?php endif; ?>

<?php if ($this->session->flashdata('info_message') != "") : ?>

	<script type="text/javascript">
		toastr.info('<?php echo $this->session->flashdata("info_message"); ?>');
	</script>

<?php endif; ?>