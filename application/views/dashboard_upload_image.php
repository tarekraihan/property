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
                                <h2 class="title">Person Photo</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
                    
                    <div class="buffer">
							
							<form method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>en/upload_image/">
								<?php
                                
                                       //-----Display Success or Error message---
                                        if(isset($feedback)){
                                            echo $feedback;
                                    }
                                   ?> 
																							
								<input name="userId" id="userId" value="<?php echo $this->session->userdata('customer_id')?>" type="hidden">
								
																
								<div class="photo_upload"><img src="<?php echo base_url(); ?>/images/missing_180.png"></div>

								<div class="input forpos">
									<label for="photo">Photo:</label>
									<div class="mount">
										<div>
																																
											<input size="40" name="image" id="image" style="cursor: default;" type="file" required>
										</div>
                                        <div class="caption"><span class="required"><?php echo form_error('image');?></span></div>
										<div class="caption"><span class="required">Required</span></div>
										<div class="note"><strong>Note:</strong> Your profile picture may not appear publicly right away. Files must be in <strong>JPG</strong> format.  Uploaded file must be smaller than <strong>2 MB</strong>. We moderate profile images for inappropriate content.</div>
									</div>
									<div class="clear"></div>																									
								</div>								

								<div class="submit">
									<div>
										<input name="save_image" value="Upload" type="submit">										
									</div>
								</div>
							</form>
						</div>
                </div>
               
                <div class="below"></div>
                
            </div>
            
            
            
            
           <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
              
                
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