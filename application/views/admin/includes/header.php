<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo base_url('admin'); ?>">
    <title><?php echo isset($title) ? $title : 'Dashboard'; ?> - Admin </title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" ></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <link href="assets/images/favicon.png" rel="icon">
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

    <!-- select 2 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.10/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

    <?php if(uri_string() == 'admin/login' ) { ?>
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <?php } ?>

    <link rel="stylesheet" type="text/css" href="assets/css/dropzone.css" />

    <style type="text/css">
        .dropzone {
          background: none repeat scroll 0 0 white;
          border: 2px dashed #ff7361;
          border-radius: 5px;
        }

        .dropzone .dz-message {
            margin: 4em 0;
            font-weight: bold;
            font-size: 16px;
            color: gray;
        }
    </style>
  </head>
<body style="margin-top: 70px">
    <?php if($this->session->userdata('logged_in')) {?>
    <nav class="navbar navbar-inverse navbar-fixed-top " role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin" style="color:white;"><?php echo SITE_TITLE; ?></a>
            </div>
            
            <div class="collapse navbar-collapse" id="navigation">
                
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="admin">Opportunities<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin/posts/create">Add Opportunity</a></li>
                        <li><a href="admin/posts">Opportunities List</a></li>
                      </ul>
                    </li>

                    <li><a href="admin/categories">Categories</a></li>

                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="admin/pages">Pages<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin/pages/introduction">Introduction</a></li>
                        <li><a href="admin/pages/about">About Me</a></li>
                      </ul>
                    </li>

                    <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="admin/gallery">Gallery<span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="admin/gallery/create">Add New</a></li>
                        <li><a href="admin/gallery">View Gallery</a></li>
                      </ul>
                    </li>

                    <li><a href="admin/setting">Settings</a></li>
                </ul>
                
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo base_url(); ?>" target="_blank">Visit Website</a></li>
                    <li><a href="admin/logout">Logout</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    <?php } ?>