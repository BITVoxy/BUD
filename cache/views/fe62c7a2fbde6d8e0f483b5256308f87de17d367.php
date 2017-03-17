<?php $__env->startSection('content'); ?>
<div class="wrapper">
  <div class="header header-filter" style="background-image: url('bg.jpg');assets/img/bg2.jpeg">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="brand">
            <h1>
              <a class="" href="<?php echo e(Flight::request()->base); ?>">
                <img src="logo_t.png" height="100" width="100" class="img-responsive center-block">
              </a>
              <?php echo e(Flight::get('brand')); ?>

            </h1>
            <h3>The Badest Open Source round yeah.</h3>
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

  <div class="main main-raised">
    <div class="container">
      <div class="section text-center section-landing">
        <div class="row">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="title">Projects</h2>
            <h5 class="description">Below is a list if all our open source projects.</h5>
          </div>
        </div>

        <div class="features">
          <div class="row">
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-primary">
              <i class="material-icons">chat</i>
              </div>
              <h4 class="info-title">First Feature</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-success">
              <i class="material-icons">verified_user</i>
              </div>
              <h4 class="info-title">Second Feature</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="info">
              <div class="icon icon-danger">
              <i class="material-icons">fingerprint</i>
              </div>
              <h4 class="info-title">Third Feature</h4>
              <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.default', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>