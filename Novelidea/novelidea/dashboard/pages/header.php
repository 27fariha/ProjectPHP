<?php

if(!isset($_SESSION)) 
    { 
        session_start(); 
        if (!isset($_SESSION["ID"]))
        {
           header("location: login.php");
        }
    } 

    function PageName() {
        return substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);
      }
      
      $current_page = PageName();
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>A Novel Idea Library</title>
    <!-- Favicon-->
    <link rel="icon" href="../images/book.png" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="../plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="../plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="../plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="../plugins/morrisjs/morris.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="../css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="../css/themes/all-themes.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/bootstrap-select.min.js"></script>

<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/js/i18n/defaults-*.min.js"></script>

</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar 
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
     #END# Search Bar -->
    <!-- Top Bar -->
    <nav class="navbar">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.php">A NOVEL IDEA LIBRARY</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search 
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                     #END# Call Search -->

                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->
    <section>
        <!-- Left Sidebar -->
        <aside id="leftsidebar" class="sidebar">
            <!-- User Info -->
            <div class="user-info">
                <div class="image">
                    <img src="<?php echo $_SESSION['IMAGE'];?>" width="60" height="60" style="object-fit: cover; margin-bottom: -20px;" alt="User" />
                </div>
                <div class="info-container">
                    <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $_SESSION['NAME'];?></div>
                    <div class="email"><?php echo $_SESSION['MAIL'];?></div>
                    <div class="btn-group user-helper-dropdown">
                        <i class="material-icons" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">keyboard_arrow_down</i>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="admin_update.php"><i class="material-icons">person</i>Profile</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="logout.php"><i class="material-icons">input</i>Sign Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- #User Info -->
            <!-- Menu -->
            <div class="menu">
                <ul class="list">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="">
                        <a href="../pages/index.php">
                            <i class="material-icons">home</i>
                            <span>Home</span>
                        </a>
                    </li>

                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-user-circle-o fa-2x"></i>
                            <span>Admin</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="admin_form.php"><i class="fa fa-plus-circle fa-2x"></i> <span> Create an Admin </span></a>
                            </li>
                            <li>
                            <a href="admin_read.php"><i class="fa fa-eye fa-2x"></i> <span> View Admins Info </span></a>
                            </li>
                        </ul>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">assignment</i>
                            <span>Category</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="category_form.php"><i class="fa fa-plus-circle fa-2x"></i> <span> Add a Category </span></a>
                            </li>
                            <li>
                            <a href="category_read.php"><i class="fa fa-eye fa-2x"></i> <span> View Category Details </span></a>
                            </li>
                        </ul>
                        <a href="javascript:void(0);" class="menu-toggle">
                        <i class="fa fa-bell fa-2x"></i>
                            <span>Subscription</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="subscription_form.php"><i class="fa fa-plus-circle fa-2x"></i> <span> Add a Package </span></a>
                            </li>
                            <li>
                            <a href="subscription_read.php"><i class="fa fa-eye fa-2x"></i> <span> View Package Details </span></a>
                            </li>
                        </ul>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="fa fa-book fa-2x"></i>
                            <span>Books</span>
                        </a>
                        <ul class="ml-menu">
                            <li>
                            <a href="books_form.php"><i class="fa fa-plus-circle fa-2x"></i> <span> Add a Book </span></a>
                            </li>
                            <li>
                                <a href="books_read.php"><i class="fa fa-eye fa-2x"></i> <span> View Book Details </span></a>
                            </li>
                        </ul>
                        <li>
                        <a href="../pages/members_read.php">
                            <i class="fa fa-users fa-2x"></i>
                            <span>Members</span>
                        </a>
                        </li>
                        <li>
                        <a href="../pages/messages_read.php">
                            <i class="fa fa-envelope fa-2x"></i>
                            <span>Message Box</span>
                        </a>
                        </li>
                        <li>
                        <a href="../pages/order_read.php">
                            <i class="fa fa-shopping-cart fa-2x"></i>
                            <span>Orders</span>
                        </a>
                        </li>
                        <li>
                        <a href="../pages/info_read.php">
                            <i class="fa fa-phone fa-2x"></i>
                            <span>Contact Info</span>
                        </a>
                        </li>
                    </li>
                    
                </ul>
            </div>
            <!-- #Menu -->
           <!-- Footer -->

            <!-- #Footer -->
        </aside>
        <!-- #END# Left Sidebar -->
        <!-- Right Sidebar -->

        <!-- #END# Right Sidebar -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">