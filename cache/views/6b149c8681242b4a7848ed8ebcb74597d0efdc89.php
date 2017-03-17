<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	

	<!--   Core JS Files   -->
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo e(Flight::request()->base); ?>assets/js/material.min.js"></script>
	<!--  Plugins -->
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/bootstrap-select.js"></script>
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/nouislider.min.js" type="text/javascript"></script>
	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo e(Flight::request()->base); ?>/assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">

		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			materialKit.initSliders();
            window_width = $(window).width();

            if (window_width >= 992){
                big_image = $('.wrapper > .header');

				$(window).on('scroll', materialKitDemo.checkScrollForParallax);
			}

		});
	</script>