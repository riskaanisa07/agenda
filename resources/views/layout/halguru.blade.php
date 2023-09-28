<!doctype html>
<html lang="en">

<!-- Header -->
<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2023 04:57:42 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Agenda</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.ico">

        <!-- datepicker css -->
        <link href="/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">

        <!-- Bootstrap Css -->
        <link href="/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark" data-layout-mode="light">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header justify-content-end">

              
                        <div class="d-flex">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" aria-haspopup="true" aria-expanded="false">
                                <a class="d-none d-xl-inline-block ms-1" href="{{ ('guru')}}" key="t-henry">CEK KEHADIRAN</a>
                            </button>
                            <div>
                                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" aria-haspopup="true" aria-expanded="false">
                                    <a class="d-none d-xl-inline-block ms-1" href="{{ ('kegiatan')}}" key="t-henry">ISI AGENDA</span>
                                </button>
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{ ('/images/users/avatar-1.jpg') }}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">sucipto</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item" href="#"><i class="bx bx-user font-size-16 align-middle me-1"></i> <span key="t-profile">Profile</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-wallet font-size-16 align-middle me-1"></i> <span key="t-my-wallet">My Wallet</span></a>
                                <a class="dropdown-item d-block" href="#"><span class="badge bg-success float-end">11</span><i class="bx bx-wrench font-size-16 align-middle me-1"></i> <span key="t-settings">Settings</span></a>
                                <a class="dropdown-item" href="#"><i class="bx bx-lock-open font-size-16 align-middle me-1"></i> <span key="t-lock-screen">Lock screen</span></a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                            </div>
                        </div>
                </div>
            </div>  
        </div>
            </header>


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
          
            <div class="card" style="margin-top: 100px;">
                <div class="card-body">
                    <div class="main content">
                                                            <img src="nime.jpeg" alt="" class="avatar-md rounded-circle img-thumbnail">
                                                        <div class="flex-grow-1 align-self-center margin-top: 10px;" >
                                                            <div class="text-muted">
                                                                <p class="mb-2">Welcome to Agenda guru</p>
                                                                <h5 class="mb-1">sucipto</h5>
                                                                <p class="mb-0">ADMIN</p>
                                                            </div>
                                                        </div>
                </div>
                                    
                    </div>
            </div>
            

                <div class="page-content">
                    <div class="container">
                        @yield('titel')
                        @yield('kontenguru')
                    </div>
                </div>
            </div>
                            
                                <!-- end row -->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="/libs/jquery/jquery.min.js"></script>
        <script src="/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="/libs/metismenu/metisMenu.min.js"></script>
        <script src="/libs/simplebar/simplebar.min.js"></script>
        <script src="/libs/node-waves/waves.min.js"></script>

        <!-- apexcharts -->
        <script src="/libs/apexcharts/apexcharts.min.js"></script>
        
        <!-- Saas dashboard init -->
        <script src="/js/pages/saas-dashboard.init.js"></script>

        <script src="/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/dashboard-saas.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 09 Jan 2023 04:57:42 GMT -->
</html>
