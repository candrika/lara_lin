<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>LaraLin | Dashboard</title>
    <link rel="icon" type="image/png" sizes="16x16" href="https://laravel.com/img/favicon/favicon-16x16.png">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker3.min.css" integrity="sha512-rxThY3LYIfYsVCWPCW9dB0k+e3RZB39f23ylUYTEuZMDrN/vRqLdaCBo/FbvVT6uC2r0ObfPzotsfKF9Qc5W5g==" crossorigin="anonymous" /> -->
    <!--<link href="v3_assets/css/bootstrap-datetimepicker.min.css" rel="stylesheet" />-->
    <link href="v3_assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="v3_assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="v3_assets/css/themify-icons.css" rel="stylesheet" />
    <link href="v3_assets/css/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="v3_assets/css/main.min.css" rel="stylesheet" />
    <link href="v3_assets/css/datatables.min.css" rel="stylesheet" />
    <!--<link href="v3_assets/jqueryUI/jquery-ui.min.css" rel="stylesheet" />-->
    <style>
    .visitors-table tbody tr td:last-child {
        display: flex;
        align-items: center;
    }
    .visitors-table .progress {
        flex: 1;
    }
    .visitors-table .progress-parcent {
        text-align: right;
        margin-left: 10px;
    }
    </style>
    <!-- PAGE LEVEL SCRIPTS-->
