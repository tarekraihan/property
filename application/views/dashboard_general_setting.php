<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Porperty Guys                    *
 * Script : To Edit States                    *
 * Start Date :   21-06-2015                  *
 * Date : 21-06-2015                          *
 **********************************************/
if(isset($_GET['customer_id']))
{
    $id=$_GET['customer_id'];
    $table='customer_profile';
    $id_field='customer_id';
    $result=$this->select_model->Select_Single_Row($id,$table,$id_field);
}else
{
   $result['customer_id']='';
   $result['first_name']='';
   $result['last_name']='';
   $result['zip_code']='';
	
}

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
              <li role="presentation"><a href="<?php echo base_url(); ?>en/dashboard_mess/">Messages</a></li>
              
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <h2 class="title">General Setting</h2>
							
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">
                    
                    <form novalidate id="frmPeoplePerson" class="default" method="post" action="<?php echo base_url();?>en/dashboard_general_setting/">
                    <div class="box-content"  >
                   <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
					}
				   ?> 
               
             </div>
								<input id="userId" name="userId" value="<?php echo $result['customer_id'];?>" type="hidden">
								
								<p class="squeeze content">We use this information for identifying you on the site and communicating with you.  If you decide to provide us with your location we'll customize the sites features for you. This information is stored and used according to our <a href="/site/privacy">Privacy Policy</a>.</p>
								
								<div class="input secpos">
									<label for="name_first">First Name:</label>
									<div class="mount">
										<div><input class="required" name="name_first" id="name_first" value="<?php echo $result['first_name'];?>" type="text" required></div>
										<div class="caption"><span class="required">Required</span></div>
									</div>
									<div class="clear"></div>
								</div>
								
								
								<div class="input secpos">
									<label for="name_last">Last Name:</label>
									<div class="mount">
										<div><input class="required" name="name_last" id="name_last" value="<?php echo $result['last_name'];?>" type="text"></div>
										<div class="caption"><span class="required">Required</span></div>
									</div>
									<div class="clear"></div>
								</div>
								
								
								
								<div class="select secpos break">
									<label for="country">Country:</label>
									<div class="mount">
										<div>
											<select name="country" id="country"  class="required">
												
                                                <option value="Canada" label="Canada" selected="selected">Canada</option>
												<option value="United States" label="United States">United States</option>
												<option value="International" label="International">International</option>
											</select>										</div>
										<div class="caption"><span class="required">Required</span></div>
										<div style="display: none;" class="note" id="internationalDiv"><strong>International Visitors</strong>: Thanks so much for your interest in our site.  Please keep in mind as you are browsing this site that it is optimized for North American visitors.  Some features may not be available in your country.</div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div id="div_postal" class="input firpos">
																		<label for="postalzip">Postal Code/Zip:</label>
									<div class="mount">
										<div><input class="PostalOrZip" name="postalzip" id="postalzip" value="<?php echo $result['zip_code'];?>" type="text" required></div>
										<div class="caption"><span class="optional">Optional</span></div>
										<div class="note content"><strong>Note</strong>: We use your postal code/zip to customize the site for you.  For example, we use your location to determine your time zone - then we make sure we don't send you property updates in the middle of the night.  We will <strong>never</strong> sell your address and we won't use it to stalk you.</div>
									</div>
									<div class="clear"></div>
								</div>

								<div class="radio break">
									<label for="experience_type">Experience:</label>
									<div class="mount">
									
										<div class="virgin">
											<div class="option"><input id="experience_type_virgin" name="usertype" value="Private Sale Virgin" checked="checked" type="radio"></div>
											<label for="experience_type_virgin"><strong>Private Sale Virgin</strong></label>
											<div class="clear"></div>
											<p class="content">You've never bought or sold property privately before.  </p>
										</div>
										
										<div class="veteran">
											<div class="option"><input id="experience_type_veteran" name="usertype" value="Private Sale Veteran" type="radio"></div>
											<label for="experience_type_veteran"><strong>Private Sale Veteran</strong></label>
											<div class="clear"></div>
											<p class="content">You've bought or sold property privately before. You've been there, done that and have the wallet full of cash to prove it.</p>
										</div>
										
										<div class="pro">
											<div class="option"><input id="experience_type_pro" name="usertype" value="Private Sale Pro" type="radio"></div>
											<label for="experience_type_pro"><strong>Private Sale Pro</strong></label>
											<div class="clear"></div>
											<p class="content">You're so good at buying and selling property privately that people come to you for advice. They call you the "house whisperer".</p>
										</div>
									
										
										<div class="note content"><strong>Note</strong>: This information is <strong>never</strong> made public in a way that would identify you. We use your experience category to provide more customized content to you.  You can change your category at any time.</div>
									</div>
									<div class="clear"></div>
								</div>




								<div class="submit">
									<div><button type="submit" class="btn btn-success btn-sm custom_btn">save</button></div>
								</div>
								
							</form>
                    
                </div>
                
                <div class="below"></div>
   
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <div class="box-rounded">
                    <div class="box-shadow-inner">
                        <div class="personpic">
                        		<img class="profile_image" src="<?php echo base_url(); ?>images/member/<?php echo $result['image_name'];?>">
								<div class="information">
									<p class="member_name">Member</p>
								</div>
				        </div>
                    </div>
                </div>
                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li class="current"><a href="<?php echo base_url();?>en/profile/">Profile</a></li>
				            <li off=""><a href="<?php echo base_url();?>en/upload_image/">Photo</a></li>	
				            <li off=""><a href="">Alert Settings</a></li>								
				            <li off=""><a href="">Bookmarks</a></li>
                            <li off=""><a href="">Saved Searches</a></li>
                            <li off=""><a href="">Price Watch</a></li>
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