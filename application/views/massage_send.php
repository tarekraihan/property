
        <div class="row no-margin">
            <div class="header_top_02">
			
            </div>
        </div>
        
    </div>
    
        
    <div class="container">
        <div class="row db_menu no-margin">
            <ul class="nav nav-pills custom_nav">
              <li role="presentation"><a href="<?php echo base_url();?>en/dashboard/">Dashboard</a></li>
              <li role="presentation" class="active"><a href="<?php echo base_url();?>en/message/">Messages</a></li>
              
              <li role="presentation"><a href="<?php echo base_url();?>en/profile/">Profile</a></li>
            </ul>
        </div>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                        
							<?php
                        
                               //-----Display Success or Error message---
                                if(isset($feedback)){
                                    echo $feedback;
                                }
                               ?> 
                                <h2 class="title">Compose Message</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
						<div class="focus_error">
	
								<div class="squeeze">
									<span id="errorMessage">Note to Real Estate Agents: This property is under listing agreement with 
										a real estate broker. Inducing the seller to terminate their existing 
										listing agreement may be prohibited by law and is in violation with this 
										website's Terms and Conditions. However, many of our customers welcome 
										emails from Agents who represent buyers.</span>
								</div>
						</div>
                </div>
				
				<div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <div class="participants">
									<?php
										if(isset($_GET['property']))
										{
											$property_id=$_GET['property'];
											$row=$this->select_model->Select_Single_Property_Info1($property_id);
											
										}else
										{
											 $row['first_name']='';
											 $row['last_name']='';
											 $row['customer_id']='';
											 $row['property_id']='';
											 $row['sign']='';
											 $row['customer_id']='';
										}
											
									?>
																
									<div class="recipient">
										<h4 class="bold">To:</h4>
										<div class="image"><img src="<?php echo base_url(); ?>images/missing_120.png"></div>
										<div class="info_massage">
											<div class="first"><?php echo $row['first_name'];?></div>
										<div class="last"><?php echo $row['last_name'];?></div>
										<div class="userid">Member ID: <?php echo $row['customer_id'];?></div>
										</div>
										<div class="clear"></div>
									</div>
										
																		
									<div class="sender">
										<h4 class="bold">From:</h4>
										<div class="image"><img src="<?php echo base_url(); ?>images/missing_120.png"></div>
										<div class="info_massage">
												<div class="first"><?php echo $this->session->userdata('first_name'); ?></div>
										<div class="last"><?php echo $this->session->userdata('last_name'); ?></div>
										<div class="userid">Member ID: <?php echo $this->session->userdata('customer_id'); ?></div>
										</div>
										<div class="clear"></div>
									</div>
									
									<div class="clear"></div>
							</div>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
               
			   <form action="" method="post">
			   <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <div class="msginfo">
									<div class="subject">
										<h4 class="bold">Subject:</h4>
                                        <input type="hidden" value="<?php echo $row['property_id'] ; ?>" name="property_id"/>
                                        <input type="hidden" value="<?php echo $row['sign']; ?>" name="property_sign"/>
                                        <input type="hidden" value="<?php echo $row['customer_id'] ; ?>" name="seller_id"/>
                                        <input type="hidden" value="<?php echo $this->session->userdata('customer_id'); ?>" name="purchaser_id"/>
                                        <input type="hidden" value="<?php echo date('F j, Y, g:i a');?>" name="txtDate"/>
                                        
										<input  name="txtSubject" id="txtSubject" value="RE: Sign Number <?php echo $row['sign'];?>" type="text" required>
									</div>
									<div class="date">
										<h4 class="bold">Date:</h4>
										<div><?php echo date("F j, Y, g:i a"); ?></div>
									</div>
									<div class="clear"></div>
							</div>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
				
				<div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <div class="msgbody">
									
									<h4 class="bold">Message:</h4>
									<div class="note"><strong>Formatted text copied from Microsoft Word ® may cause issues in sending your message. Type your message directly in the following box.</strong></div>
									<div><textarea required name="message_text" id="message_text"></textarea></div>
									<div class="note"><strong>Note</strong>: In order to protect users against inappropriate messages we keep an encrypted log of all messages and the IP address of all users who communicate using this site. We respond to abuse according to our <a href="<?php echo base_url();?>en/terms_of_use/">Terms of Use</a>. <em>Don't send anything through this message system that you would feel embarassed sending to your grandmother.</em></div>
									
								</div>
                        </div>
                    </div>
					
                    <div class="below"></div>
                </div>
				
				<div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                           <div class="msgtools">
									<div class="submit"><input id="save_identity_x" name="save_identity_x" value="Send" type="submit">
									</div>
									<div class="clear"></div>
								</div>
                        </div>
                    </div>
					
                    <div class="below"></div>
                </div>
               
                
            </div>
            
            </form>
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li class="current"><a href="<?php echo base_url();?>en/message/">Inbox</a></li>
				            <li off=""><a href="#">Draft</a></li>	
				            <li off=""><a href="#">Sent</a></li>								
                        </ul>
                    </div>
                </div>      
            
            </div>
        </div>
    </div>