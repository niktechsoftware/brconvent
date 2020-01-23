<?php $this->load->view("headerCss");?>
<body class="">
<div id="wrapper" class="clearfix">
  <!-- preloader -->
  <div id="preloader">
    <div id="spinner">
      <div class="preloader-dot-loading">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
      </div>
    </div>
    <div id="disable-preloader" class="btn btn-default btn-sm">Disable Preloader</div>
  </div> 
  
 
    <div class="header-middle p-0 bg-lightest xs-text-center">
      <div class="container pt-0 pb-0">
        <div class="row">
          <div class="col-xs-12 col-sm-4 col-md-5">
            <div class="widget no-border m-0">
              <a class="menuzord-brand pull-left flip xs-pull-center mb-15" href="javascript:void(0)"><img src="<?php echo base_url();?>assets/images/logo.png" alt=""></a>
            </div>
          </div>
          <div class="col-xs-12 col-sm-4 col-md-4">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-phone-square text-theme-color-sky font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">Call us today!</a>
                  <h5 class="font-14 text-theme-color-blue m-0"> +91 9415586449</h5>
                </li>
              </ul>
            </div>
          </div>  
          <div class="col-xs-12 col-sm-4 col-md-3">
            <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
              <ul class="list-inline">
                <li><i class="fa fa-clock-o text-theme-color-red font-36 mt-5 sm-display-block"></i></li>
                <li>
                  <a href="#" class="font-12 text-black text-uppercase">We are open!</a>
                  <h5 class="font-13 text-theme-color-blue m-0"> Mon-Sat 8:00 am-12:30pm</h5>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
      <div class="header-nav">
      <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-color-red border-bottom-theme-color-sky-2px">
        <div class="container">
          <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
            <ul class="menuzord-menu ">
              <li class="active"><a href="<?php echo base_url();?>index.php/welcome">Home</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/about">About us</a></li>

              <li><a href="<?php echo base_url();?>index.php/welcome/courses">Courses</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/team"> Our Staff</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/activities">Activities</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/gallery">Gallery</a></li>
              <li><a href="<?php echo base_url();?>index.php/welcome/contact">Contact Us</a></li>
               <li><a href="<?php echo base_url();?>admin/login">Admin</a></li>
            </ul>
            <ul class="pull-right flip hidden-sm hidden-xs">
              <li>
              <br>

                <a class="btn btn-primary" href="https://www.schoolerp-niktech.in/sschool2/index.php/homeController.Niktech">Login</a>
                
              </li>
            </ul>
            <div id="top-search-bar" class="collapse">
              <div class="container">
                <form role="search" action="#" class="search_form_top" method="get">
                  <input type="text" placeholder="Type text and press Enter..." name="s" class="form-control" autocomplete="off">
                  <span class="search-close"><i class="fa fa-search"></i></span>
                </form>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </header>