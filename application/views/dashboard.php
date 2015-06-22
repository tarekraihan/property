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
        
        
        <div class="row no-margin">
            <div class="header_top_02">
			
            </div>
        </div>
        
    </div>
    
        
    <div class="container">
        <div class="row db_menu no-margin">
            <ul class="nav nav-pills custom_nav">
              <li role="presentation"><a href="#">Dashboard</a></li>
              <li role="presentation"><a href="#">Messages</a></li>
              
              <li role="presentation" class="active"><a href="#">Profile</a></li>
              
            </ul>
        </div>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                                <h2 class="title">Person Profile</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>General</h4>
                    </div>
                    
                    <div class="pull-right">
                        <button class="btn btn-success btn-sm custom_btn">Edit</button>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table preview full" cellpadding="0" cellspacing="0">
                        <tbody>
                                        <tr class="odd">
                                            <td class="category">Status:</td>
                                            <td class="value">Active</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Access Level:</td>
                                            <td class="value">Member</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="category">First Name:</td>
                                            <td class="value">marco</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Last Name:</td>
                                            <td class="value">lomy</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="category">Postal Code/Zip:</td>
                                            <td class="value">J4Y 1G5</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Experience:</td>
                                            <td class="value">Private Sale Virgin</td>
                                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="below"></div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Contact Infromation</h4>
                    </div>
                    
                    <div class="pull-right">
                        <button class="btn btn-success btn-sm custom_btn">Edit</button>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table preview full" cellpadding="0" cellspacing="0">
                        <tbody>
									<tr class="odd">
										<td class="category">Email Address:</td>
										<td class="value">powernaw@hotmail.com</td>
									</tr>
									<tr class="even">
										<td class="category">Home Phone:</td>
										<td class="value">416-121-1231</td>
									</tr>
									<tr class="odd">
										<td class="category">Mobile Phone:</td>
										<td class="value"></td>
									</tr>
				        </tbody>
                    </table>
                </div>
                <div class="below"></div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Password</h4>
                    </div>
                    
                    <div class="pull-right">
                        <button class="btn btn-success btn-sm custom_btn">Edit</button>
                    </div>
                </div>
                <p class="squeeze">Change the password for this account by clicking <strong>'Edit'</strong> in the top right hand corner of this box.</p>
                <div class="below"></div>
                
                
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Survey</h4>
                    </div>
                    
                    <div class="pull-right">
                        <button class="btn btn-success btn-sm custom_btn">Edit</button>
                    </div>
                </div>
                <p class="squeeze">Do you have an extra ten seconds? We have a five question survey that it would be helpful if you filled out. We'd really appreciate it. Click 'Edit' to do us a solid.</p>
                <div class="below"></div>
                
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <div class="box-rounded">
                    <div class="box-shadow-inner">
                        <div class="personpic">
								<div class="inside">
									<div class="information">
										<div>Member</div>
									</div>
								</div>
				        </div>
                    </div>
                </div>
                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li class="current"><a href="/launch-people/person/id/261200">Profile</a></li>
				            <li off=""><a href="/launch-people/people-photo/id/261200">Photo</a></li>	
				            <li off=""><a href="/launch-people/people-alerts/id/261200">Alert Settings</a></li>								
				            <li off=""><a href="/launch-people/people-bookmarks/id/261200">Bookmarks</a></li>
                            <li off=""><a href="/launch-people/people-searches/id/261200">Saved Searches</a></li>
                            <li off=""><a href="/launch-people/people-watchlist/id/261200">Price Watch</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Help</h3>
                        <ul id="submenu_help" class="nav nav-pills nav-stacked">
                            <li><a href="#">How do I delete my PropertyGuys.com account?</a></li>
				            <li><a href="#">How do I bookmark a listing?</a></li>	
				            <li><a href="#">What is experience level used for?</a></li>					
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>