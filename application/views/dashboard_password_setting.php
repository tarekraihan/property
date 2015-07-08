<?php
/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Porperty Guys                    *
 * Script : To Update Password                *
 * Start Date :   05-067-2015                  *
 * Date : 05-067-2015                           *
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
}

//------------------image-----
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
              <li role="presentation"><a href="<?php echo base_url(); ?>en/dashboard_mess/">Messages</a></li>
              
              <li role="presentation" class="active"><a href="<?php echo base_url(); ?>en/profile/">Profile</a></li>
              
            </ul>
        </div>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                            <h2 class="title">Password</h2>
							
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">
                    
                    <form novalidate id="frmPeoplePerson" class="default" method="post" action="<?php echo base_url();?>en/dashboard_password_setting/">
								 <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
					}
				   ?> 
								<input id="userId" name="userId" value="<?php echo $result['customer_id'];?>" type="hidden">
                                
								<p class="squeeze content">We promise to protect the contact information you have entrusted to us and to only use it for the purposes for which you provided it.  We've written a <a href="">Privacy Policy</a> that outlines our commitment to your privacy.</p>
								
								<div class="input secpos">
									<label for="name_last">New Password:</label>
									<div class="mount">
										<div><input name="password_input" id="password_input" type="password" required></div>
										<div class="caption"><span class="required"><?php echo form_error('password_input');?></span></div>
                                        <div class="caption"><span class="required">Required</span></div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="input secpos">
									<label for="name_last">Password Again:</label>
									<div class="mount">
										<div><input name="password_confirm" id="password_confirm" type="password" required></div>
										<div class="caption"><span class="required"><?php echo form_error('password_confirm');?></span></div>
                                        <div class="caption"><span class="required">Required</span></div>
									</div>
									<div class="clear"></div>
								</div>
								
								<div class="submit">
									<div><button type="submit" class="btn btn-success btn-sm custom_btn">Update</button></div>
								</div>
								
							</form>
                    
                </div>
                
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
				            <li off=""><a href="<?php echo base_url(); ?>en/alertpage">Alert Settings</a></li>								
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