</head>
<body class="fixed-navbar">
    <div class="page-wrapper">
      <header class="header">
            <div class="page-brand">
                <a class="link" href="/">
                    <span class="brand">
                        <img src="https://laravel.com/img/logomark.min.svg" style="height: 43px;">
                        <span class="brand-tip">&nbsp;&nbsp;LARALIN</span>
                    </span>
                    <span class="brand-mini"><img src="https://laravel.com/img/logomark.min.svg" style="height: 43px;"></span>
                </a>
            </div>
            <div class="flexbox flex-1">
                <ul class="nav navbar-toolbar">
                    <li>
                        <a class="nav-link sidebar-toggler js-sidebar-toggler"><i class="ti-menu"></i></a>
                    </li>
                    <li>
                        <form class="navbar-search" action="javascript:;">
                            <div class="rel">
                                <span class="search-icon"><i class="ti-search"></i></span>
                                <input class="form-control" placeholder="Search here...">
                            </div>
                        </form>
                    </li>
                </ul>
                <ul class="nav navbar-toolbar">
                    <li class="dropdown dropdown-inbox">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope-o"></i>
                            <span class="badge badge-primary envelope-badge">9</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>9 New</strong> Messages</span>
                                    <a class="pull-right" href="mailbox.html">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="v3_assets/img/users/u1.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"> </div>Jeanne Gonzalez<small class="text-muted float-right">Just now</small>
                                                <div class="font-13">Your proposal interested me.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="v3_assets/img/users/u2.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Becky Brooks<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="v3_assets/img/users/u3.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Frank Cruz<small class="text-muted float-right">18 mins</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <img src="v3_assets/img/users/u4.jpg" />
                                            </div>
                                            <div class="media-body">
                                                <div class="font-strong"></div>Rose Pearson<small class="text-muted float-right">3 hrs</small>
                                                <div class="font-13">Lorem Ipsum is simply.</div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-notification">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell-o rel"><span class="notify-signal"></span></i></a>
                        <ul class="dropdown-menu dropdown-menu-right dropdown-menu-media">
                            <li class="dropdown-menu-header">
                                <div>
                                    <span><strong>5 New</strong> Notifications</span>
                                    <a class="pull-right" href="javascript:;">view all</a>
                                </div>
                            </li>
                            <li class="list-group list-group-divider scroller" data-height="240px" data-color="#71808f">
                                <div>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-check"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">4 task compiled</div><small class="text-muted">22 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-default badge-big"><i class="fa fa-shopping-basket"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">You have 12 new orders</div><small class="text-muted">40 mins</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-danger badge-big"><i class="fa fa-bolt"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">Server #7 rebooted</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                    <a class="list-group-item">
                                        <div class="media">
                                            <div class="media-img">
                                                <span class="badge badge-success badge-big"><i class="fa fa-user"></i></span>
                                            </div>
                                            <div class="media-body">
                                                <div class="font-13">New user registered</div><small class="text-muted">2 hrs</small></div>
                                        </div>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-user">
                        <a class="nav-link dropdown-toggle link" data-toggle="dropdown">
                            <img src="v3_assets/img/admin-avatar.png" />
                            <span></span>Admin<i class="fa fa-angle-down m-l-5"></i></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-user"></i>Profile</a>
                            <a class="dropdown-item" href="profile.html"><i class="fa fa-cog"></i>Settings</a>
                            <a class="dropdown-item" href="javascript:;"><i class="fa fa-support"></i>Support</a>
                            <li class="dropdown-divider"></li>
                            <a class="dropdown-item" href="login.html"><i class="fa fa-power-off"></i>Logout</a>
                        </ul>
                    </li>
                </ul>
            </div>
        </header>
        <nav class="page-sidebar" id="sidebar">
            <div id="sidebar-collapse">
                <div class="admin-block d-flex">
                    <!-- <div>
                        <img src="v3_assets/img/admin-avatar.png" width="45px" />
                    </div>
                    <div class="admin-info">
                        <div class="font-strong">James Brown</div><small>Administrator</small></div> -->
                </div>
                <ul class="side-menu metismenu">
                    <li>
                        <a class="active" href="#"><i class="sidebar-item-icon fa fa-th-large"></i>
                            <span class="nav-label" id="home">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;"><i class="sidebar-item-icon fa fa-balance-scale"></i><span class="nav-label">Category</span><i class="fa fa-angle-left arrow"></i></a>
                        <ul class="nav-2-level collapse">
                            <li>
                                <a href="#" id="pemasukan">Pemasukan</a>
                            </li>
                            <li>
                                <a href="#" id="pengeluaran">Pengeluaran</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#"><i class="sidebar-item-icon fa fa-money"></i>
                            <span class="nav-label" id="transaksi">Transaksi</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- END SIDEBAR-->
        <div class="content-wrapper">
            <!-- START PAGE CONTENT-->

            <!-- END PAGE CONTENT-->
            <footer class="page-footer">
                <div class="font-13">2021 © <b>Chandrika</b></div>
                <a class="px-4 disabled" href="http://themeforest.net/item/adminca-responsive-bootstrap-4-3-angular-4-admin-dashboard-template/20912589" target="_blank">Template Laravel</a>
                <div class="to-top"><i class="fa fa-angle-double-up"></i></div>
            </footer>
        </div>
    </div>
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    
    <!--<script src="v3_assets/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>-->
    <script src="v3_assets/js/jquery.min.js" type="text/javascript"></script>
    <!--<script src="v3_assets/jqueryUI/jquery-ui.min.js" type="text/javascript"></script>-->
    <script src="v3_assets/js/datatables.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="v3_assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="v3_assets/js/metisMenu.min.js" type="text/javascript"></script>
    <script src="v3_assets/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="v3_assets/js/Chart.min.js" type="text/javascript"></script>
    <script src="v3_assets/js/jquery-jvectormap-2.0.3.min.js" type="text/javascript"></script>
    <script src="v3_assets/js/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <script src="v3_assets/js/jquery-jvectormap-us-aea-en.js" type="text/javascript"></script>
    <script src="js/app.min.js" type="text/javascript"></script>
    <script type="text/javascript">

        $('#home').on('click',function(e){
            e.preventDefault(e);
            $('.preloader-backdrop').show();
            $.get('/saldo/historis').done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })
        })

        $('#pemasukan').on('click',function(e){
            e.preventDefault(e);
            $('.preloader-backdrop').show();

            $.get('/income/page').done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })
        })

         $('#pengeluaran').on('click',function(e){
            e.preventDefault(e);
            $('.preloader-backdrop').show();

            $.get('/outcome/page').done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })
        })

        $('#transaksi').on('click',function(e){
            e.preventDefault(e);
            $('.preloader-backdrop').show();

            $.get('/trx/page').done(function(response){
                $('.preloader-backdrop').hide();
                $('.content-wrapper').html(" ");
                $('.content-wrapper').html(response);
            })
        })

    </script>  
</html>