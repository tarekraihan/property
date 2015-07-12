
<?php
	$email=$this->session->userdata('email_address');
	 $this->common_model->order_column = 'customer_id';
			$this->common_model->table_name = 'customer_profile';
			$this->common_model->where=array('email_address'=>$email);
			$query=$this->common_model->select_all();
			$row=$query->row();
?>
        <div class="row no-margin">
            <div class="header_top_02">
			
            </div>
        </div>
        
    </div>
    
        
    <div class="container">
        <div class="row db_menu no-margin">
            <ul class="nav nav-pills custom_nav">
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/dashboard/">Dashboard</a></li>
              <li role="presentation"><a href="<?php echo base_url(); ?>en/message/">Messages</a></li>
              
              <li role="presentation" ><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                                <h2 class="title">Dashboard</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Properties</h4>
                    </div>
                    
                </div>
                
				<div class="row no-margin general">
					<div class="empty">
						<div>You don't have any property listings right now.</div>
						<div>Learn <a href="<?php echo base_url(); ?>en/sell_listing/">how to sell privately</a> or <a href="<?php echo base_url(); ?>en/sell_listing/" class="now">list now »</a></div>
					</div>
					<div class="below"></div>
				</div>
                
				<div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Saved Searches</h4>
                    </div>
                    
                </div>
				
                <div class="row no-margin general">
					<div class="empty">
						<div>You don't have any saved searches right now.</div>
						<div>Learn <a href="#">how to save a search »</a> </div>
					</div>
					<div class="below"></div>
				</div>
				
				<div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Book Marks</h4>
                    </div>
				</div>
					
				<div class="row no-margin general">
					<ul id="inventory">
						<li class="item odd" id="propertyItem_84527">
								<div class="photo"><a href=""><img src="http://round.s3.amazonaws.com/images/properties/9/84527/991786_106.jpg"></a></div>
								<div class="tools">
									<h4 class="price"><a href="">$559,000</a></h4>
									<div class="icons">
										
										<div class="zoom"><a href=""><img src="http://round.s3.amazonaws.com/public/images/icon_empty.png" alt="View this Listing" title="View this Listing"></a></div>
												
											<div class="bookmarked"><a id="" href="#"><img src="http://round.s3.amazonaws.com/public/images/icon_empty.png" alt="Remove Bookmark" title="Remove Bookmark"></a></div>
											
									</div>
									<div class="clear"></div>
								</div>
									
									<div class="address"><a href="/property/index/id/84527">614 Beechwood Dr</a></div>
									<div class="city"><a id="city_search_84527" href="#">Waterloo, ON</a></div>
										
									<div class="tease">
										<div><span class="sign"><a href="/property/index/id/84527">Sign # <strong>146614</strong></a></span> Desirable Upper Beechwood Estate Home <a href="#" class="more">More »</a></div>
									</div>
						</li>
					</ul>
					<div class="clear"></div>
					<div class="below"></div>
					
				</div>
                
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
				
				<div class="row no-margin">
						<div class="buffer02">
							<h3 class="drop">Profile</h3>

							<div id="profile">
								<div class="picture pull-left">
                                <?php
									if($row->image_name)
									{
										?>
                                <img width="124" src="<?php echo base_url(); ?>images/member/<?php echo $row->image_name;?>">
                                <?php
									}else{
										?>
                                <img width="124"  src="<?php echo base_url(); ?>images/members.png">
                                <?php
									}
								?>
                                </div>
								<div class="name">
									<div class="first"></div>
									<div class="last"></div>
									<div class="experience"></div>
									<div class="change"><a href="<?php echo base_url(); ?>en/profile/">Modify My Profile »</a></div>
									<div class="change"><a href="<?php echo base_url();?>en/dashboard_password_setting/?customer_id=<?php echo $this->session->userdata('customer_id'); ?>">Change My Password »</a></div>
								</div>
								<div class="clear"></div>
							</div>
						</div>
				</div>
				</br>
				
				<div class="row no-margin">
						<div class="buffer02">
							<h3 class="drop">Manage Alerts &amp; Subscriptions</h3>	

							<p class="squeeze">Need to update your <strong>alert preferences</strong> and <strong>subscription instructions?</strong></p>
							
							<div class="buttignment">
								<div class="apply pull-right"><a href="">Go Now!</a></div>
							</div>
							<div class="clear"></div>							
							
						</div>
				</div>
				</br>
				
				<div class="row no-margin">
						<div class="buffer02">
							<h3 class="drop">Messages » <a href="<?php echo base_url(); ?>en/message/">Inbox</a></h3>
							<div class="empty">Your inbox is empty.</div>							
						</div>
				</div>
				</br>
				
				<div class="row no-margin">
					<div class="buffer02">
						<h3 class="drop">Get a Better Mortgage</h3>	

						<p class="squeeze"><strong>We help you compare mortgages so that you end up with the lowest possible rate.</strong> When we do our job right, you save thousands of dollars.  Quotes are free and there is no obligation to accept.  You've got nothing to lose, except for a few percentage points.</p>
							
						<div class="buttignment">
							<div class="apply pull-right"><a href="<?php echo base_url(); ?>en/mortgage/">Apply Now</a></div>
						</div>
						<div class="clear"></div>							
							
					</div>
				</div>
				</br>
				
				<div class="row no-margin">
					<div class="buffer02">
						<h3 class="drop">Help</h3>
						<div class="squeeze">

							<ul class="help">
								<li><a href="<?php echo base_url();?>en/help_change_email/">How do I change my email address?</a></li>
								<li><a href="<?php echo base_url();?>en/help_change_profile_picture/">How do I change my profile picture?</a></li>
								<li><a href="<?php echo base_url();?>en/help_delete_account/">To how do I delete my Vista Maisonaccount?</a></li>
							</ul>
								
							<div><a href="<?php echo base_url();?>en/help/" class="link">More Help »</a></div>

						</div>
					</div>
				</div>
				</br>
            
            </div>
        </div>
    </div>
