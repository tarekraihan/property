
        
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
                                <h2 class="title">Create Offer</h2>
                                 <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
						
						
					}
					
				   ?> 
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">
                    <div class="focus highlight">
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
											 $row['price']='';
										}
											
									?>
										
                                        <?php 
										if(isset($_GET['property']))
										{
										?>						
									<div class="recipient">
										<h4 class="bold">To:</h4>
										<div class="image">
                                       <?php 
									   	if($row['image_name'])
										{
									   ?>
                                        <img  style="width:120px;height:80px;" src="<?php echo base_url(); ?>images/member/<?php echo $row['image_name'];?>">
                                        <?php
										}else{
										?>
                                        <img src="<?php echo base_url(); ?>images/missing_120.png">
                                        <?php
										}
										?>
                                        </div>
										<div class="info_massage">
											<div class="first"><?php echo $row['first_name'];?></div>
										<div class="last"><?php echo $row['last_name'];?></div>
										<div class="userid">Member ID: <?php echo $row['customer_id'];?></div>
										</div>
										<div class="clear"></div>
									</div>
                                    <?php 
										}else{
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
                                    <?php
										}
									?>
										
																		
									<div class="sender">
										<h4 class="bold">From:</h4>
										<div class="image">
                                        
                                         <?php 
									   	if($this->session->userdata('image_name'))
										{
									   ?>
                                        <img  style="width:120px;height:80px;" src="<?php echo base_url(); ?>images/member/<?php echo $this->session->userdata('image_name');?>">
                                        <?php
										}else{
										?>
                                        <img src="<?php echo base_url(); ?>images/missing_120.png">
                                        <?php
										}
										?>
                                        
                                        </div>
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
                    <div class="below"></div>
                </div>
				
				<div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            
							<div class="ofrbody">
								<h5>Ok, how the heck does this work?</h5>
								<p>The <strong>vistamasion.com</strong> Offer Maker® is a non-legally binding negotiation tool.  It allows buyers and sellers to exchange offers.  Once you have arrived at a price you agree on we then make it easy to forward all of the details directly to the buyer's lawyer to complete the sale.  It's painless, and there's <strong>no commission</strong> involved!</p>
								<p><strong>Ready to get started?</strong> Start by completing the form below with the price and details of the sale you'd like to offer.  If they accept you'll receive instructions for completing the sale.  If they don't accept they may counter your offer, which you may decide to accept or counter yourself.  <strong>You'll receive an email when they respond to your offer.</strong></p>

								<h5>Privacy Notice</h5>
								<p>Your contact information will <strong>NOT</strong> be disclosed to the person you are communicating with using the <strong>PropertyGuys.com</strong> web site <strong>UNTIL</strong> the buyer and seller arrive at an offer both have approved.  At that time we will make your phone number and email address available to the other person to be used for finalizing the sale.</p>
							</div>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
				
				<div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            
							<div class="ofrcreate">

								<form action="" method="post" accept-charset="utf-8">									
									<input name="purchaser_id" id="sender_id" value="<?php echo $this->session->userdata('customer_id'); ?>" type="hidden">
									<input name="property_id" id="property_id" value="<?php echo $row['property_id'];?>" type="hidden">
                                    <input name="property_sign" id="property_sign" value="<?php echo $row['sign'];?>" type="hidden">
									<input name="seller_id" id="recipient_id" value="<?php echo $row['customer_id'];?>" type="hidden">
									<input id="offerConditionIds" name="purchaser_name" value="<?php echo $this->session->userdata('first_name'); ?> <?php echo $this->session->userdata('last_name'); ?>" type="hidden">
                                    <input id="offerConditionIds" name="purchaser_email" value="<?php echo $this->session->userdata('email_address'); ?>" type="hidden">
								<input name="subject" id="subject" value="This is an offer message for <?php echo $row['sign'];?>" type="hidden">
																		
									<div class="input firpos">
									
										<label for="price">Price:</label>
										<div class="mount">										
											<div><input name="price" id="price" value="<?php echo $row['price']; ?>" class="required number" type="text"></div>
                                             <div class="caption"><span class="optional"><?php echo form_error('deposit');?></span></div>
											<div class="caption"><span class="required">Required</span> ($)</div>
										</div>
										<div class="clear"></div>
									</div>
									
									<div class="checkbox">
										<label for="prequalified">Pre-Qualified:</label>
										<div class="mount toggle">
											<div class="box"><input class="offerpage_checkbox" name="prequalified" id="prequalified" value="pre-qualified for a mortgage amount" type="checkbox"></div>
											<label class="Pre_Qualified_text offerpage_lable" for="qualified">Have you been pre-qualified for a mortgage amount that would cover the sale price you are proposing in this offer?</label>
											<div class="clear"></div>
											
											<div class="caption"><span class="optional">Optional</span></div>
											<div class="note"><strong>Note</strong>: Offers from buyers that have been pre-approved for mortgages are marked as <strong>Pre-Qualified</strong> for home sellers. <a href="<?php echo base_url();?>en/mortgage">Get pre-qualified now</a>.</div>
										</div>
										<div class="clear"></div>
									</div>
									
									<div class="input firpos">
										<label for="deposit">Deposit Due:</label>
										<div class="mount">
											<div><input name="deposit" id="deposit" value="" type="text"></div>
                                            <div class="caption"><span class="optional"><?php echo form_error('deposit');?></span></div>
											<div class="caption"><span class="optional">Optional</span> ($) Deposit due at signing</div>
										</div>
										<div class="clear"></div>
									</div>
									
									
									<div class="input datepos">
										<label for="closing_month">Closing Date:</label>
										<div class="mount">
										
											<p><input class="datepicker" name="txtClosingDate" type="text" id="datepicker"></p>
											
											<!--datepicker
											<div id="closingDateContainer">
												<div class="field">
													<input name="closing_month" id="closing_month" maxlength="2" value="" type="text">
												</div>
												<div class="field">
													<input name="closing_day" id="closing_day" maxlength="2" value="" type="text">
												</div>
												<div class="field">
													<input name="closing_year" id="closing_year" maxlength="4" value="" type="text"> <input class="hasDatepicker" id="closing_monthclosing_dayclosing_year" type="hidden"><img title="Select a date" alt="Select a date" src="http://round.s3.amazonaws.com/public/images/calendar.gif" class="ui-datepicker-trigger">
												</div>
											</div>
											-->
																																										
											<div class="clear"></div>
											<div class="caption"><span class="required">Required</span> Month/Day/Year</div>
											<div class="note"><strong>Note</strong>: This is the date when the keys are handed over.</div>
										</div>
										<div class="clear"></div>
									</div>

									<div class="checkbox">
										<label for="conditions">Conditions:</label>

										<div class="mount toggle">
											<div class="box">
												<input class="offerpage_checkbox" value="condition-1" id="condition_1" name="offer_condition[]" type="checkbox">
											</div>
											
											<label class="Pre_Qualified_text offerpage_lable" for="offer_1">Buyer needs to sell a property (Conditional Offer).</label>
											<div class="clear"></div>
											
											<div class="box">
												<input class="offerpage_checkbox" value="condition-2" id="condition_2" name="offer_condition[]" type="checkbox">
											</div>
											
											<label class="Pre_Qualified_text offerpage_lable" for="offer_2">Buyer to obtain a satisfactory property inspection at Buyer's expense.</label>
											<div class="clear"></div>
											
											<div class="box">
												<input class="offerpage_checkbox" value="condition-3" id="condition_3" name="offer_condition[]" type="checkbox">
											</div>
											<label class="Pre_Qualified_text offerpage_lable" for="offer-3">Buyer to obtain a satisfactory appraisal at Buyer's expense.</label>
											<div class="clear"></div>
											
											<div class="box">
												<input class="offerpage_checkbox" value="condition-4" id="condition_1" name="offer_condition[]" type="checkbox">
											</div>
											
											<label class="Pre_Qualified_text offerpage_lable" for="offer_4">Buyer to obtain appropriate financing sufficient to allow for the purchase of the property (Conditional on Financing).</label>
											<div class="clear"></div>
									</div>		
										
										<div class="clear"></div>
									</div>
									
									<div class="textarea forpos">
										<label for="message">Additional:</label>
										<div class="mount">
											<div><textarea name="additional_message" id="message"></textarea></div>
                                            <div class="caption"><span class="optional"><?php echo form_error('message');?></span></div>
											<div class="caption"><span class="optional">Optional</span></div>
											<div class="note">
												<p><strong>Example</strong>: Fridge and stove included in price.</p>
												<div><strong>Note</strong>: In order to protect users against inappropriate messages we keep an encrypted log of all messages and the IP address of all users who communicate using this site. We respond to abuse according to our <a href="">Terms of Use</a>. <em>Don't send anything through this message system that you would feel embarassed sending to your grandmother.</em></div>
											</div>
										</div>
										<div class="clear"></div>
									</div>

									<div class="input datepos">
										<label for="expire_month">Offer Expires:</label>
										<div class="mount">
										
											<p><input class="datepicker" name="offerExpires"  type="text" id="datepicker01"></p>
											
											<!--datepicker
											<div class="field">
												<input name="expire_month" id="expire_month" maxlength="2" value="" type="text">
											</div>
											<div class="field">
												<input name="expire_day" id="expire_day" maxlength="2" value="" type="text">
											</div>
											<div class="field">
												<input name="expire_year" id="expire_year" maxlength="4" value="" type="text"> <input class="hasDatepicker" id="expire_monthexpire_dayexpire_year" type="hidden"><img title="Select a date" alt="Select a date" src="http://round.s3.amazonaws.com/public/images/calendar.gif" class="ui-datepicker-trigger">
											</div>
											
											-->
											<div class="clear"></div>
											<div class="caption"><span class="required">Required</span> Month/Day/Year</div>
											<div class="note"><strong>Note</strong>: If an offer expires, it may no longer be accepted on this web site by the person you are negotiating with.  It is expected that the buyer's lawyer will have provided the agreement to the sellers lawyer to be signed by this date.</div>
										</div>
										<div class="clear"></div>
									</div>
									
								
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
                    </div></form>
					
                    <div class="below"></div>
                </div>
                
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <div class="box-rounded">
                    <div class="box-shadow-inner">
                     <?php 
						if(isset($_GET['property']))
						{
						?>	
							<img class="asking_price_image" src="<?php echo base_url(); ?>images/property/<?php echo $row['feature_image'];?>"/>
                            <?php
						}else{
							?>
						<img class="asking_price_image" src="<?php echo base_url(); ?>images/missing_120.png"/>
						<?php }
						?>
								<div class="inside_asking_price">
									<div class="information">
                                    <?php 
										if(isset($_GET['property']))
										{
										?>	
										<div class="asking_price">Asking $<?php echo $row['price'];?></div>
                                        <?php
										}else{
										?>
                                        <div class="asking_price">Asking $000.00</div>
                                        <?php
										}
										?>
									</div>
								</div>
                    </div>
                </div>
                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li ><a href="<?php echo base_url();?>en/message/">Inbox</a></li>
				            <li off=""><a href="#">Draft</a></li>	
				            <li off=""><a href="#">Sent</a></li>								
                        </ul>
                    </div>
                </div> 
            
            </div>
        </div>
    </div>