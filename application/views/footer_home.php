<!-- common pre-footer strats here -->
        <!-- section call and quote strats -->

        <div class="row no-margin clearfix">
            <div class="section_02_title">
                <p class="big_title">you are one step away </p>
            </div>
        </div>

        <div class="row no-margin clearfix section_02">

           <div class="container">

                <div class=" col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="thumbnail thumbnail_section_02">
                        <a href="#" data-toggle="modal" data-target="#easycall"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-clock.png" class="img-responsive">
                        </a>
                        <div class="caption text-center">
                            <span class="caption-title">
                                <a href="#" data-toggle="modal" data-target="#easycall">Easy Call</a>
                            </span>
                            <p class="caption-text">It all starts with a conversation that on average takes only seven minutes. Take the call that could make you thousands of dollars when you sell. <a href="#" data-toggle="modal" data-target="#easycall">Request a call.</a>
                            </p>

							<!-- modal 5min call starts-->
							<div class="modal fade" id="easycall" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
									
									  <div class="modal-body">
											<div class="modal-body">

												<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
													<h2 class="caption-title text-center">Only 5 minutes</h2>
														<div class="caption-text"><p>Seven minutes or less - that's all the time it usually takes for us to explain how you can make more money and sell faster using vistamaison.com So why not contact us today? After all, it very well could be the most rewarding seven minutes you'll ever spend.</p></div>
														<div class="caption-text"><p>A Vistamaison representative will contact you to explain how everything works, discuss your listing options and answer any questions you may have. No high-pressure sales tactics. No obligation to buy a thing.</p></div>			
														<div class="caption-text"><p>If you like what you hear, great! We'll schedule a convenient time for you to meet face-to-face with one of our representatives to review your options in even greater detail.</p></div>

															<div style="display: none;" class="alert alert-success alert-dismissible" role="alert" id="sevenMinuteSuccessMessage">
													  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
													  <strong>Good news!</strong> Your message has been sent!
													</div>
													
													<div style="display: none;" class="alert alert-danger alert-dismissible" role="alert" id="sevenMinuteErrorMessage">
													  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
													  <strong>Error.</strong> Something went wrong. Please ckeck you information and try again.
													</div>

													<form action="<?php echo base_url();?>request_call/call_request/" method="post" novalidate class="form-horizontal fv-form fv-form-bootstrap" role="form" id="sevenMinuteForm"><button style="display: none; width: 0px; height: 0px;" class="fv-hidden-submit" type="submit"></button>

															 <div class="form-group">
																		
																		<div class="col-md-12">
																			<div class="form-group row has-feedback">
																				<label for="inputKey" class="col-md-2 control-label">First:</label>
																				<div class="col-md-6">
																					 <input data-fv-field="first_name" class="form-control" id="sevenMinuteFirstName" placeholder="Your First Name" value="" name="txtfirst_name" required data-bv-notempty="true" type="text"></div>
																		
																				
																			</div>
																		</div>
																		
																		<div class="col-md-12">
																			<div class="form-group row has-feedback">
																				
																				<label for="inputValue" class="col-md-2 control-label">Last :</label>
																				<div class="col-md-6">
																				   <input data-fv-field="last_name" class="form-control" id="sevenMinuteLastName" placeholder="Your Last Name" value="" name="txtlast_name" required  data-bv-notempty="true" type="text"></div>
																			</div>
																		</div>
																	</div><!-- End FForm Group -->
															 
															 
															 
															 
																 <div class="form-group">
																   <div class="col-md-12">
																			<div class="form-group row has-feedback">
																				
																				<label for="inputValue" class="col-md-2 control-label">Email:</label>
																				<div class="col-md-6">
																				   <input data-fv-field="last_name" class="form-control" id="sevenMinuteLastName" placeholder="Your Email" value="" name="txtEmail" required  data-bv-notempty="true" type="email"></div>
																			</div>
																		</div>
																</div>
										
																	<div class="form-group">					        
																		<div class="col-md-12">
																			<div class="form-group row has-feedback">
																				<label for="inputKey" class="col-md-2 control-label">Phone:</label>
																				<div class="col-md-4">
																					 <input data-fv-field="phone" class="form-control" id="sevenMinutePhone" placeholder="Phone Number" value="" name="txtphone" required  data-bv-notempty="true" type="text"></div>
																				
																			</div>
																		</div>
																		
																		<div class="col-md-12">
																			<div class="form-group row has-feedback">
																				
																				<label for="inputValue" class="col-md-2 control-label">Postal:</label>
																				<div class="col-md-4">
																				  <input class="form-control" id="sevenMinutePostal" placeholder="Postal Code" value="" data-bv-zipcode="true" name="txtpostalCode" type="text" required >
																				</div>
																			</div>
																		</div>
																	</div><!-- End Form Group -->
																	
																	
																	
																	<div class="form-group">
																		<div class="col-xs-12 text-center">
																		  <button type="submit" class="btn btn-green" id="btnsevenMinuteForm">Send Info</button>
																		</div>
																	  </div>
																
															</form>
													<div style="clear: both;"></div>
										   </div>
									  </div>
									  
									</div>
								</div>
							</div>
						<!-- modal 5min call end-->
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="thumbnail thumbnail_section_02">
                        <a href="#" data-toggle="modal" data-target="#blueprintmodal"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-tag.png" class="img-responsive"></a>
                            <div class="caption text-center">
                                <span class="caption-title"><a href="#" data-toggle="modal" data-target="#blueprintmodal">What's my house worth?</a></span>
                                    <p class="caption-text">With our pricing blueprint you can more easily establish your asking price in a way that helps you make more money. All we need is your email address and we'll send you a link to download a sample blueprint that shows you the value of our pricing strategy.<br><a href="#" data-toggle="modal" data-target="#blueprintmodal">Send me a sample blueprint.</a></p>
								
								<!-- modal Blueprint starts-->
								
									<div class="modal fade" id="blueprintmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
									  <div class="modal-dialog" role="document">
										<div class="modal-content">

										  <div class="modal-body">
												<div class="modal-body">
      
      
													<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
														<h2 class="caption-title text-center">What's my house really worth?</h2> 
															<div class="caption-text"><p>With our pricing blueprint you can more easily establish your asking price in a way that helps you make more money. All we need is your email address and we'll send you a link to download a sample blueprint that shows you the value of our pricing strategy.</p></div>
																<div class="row clear-fix">
																	<div class="col-xs-12 col-md-6" style="padding-top: 25px;">   
																		<form  action="<?php echo base_url();?>request_blueprint/blueprint_request/" method="post" class="form fv-form fv-form-bootstrap" role="form" >				        	<button style="display: none; width: 0px; height: 0px;" class="fv-hidden-submit" type="submit"></button>
																				        	
																				  <div class="row padding-bottom-10">
																					  <div class="form-group has-feedback">
																						<label class="" for="exampleInputEmail2">Email Address</label>
																						<input data-fv-field="email_151" class="form-control" id="email_151" name="txtEmail" placeholder="Email Address" type="email">
																										
																							<div class="checkbox">					    
																								<label style="font-size: 11px;">
																								  <input data-fv-field="agree_151" id="agree_151" name="txtagree" value="1" type="checkbox">  I agree to receive email messages from PropertyGuys.com Inc. containing news, updates and promotions. I understand I can withdraw my consent at any time by using the "Unsubscribe" link contained in each email message. You can view the site <a href="#">Privacy Policy here</a>.
																								</label>
																							</div><i data-fv-icon-for="agree_151" class="form-control-feedback" style="display: none;"></i>
																					  <small data-fv-result="NOT_VALIDATED" data-fv-for="email_151" data-fv-validator="emailAddress" class="help-block" style="display: none;">Please check your email address.</small><small data-fv-result="NOT_VALIDATED" data-fv-for="email_151" data-fv-validator="notEmpty" class="help-block" style="display: none;">Your email name is required</small><small data-fv-result="NOT_VALIDATED" data-fv-for="agree_151" data-fv-validator="notEmpty" class="help-block" style="display: none;">You must agree to our terms of use</small></div>
																					</div>
																		  <div class="row text-center hidden-sm hidden-sm">
																			<div style="display: none;" class="alert alert-success" role="alert" id="ppSuccess">Success! We've recieved your request, check your inbox for the download link.</div>
																			<div style="display: none;" class="alert alert-warning" role="alert" id="ppError">Something went wrong. Check your email address and try again.</div>
																			<button type="submit" class="btn btn-green btn-block" id="btn_151">Send me a FREE sample!</button>
																		  </div>
																		</form>
																	</div>
															
																	<div class="col-md-6 pull-right hidden-xs hidden-sm "><img class="downloadables-image" src="<?php echo base_url(); ?>/images/book_PNG2116.png" style="width: 200px;"></div>
																</div>

											  </div>
										  </div>

										</div>
									  </div>
									</div>
								
								<!-- modal Blueprint end-->
                            </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                    <div class="thumbnail thumbnail_section_02">
                        <a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-book.png" class="img-responsive"></a>
                            <div class="caption text-center">
                                <span class="caption-title"><a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote">Request a Free Quote</a></span>
                                    <p class="caption-text">The cost of our services varies. We offer both full and self service options. Requesting a quote is the best way to know how much it will actually cost you. <a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote">Request a FREE quote.</a></p>
									
									<div class="modal fade" id="modalFreeQuote" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
										<div class="modal-dialog" role="document">
											<div class="modal-content">

												<div class="modal-body">
													  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
														 <h2 class="caption-title text-center"><span id="freequoteustitle">Request a Free Quote</span> <small id="locationtitle"></small></h2>	
															
															
															<div style="display: none;" class="alert alert-success alert-dismissible" role="alert" id="freequoteSuccessMessage">
															  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
															  <strong>Good news!</strong> Your message has been sent!
															</div>
															
															<div style="display: none;" class="alert alert-danger alert-dismissible" role="alert" id="freequoteErrorMessage">
															  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
															  <strong>Error.</strong> Something went wrong. Please ckeck you information and try again.
															</div>

															<form action="<?php echo base_url();?>request_free_quote/request_free_quote/" method="post" class="form-horizontal fv-form fv-form-bootstrap" role="form" id="freeQuoteForm"><button style="display: none; width: 0px; height: 0px;" class="fv-hidden-submit" type="submit"></button>
																	 
																			<div class="form-group has-feedback">
																				<label for="inputEmail3" class="col-sm-3 control-label">Name:</label>
																				<div class="col-sm-4">
																				  <input data-fv-field="first_name" class="form-control" id="freequoteFirstName" placeholder="Your First Name" value="" name="txtfirst_name" type="text"></div>
																				<div class="col-sm-5">
																				  <input data-fv-field="last_name" class="form-control" id="freequoteLastName" placeholder="Your Last Name" value="" name="txtlast_name" type="text"></div>
																			 </div>
																			
																			<div class="form-group has-feedback">
																				<label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
																				<div class="col-sm-9">
																				  <input data-fv-field="email" class="form-control" id="freequoteEmail" placeholder="Email Address" value="" name="txtEmail" type="email"></div>
																				</div>
																			
																			
																			<div class="form-group">
																				<label for="inputEmail3" class="col-sm-3 control-label">Phone:</label>
																				<div class="col-sm-9">
																				  <input class="form-control" id="freequotePhone" placeholder="Primary Phone Number" value="" name="txtphone" type="text">
																				</div>
																				</div>
																			
																			<div class="form-group">
																				<label for="inputEmail3" class="col-sm-3 control-label">Postal Code:</label>
																				<div class="col-sm-9">
																				  <input class="form-control" id="freequotePostal" placeholder="Postal Code" value="" data-bv-zipcode="true" type="text" name="txtpostalCode">
																				</div>
																			 </div>
																	
																			<div class="form-group">
																				<label for="InputMessage" class="col-sm-3 control-label">Message:</label>
																					<div class="col-sm-9">
																						<textarea name="freequoteMessage" id="freequoteMessage" name="txtcontactMessage" class="form-control" rows="3"></textarea>
																					</div>
																		  </div>
																			
																			
																			<div class="form-group">
																				<div class="col-xs-12 text-center">
																				  <button type="submit" class="btn btn-green" id="btnfreequoteForm">Send Info</button>
																				</div>
																			  </div>
																		
																	</form>
															<div style="clear: both;"></div>
												   </div>

											</div>
										</div>
									</div>
                            </div>
                    </div>
                </div>
            </div>

        </div>  <!-- section 02 end -->    
        
		<!--post section starts -->
		<div class="container">
			<div class="homepage_post_title text-center">
				<p class="homepage_post_title_head opensans_thin">Our exclusive homes</p>
				<p class="">Compass agents partner with you throughout your home search, providing their expertise and deep knowledge of the New York City real estate market to help you find a home you love. </p>
			</div>
			
			<div class="row no-margin">
            
             <?php 
						$this->common_model->order_column = 'property_id';
						$this->common_model->table_name = 'tbl_property';
						$this->common_model->join = array('tbl_area','tbl_area.area_id=tbl_property.area_id');
						$this->common_model->where = array('tbl_property.feature_post'=>'1');
						$this->common_model->limit = 4;
						$query=$this->common_model->select_all();
						
						foreach ($query->result() as $row)
						{
					?>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<a href="<?php echo base_url(); ?>en/postpage?id=<?php echo $row->property_id;?>"><img class="titlebox_image img-responsive" src="<?php echo base_url(); ?>/images/property/<?php echo $row->feature_image;?>"/></a>
					<div class="homepage_post_address">
						<p><?php echo $row->property_address;?></p>
					</div>
					
					<div class="homepage_post_state:;">
						<p><?php echo $row->area_name;?></p>
					</div>
					
					<div class="homepage_post_details">
						<ul>
							<li><?php echo $row->bedroom_no;?> BD</li>
							<li><?php echo $row->bathroom_no;?> BA</li>
							<li>$<?php echo $row->price;?></li>
						</ul>
					</div>
				</div>
                <?php
						
						}
					?>

			</div>
		</div>
		<!--post section end -->
		
