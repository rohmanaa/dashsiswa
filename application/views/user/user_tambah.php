<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Menambah User</title>
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
                     <li>
                        <a href="<?= site_url('index') ?>"><i class="las la-home"></i><span>Dashboard</span></a>
                     </li>
                     
                        <li><a href="<?= site_url('siswa/siswadb') ?>" class="iq-waves-effect"><i class="las la-check-square"></i><span>Siswa</span></a></li>
                     <li  class="active">
                        <a href="#user-info" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="las la-user-tie"></i><span>User</span><i class="ri-arrow-right-s-line iq-arrow-right"></i></a>
                        <ul id="user-info" class="iq-submenu collapse" data-parent="#iq-sidebar-toggle">
                           <li><a href="<?= site_url('user/user_add') ?>"> User Add</a></li>
                           <li><a href="<?= site_url('user/user_list') ?>"> User List</a></li>
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
                        <li class="breadcrumb-item"><a href="#">Halaman Users</a></li>
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
            <div class="col-sm-12">

                   <div class="iq-card">
                                 <div class="iq-card-header d-flex justify-content-between">
                                    <div class="iq-header-title">
                                       <h4 class="card-title">Informasi Pribadi</h4>
                                    </div>
                                 </div>
                                 <div class="iq-card-body">
                                    <form action="<?= site_url('user/user_input') ?>" method="post">
                                       <div class="form-group row align-items-center">
                                          <div class="col-md-12">
                                             <div class="profile-img-edit">
                                                <img class="profile-pic" src="<?= base_url("assets/images/user/11.png") ?>" alt="profile-pic">
                                                <div class="p-image">
                                                  <i class="ri-pencil-line upload-button"></i>
                                                  <input class="file-upload" type="file" accept="image/*">
                                               </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class=" row align-items-center">
                                          <div class="form-group col-sm-6">
                                             <label for="ndn">Nama Depan:</label>
                                             <input type="text" class="form-control" name="nm_dpn" id="nm_dpn" placeholder="Nama Depan">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="nbl">Nama Belakang:</label>
                                             <input type="text" class="form-control" name="nm_bk" id="nm_bk" placeholder="Nama Belakang">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="nowa">No. WA</label>
                                             <input type="text" class="form-control" name="no_wa" id="no_wa" placeholder="Nomor WhatsApp">
                                          </div>
                                          <div class="form-group col-sm-6">
                                             <label for="daerah">Daerah</label>
                                             <input type="text" class="form-control" name="da_sal" id="da_sal" placeholder="Daerah Asal">
                                          </div>
                                          <!-- <div class="form-group col-sm-6">
                                             <label class="d-block">Gender:</label>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio6" name="customRadio1" class="custom-control-input" checked="">
                                                <label class="custom-control-label" for="customRadio6"> Male </label>
                                             </div>
                                             <div class="custom-control custom-radio custom-control-inline">
                                                <input type="radio" id="customRadio7" name="customRadio1" class="custom-control-input">
                                                <label class="custom-control-label" for="customRadio7"> Female </label>
                                             </div>
                                          </div> -->
                                          <div class="form-group col-sm-6">
                                             <label for="dob">Tanggal Lahir</label>
                                             <input type="date" class="form-control" name="tgl_lh" id="tgl_lh">
                                          </div>
                                          
                                          <div class="form-group col-sm-6">
                                             <label>Kewarganegaraan</label>
                                             <select class="form-control" name="kwg" id="kwg">
                                                <option>WNI</option>
                                                <option>WNA</option>
                                             </select>
                                          </div>
                                          
                                          <div class="form-group col-sm-12">
                                             <label>Alamat:</label>
                                             <textarea class="form-control" name="alamat" rows="5" style="line-height: 22px;"></textarea>
                                          </div>
                                       </div>
                                       <input type="hidden" name="id"/>
                                       <button type="submit" class="btn btn-info mr-2" >Submit</button>
                                       <a href="<?= site_url('index') ?>" class="btn btn-default btn-lg btn3d">Cancel</a>
                                    </form>
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
