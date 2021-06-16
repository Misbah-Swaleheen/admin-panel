<?php 
    include('main.php');
    if (isset($_SESSION['user'])) {
        # code...
        $user= $obj->fetchUser();
       
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Dashtreme - Multipurpose Bootstrap4 Admin Template</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/css/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Metismenu CSS-->
  <link href="assets/css/metisMenu.min.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/css/app-style.css" rel="stylesheet"/>
  
</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
 <div id="wrapper">
 
  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
   
    <div class="brand-logo">
	  <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon">
	  <h5 class="logo-text">Dashtreme Admin</h5>
	  <div class="close-btn"><i class="zmdi zmdi-close"></i></div>
   </div>
	  
     <ul class="metismenu" id="menu">
		<li>
		  <a class="has-arrow" href="javascript:void();">
			<div class="parent-icon"><i class="zmdi zmdi-view-dashboard"></i></div>
			<div class="menu-title">Dashboard</div>
		  </a>
		  <ul class="">
			<li><a href="index.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v1</a></li>
		    <li><a href="dashboard-eCommerce-v2.html"><i class="zmdi zmdi-dot-circle-alt"></i> eCommerce v2</a></li>
		    <li><a href="dashboard-human-resources.html"><i class="zmdi zmdi-dot-circle-alt"></i> Human Resources</a></li>
		    <li><a href="dashboard-digital-marketing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Digital Marketing</a></li>
            <li><a href="dashboard-property-listing.html"><i class="zmdi zmdi-dot-circle-alt"></i> Property Listings</a></li>
		    <li><a href="dashboard-service-support.html"><i class="zmdi zmdi-dot-circle-alt"></i> Services & Support</a></li>
		    <li><a href="dashboard-healthcare.html"><i class="zmdi zmdi-dot-circle-alt"></i> Healthcare</a></li>
		    <li><a href="dashboard-logistics.html"><i class="zmdi zmdi-dot-circle-alt"></i> Logistics</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-layers'></i></div>
		   <div class="menu-title">UI Elements</div>
		  </a>
		  <ul>
			<li><a href="ui-typography.html"><i class="zmdi zmdi-dot-circle-alt"></i> Typography</a></li>
            <li><a href="ui-cards.html"><i class="zmdi zmdi-dot-circle-alt"></i> Cards</a></li>
			<li><a href="ui-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Buttons</a></li>
			<li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Nav Tabs</a></li>
			<li><a href="ui-accordions.html"><i class="zmdi zmdi-dot-circle-alt"></i> Accordions</a></li>
			<li><a href="ui-modals.html"><i class="zmdi zmdi-dot-circle-alt"></i> Modals</a></li>
			<li><a href="ui-list-groups.html"><i class="zmdi zmdi-dot-circle-alt"></i> List Groups</a></li>
			<li><a href="ui-bootstrap-elements.html"><i class="zmdi zmdi-dot-circle-alt"></i> BS Elements</a></li>
			<li><a href="ui-pagination.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pagination</a></li>
			<li><a href="ui-alerts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Alerts</a></li>
			<li><a href="ui-progressbars.html"><i class="zmdi zmdi-dot-circle-alt"></i> Progress Bars</a></li>
			<li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-dot-circle-alt"></i> Checkboxes & Radios</a></li>
			<li><a href="ui-notification.html"><i class="zmdi zmdi-dot-circle-alt"></i> Notifications</a></li>
			<li><a href="ui-sweet-alert.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sweet Alerts</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-card-travel'></i></div>
		   <div class="menu-title">Components</div>
		  </a>
		  <ul>
			  <li><a href="components-range-slider.html"><i class="zmdi zmdi-dot-circle-alt"></i> Range Sliders</a></li>
			  <li><a href="components-image-carousel.html"><i class="zmdi zmdi-dot-circle-alt"></i> Image Carousels</a></li>
			  <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Grid Layouts</a></li>
			  <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Switcher Buttons</a></li>
			  <li><a href="components-pricing-table.html"><i class="zmdi zmdi-dot-circle-alt"></i> Pricing Tables</a></li>
			  <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vertical Timeline</a></li>
			  <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Horizontal Timeline</a></li>
			  <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Fancy Lightbox</a></li>
			  <li><a href="components-color-palette.html"><i class="zmdi zmdi-dot-circle-alt"></i> Color Palette</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-chart'></i></div>
		   <div class="menu-title">Charts</div>
		  </a>
		  <ul>
			 <li><a href="charts-chartjs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Chart JS</a></li>
             <li><a href="charts-apex.html"><i class="zmdi zmdi-dot-circle-alt"></i> Apex Charts</a></li>
             <li><a href="charts-sparkline.html"><i class="zmdi zmdi-dot-circle-alt"></i> Sparkline Charts</a></li>
             <li><a href="charts-peity.html"><i class="zmdi zmdi-dot-circle-alt"></i> Peity Charts</a></li>
             <li><a href="charts-other.html"><i class="zmdi zmdi-dot-circle-alt"></i> Other Charts</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-widgets'></i></div>
		   <div class="menu-title">Widgets</div>
		  </a>
		  <ul>
			 <li><a href="widgets-static.html"><i class="zmdi zmdi-dot-circle-alt"></i> Static Widgets</a></li>
             <li><a href="widgets-data.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Widgets</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-email'></i></div>
		   <div class="menu-title">Mailbox</div>
		  </a>
		  <ul>
			 <li><a href="mail-inbox.html"><i class="zmdi zmdi-dot-circle-alt"></i> Inbox</a></li>
             <li><a href="mail-compose.html"><i class="zmdi zmdi-dot-circle-alt"></i> Compose</a></li>
             <li><a href="mail-read.html"><i class="zmdi zmdi-dot-circle-alt"></i> Read Mail</a></li>
		  </ul>
		</li>
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-format-list-bulleted'></i></div>
		   <div class="menu-title">Forms</div>
		  </a>
		  <ul>
			 <li><a href="form-inputs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Basic Inputs</a></li>
             <li><a href="form-input-group.html"><i class="zmdi zmdi-dot-circle-alt"></i> Input Groups</a></li>
             <li><a href="form-layouts.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Layouts</a></li>
             <li><a href="form-advanced.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Advanced</a></li>
             <li><a href="form-validation.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Validation</a></li>
             <li><a href="form-step-wizard.html"><i class="zmdi zmdi-dot-circle-alt"></i> Form Wizard</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-lock'></i></div>
		   <div class="menu-title">Authentication</div>
		  </a>
		  <ul>
			 <li><a href="authentication-signin.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignIn 1</a></li>
		     <li><a href="authentication-signup.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignUp 1</a></li>
		     <li><a href="authentication-signin2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignIn 2</a></li>
		     <li><a href="authentication-signup2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> SignUp 2</a></li>
		     <li><a href="authentication-lock-screen.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Lock Screen</a></li>
		     <li><a href="authentication-reset-password.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Reset Password 1</a></li>
		     <li><a href="authentication-reset-password2.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Reset Password 2</a></li>
		  </ul>
		</li>
		
		<li><a href="calendar.html"><div class="parent-icon"><i class='zmdi zmdi-calendar-check'></i></div><div class="menu-title">Calendar</div>
		 <div class="badge badge-light ml-auto">New</div></a></li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-invert-colors'></i></div>
		   <div class="menu-title">UI Icons</div>
		  </a>
		  <ul>
			 <li><a href="icons-font-awesome.html"><i class="zmdi zmdi-dot-circle-alt"></i> Font Awesome</a></li>
             <li><a href="icons-material-designs.html"><i class="zmdi zmdi-dot-circle-alt"></i> Material Design</a></li>
             <li><a href="icons-themify.html"><i class="zmdi zmdi-dot-circle-alt"></i> Themify Icons</a></li>
             <li><a href="icons-simple-line-icons.html"><i class="zmdi zmdi-dot-circle-alt"></i> Line Icons</a></li>
             <li><a href="icons-flags.html"><i class="zmdi zmdi-dot-circle-alt"></i> Flag Icons</a></li>
		  </ul>
		</li>
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-grid'></i></div>
		   <div class="menu-title">Tables</div>
		  </a>
		  <ul>
			 <li><a href="table-simple-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Simple Tables</a></li>
          <li><a href="table-data-tables.html"><i class="zmdi zmdi-dot-circle-alt"></i> Data Tables</a></li>
		  </ul>
		</li>
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-map'></i></div>
		   <div class="menu-title">Maps</div>
		  </a>
		  <ul>
			<li><a href="maps-google.html"><i class="zmdi zmdi-dot-circle-alt"></i> Google Maps</a></li>
            <li><a href="maps-vector.html"><i class="zmdi zmdi-dot-circle-alt"></i> Vector Maps</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();">
		 <div class="parent-icon"> <i class='zmdi zmdi-collection-folder-image'></i></div>
		   <div class="menu-title">Sample Pages</div>
		  </a>
		  <ul>
			<li><a href="pages-invoice.html"><i class="zmdi zmdi-dot-circle-alt"></i> Invoice</a></li>
            <li><a href="pages-user-profile.html"><i class="zmdi zmdi-dot-circle-alt"></i> User Profile</a></li>
            <li><a href="pages-blank-page.html"><i class="zmdi zmdi-dot-circle-alt"></i> Blank Page</a></li>
            <li><a href="pages-coming-soon.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> Coming Soon</a></li>
            <li><a href="pages-403.html" target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 403 Error</a></li>
            <li><a href="pages-404.html"  target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 404 Error</a></li>
            <li><a href="pages-500.html"  target="_blank"><i class="zmdi zmdi-dot-circle-alt"></i> 500 Error</a></li>
		  </ul>
		</li>
		
		<li>
		  <a class="has-arrow" href="javascript:void();"><div class="parent-icon"><i class='fa fa-share'></i></div><div class="menu-title">Menu Levels</div></a>
		  <ul>
			<li><a class="has-arrow" href="javascript:void();"><i class='zmdi zmdi-dot-circle-alt'></i>Level One</a>
			   <ul>
				<li><a class="has-arrow" href="#"><i class='zmdi zmdi-dot-circle-alt'></i>Level Two</a>
				  <ul>
					<li><a href="#"><i class='zmdi zmdi-dot-circle-alt'></i>Level Three</a></li>
				  </ul>
				</li>
			  </ul>
			</li>
		  </ul>
		</li>
		
		<li class="menu-label">Labels</li>
		<li><a href="javascript:void();"><div class="parent-icon"><i class='zmdi zmdi-coffee'></i></div><div class="menu-title">Important</div></a></li>
		<li><a href="javascript:void();"><div class="parent-icon"><i class='zmdi zmdi-chart-donut'></i></div><div class="menu-title">Warning</div></a></li>
		<li><a href="javascript:void();"><div class="parent-icon"><i class='zmdi zmdi-share'></i></div><div class="menu-title">Information</div></a></li>
	   </ul>
   
   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
 
	 <div class="toggle-menu">
		 <i class="zmdi zmdi-menu"></i>
	 </div>
	 <div class="search-bar flex-grow-1">
		 <div class="input-group">
		  <div class="input-group-prepend search-arrow-back">
			  <button class="btn btn-search-back" type="button"><i class="zmdi zmdi-long-arrow-left"></i></button>
			</div>
			<input type="text" class="form-control" placeholder="search">
			<div class="input-group-append">
			  <button class="btn btn-search" type="button"><i class="zmdi zmdi-search"></i></button>
			</div>
		  </div>
	  </div>
     
   <ul class="navbar-nav align-items-center right-nav-link ml-auto">
	<li class="nav-item dropdown search-btn-mobile">
		<a class="nav-link position-relative" href="javascript:void();">
		  <i class="zmdi zmdi-search align-middle"></i>
		</a>
	 </li>
    <li class="nav-item dropdown dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
      <i class="zmdi zmdi-comment-outline align-middle"></i><span class="bg-danger text-white badge-up">12</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
         <li class="list-group-item d-flex justify-content-between align-items-center">
          New Messages <a href="javascript:void();" class="extra-small-font">Clear All</a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-5.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Jhon Deo</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Today, 4:10 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-6.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Sara Jen</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            <small>Yesterday, 8:30 AM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-7.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Dannish Josh</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
             <small>5/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/avatars/avatar-8.png" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-0 msg-title">Katrina Mccoy</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet.</p>
            <small>1/11/2018, 2:50 PM</small>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Messages</a></li>
        </ul>
        </div>
    </li>
    <li class="nav-item dropdown dropdown-lg">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
      <i class="zmdi zmdi-notifications-active align-middle"></i><span class="bg-info text-white badge-up">14</span></a>
      <div class="dropdown-menu dropdown-menu-right">
        <ul class="list-group list-group-flush">
          <li class="list-group-item d-flex justify-content-between align-items-center">
            New Notifications <a href="javascript:void();" class="extra-small-font">Clear All</a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-accounts fa-2x mr-3 text-info"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Registered Users</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-coffee fa-2x mr-3 text-warning"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Received Orders</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item">
          <a href="javaScript:void();">
           <div class="media">
             <i class="zmdi zmdi-notifications-active fa-2x mr-3 text-danger"></i>
            <div class="media-body">
            <h6 class="mt-0 msg-title">New Updates</h6>
            <p class="msg-info">Lorem ipsum dolor sit amet...</p>
            </div>
          </div>
          </a>
          </li>
          <li class="list-group-item text-center"><a href="javaScript:void();">See All Notifications</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item dropdown language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();"><i class="flag-icon flag-icon-gb align-middle"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"><i class="flag-icon flag-icon-gb mr-3"></i>English</li>
          <li class="dropdown-item"><i class="flag-icon flag-icon-fr mr-3"></i>French</li>
          <li class="dropdown-item"><i class="flag-icon flag-icon-cn mr-3"></i>Chinese</li>
          <li class="dropdown-item"><i class="flag-icon flag-icon-de mr-3"></i>German</li>
        </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative" data-toggle="dropdown" href="javascript:void();">
        <span class="user-profile"><img src="assets/images/users/<?php echo $user['photo']?>" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3" src="assets/images/users/<?php echo $user['photo']?>" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?php 
                 echo $user['name']
            ?></h6>
            <p class="user-subtitle"><?php 
                echo $user['email'] 
            ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-comments mr-3"></i>Inbox</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-balance-wallet mr-3"></i>Account</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-settings mr-3"></i>Setting</li>
        <li class="dropdown-divider"></li>
        <li class="dropdown-item"><i class="zmdi zmdi-power mr-3"></i><a href="logout.php?btn=logout">Logout</a> </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->
