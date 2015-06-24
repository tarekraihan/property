<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- The styles -->
    <link id="bs-css" href="<?php echo base_url(); ?>css/bootstrap-cerulean.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>css/css_admin/charisma-app.css" rel="stylesheet">
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.print.css' rel='stylesheet' media='print'>
    <link href='<?php echo base_url(); ?>bower_components/chosen/chosen.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/colorbox/example3/colorbox.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>bower_components/bootstrap-tour/build/css/bootstrap-tour.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/jquery.noty.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/noty_theme_default.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/elfinder.min.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/elfinder.theme.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/jquery.iphone.toggle.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/uploadify.css' rel='stylesheet'>
    <link href='<?php echo base_url(); ?>css/css_admin/animate.min.css' rel='stylesheet'>
   


    <!-- The fav icon -->
    <link rel="shortcut icon" href="img/favicon.ico">

</head>

<body>
    <!-- topbar starts -->
    <div class="navbar navbar-default" role="navigation">

	
        <div class="navbar-inner">
            <button type="button" class="navbar-toggle pull-left animated flip">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>adamin_panel/"> <img alt="Property Logo" src="<?php echo base_url(); ?>img/logo20.png" class="hidden-xs"/>
                <span>Propertyguy</span></a>

            <!-- user dropdown starts -->
            <div class="btn-group pull-right">
                
                    <i class="glyphicon glyphicon-user"></i><span class="hidden-sm hidden-xs"> <a style="color:white;" href="<?php echo base_url(); ?>login/admin_log_out">Log out</a></span>
                    <span class="caret"></span>
            </div>
            <!-- user dropdown ends -->

        </div>
    </div>
    <!-- topbar ends -->
<div class="ch-container">
    <div class="row" style="margin:0">
        
        <!-- left menu starts -->
        <div class="col-sm-2 col-lg-2">
            <div class="sidebar-nav">
                <div class="nav-canvas">
                    <div class="nav-sm nav nav-stacked">

                    </div>
                    <ul class="nav nav-pills nav-stacked main-menu">
                        <li class="nav-header">Main</li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/dashboard/"><i class="glyphicon glyphicon-home"></i><span> Dashboard</span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/country/"><i class="glyphicon glyphicon-eye-open"></i><span> Province </span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/state/"><i class="glyphicon glyphicon-eye-open"></i><span> Division  </span></a></li>
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/area/"><i class="glyphicon glyphicon-eye-open"></i><span> City </span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/property_type/"><i class="glyphicon glyphicon-eye-open"></i><span> Property type </span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/property_used/"><i class="glyphicon glyphicon-eye-open"></i><span> Property User </span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/property_post/"><i class="glyphicon glyphicon-eye-open"></i><span> Post Property </span></a></li>
                        
                        <li><a class="ajax-link" href="<?php echo base_url(); ?>admin_panel/dashboard/"><i
                                    class="glyphicon glyphicon-edit"></i><span> Testimonial</span></a></li>
                        <li><a class="ajax-link" href="#"><i class="glyphicon glyphicon-list-alt"></i><span> FAQ</span></a>
                        </li>
                </div>
            </div>
        </div>
        <!--/span-->
        <!-- left menu ends -->
