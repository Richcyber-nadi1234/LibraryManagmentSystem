<!DOCTYPE html>
<?php if(!defined('PREPEND_PATH')) define('PREPEND_PATH', ''); ?>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo ucwords(' Library'); ?> | <?php echo (isset($x->TableTitle) ? $x->TableTitle : ''); ?></title>
    <link id="browser_favicon" rel="shortcut icon" href="<?php echo PREPEND_PATH; ?>dist/img/libicn.png">

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/lightbox/css/lightbox.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/select2/select2.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.css" media="screen">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dynamic.css.php">
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dist/css/AdminLTE.min.css" media="screen">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
    folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>dist/css/skins/skin-blue-light.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>plugins/iCheck/flat/blue.css">

    <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/bootstrap.css">
    <!--[if gt IE 8]><!-->
      <link rel="stylesheet" href="<?php echo PREPEND_PATH; ?>resources/initializr/css/bootstrap-theme.css">
    <!--<![endif]-->
    <link rel="stylesheet" href="resources/initializr/css/print.css" type="text/css" media="print" charset="utf-8">

    <!--[if lt IE 9]>
      <script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <![endif]-->
    <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery-1.11.2.min.js"></script>
    <script>var $j = jQuery.noConflict();</script>
    <script src="<?php echo PREPEND_PATH; ?>resources/jquery/js/jquery.mark.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/initializr/js/vendor/bootstrap.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/lightbox/js/prototype.js"></script>

    <script src="<?php echo PREPEND_PATH; ?>resources/select2/select2.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>resources/timepicker/bootstrap-timepicker.min.js"></script>
    <script src="<?php echo PREPEND_PATH; ?>common.js.php"></script>
    <?php if(isset($x->TableName) && is_file(dirname(__FILE__) . "/hooks/{$x->TableName}-tv.js")){ ?>
      <script src="<?php echo PREPEND_PATH; ?>hooks/<?php echo $x->TableName; ?>-tv.js"></script>
    <?php } ?>

  </head>
  <body class="hold-transition skin-blue-light sidebar-mini">
    <div class="wrapper">

      <?php if(is_file(dirname(__FILE__) . '/hooks/header-extras.php')){ include(dirname(__FILE__).'/hooks/header-extras.php'); } ?>
      <!-- Add header template below here .. -->

  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo" style="text-decoration:none;">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>L</b>MS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>TTU LIBRARY</b></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">

      <div class="navbar-custom-menu">

          <div class="collapse navbar-collapse">

        <?php if(getLoggedAdmin()){ ?>
          <ul class="nav navbar-nav">
            <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn hidden-xs"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
            <a href="<?php echo PREPEND_PATH; ?>admin/pageHome.php" class="btn btn-danger navbar-btn visible-xs btn-lg"><i class="glyphicon glyphicon-cog"></i> <?php echo $Translation['admin area']; ?></a>
          </ul>
        <?php } ?>

        <?php if(!$_GET['signIn'] && !$_GET['loginFailed']){ ?>
          <?php if(getLoggedMemberID() == $adminConfig['anonymousMember']){ ?>
            <p class="navbar-text navbar-right">&nbsp;</p>
            <a href="<?php echo PREPEND_PATH; ?>index.php?signIn=1" class="btn btn-success navbar-btn navbar-right"><?php echo $Translation['sign in']; ?></a>
            <p class="navbar-text navbar-right">
              <?php echo $Translation['not signed in']; ?>
            </p>
          <?php }else{ ?>
            <ul class="nav navbar-nav navbar-right hidden-xs" style="min-width: 330px;">
              <a class="btn navbar-btn btn-default" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> <?php echo $Translation['sign out']; ?></a>
              <p class="navbar-text">
                <?php echo $Translation['signed as']; ?> <strong><a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="text-success text-uppercase"><?php echo getLoggedMemberID(); ?></a></strong>
              </p>
            </ul>
            <ul class="nav navbar-nav visible-xs">
              <a class="btn navbar-btn btn-default btn-lg visible-xs" href="<?php echo PREPEND_PATH; ?>index.php?signOut=1"><i class="glyphicon glyphicon-log-out"></i> <?php echo $Translation['sign out']; ?></a>
              <p class="navbar-text text-center">
                <?php echo $Translation['signed as']; ?> <strong><a href="<?php echo PREPEND_PATH; ?>membership_profile.php" class="text-success"><?php echo getLoggedMemberID(); ?></a></strong>
              </p>
            </ul>
          <?php } ?>
        <?php } ?>
      </div>

      </div>
    </nav>
  </header>



  <!-- Content Wrapper. Contains page content -->
  <div>
<section class="content">
