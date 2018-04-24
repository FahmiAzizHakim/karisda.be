<!DOCTYPE html>
<html lang="en">
    <head>        
        <!-- META SECTION -->
        <title>Karinda - Admin Page</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        
        <link rel="icon" href="favicon.ico" type="image/x-icon" />
        <!-- END META SECTION -->
        
        <!-- CSS INCLUDE -->        
        <link rel="stylesheet" type="text/css" id="theme" href="{$assets_url}css/theme-default.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="{$assets_url}new/bootstrap-datepicker.css"/>
        <!-- EOF CSS INCLUDE -->                   
    </head>
    <body>

    <!-- START PRELOADS -->
        <audio id="audio-alert" src="{$assets_url}audio/alert.mp3" preload="auto"></audio>
        <audio id="audio-fail" src="{$assets_url}audio/fail.mp3" preload="auto"></audio>
        <!-- END PRELOADS -->                  
        
    <!-- START SCRIPTS -->
        <!-- START PLUGINS -->
        <script type="text/javascript" src="{$assets_url}js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/bootstrap/bootstrap.min.js"></script>        
        <!-- END PLUGINS -->

        <!-- START THIS PAGE PLUGINS-->        
        <script type='text/javascript' src='{$assets_url}js/plugins/icheck/icheck.min.js'></script>        
        <script type="text/javascript" src="{$assets_url}js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/scrolltotop/scrolltopcontrol.js"></script>
             
        <script type='text/javascript' src='{$assets_url}new/bootstrap-datepicker.js'></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/fileinput/fileinput.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/bootstrap/bootstrap-timepicker.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/bootstrap/bootstrap-colorpicker.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/bootstrap/bootstrap-file-input.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/bootstrap/bootstrap-select.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/tagsinput/jquery.tagsinput.min.js"></script>                
        <script type="text/javascript" src="{$assets_url}js/plugins/owl/owl.carousel.min.js"></script>                 
        <script type="text/javascript" src="{$assets_url}js/plugins/summernote/summernote.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/moment.min.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/daterangepicker/daterangepicker.js"></script>
        <script type='text/javascript' src='{$assets_url}js/plugins/noty/jquery.noty.js'></script>
        <script type='text/javascript' src='{$assets_url}js/plugins/noty/layouts/topCenter.js'></script>         
            
        <script type='text/javascript' src='{$assets_url}js/plugins/noty/themes/default.js'></script>
        <!-- END THIS PAGE PLUGINS-->        

        <!-- START TEMPLATE -->
        <!-- <script type="text/javascript" src="{$assets_url}js/settings.js"></script> -->
        
        <script type="text/javascript" src="{$assets_url}js/plugins.js"></script>        
        <script type="text/javascript" src="{$assets_url}js/actions.js"></script>
        <script type="text/javascript" src="{$assets_url}js/plugins/datatables/jquery.dataTables.min.js"></script>
        
        <!-- <script type="text/javascript" src="{$assets_url}js/demo_dashboard.js"></script> -->
        <!-- END TEMPLATE -->
    <!-- END SCRIPTS -->      

        <!-- START PAGE CONTAINER -->
        <div class="page-container">
            
            <!-- START PAGE SIDEBAR -->
            <div class="page-sidebar">
                <!-- START X-NAVIGATION -->
                <ul class="x-navigation">
                    <li class="xn-logo">
                        <a href="{$base_url}">Karinda</a>
                        <a href="#" class="x-navigation-control"></a>
                    </li>
                    <li class="xn-profile">
                        <!-- <a href="#" class="profile-mini">
                            <img src="{$assets_url}assets/images/users/avatar.jpg" alt="{$s_user_name}"/>
                        </a> -->
                        <div class="profile">
