<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $title ?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="cache-control" content="no-cache">
    <meta http-equiv="expires" content="Thu, 19 Nov 1900 08:52:00 GMT">
    <!--Loading bootstrap css-->
    <link type="text/css" rel="stylesheet"
          href="<?php echo base_url()?>assets/admin/vendors/jquery-ui-1.10.4.custom/css/ui-lightness/jquery-ui-1.10.4.custom.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/font-awesome/css/font-awesome.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/bootstrap/css/bootstrap.min.css">
    <!--LOADING STYLESHEET FOR PAGE-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/intro.js/introjs.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/calendar/zabuto_calendar.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/sco.message/sco.message.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/intro.js/introjs.css">
    <!--Loading style vendors-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/animate.css/animate.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/jquery-pace/pace.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/iCheck/skins/all.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/jquery-notific8/jquery.notific8.min.css">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker-bs3.css">
    <!--Loading style-->
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/themes/style1/orange-blue.css" class="default-style">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/themes/style1/orange-blue.css" id="theme-change"
          class="style-change color-change">
    <link type="text/css" rel="stylesheet" href="<?php echo base_url()?>assets/admin/css/style-responsive.css">
    <script src="<?php echo base_url()?>assets/admin/js/jquery-1.10.2.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="<?php echo base_url()?>assets/admin/js/jquery-ui.js"></script>
    <!--loading bootstrap js-->
</head>
<body class=" ">
<div>
    <!--BEGIN TOPBAR-->
    <div id="header-topbar-option-demo" class="page-header-topbar">
        <nav id="topbar" role="navigation" style="margin-bottom: 0; z-index: 2;"
             class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" data-toggle="collapse" data-target=".sidebar-collapse" class="navbar-toggle"><span
                        class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                        class="icon-bar"></span><span class="icon-bar"></span></button>
                <a id="logo" href="index.html" class="navbar-brand"><span class="fa fa-rocket"></span><span
                        class="logo-text">PMB</span><span style="display: none" class="logo-text-icon">PMB</span></a>
            </div>
            <div class="topbar-main"><a id="menu-toggle" href="#" class="hidden-xs"><i class="fa fa-bars"></i></a>
                <ul class="nav navbar-nav">
                </ul>
                <ul class="nav navbar navbar-top-links navbar-right mbn">
                    <li class="dropdown topbar-user"><a data-hover="dropdown" href="#" class="dropdown-toggle"><img
                            src="<?php echo $this->foto;?>" alt="Foto user"
                            class="img-responsive img-circle"/>&nbsp;<span class="hidden-xs"><?php echo $this->username; ?></span>&nbsp;<span
                            class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-user pull-right">
                            <li><a href="<?php echo base_url('Belakang/profil/edit');?>"><i class="fa fa-user"></i>My Profile</a></li>
                            <li><a href="<?php echo $this->logout;?>"><i class="fa fa-key"></i>Log Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!--END MODAL CONFIG PORTLET--></div>
    <!--END TOPBAR-->
    <div id="wrapper">
        <!--BEGIN SIDEBAR MENU-->
        <?php $this->load->view($menu); ?>
        <!--END SIDEBAR MENU-->
        <!--BEGIN PAGE WRAPPER-->
        <div id="page-wrapper">
            <?php echo $this->session->flashdata('report'); ?>
            <?php echo $this->session->flashdata('notif'); ?>
            <?php $this->load->view($page);?>
        </div>
        <!--BEGIN FOOTER-->
        <div id="footer">
            <div class="copyright">2014 © &mu;Admin - Responsive Multi-Style Admin Template</div>
        </div>
        <!--END FOOTER-->
    </div>
     <!--END PAGE WRAPPER-->
</div>
<script src="<?php echo base_url()?>assets/admin/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/html5shiv.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/respond.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/metisMenu/jquery.metisMenu.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/slimScroll/jquery.slimscroll.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/jquery-cookie/jquery.cookie.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/iCheck/icheck.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/iCheck/custom.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/jquery-notific8/jquery.notific8.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/jquery-highcharts/highcharts.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/jquery.menu.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/jquery-pace/pace.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/holder/holder.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/responsive-tabs/responsive-tabs.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/jquery-news-ticker/jquery.newsTicker.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/moment/moment.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
<!--CORE JAVASCRIPT-->
<script src="<?php echo base_url()?>assets/admin/js/main.js"></script>
<!--LOADING SCRIPTS FOR PAGE-->
<script src="<?php echo base_url()?>assets/admin/vendors/intro.js/intro.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/calendar/zabuto_calendar.min.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/sco.message/sco.message.js"></script>
<script src="<?php echo base_url()?>assets/admin/vendors/intro.js/intro.js"></script>
<script src="<?php echo base_url()?>assets/admin/js/index.js"></script>
</script>
</body>
</html>