<?php $__env->startSection('content'); ?>
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('bg.jpg');assets/img/bg2.jpeg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="brand">
            <h1>
              <a class="" href="<?php echo e(Flight::request()->base); ?>">
                <img src="logo.png" height="100" width="100" class="img-responsive center-block">
              </a>
              <?php echo e(Flight::get('brand.bud')); ?>

            </h1>
            <h3>The Badest PHP framework Stack with Material Kit UI Kit based on Material Design.</h3>
              <div class="row sharing-area text-center">
                <a href="#" class="btn btn-twitter btn-sm btn-info">
                  <i class="fa fa-twitter"></i> Tweet
                </a>
                <a href="#" class="btn btn-facebook btn-sm btn-info">
                  <i class="fa fa-facebook-square"></i> Share
                </a>
                <a href="#" class="btn btn-google-plus btn-sm btn-danger">
                  <i class="fa fa-google-plus"></i> Share
                </a>
                <a href="#" class="btn btn-github btn-sm btn-">
                  <i class="fa fa-github"></i> Star
                </a>
              </div>
          </div>
        </div>
      </div>

    </div>
  </div>

  

  <?php echo $__env->make('includes.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>