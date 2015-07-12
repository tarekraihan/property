<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Porperty Guys                    *
 * Script : To Edit Contact Info              *
 * Start Date :   04-07-2015                  *
 * Last Update : 04-07-2015                   *
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
   $result['area_code']='';
   $result['phone_start']='';
   $result['phone_end']='';
   $result['mobile_no']='';
   $result['email_address']='';

	
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
              <li role="presentation" ><a href="<?php echo base_url(); ?>en/dashboard/">Dashboard</a></li>
              <li role="presentation"><a href="<?php echo base_url(); ?>en/message/">Messages</a></li>
              
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <h2 class="title">Contact Information Settings</h2>
							
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">
                    
                    <form novalidate id="frmPeoplePerson" class="default" method="post" action="<?php echo base_url();?>en/dashboard_Contact_Information_Settings/">
                    
                    <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
					}
				   ?> 
								<input id="userId" name="userId" value="<?php echo $result['customer_id'];?>" type="hidden">
								
								<p class="squeeze content">We promise to protect the contact information you have entrusted to us and to only use it for the purposes for which you provided it.  We've written a <a href="">Privacy Policy</a> that outlines our commitment to your privacy.</p>
								
								<div class="input secpos">
									<label for="name_first">Home phone:</label>
									<div class="mount">
										<div>
											<div>
												<input size="3" tabindex="1" name="hm_area" id="hm_area" maxlength="3" value="<?php echo $result['area_code'];?>" type="text" required>
												<input size="3" tabindex="2" name="hm_start" id="hm_start" maxlength="3" value="<?php echo $result['phone_start'];?>" type="text" required>
												<input size="4" tabindex="3" name="hm_end" id="hm_end" maxlength="4" value="<?php echo $result['phone_end'];?>" type="text" required>
											</div>
										</div>
										<div class="caption"><span class="required">optional</span></div>
										<div class="note content"><strong>Note</strong>: To discourage abuse of the <a href="/help/article/id/48">Offer Maker®</a> we require visitors to the site include a valid home phone number to use the negotiation feature.</div>
									</div>
									<div class="clear"></div>
								</div>
								
								
								<div class="input secpos">
									<label for="name_last">Email Address:</label>
									<div class="mount">
										<div><input class="required" name="email" id="enail" value="<?php echo $result['email_address'];?>" type="text"  required></div>
										<div class="caption"><span class="required">Required</span></div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="input secpos">
									<label for="name_first">Mobile:</label>
									<div class="mount">
										<div>
											<div>
												<input class="required" name="mobile" id="mobile" value="<?php echo $result['mobile_no'];?>" type="text" >
											</div>
										</div>
                                        <div class="caption"><?php echo form_error('mobile');?></div>
										<div class="caption"><span class="required">optional</span></div>
										
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