<!-- contact starts -->
            <div class="row no-margin clearfix">
                <div class="contact-bg">
                
                    <p class="big_title contact_text">Contact Us</p>
                    <p style="padding:0px 18%; text-align:center; font-size: 16px; color:#fff;" class="caption-text">We innovate real estate,we help thousands sell their homes with our customizable packages. Save the commission (an average of $18,000) without compromising the results.</p>
                    <button type="button" class="btn btn-lg btn-green contact_btn" data-toggle="modal" data-target="#contact_form">Contact</button>

					<!-- Modal -->
					<div class="modal fade" id="contact_form" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
						<div class="modal-content">
						  <div class="modal-body">
							<div class="modal-body">
							   <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
									<h4 class="caption-title text-center" id="myModalLabel"><span id="contactustitle">Contact Vistamaison</span></h4>
									<div style="display: none;" class="alert alert-success alert-dismissible" role="alert" id="contactSuccessMessage">
									  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									  <strong>Good news!</strong> Your message has been sent!
									</div>
									
									<div style="display: none;" class="alert alert-danger alert-dismissible" role="alert" id="contactErrorMessage">
									  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
									  <strong>Error.</strong> Something went wrong. Please check you information and try again.
									</div>
									
									
									
									<form action="<?php echo base_url(); ?>message/customer_message/" method="post" novalidate class="form-horizontal fv-form fv-form-bootstrap" role="form" id="contactForm">
																
													<div class="form-group has-feedback">
														<label for="inputEmail3" class="col-sm-3 control-label">First Name:</label>
															<div class="col-sm-9">
															  <input data-fv-field="first_name" class="form-control" id="contactFirstName" placeholder="Your First Name" value="" name="txtfirst_name" type="text" required></div>
														</div>
														
														
														<div class="form-group has-feedback">
															<label for="inputEmail3" class="col-sm-3 control-label">Last Name:</label>
																<div class="col-sm-9">
																   <input data-fv-field="last_name" class="form-control" id="contactLastName" placeholder="Your Last Name" value="" name="txtlast_name"  type="text"></div>
														</div>

													<div class="form-group has-feedback">
														<label for="inputEmail3" class="col-sm-3 control-label">Email:</label>
															<div class="col-sm-9">
															  <input data-fv-field="email" class="form-control" id="contactEmail" placeholder="Email Address" value="" name="txtEmail" type="email"></div>
														</div>
													
													
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-3 control-label">Phone:</label>
															<div class="col-sm-9">
															  <input class="form-control" id="contactPhone" placeholder="Primary Phone Number" value="" name="txtphone" type="text">
															</div>
														</div>
													
													<div class="form-group">
														<label for="inputEmail3" class="col-sm-3 control-label">Postal Code:</label>
														<div class="col-sm-9">
														  <input class="form-control" id="contactPostal" placeholder="Postal Code" value="" data-bv-zipcode="true" data-bv-zipcode-country="CA" name="txtpostalCode" type="text">
														</div>
													 </div>


											
													<div class="form-group">
														<label for="InputMessage" class="col-sm-3 control-label">Message:</label>
															<div class="col-sm-9">
																<textarea name="txtcontactMessage" id="contactMessage" class="form-control" rows="3"></textarea>
															</div>
												  </div>
													
													
													<div class="form-group">
														<div class="col-xs-12 text-center">
														  <button type="submit" class="btn btn-green" id="btnContactForm">Send Info</button>
														</div>
													  </div>
												
											</form>
									<div style="clear: both;"></div>
							  </div>
						  </div>
						</div>
					  </div>
					</div>
					<!-- modal -->
                </div>
            </div>
            
<!-- contact end -->