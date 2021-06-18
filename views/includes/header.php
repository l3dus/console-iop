<?php
    //require __DIR__.'/bootstrap/app.php';


    use \Console\Session\Login;

    $loggedUser = Login::getLoggedUser();
    
    $user = $loggedUser ? $loggedUser['user'].' - '.' <a href="logout.php">Sair</a>' : '';

    


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Console IOP</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="./views/assets/images/favicon.ico">

    <!--Morris Chart CSS -->
    <link rel="stylesheet" href="./views/assets/plugins/morris/morris.css">

    <!-- Bootstrap core CSS -->
    <link href="./views/assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="./views/assets/css/metisMenu.min.css" rel="stylesheet">
    <!-- Icons CSS -->
    <link href="./views/assets/css/icons.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="./views/assets/css/style.css" rel="stylesheet">

    <!-- DataTables -->
    <link href="./views/assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/buttons.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/scroller.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/dataTables.colVis.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="./views/assets/plugins/datatables/fixedColumns.dataTables.min.css" rel="stylesheet" type="text/css"/>

</head>

<body>

<div id="page-wrapper">

    <!-- Top Bar Start -->
    <div class="topbar">

        <!-- LOGO -->
        <div class="topbar-left">
            <div class="">
                <a href="#" class="logo">
                    <img src="./views/assets/images/logo.png" alt="logo" class="logo-lg" style="height: 55px; padding-top: 1px" />
                    <img src="./views/assets/images/logo.png" alt="logo" class="logo-sm hidden" />
                </a>
            </div>
        </div>

        <!-- Top navbar -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="">

                    <!-- Mobile menu button -->
                    <div class="pull-left">
                        <button type="button" class="button-menu-mobile visible-xs visible-sm">
                            <i class="fa fa-bars"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>

                    <!-- Top nav left menu -->
                    <ul class="nav navbar-nav hidden-sm hidden-xs top-navbar-items">
                        <li><a href="https://cadi-dev.cloud4biz.com/4biz/" target="_blank">DEV</a></li>
                        <li><a href="https://cadi-hml.cloud4biz.com/4biz/" target="_blank">HOM</a></li>
                        <li><a href="https://cadi-prd.cloud4biz.com/4biz/" target="_blank">PRD</a></li>
                    </ul>

                    <!-- Top nav Right menu -->
                    <ul class="nav navbar-nav navbar-right top-navbar-items-right pull-right">
                        <span style="padding-top: 20px !important;"><br><?=$user?></span>

                    </ul>
                </div>
            </div> <!-- end container -->
        </div> <!-- end navbar -->
    </div>
    <!-- Top Bar End -->



