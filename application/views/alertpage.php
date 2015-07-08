
        
        
        <div class="row no-margin">
            <div class="header_top_02">
			
            </div>
        </div>
        
    </div>
    
        
    <div class="container">
        <div class="row db_menu no-margin">
            <ul class="nav nav-pills custom_nav">
              <li role="presentation" ><a href="<?php echo base_url(); ?>en/dashboard/">Dashboard</a></li>
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/dashboard_mess/">Messages</a></li>
              
              <li role="presentation"><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                                <h2 class="title">Alert Settings</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
                    <form class="alerts" method="post" id="useralerts" name="useralerts" action="">
								<input value="1" name="existing" type="hidden">
								<table class="alerts" cellpadding="0" cellspacing="0">
									<tbody>
										<tr class="header">
											<td class="title">General</td>
											<td class="option">No Alerts</td>
											<td class="option">Instant Email Alerts</td>
											<td class="option"></td>	
											<td class="option"></td>											
										</tr>
										<tr class="odd">
											<td class="title_tab">
												<h3>Announcements</h3>
												<p>Announcements are sent very rarely and usually only to announce new features, contests, changes to laws, etc.</p>
											</td>
											<td class="option"><input id="alerts_announce" name="alerts_announce" value="0" type="radio"></td>
											<td class="option"><input id="alerts_announce" name="alerts_announce" value="1" checked="checked" type="radio"></td>
											<td class="off"></td>	
											<td class="off"></td>											
										</tr>									
										<tr class="even">
											<td class="title_tab">
												<h3>Messages</h3>
												<p>Message alerts are sent when there is a new message in your inbox from a buyer or seller.</p>
											</td>
											<td class="option"><input id="alerts_messages" name="alerts_messages" value="0" type="radio"></td>
											<td class="option"><input id="alerts_messages" name="alerts_messages" value="1" checked="checked" type="radio"></td>
											<td class="off"></td>	
											<td class="off"></td>											
										</tr>
										<tr class="odd">
											<td class="title_tab">
												<h3>Offer Maker®</h3>
												<p>Offer Maker® alerts are sent when there is a new offer from a buyer or a counter-offer from a seller in your inbox.</p>
											</td>
											<td class="option"><input id="alerts_offers" name="alerts_offers" value="0" type="radio"></td>
											<td class="option"><input id="alerts_offers" name="alerts_offers" value="1" checked="checked" type="radio"></td>
											<td class="off"></td>
											<td class="off"></td>											
										</tr>
										<tr class="even">
											<td class="title_tab">
												<h3>Price Watch</h3>
												<p>Price Watch alerts are sent if a property owner drops their asking price below the asking price you set the alert for.</p>
											</td>
											<td class="option"><input id="alerts_price" name="alerts_price" value="0" type="radio"></td>
											<td class="option"><input id="alerts_price" name="alerts_price" value="1" checked="checked" type="radio"></td>
											<td class="off"></td>	
											<td class="off"></td>											
										</tr>
										
										<!-- START: If Saved Searches >= 1 -->
										
																			</tbody><tfoot>
										<tr>
											<td colspan="5">
												<div class="submit_btn"><input type="submit" name="save_alerts" id="save_alerts" value="Save"></div>
											</td>
										</tr>
									</tfoot>
								</table>

							</form>
                    

                </div>
                <div class="below"></div>
                
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li><a href="<?php echo base_url(); ?>en/dashboard">Profile</a></li>
				            <li off=""><a href="<?php echo base_url(); ?>en/upload_image">Photo</a></li>	
				            <li class="current"><a href="<?php echo base_url(); ?>en/alertpage">Alert Settings</a></li>								
				            <li off=""><a href="#">Bookmarks</a></li>
                            <li off=""><a href="#">Saved Searches</a></li>
                            <li off=""><a href="#">Price Watch</a></li>
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>