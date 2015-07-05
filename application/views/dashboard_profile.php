
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
                                <h2 class="title">Person Profile</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>General</h4>
                    </div>
                    
                    <?php
                    	$email=$this->session->userdata('email_address');
						 $this->common_model->order_column = 'customer_id';
                                $this->common_model->table_name = 'customer_profile';
								$this->common_model->where=array('email_address'=>$email);
                                $query=$this->common_model->select_all();
								$row=$query->row();
					?>
                    <div class="pull-right">
                        <a href="<?php echo base_url();?>en/dashboard_general_setting/?customer_id=<?php echo $this->session->userdata('customer_id'); ?> " class="btn btn-success btn-sm custom_btn">Edit</a>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table preview full" cellpadding="0" cellspacing="0">
                        <tbody>
                                        <tr class="odd">
                                            <td class="category">Status:</td>
                                            <td class="value">Active</td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Access Level:</td>
                                            <td class="value">Member</td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="category">First Name:</td>
                                            <td class="value"><?php echo $row->first_name;?></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Last Name:</td>
                                            <td class="value"><?php echo $row->last_name;?></td>
                                        </tr>
                                        <tr class="odd">
                                            <td class="category">Postal Code/Zip:</td>
                                            <td class="value"><?php echo $row->zip_code;?></td>
                                        </tr>
                                        <tr class="even">
                                            <td class="category">Experience:</td>
                                            <td class="value">Private Sale Virgin</td>
                                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="below"></div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Contact Infromation</h4>
                    </div>
                    
                    <div class="pull-right">
                       <a href="<?php echo base_url();?>en/dashboard_Contact_Information_Settings/?customer_id=<?php echo $this->session->userdata('customer_id'); ?> " class="btn btn-success btn-sm custom_btn">Edit</a>
                    </div>
                </div>
                
                <div class="table-responsive">
                    <table class="table preview full" cellpadding="0" cellspacing="0">
                        <tbody>
									<tr class="odd">
										<td class="category">Email Address:</td>
										<td class="value"><?php echo $row->email_address;?></td>
									</tr>
									<tr class="even">
										<td class="category">Home Phone:</td>
										<td class="value"><?php echo $row->area_code;?>-<?php echo $row->phone_start;?>-<?php echo $row->phone_end;?></td>
									</tr>
									<tr class="odd">
										<td class="category">Mobile Phone:</td>
										<td class="value"><?php echo $row->mobile_no;?></td>
									</tr>
				        </tbody>
                    </table>
                </div>
                <div class="below"></div>
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Password</h4>
                    </div>
                    
                    <div class="pull-right">
                        <a href="<?php echo base_url();?>en/dashboard_password_setting/?customer_id=<?php echo $this->session->userdata('customer_id'); ?> " class="btn btn-success btn-sm custom_btn">Edit</a>
                    </div>
                </div>
                <p class="squeeze">Change the password for this account by clicking <strong>'Edit'</strong> in the top right hand corner of this box.</p>
                <div class="below"></div>
                
                
                
                <div class="row no-margin general">
                    <div class="pull-left">
                        <h4>Survey</h4>
                    </div>
                    
                    <div class="pull-right">
                        <a href="<?php echo base_url();?>en/dashboard_demographic_survey/" class="btn btn-success btn-sm custom_btn">Edit</a>
                    </div>
                </div>
                <p class="squeeze">Do you have an extra ten seconds? We have a five question survey that it would be helpful if you filled out. We'd really appreciate it. Click 'Edit' to do us a solid.</p>
                <div class="below"></div>
                
            </div>
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            
                <div class="box-rounded">
                    <div class="box-shadow-inner">
                        <div class="personpic">
                        		<img class="profile_image" src="<?php echo base_url(); ?>images/member/<?php echo $row->image_name;?>">
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
                        <ul class="help">
								<li><a href="<?php echo base_url();?>en/help_change_email/">How do I change my email address?</a></li>
								<li><a href="<?php echo base_url();?>en/help_change_profile_picture/">How do I change my profile picture?</a></li>
								<li><a href="<?php echo base_url();?>en/help_delete_account/">To how do I delete my Vista Maisonaccount?</a></li>
							</ul>
								
							<div><a href="<?php echo base_url();?>en/help/" class="link">More Help »</a></div>
                    </div>
                </div>
            
            </div>
        </div>
    </div>