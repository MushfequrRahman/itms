<?php
//defined('BASEPATH') OR exit('No direct script access allowed');
?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/css/util.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/vendor/animate/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/vendor/css-hamburgers/hamburgers.min.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/admin/vendor/select2/select2.min.css">
<style>
  .login-credit {
    margin: 35px 0 0 0;
  }

  .credit-box {
    font-size: 10px;
    color: #666;
    margin: 5px 0;
  }

  .credit-box i {
    margin-right: 6px;
    color: #4CAF50;
  }

  .footer-copy {
    width: 100%;
    text-align: center;
    /* position: absolute; */
    margin: 0 0 0 0;
    /* bottom: 5px;
    left: 0; */
    font-size: 13px;
    color: #cccccc;
    opacity: 0.9;
  }
</style>

<body>
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-pic js-tilt" data-tilt>
          <!-- <span class="login100-form-title">
            Babylon
          </span> -->
          <!-- <img src="<?php echo base_url(); ?>admin/images/img-01.png" alt="IMG"> -->
          <img style="margin:0 0 0 0;" src="<?php echo base_url('assets/admin/images/img-01.png'); ?>" alt="IMG">
        </div>
        <form class="login100-form validate-form" action="<?php echo base_url(); ?>User_Login/login" method="post">
          <span class="login100-form-title">
            Member Login
          </span>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="text" name="userid" placeholder="User ID">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-user"></i>
            </span>
            <?php echo form_error('userid', '<div class="error">', '</div>'); ?>
          </div>
          <div class="wrap-input100 validate-input">
            <input class="input100" type="password" name="password" placeholder="Password">
            <span class="focus-input100"></span>
            <span class="symbol-input100">
              <i class="fa fa-lock"></i>
            </span>
            <?php echo form_error('password', '<div class="error">', '</div>'); ?>
          </div>
          <div class="container-login100-form-btn">
            <input type="submit" name="submit" class="login100-form-btn" value="Sign In">
          </div>
          <div class="login-credit text-center">
            <h5>CREDITS</h5>
            <div class="credit-box">
              <i class="fa fa-cogs"></i>
              <span>Business Logic: MD Ashaduzzaman</span>
            </div>
            <div class="credit-box">
              <i class="fa fa-code"></i>
              <span>Application Design & Development: MD Mushfequr Rahman</span>
            </div>
          </div>
        </form>
      </div>
      <div class="footer-copy">
        © <?php echo date('Y'); ?> Babylon Group | IT Inventory System
      </div>
    </div>
  </div>


  <script src="<?php echo base_url(); ?>assets/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/admin/vendor/tilt/tilt.jquery.min.js"></script>

  <script>
    $('.js-tilt').tilt({
      scale: 1.1
    })
  </script>

</body>

</html>