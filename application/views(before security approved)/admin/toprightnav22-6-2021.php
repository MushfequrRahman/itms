 <style>
 @media(max-width:600px){
 .center-navbar{
  display: block; 
  text-align: center; 
  color: white; 
  padding: 15px; 
  /* adjust based on your layout */
  margin-left: 50px; 
  margin-right: 50px;
}
}
@media(min-width:624px){
 .center-navbar{
  display: block; 
  text-align: center; 
  color: white; 
  padding: 15px; 
  /* adjust based on your layout */
  margin-left: 50px; 
  margin-right: 200px;
}
}
 /*.center-navbar{
  display: block; 
  text-align: center; 
  color: white; 
  padding: 15px; 
 
  margin-left: 50px; 
  margin-right: 300px;
}*/
 </style>
 <header class="main-header">

    <!-- Logo -->
    <a href="<?php echo base_url();?>Dashboard" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <!--<span class="logo-mini"><b>HARMO</b>NIZER</span>-->
      <span class="logo-mini"><img style="width:35px; height:35px;" src="<?php echo base_url().'assets/images/babylon.png';?>" alt="logo"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img style="width:35px; height:35px;" src="<?php echo base_url().'assets/images/babylon.png';?>" alt="logo"><b>HARMONIZER</b></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <?php /*?><?php if($this->session->userdata('user_type')=='2')
	  {
		  ?><?php */?>
      <!--<div class="m" style="width:600px; margin:auto;"><ul class="nav navbar-nav" style="text-align:center"><li class="user user-menu"><a>Support:&nbsp;Arif&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;<span>01842493349</span>&nbsp;&nbsp;||&nbsp;&nbsp;Parvez&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;<span>01675184716</span></a></li></ul></div>-->
      <?php /*?><?php
	  }
	  ?><?php */?>
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
	  <div class="center-navbar">Support:&nbsp;Arif&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;<span>01842493349</span>&nbsp;&nbsp;||&nbsp;&nbsp;Parvez&nbsp;&nbsp;&nbsp;<i class="fa fa-phone"></i>&nbsp;<span>01675184716</span></div>
    </nav>
  </header>