<!--                             <div class="profile-image">
                                <img src="{$assets_url}assets/images/users/avatar.jpg" alt="{$s_user_name}"/>
                            </div> -->
                            <div class="profile-data">
                                <div class="profile-data-name">{$s_user_name}</div>
                                <input type="hidden" name="s_user_name" id="s_user_name" value="{$s_user_name}">
                                <input type="hidden" name="s_user_id" id="s_user_id" value="{$s_user_id}">
                                <input type="hidden" name="s_user_code" id="s_user_code" value="{$s_user_code}">
                                <input type="hidden" name="s_user_role" id="s_user_role" value="{$s_user_role}">
                                <input type="hidden" name="s_company_code" id="s_company_code" value="{$s_company_code}">
                            </div>
                            <!-- <div class="profile-controls">
                                <a href="pages-profile.html" class="profile-control-left"><span class="fa fa-info"></span></a>
                                <a href="pages-messages.html" class="profile-control-right"><span class="fa fa-envelope"></span></a>
                            </div> -->
                        </div>                                                                        
                    </li>
                    <li class="xn-title">Navigation</li>
                    <li class="">
                        <a href="{$base_url}about/users"><span class="fa fa-user"></span> <span class="xn-text">User</span></a>
                    </li>                    
                    <li class="xn-openable">
                        <a href="#"><span class="fa fa-files-o"></span><!-- <span class="fa fa-group"></span> <span class="xn-text"> -->Tentang Kami</span></a>
                        <ul>
                            <li><a href="{$base_url}about/product/">Product dan Layanan</a></li>

                            <li><a href="{$base_url}about/keunggulan/">Keunggulan</a></li>

                            <li><a href="{$base_url}about/about_us">Tentang Kami</a></li>

                            <li><a href="{$base_url}about/visi">Visi, Misi dan Moto</a></li>

                            <li><a href="{$base_url}about/Legalitas">Legalitas Kami</a></li>
                        </ul>
                    </li>
                    <li class="">
                        <a href="{$base_url}berita/news"><span class="fa fa-book"></span><span class="xn-text">Berita</span></a>
                        <!-- <ul>
                            <li><a href="{$base_url}transaksi/toko"><span class="fa fa-shopping-cart"></span> Toko</a></li>

                            <li><a href="{$base_url}transaksi/Pengeluaran"><span class="fa fa-location-arrow"></span>Pengeluaran Keuangan</a></li>                            
                            <li><a href="{$base_url}booking"><span class="fa fa-book"></span> Booking Lapangan</a></li>

                            <li><a href="{$base_url}transaksi/pembayaran"><span class="fa fa-money"></span> Pembayaran Lapangan</a></li>
                        </ul>    -->
                    </li>
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-file-text-o"></span> <span class="xn-text">Laporan</span></a>
                        <ul>
                            <li><a href="layout-boxed.html">Boxed</a></li>
                            <li><a href="layout-nav-toggled.html">Navigation Toggled</a></li>
                            <li><a href="layout-nav-toggled-hover.html">Nav Toggled (Hover)</a></li>
                            <li><a href="layout-nav-toggled-item-hover.html">Nav Toggled (Item Hover)</a></li>
                            <li><a href="layout-nav-top.html">Navigation Top</a></li>
                            <li><a href="layout-nav-right.html">Navigation Right</a></li>
                            <li><a href="layout-nav-top-fixed.html">Top Navigation Fixed</a></li>
                            <li><a href="layout-nav-custom.html">Custom Navigation</a></li>
                            <li><a href="layout-nav-top-custom.html">Custom Top Navigation</a></li>
                            <li><a href="layout-frame-left.html">Frame Left Column</a></li>
                            <li><a href="layout-frame-right.html">Frame Right Column</a></li>
                            <li><a href="layout-search-left.html">Search Left Side</a></li>
                            <li><a href="layout-page-sidebar.html">Page Sidebar</a></li>
                            <li><a href="layout-page-loading.html">Page Loading</a></li>
                            <li><a href="layout-rtl.html">Layout RTL</a></li>
                            <li><a href="layout-tabbed.html">Page Tabbed</a></li>
                            <li><a href="layout-custom-header.html">Custom Header</a></li>
                            <li><a href="layout-adaptive-panels.html">Adaptive Panels</a></li>                            
                            <li><a href="blank.html">Blank Page</a></li>
                        </ul>
                    </li> -->
                    
                    <!-- <li class="xn-openable">
                        <a href="#"><span class="fa fa-dollar"></span><span class="xn-text">Billing</span></a>                        
                        <ul>
                            <li><a href="#"><span class="fa fa-heart"></span> Pengeluaran</a></li>                            
                            <li><a href="#"><span class="fa fa-cogs"></span> Invoice Members</a></li>
                            <li><a href="#"><span class="fa fa-square-o"></span> Pemasukan Lain</a></li>
                        </ul>
                    </li>       -->                                  
                </ul>
                <!-- END X-NAVIGATION -->
            </div>
            <!-- END PAGE SIDEBAR -->
            
            <!-- PAGE CONTENT -->
            <div class="page-content">
                
                <!-- START X-NAVIGATION VERTICAL -->
                <ul class="x-navigation x-navigation-horizontal x-navigation-panel">
                    <!-- TOGGLE NAVIGATION -->
                    <!-- <li class="xn-icon-button">
                        <a href="#" class="x-navigation-minimize"><span class="fa fa-dedent"></span></a>
                    </li> -->
                    <!-- END TOGGLE NAVIGATION -->
                    <!-- SEARCH -->
                    <li class="xn-search">
                        <form role="form">
                            <input type="text" name="search" placeholder="Search . . . "/>
                        </form>
                    </li>   
                    <!-- END SEARCH -->                    
                    <!-- POWER OFF -->
                    <li class="xn-icon-button pull-right last">
                        <a href="#"><span class="fa fa-power-off"></span></a>
                        <ul class="xn-drop-left animated zoomIn">
                            <li><a href="#" class="mb-control" data-box="#mb-signout"><span class="fa fa-sign-out"></span> Sign Out</a></li>
                        </ul>                        
                    </li> 
                    <!-- END POWER OFF -->                    
                </ul>
                <!-- END X-NAVIGATION VERTICAL -->                     

                <!-- START BREADCRUMB -->
                <ul class="breadcrumb">
                </ul>
                <!-- END BREADCRUMB -->                       
                
                <!-- PAGE CONTENT WRAPPER -->
                <div class="page-content-wrap">
                {include file=$template}
                </div>
                <!-- END PAGE CONTENT WRAPPER -->                                
            </div>            
            <!-- END PAGE CONTENT -->
        </div>
        <!-- END PAGE CONTAINER -->

        <!-- MESSAGE BOX-->
        <div class="message-box animated fadeIn" data-sound="alert" id="mb-signout">
            <div class="mb-container">
                <div class="mb-middle">
                    <div class="mb-title"><span class="fa fa-sign-out"></span> Log <strong>Out</strong> ?</div>
                    <div class="mb-content">
                        <p>Are you sure you want to log out?</p>                    
                        <p>Press No if youwant to continue work. Press Yes to logout current user.</p>
                    </div>
                    <div class="mb-footer">
                        <div class="pull-right">
                            <a href="{$base_url}/Login/logout" class="btn btn-success btn-lg">Yes</a>
                            <button class="btn btn-default btn-lg mb-control-close">No</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END MESSAGE BOX-->

   
    </body>
</html>






