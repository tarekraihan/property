
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
              <li role="presentation"><a href="<?php echo base_url(); ?>en/dashboard/">Dashboard</a></li>
              <li role="presentation"><a href="<?php echo base_url(); ?>en/message/">Messages</a></li>
              
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <h2 class="title">Demographic Survey</h2>
							
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">
                    
                    <form novalidate id="frmPeoplePerson" class="default" method="post" action="/launch-people/people-person">
								<input id="userId" name="userId" value="261200" type="hidden">
								
								<p class="squeeze content">This entire page is optional. We appreciate you completing this section because it helps us with decisions like the size of the text on the site, whether to feature bathroom photos with the seat up or down, and whether we should be advertising macaroni and cheese or djion mustards.Your answers are only reviewed as aggregate data so you are never personally identified. We store your information confidentially according to to our Privacy Policy.<a href="/site/privacy">Privacy Policy</a>.</p>

								<div class="select secpos">
									<label for="gender">Gender:</label>
									<div class="mount">
										<div>
											<select name="gender" id="gender">
											<option value="23" label="Prefer not to answer">Prefer not to answer</option>
											<option value="25" label="Male">Male</option>
											<option value="24" label="Female">Female</option>
										</select>								
										</div>
										<div class="caption"><span class="optional">Optional</span></div>									
									</div>
									<div class="clear"></div>																	
								</div>
								
								<div class="select secpos">
									<label for="age">Age:</label>
									<div class="mount">
										<div>
											<select name="age" id="age">
												<option value="1" label="Prefer not to answer">Prefer not to answer</option>
												<option value="9" label="75 and older">75 and older</option>
												<option value="8" label="65 to 74">65 to 74</option>
												<option value="7" label="55 to 64">55 to 64</option>
												<option value="6" label="45 to 54">45 to 54</option>
												<option value="5" label="35 to 44">35 to 44</option>
												<option value="4" label="25 to 34">25 to 34</option>
												<option value="3" label="18 to 24">18 to 24</option>
												<option value="2" label="13 to 17">13 to 17</option>
											</select>	
										</div>
										<div class="caption"><span class="optional">Optional</span></div>	
									</div>
									<div class="clear"></div>		
								</div>
								
								<div class="select thrpos">
									<label for="education">Education:</label>
									<div class="mount">
										<div>
											<select name="education" id="education">
												<option value="16" label="Prefer not to answer">Prefer not to answer</option>
												<option value="22" label="Post-Graduate Degree">Post-Graduate Degree</option>
												<option value="21" label="Post-Graduate Work">Post-Graduate Work</option>
												<option value="20" label="Post-Secondary Graduate">Post-Secondary Graduate</option>
												<option value="19" label="Some Post-Secondary">Some Post-Secondary</option>
												<option value="18" label="High School Graduate">High School Graduate</option>
												<option value="17" label="Some High School">Some High School</option>
											</select>										
										</div>
										<div class="caption"><span class="optional">Optional</span></div>									
									</div>
									<div class="clear"></div>																	
								</div>
								
								<div class="select thrpos">
									<label for="occupation">Occupation:</label>
									<div class="mount">
										<div>
											<select name="occupation" id="occupation">
												<option value="26" label="Prefer not to answer">Prefer not to answer</option>
												<option value="36" label="Retiree">Retiree</option>
												<option value="35" label="Full-time Parent">Full-time Parent</option>
												<option value="34" label="Entrepreneur">Entrepreneur</option>
												<option value="33" label="Professional">Professional</option>
												<option value="32" label="Tradesperson">Tradesperson</option>
												<option value="31" label="Executive">Executive</option>
												<option value="30" label="Manager">Manager</option>
												<option value="29" label="Employee">Employee</option>
												<option value="28" label="Student">Student</option>
												<option value="27" label="Not Employeed">Not Employeed</option>
											</select>										
										</div>
										<div class="caption"><span class="optional">Optional</span></div>									
									</div>
									<div class="clear"></div>																	
								</div>
								
								<div class="select secpos">
									<label for="income">Annual Income:</label>
									<div class="mount">
										<div>
											<select name="income" id="income">
												<option value="10" label="Prefer not to answer">Prefer not to answer</option>
												<option value="15" label="$100,000 or more">$100,000 or more</option>
												<option value="14" label="$75,000 - $99,999">$75,000 - $99,999</option>
												<option value="13" label="$50,000 - $74,999">$50,000 - $74,999</option>
												<option value="12" label="$25,000 - $49,999">$25,000 - $49,999</option>
												<option value="11" label="Less than $24,000">Less than $24,000</option>
											</select>										
										</div>
										<div class="caption"><span class="optional">Optional</span> For your household</div>									
									</div>
									<div class="clear"></div>																	
								</div>

								<div class="submit">
									<div><button class="btn btn-success btn-sm custom_btn">save</button></div>
								</div>
								
							</form>
                    
                </div>
                
                <div class="below"></div>
   
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <div class="box-rounded">
                    <div class="box-shadow-inner">
                        <div class="personpic">
								<div class="inside">
                                <img class="profile_image" src="<?php echo base_url(); ?>images/member/<?php echo $row->image_name;?>">
									<div class="information">
										<p class="member_name">Member</p>
									</div>
								</div>
				        </div>
                    </div>
                </div>
               
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                           <li class="current"><a href="<?php echo base_url(); ?>en/dashboard">Profile</a></li>
				            <li off=""><a href="<?php echo base_url(); ?>en/upload_image">Photo</a></li>	
				            <li ><a href="<?php echo base_url(); ?>en/alertpage">Alert Settings</a></li>								
				            <li off=""><a href="<?php echo base_url();?>en/bookmark/">Bookmarks</a></li>
                            <li off=""><a href="<?php echo base_url();?>en/bookmark/">Saved Searches</a></li>
                            <li off=""><a href="#">Price Watch</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Help</h3>
                        <ul id="submenu_help" class="nav nav-pills nav-stacked">
                            <li><a href="<?php echo base_url();?>en/help_change_email/">How do I change my email address?</a></li>
								<li><a href="<?php echo base_url();?>en/help_change_profile_picture/">How do I change my profile picture?</a></li>
								<li><a href="<?php echo base_url();?>en/help_delete_account/">To how do I delete my Vista Maisonaccount?</a></li>				
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>