<div class="clearfix"></div>
        
        <!-- register content starts here -->
        <div class="register-bg hidden-xs hidden-sm">
            <div class="container">
                <div class="row clearfix">

                        <div class="col-xs-12 column ">


                        </div>
                    </div>
            </div>
        </div>
        
        
        <div class="container padding-top-25">
					<div class="row clearfix">
					
						<div class="col-xs-12 col-md-6 column">		
						
							<h3 class="better-tag">Join PropertyGuys.com</h3>	
							<p class="caption-text">Get advanced PropertyGuys.com features today! It's FREE and you'll get loads of ways to make your home search easier.</p>

							
					
					<div >								
                        <div class="errorbox" id="errorbox" style="display: inline;">
                            <div class="above"></div>
                            <div class="focus">
                                <div class="buffer">

                                    <div class="squeeze">
                                        <div>
                                            <strong>
                                            <?php //-----Display Success or Error message---
                                            if(isset($feedback)){
                                                echo $feedback;
                                            }?>
                                            </span></strong>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="below"></div>
                        </div>

                    </div>
					
							<form novalidate id="frmRegister" class="for-group fv-form fv-form-bootstrap" method="post" action="<?php echo base_url(); ?>register/customer_registration/" data-fv-framework="bootstrap" data-fv-icon-valid="glyphicon glyphicon-ok" data-fv-icon-invalid="glyphicon glyphicon-remove" data-fv-icon-validating="glyphicon glyphicon-refresh">

							
								<div class="form-group has-feedback custom-form-group">
									<label for="register_email">Email Address:</label>								
									<input data-fv-field="register_email" class="form-control" name="register_email" id="register_email" value="" placeholder="Enter email" data-fv-emailaddress-message="The value is not a valid email address" data-fv-notempty="true" data-fv-notempty-message="Email is required" type="email">
							    																											
								<small data-fv-result="NOT_VALIDATED" data-fv-for="register_email" data-fv-validator="emailAddress" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('register_email');?></small>	</div>	
								

								<div class="checkbox">
									<label for="permission">
										<input name="permission" id="permission" checked="checked" type="checkbox">
										Yes, I trust you to send me messages announcing new programs and services without spamming me.
                                        
									</label>
                                    
                                    																											
								<small data-fv-result="NOT_VALIDATED" data-fv-for="register_email" data-fv-validator="emailAddress" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('permission');?></small>																	
								</div>
			
								<div class="form-group has-feedback custom-form-group">
									<label for="register_first">First Name:</label>
									<input data-fv-field="register_first" class="form-control" name="register_first" id="register_first" value="" placeholder="First Name" data-fv-notempty="true" data-fv-notempty-message="First name is required" type="text">
								<small data-fv-result="NOT_VALIDATED" data-fv-for="register_first" data-fv-validator="notEmpty" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('register_first');?></small>		
								</div>
								
								
								
								<div class="form-group has-feedback custom-form-group">
									<label for="register_last">Last Name:</label>
									<input data-fv-field="register_last" class="form-control" name="register_last" id="register_last" value="" placeholder="Last Name" data-fv-notempty="true" data-fv-notempty-message="Last name is required" type="text">																	
								<small data-fv-result="NOT_VALIDATED" data-fv-for="register_last" data-fv-validator="notEmpty" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('register_last');?></small>		
								</div>
								 
								<div class="form-group custom-form-group">
									<label for="register_postalzip">Postal Code/Zip:</label>
									<input class="form-control" name="register_postalzip" id="register_postalzip" value="" style="width: 200px;" placeholder="Postal Code" type="text">
                                    <small data-fv-result="NOT_VALIDATED" data-fv-for="register_last" data-fv-validator="notEmpty" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('register_postalzip');?></small>
								</div>

								<div class="form-inline">
									<label for="hm_area">Primary Phone:</label><br>
									<input data-fv-field="hm_area" placeholder="123" name="hm_area" id="hm_area" maxlength="3" value="" class="form-control" style="width: 50px;" type="text"><i data-fv-icon-for="hm_area" class="form-control-feedback fv-icon-no-label" style="display: none;"></i>
									<input data-fv-field="hm_start" placeholder="123" name="hm_start" id="hm_start" maxlength="3" value="" class="form-control" style="width: 50px;" type="text"><i data-fv-icon-for="hm_start" class="form-control-feedback fv-icon-no-label" style="display: none;"></i>
									<input data-fv-field="hm_end" placeholder="1234" name="hm_end" id="hm_end" maxlength="4" value="" class="form-control" style="width: 75px;" type="text"><i data-fv-icon-for="hm_end" class="form-control-feedback fv-icon-no-label" style="display: none;"></i>																									
								</div>
                                
                                <div class="form-group custom-form-group">
									<label for="register_postalzip">Password:</label>
									<input class="form-control" name="password" id="register_postalzip" value="" style="width: 200px;" placeholder="******" type="password">
                                    <small data-fv-result="NOT_VALIDATED" data-fv-for="register_last" data-fv-validator="notEmpty" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('password');?></small>
								</div>
                                
                                <div class="form-group custom-form-group">
									<label for="register_postalzip">Confirm Password:</label>
									<input class="form-control" name="re_password" id="register_postalzip" value="" style="width: 200px;" placeholder="******" type="password">
                                    <small data-fv-result="NOT_VALIDATED" data-fv-for="register_last" data-fv-validator="notEmpty" class="help-block" style="display: inline; color:#D30D00;"><?php echo form_error('re_password');?></small>
								</div>	

								<div class="padding-top-50">
									<input class="btn btn-green" type="submit" name="register" value="register"/>																	
								</div>
								
							</form>

							<h3 class="better-tag opensans_thin">Protecting Your Privacy</h3>
							<p class="caption-text">We take your privacy very seriously. We've put a lot of effort into making our <a href="#"><strong>Privacy Policy</strong></a> readable and not just a bunch of legal-speak, please review it. It outlines how we collect, use and store your information.</p>
					<small data-fv-result="NOT_VALIDATED" data-fv-for="hm_area" data-fv-validator="stringLength" class="help-block" style="display: none;">Please enter a value with valid length</small><small data-fv-result="NOT_VALIDATED" data-fv-for="hm_start" data-fv-validator="stringLength" class="help-block" style="display: none;">Please enter a value with valid length</small><small data-fv-result="NOT_VALIDATED" data-fv-for="hm_end" data-fv-validator="stringLength" class="help-block" style="display: none;">Please enter a value with valid length</small></div>							
				</div>
			</div>
        
        <!-- register content starts here -->