<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="<?php echo $title ? $title : SITE_TITLE; ?>">
    <meta name="keywords" content="<?php echo $title ? $title : SITE_TITLE; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo base_url(); ?>">
    <title><?php echo $title ? $title : SITE_TITLE; ?></title>
    
    <!-- Bootstrap -->
    <link href="assets/images/favicon.png" rel="icon">

      
    <?php if(uri_string() != 'downloads'){ ?>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <?php }else{ ?>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
        <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <?php } ?>

    <link href="assets/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
    body {
    position: relative;
    }
    .affix {
    top:0;
    width: 100%;
    z-index: 9999 !important;
    }
    .navbar {
    margin-bottom: 0px;
    }
   
    </style>
  </head>
  <body >
      <!-- STICKY ICONS -->
      <a href="index.php#" id="scroll" style="display: none;" title="Back to Top"><i class="fa fa-angle-up"></i></a>
      <a href="https://wa.me/" id="whatsapp" title="Whatsapp"></a>
      <a href="tel:" id="call" title="Call"></a>

    <div id="topbar">
        <div class="container">
            <div class="row">
              <div class="col-md-3 top_logo text-center">
                <a href=""><img src="assets/images/logo.jpeg" title="<?php echo SITE_TITLE; ?>" alt="<?php echo SITE_TITLE; ?>"></a>
              </div>
              <div class="col-md-6 text-center">
                <p><b>Call</b> or <b>Email</b> for More Information on Our Services
                <br> <span class="glyphicon glyphicon-phone"></span> <a href="tel:<?php echo SITE_PHONE_1; ?>"><?php echo SITE_PHONE_1; ?></a> | <span class="glyphicon glyphicon-envelope"></span> <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></p>
              </div>
              <div class="col-md-3 social text-center" id="top_bar_social">
                <a href="#"><img src="assets/images/social/fb.png"></a>
                <a href="#"><img src="assets/images/whatsapp.png" style="width:38px"></a>
              </div>
            </div>
        </div>
      
    </div>
    <!-- Navigation -->
    <nav class="navbar navbar-default" >
      <div class="container-fluid">
        <div class="navbar-header visible-xs">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=""><?php echo SITE_TITLE; ?></a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="<?php echo uri_string() == '' ? 'active' : ''; ?>"><a href="">Home</a></li>
            <li class="<?php echo uri_string() == 'information' ? 'active' : ''; ?>"><a href="index.php/information">Information</a></li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="index.php/study-in-uk">Study In UK<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="index.php/study-in-uk/levels-for-degree">Levels For Degree</a></li>
                <li><a href="index.php/study-in-uk/english-language-requirements">English Language Requirements</a></li>
              </ul>
            </li>
            <li class="<?php echo uri_string() == 'canada-visa-services' ? 'active' : ''; ?>"><a href="index.php/canada-visa-services">Canada Visa Services</a></li>
            <li class="<?php echo uri_string() == 'courses' ? 'active' : ''; ?>"><a href="index.php/courses">Courses</a></li>
            <li class="<?php echo uri_string() == 'terms-and-conditions' ? 'active' : ''; ?>"><a href="index.php/terms-and-conditions">Terms & Conditions</a></li>
            <li class="<?php echo uri_string() == 'about-us' ? 'active' : ''; ?>"><a href="index.php/about-us">About Us</a></li>
            <li class="<?php echo uri_string() == 'contact-us' ? 'active' : ''; ?>"><a href="index.php/contact-us">Contact Us</a></li>
            <li class="<?php echo uri_string() == 'what-we-do' ? 'active' : ''; ?>"><a href="index.php/what-we-do">What We Do</a></li>

          </ul>
          
        </div>
      </div>
    </nav>
