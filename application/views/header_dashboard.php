<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">	
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style-dashboard.css">	
</head>
<body>
    <div class="conatainer-fluid">
        
        <div class="row no-margin">
            <div class="header_top">
            
            	<ul class="nav navbar-nav navbar-right">
					<li><a href="<?php echo base_url(); ?>en/seller/">Sellers</a></li>
					<li><a href="<?php echo base_url(); ?>en/buyer/">Buyers</a></li>
					<li><a href="<?php echo base_url(); ?>en/mortgage">Mortgages</a></li>
                    <?php
                    if($this->session->userdata('email_address')){
						?>
                        <li><a href="<?php echo base_url(); ?>en/dashboard/">Dashboard</a></li>
					<li><a href="<?php echo base_url(); ?>en/mortgage">Welcome <?php echo $this->session->userdata('first_name'); ?></a></li>
                    <li><a href="<?php echo base_url(); ?>login/log_out">Log Out</a></li>
                   <?php 
				   }else{ 
				   ?>
					<li class="hidden-xs hidden-sm" style="padding-top: 18px;">|</li>
					<li class="login_menu" data-toggle="modal" data-target="#myModal"><a href="#">Join or Login <span></span></a></li>
                    <?php
                    }
					?>
					
              </ul>
                
            </div>
        </div>
        
    
