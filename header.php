<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<?php if(!defined('datalist_db_encoding')) define('datalist_db_encoding', 'UTF-8'); ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo ucwords('TTU LIBRARY'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect. -->
  <link rel="stylesheet" href="dist/css/skins/skin-blue.min.css">

        <link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>dist/img/libicn.png">

    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/bootstrap.css">
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/bootstrap-theme.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/lightbox/css/lightbox.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/select2/select2.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/datepicker/css/datepicker.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dynamic.css.php">

  <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.12.4.min.js"></script>
    <script>var $j = jQuery.noConflict();</script>
    <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/scriptaculous.js?load=effects"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/jscookie/js.cookie.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/datepicker/js/datepicker.packed.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>
    <?php if(isset($x->TableName) && is_file(dirname(__FILE__) . "/hooks/{$x->TableName}-tv.js")){ ?>
      <script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
    <?php } ?>
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index.php" style="text-decoration:none;" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b><img src="dist/img/libicn.png" width="30px;" alt=""></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TTU LIBRARY</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" style="text-decoration:none;" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel text-center">
        <div class="pull-left image">
          <img src="dist/img/admin-icn.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
            <strong><a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="text-success"><?php echo getLoggedMemberID(); ?></a></strong>
              <!-- Status -->
              <br>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Menu</li>
        <!-- Optionally, you can add icons to the links -->
        <li class="<?php if($page=='dashboard') { echo 'active';}?>"><a href="index.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
        <li class="<?php if($page=='members') { echo 'active';}?>"><a href="Users_view.php"><i class="fa fa-users"></i> <span>Students</span></a></li>
        <li class="<?php if($page=='books') { echo 'active';}?>"><a href="books_view.php"><i class="fa fa-book"></i> <span>Books Section</span></a></li>
        <li class="<?php if($page=='newspaper') { echo 'active';}?>"><a href="NewsPapers_view.php"><i class="fa fa-newspaper-o"></i> <span>Newspaper Section</span></a></li>
        <li class="<?php if($page=='magazine') { echo 'active';}?>"><a href="Magazines_view.php"><i class="fa fa-sticky-note"></i> <span>Magazine Section</span></a></li>
        <li class="<?php if($page=='issue') { echo 'active';}?>"><a href="Book_Issue_view.php"><i class="fa fa-check"></i> <span>Issued List</span></a></li>
        <li class="<?php if($page=='return') { echo 'active';}?>"><a href="Return_Book_view.php"><i class="fa fa-reply"></i> <span>Returned List</span></a></li>
         <li><a href="http://localhost/LibraryManagementSystem/Book_Issue_view.php?SortField=&SortDirection=&FilterAnd%5B1%5D=and&FilterField%5B1%5D=9&FilterOperator%5B1%5D=equal-to&FilterValue%5B1%5D=issued&FilterAnd%5B5%5D=and&FilterAnd%5B9%5D=and&FilterAnd%5B13%5D=and&FilterAnd%5B17%5D=and&FilterAnd%5B21%5D=and&FilterAnd%5B25%5D=and&FilterAnd%5B29%5D=and&FilterAnd%5B33%5D=and&FilterAnd%5B37%5D=and&FilterAnd%5B41%5D=and&FilterAnd%5B45%5D=and&FilterAnd%5B49%5D=and&FilterAnd%5B53%5D=and&FilterAnd%5B57%5D=and&FilterAnd%5B61%5D=and&FilterAnd%5B65%5D=and&FilterAnd%5B69%5D=and&FilterAnd%5B73%5D=and&FilterAnd%5B77%5D=and"><i class="fa fa-times"></i> <span>Not Returned List</span></a></li>
        
         <li class="treeview">
          <a href="#"><i class="fa fa-sign-out"></i> <span>LOG OUT</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li> <a class="btn navbar-btn btn-danger" style="color:white" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="fa fa-power-off"></i> <?php echo $Translation['sign out']; ?></a></li>
              <!--admin area-->
            <li>
             <?php if(getLoggedAdmin()){ ?>
          <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm hidden-xs"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
            <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn btn-sm visible-xs btn-sm"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
          <?php } ?>
          <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
          <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
            <p class="navbar-text navbar-right">&nbsp;</p>
            <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn btn-sm navbar-right"><?php echo $Translation['sign in']; ?></a>
            <p class="navbar-text navbar-right">
              <?php echo $Translation['not signed in']; ?>
            </p>
          <?php }else{ ?>
            <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
            </ul>
            <ul class="nav navbar-nav visible-xs">
            </ul>
          <?php } ?>
        <?php } ?>
          </li><!--admin area ends-->
          </ul>
        </li>
      </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>
  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper"><br>
<section class="content-header">
      <h1>
        Control Panel
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>
<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 3 -->
<!--<script src="bower_components/jquery/dist/jquery.min.js"></script>-->
<!-- Bootstrap 3.3.7 -->
<!--<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>-->
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
