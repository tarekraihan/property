<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php echo $title; ?></title

	
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="<?php echo base_url(); ?>/css/font-awesome.min.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/boostrap_select.css">	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/css/style.css">	
</head>

<body>
	
	<div class="container-fluid no-margin no-padding">
		<nav class="navbar navbar-default custom_nav">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url(); ?>"><img class="logo" src="<?php echo base_url(); ?>/images/logo_prop.png"/></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <form class="navbar-form navbar-left" role="search">
                <div class="input-group input_custom_group">
					  <input type="text" class="quicksearchbox form-control" style="z-index: 1;" placeholder="City, Town or Sign#" id="signnumber" value="">
					  <span class="input-group-btn">
						<button class="btn btn-primary pg-button btn-default-over" type="button" id="quickSearchGo" ><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
					  </span>
				</div><!-- /input-group -->
              </form>
              <ul class="nav navbar-nav navbar-right">
              
					<li><a href="<?php echo base_url(); ?>en/seller/">Sellers</a></li>
					<li><a href="<?php echo base_url(); ?>en/buyer/">Buyers</a></li>
					<li><a href="<?php echo base_url(); ?>en/mortgage">Mortgages</a></li>
					<li><a href="<?php echo base_url(); ?>en/rent">Rent</a></li>
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
					<li class="pad-top hidden-xs hidden-sm"><img src="<?php echo base_url(); ?>/images/login-placeholder.jpg" class="socialLoginThumbnail"></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        
        <!-- MODAL  LOGIN CONTENT STARTS-->
        
            <div class="modal fade" id="myModal" role="dialog" aria-labelledby="gridSystemModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                       <div class="modal-body">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><img src="<?php echo base_url(); ?>/images/modal_close.png"></button>

                        <div class="omb_login">
                            <h3 class="omb_authTitle caption-title">Login or <a href="<?php echo base_url(); ?>en/register/">Register</a></h3>
                            <div class="row omb_row-sm-offset-3 omb_socialButtons text-center login-social">
                                <a href="https://www.facebook.com/" target="_blank"><img class="text-center" src="<?php echo base_url(); ?>/images/facebook.png"></a>
                                <a href="https://www.linkedin.com/nhome/" target="_blank"><img class="text-center" src="<?php echo base_url(); ?>/images/linkedin.png"></a>
                            </div>

                            <div class="row omb_row-sm-offset-3 omb_loginOr">
                                <div class="col-xs-12 col-sm-6">
                                    <hr class="omb_hrOr">
                                    <span class="omb_spanOr">or</span>
                                </div>
                            </div>

                            <div class="row omb_row-sm-offset-3">
                                <div class="col-xs-12 col-sm-6">	
                                    <form class="omb_loginForm" action="/start" autocomplete="off" method="POST">
                                    <input name="c" value="" type="hidden">
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                            <input class="form-control" placeholder="email address" name="email" id="email" type="text">
                                        </div>
                                        <span class="help-block"></span>

                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                            <input class="form-control" placeholder="Password" name="password_input" id="password_input" type="password">
                                        </div>
                                        <span class="help-block" style="display: none;">Password error</span>

                                        <div class="text-center"><button class="btn btn-green" type="submit" style="margin-top: 10px;">Login</button></div>
                                    </form>
                                </div>
                            </div>
                            <div class="row omb_row-sm-offset-3">
                                <div class="col-xs-12 col-sm-3">

                                </div>
                                <div class="col-xs-12 col-sm-3">
                                    <p class="omb_forgotPwd">
                                        <a href="/start/reset">Forgot password?</a>
                                    </p>
                                </div>
                            </div>	    	
                        </div>
                    </div>
                  </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
              </div><!-- /.modal -->
        
        <!-- MODAL  LOGIN CONTENT END-->
		