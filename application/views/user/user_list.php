<!doctype html>
<html lang="en">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>List User</title>
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
                           <h4 class="card-title">User List</h4>
                        </div>
                     </div>
                     <div class="iq-card-body">
                     <div class="row justify-content-between">
                              <div class="col-sm-12 col-md-6">
                                 <div id="user_list_datatable_info" class="dataTables_filter">
                                    <form class="mr-3 position-relative">
                                       <div class="form-group mb-0">
                                          <input type="search" class="form-control" id="exampleInputSearch" placeholder="Search" aria-controls="user-list-table">
                                       </div>
                                    </form>
                                 </div>
                              </div>
                              <div class="col-sm-12 col-md-6">
                                 <div class="user-list-files d-flex float-right">
                                 <a href="<?= site_url('user/user_add') ?>" class="chat-icon-phone">
                                       Tambah Data
                                     </a>
                                    <a href="javascript:void();" class="chat-icon-phone">
                                       Print
                                     </a>
                                    <a href="javascript:void();" class="chat-icon-video">
                                       Excel
                                     </a>
                                     <a href="javascript:void();" class="chat-icon-delete">
                                       Pdf
                                     </a>
                                   </div>
                              </div>
                           </div>
                        <div class="table-responsive">
                           
                           <table id="user-list-table" class="table table-striped table-bordered mt-4" role="grid" aria-describedby="user-list-page-info">
                             <thead>
                                 <tr>
                                    <th>No</th>                           
                                    <th>Nama</th>
                                    <th>WhatsApp</th>
                                    <th>Tgl Lahir</th>
                                    <th>Daerah Asal</th>
                                    <th>Kewarganegaraan</th>
                                    <th>Alamat</th>
                                    <th>Action</th>
                                 </tr>
                             </thead>
                             <tbody>
                              <?php
                                 $start=0;
                                 foreach($user_data as $user)
                                 { ?>
                                 <tr>
                                    <td><?= ++$start ?></td>
                                    <td><?= $user->nm_dpn .' '. $user->nm_bk  ?></td>
                                    <td><?= $user->no_wa ?></td>
                                    <td><?= $user->tgl_lh ?> </td>
                                    <td><?= $user->da_sal ?></td>
                                    <td><?= $user->kwg ?> </td>
                                    <td><?= $user->alamat ?></td>
                                    <td>
                                       <div class="flex align-items-center list-user-action">
                                       <a href="<?php echo site_url('user/detail/' . $user->id)?>" class="iq-bg-success"><i class="ri-eye-line"></i></i></a>
                                       <a href="<?php echo site_url('user/delete/' . $user->id) ?>" class="iq-bg-danger"><i class="ri-delete-bin-line"></i></i></a>
                                       </div>
                                    </td>
                                 </tr>
                              <?php } ?>                               
                             </tbody>
                           </table>
                        </div>
                           <div class="row justify-content-between mt-3">
                              <div id="user-list-page-info" class="col-md-6">
                                 <span>Showing 1 to 5 of 5 entries</span>
                              </div>
                              <div class="col-md-6">
                                 <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end mb-0">
                                       <li class="page-item disabled">
                                          <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                       </li>
                                       <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                       <li class="page-item"><a class="page-link" href="#">2</a></li>
                                       <li class="page-item"><a class="page-link" href="#">3</a></li>
                                       <li class="page-item">
                                          <a class="page-link" href="#">Next</a>
                                       </li>
                                    </ul>
                                 </nav>
                              </div>
                           </div>
                     </div>
                  </div>
            </div>

         </div>
      </div>

      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                 <div class="modal-content">
                                    <div class="modal-header">
                                       <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                                       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <div class="modal-body">
                                       ...
                                    </div>
                                    <div class="modal-footer">
                                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                       <button type="button" class="btn btn-primary">Save changes</button>
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
