 <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url();?>Dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>DASH</b>BOARD</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>DASHBOARD</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          
      
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <?php /*?><img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/employee/'.$this->session->userdata('pic');?>" alt="User profile picture"><?php */?>
              <span class="hidden-xs"><?php echo $this->session->userdata('ename');?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img class="profile-user-img img-responsive img-thumbnail" src="<?php echo base_url().'assets/uploads/users/'.$this->session->userdata('pic');?>" alt="User profile picture">

                <p>
                  <?php echo $this->session->userdata('ename');?>
                  <small><?php echo $this->session->userdata('factoryid');?></small>
                </p>
              </li>
         
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?php echo base_url();?>User_Login/logout" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
   
        </ul>
      </div>

    </nav>
  </header>