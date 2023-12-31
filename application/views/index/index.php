<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Dashboard Management DQM</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?= base_url("assets/images/favicon.ico") ?>" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?= base_url("assets/css/bootstrap.min.css") ?>" >
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?= base_url("assets/css/typography.css")?> ">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?= base_url("assets/css/style.css") ?>">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?= base_url("assets/css/responsive.css") ?>">
   </head>
   <body class="header-top-bg">
      <!-- loader Start -->
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="<?= site_url('index') ?>">
               <img src="<?= base_url("assets/images/logo.gif") ?>" class="img-fluid" alt="">
               <span>DQM</span>
               </a>
               <div class="iq-menu-bt align-self-center">
                  <div class="wrapper-menu">
                     <div class="line-menu half start"></div>
                     <div class="line-menu"></div>
                     <div class="line-menu half end"></div>
                  </div>
               </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-separator"></i><span>Main</span></li>
                     <li class="active">
                        <a href="<?= site_url('index') ?>"><i class="las la-home"></i><span>Dashboard</span></a>
                     </li>
                     
                        <li><a href="<?= site_url('siswa/siswadb') ?>" class="iq-waves-effect"><i class="las la-school"></i><span>Siswa</span></a></li>
                     <li>
                        <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-user-tie"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?= site_url('user/user_add') ?>"> User Add</a></li>
                           <li><a href="<?= site_url('user/userlist') ?>"> User List</a></li>
                        </ul>
                     </li>
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
         <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="#" class="logo">
                     <img src="<?= base_url("assets/images/logo.gif") ?>" class="img-fluid" alt="">
                     <span>Dashboard Management</span>
                     </a>
                  </div>
               </div>
               <div class="navbar-breadcrumb">
                  <h5 class="mb-0">Dashboard</h5>
                  <nav aria-label="breadcrumb">
                     <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Halaman Utama</a></li>
                     </ul>
                  </nav>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="line-menu half start"></div>
                        <div class="line-menu"></div>
                        <div class="line-menu half end"></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li class="nav-item">
                           <a class="search-toggle iq-waves-effect" href="#"><i class="ri-search-line"></i></a>
                           <form action="#" class="search-box">
                              <input type="text" class="text search-input" placeholder="Type here to search..." />
                           </form>
                        </li>

                        <li class="nav-item iq-full-screen"><a href="#" class="iq-waves-effect" id="btnFullscreen"><i class="ri-fullscreen-line"></i></a></li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect text-white"> <i class="ri-user-line"></i> </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-info p-3">
                                    <h5 class="mb-0 text-white line-height">Hello (Nama))</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="iq-bg-danger iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body">
                           <div class="text-center mb-2">
                           <div class="rounded-circle iq-card-icon iq-bg-primary"><i class="ri-user-line"></i></div></div>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">74.5</span><span>K</span></h2>
                              <h6 class="mb-2">Users</h6>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">10%</span> Increased</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body">
                           <div class="text-center mb-2">
                           <div class="rounded-circle iq-card-icon iq-bg-danger"><i class="ri-search-2-line"></i></div></div>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">95.5</span><span>K</span></h2>
                              <h6 class="mb-2">Sessions</h6>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">22%</span> Increased</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body">
                           <div class="text-center mb-2">
                           <div class="rounded-circle iq-card-icon iq-bg-success"><i class="ri-drizzle-line"></i></div></div>
                           <div class="clearfix"></div>
                           <div class="text-center">
                              <h2 class="mb-0"><span class="counter">5.2</span><span>K</span></h2>
                              <h6 class="mb-2">Bounce Rate</h6>
                              <p class="mb-0 text-secondary line-height"><i class="ri-arrow-up-line text-success mr-1"></i><span class="text-success">8%</span> Increased</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-body p-0" style="background: url(assets/images/page-img/01.png) no-repeat scroll center center; background-size: contain; min-height: 202px;">
                        </div>
                     </div>
                  </div>
                  
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height overflow-hidden">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Expenses </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body pl-0">
                           <div id="home-chart-1" style="height: 380px;"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Device</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle" id="dropdownMenuButton02" data-toggle="dropdown" aria-expanded="false" role="button">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton02" style="">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body p-0">
                           <div id="bar-chart-6" style="min-height: 304px;"></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6 col-lg-3">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Server History</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton03" data-toggle="dropdown">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton03">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="home-pie-chart" style="height: 105px;"></div>
                           <div class="d-flex align-items-center justify-content-between mt-4 mb-4">
                              <div class="student-data">
                                 <h6 class="">US Data</h6>
                                 <div class="">45,000</div>
                              </div>
                              <div class="student-data">
                                 <h6 class="">ASIA Data</h6>
                                 <div class="">60,000</div>
                              </div>
                           </div>
                        </div>
                        <div id="bar-chart-12"></div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Maintenance Tasks</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="tasks-lists m-0 p-0">
                              <li class="d-flex justify-content-between mb-3 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-1">
                                    <label class="custom-control-label" for="task-1">Prepare for presentation  </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-3 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-2" checked="">
                                    <label class="custom-control-label" for="task-2"><del>Create invoice </del> </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-3 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-3">
                                    <label class="custom-control-label" for="task-3">Print Documents </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-3 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-4">
                                    <label class="custom-control-label" for="task-4">Team Meeting on Satuarday  </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-3 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-5" checked="">
                                    <label class="custom-control-label" for="task-5"><del> Lunch our New Product </del> </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-2 align-items-center">
                                 <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="task-6">
                                    <label class="custom-control-label" for="task-6">Sent Email for Meeting </label>
                                 </div>
                                 <div class="font-size-18">
                                    <i class="ri-close-circle-line"></i>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Schedules</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="schedule-lists m-0 p-0">
                              <li class="d-flex justify-content-between mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6 class="mb-2">Skype call with Ruby</h6>
                                    <p class="mb-0"><span class="badge badge-primary">11:45 am</span> USA</p>
                                 </div>
                                 <div class="team-group">
                                    <div class="iq-media-group">
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6 class="mb-2">Meeting with Team</h6>
                                    <p class="mb-0"><span class="badge badge-info">10:30 am</span> Caneda</p>
                                 </div>
                                 <div class="team-group">
                                    <div class="iq-media-group">
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/08.jpg" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6 class="mb-2">Data Analysing with Client</h6>
                                    <p class="mb-0"><span class="badge badge-warning text-white">02:00 pm</span> Africa</p>
                                 </div>
                                 <div class="team-group">
                                    <div class="iq-media-group">
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex justify-content-between mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6 class="mb-2">conference with Team</h6>
                                    <p class="mb-0"><span class="badge badge-success">03:30 am</span> Australia</p>
                                 </div>
                                 <div class="team-group">
                                    <div class="iq-media-group">
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/05.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/06.jpg" alt="">
                                       </a>
                                       <a href="#" class="iq-media">
                                       <img class="img-fluid avatar-40 rounded-circle" src="images/user/07.jpg" alt="">
                                       </a>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half" style="background-color: transparent; box-shadow: none;">
                        <div class="iq-card-body bg-primary rounded">
                           <div class="d-flex align-items-center">
                              <div class="col-md-8">
                                 <p class="text-white">Amount Due</p>
                                 <h2 class="text-white"> $5450.90 </h2> 
                                 <h6 class="text-white"> Milestone Completed </h6> 
                                 <div class="text-white"> Payment for next week </div>
                              </div> 
                              <div class="col-md-4 chart-icon text-center">
                                 <i class="ri-bar-chart-grouped-line font-size-40 text-white"></i>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height-half">
                        <div class="iq-card-body">
                           <div class="d-flex align-items-center justify-content-between mb-3">
                               <div class="revenue-desc">
                                 <h6>Member Profit</h6> 
                                 <p class="font-weight-light mb-0"> Average Weekly Profit </p>
                               </div> 
                               <div class="revenue-amount">
                                 <p class="text-primary mb-0"> +168.900 </p>
                              </div>
                           </div>
                           <hr>
                           <div class="d-flex align-items-center justify-content-between mb-3">
                               <div class="revenue-desc">
                                 <h6>Total Profit</h6> 
                                 <p class="font-weight-light mb-0"> Weekly Customer Orders </p>
                               </div> 
                               <div class="revenue-amount">
                                 <p class="text-primary mb-0"> +168.900 </p>
                              </div>
                           </div>
                         </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Activity</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton04" data-toggle="dropdown">
                                 View All
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="iq-timeline">
                              <li>
                                 <div class="timeline-dots"></div>
                                 <h6 class="float-left mb-1">Client Login</h6>
                                 <small class="float-right mt-1">24 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-success"></div>
                                 <h6 class="float-left mb-1">Scheduled Maintenance</h6>
                                 <small class="float-right mt-1">23 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-primary"></div>
                                 <h6 class="float-left mb-1">Client Call</h6>
                                 <small class="float-right mt-1">19 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                              <li>
                                 <div class="timeline-dots border-warning"></div>
                                 <h6 class="float-left mb-1">Mega event</h6>
                                 <small class="float-right mt-1">15 November 2019</small>
                                 <div class="d-inline-block w-100">
                                    <p>Bonbon macaroon jelly beans gummi bears jelly lollipop apple</p>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Server History</h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton05" data-toggle="dropdown">
                                 <i class="ri-more-2-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body pb-0">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Server ID</th>
                                       <th scope="col">Up Since</th>
                                       <th scope="col">Last Reboot</th>
                                       <th scope="col">Status</th>
                                       <th scope="col">Host</th>
                                       <th scope="col">Utilization</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>#0879985</td>
                                       <td>26/12/2019</td>
                                       <td>30/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-success">Running</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-success" data-percent="90" ></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879984</td>
                                       <td>23/12/2019</td>
                                       <td>27/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-warning text-white">Starting</div>
                                       </td>
                                       <td>Athens 2745 Greece</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-warning" data-percent="70" ></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879983</td>
                                       <td>18/12/2019</td>
                                       <td>21/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-danger">Stopped</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-danger" data-percent="48"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879982</td>
                                       <td>14/12/2019</td>
                                       <td>20/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-info">Maintenance</div>
                                       </td>
                                       <td>Delhi 0014 India</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-info" data-percent="90"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879981</td>
                                       <td>10/12/2019</td>
                                       <td>18/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-success">Running</div>
                                       </td>
                                       <td>Alabama 2741 USA</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-success" data-percent="45"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0879981</td>
                                       <td>13/12/2019</td>
                                       <td>23/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-primary">Running</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-primary" data-percent="80"></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#01258569</td>
                                       <td>20/12/2019</td>
                                       <td>29/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-warning text-white">Starting</div>
                                       </td>
                                       <td>Athens 2745 Greece</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-warning" data-percent="55" ></span>
                                          </div>
                                       </td>
                                    </tr>
                                    <tr>
                                       <td>#0825685</td>
                                       <td>12/12/2019</td>
                                       <td>22/12/2019</td>
                                       <td>
                                          <div class="badge badge-pill badge-danger">Stoppen</div>
                                       </td>
                                       <td>Victoria 8007 Australia</td>
                                       <td>
                                          <div class="iq-progress-bar">
                                             <span class="bg-danger" data-percent="60"></span>
                                          </div>
                                       </td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2020 <a href="#">Metorik</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="<?= base_url("assets/js/jquery.min.js") ?>"></script>
      <script src="<?= base_url("assets/js/popper.min.js") ?>"></script>
      <script src="<?= base_url("assets/js/bootstrap.min.js") ?>"></script>
      <!-- Appear JavaScript -->
      <script src="<?= base_url("assets/js/jquery.appear.js") ?>"></script>
      <!-- Countdown JavaScript -->
      <script src="<?= base_url("assets/js/countdown.min.js") ?>"></script>
      <!-- Counterup JavaScript -->
      <script src="<?= base_url("assets/js/waypoints.min.js") ?>"></script>
      <script src="<?= base_url("assets/js/jquery.counterup.min.js") ?>"></script>
      <!-- Wow JavaScript -->
      <script src="<?= base_url("assets/js/wow.min.js") ?>"></script>
      <!-- Apexcharts JavaScript -->
      <script src="<?= base_url("assets/js/apexcharts.js") ?>"></script>
      <!-- Slick JavaScript -->
      <script src="<?= base_url("assets/js/slick.min.js") ?>"></script>
      <!-- Select2 JavaScript -->
      <script src="<?= base_url("assets/js/select2.min.js") ?>"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="<?= base_url("assets/js/owl.carousel.min.js") ?>"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="<?= base_url("assets/js/jquery.magnific-popup.min.js") ?>"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="<?= base_url("assets/js/smooth-scrollbar.js") ?>"></script>
      <!-- lottie JavaScript -->
      <script src="<?= base_url("assets/js/lottie.js") ?>"></script>
      <!-- Chart Custom JavaScript -->
      <script src="<?= base_url("assets/js/chart-custom.js") ?>"></script>
      <!-- Custom JavaScript -->
      <script src="<?= base_url("assets/js/custom.js") ?>"></script>
   </body>
</html>
