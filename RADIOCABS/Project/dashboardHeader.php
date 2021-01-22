<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="./dashboard/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="./dashboard/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="./dashboard/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="./dashboard/vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="./dashboard/assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>


<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">RADIO CABS</a>
                <a class="navbar-brand hidden" href="./"><img src="./dashboard/images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                <li class="active">
                 <a href="profileedit.php?iid=1"> <i class="menu-icon fa fa-user"></i>   <?php echo $_SESSION['abc']; ?>
                        
                    </a>
                    </li>
                    <li class="active">
                        <a href="dash.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    <h3 class="menu-title">UI elements</h3><!-- /.menu-title -->
                    <li>
                        <a href="listcompany.php"> <i class="menu-icon ti-list"></i>Company List </a>
                    </li>
                    <li>
                        <a href="listdriver.php"> <i class="menu-icon ti-list"></i>Driver List </a>
                    </li>
                    <li>
                        <a href="monthly.php"> <i class="menu-icon ti-list"></i>Monthly Payment </a>
                    </li>
                    <li>
                        <a href="quaterly.php"> <i class="menu-icon ti-list"></i>Quaterly Payment </a>
                    </li>
                    <li>
                        <a href="listmonthly.php"> <i class="menu-icon ti-list"></i>View Monthly </a>
                    </li>
                    <li>
                        <a href="listquaterly.php"> <i class="menu-icon ti-list"></i> View Quaterly </a>
                    </li>
                    <li>
                        <a href="listfeedback.php"> <i class="menu-icon ti-list"></i> Feedback Records </a>
                    </li>

                   
                  
                   
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                   
                    <?php 
                   if($_SESSION['abc'])
                   {
                     
                     echo "<a href='logout.php' class='btn btn-info'><i class='menu-icon fa fa-sign-out'></i>Logout</a>";
                   }

                    ?>
                 
                 
                 
                        
                        <div class="form-inline">
                            <form class="search-form">
                                
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                            
                        </div>

                        

                        
                    </div>
                </div>

               
            </div>

        </header><!-- /header -->
        <!-- Header-->



        <!-- text -->






