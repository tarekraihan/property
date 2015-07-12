
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
        <?php
			
				
				
		?>
        
        <div class="row no-margin">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">   
                <div class="row no-margin">
                    <div class="focus highlight">
                        <div class="buffer">	
                                <h2 class="title">Archived Messages</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin general">
						<div class="empty">
							<ol>
                             <?php 
									$this->common_model->order_column = 'offer_id';
									$this->common_model->table_name = 'tbl_make_an_offer';
									$this->common_model->where=array('owner_id'=>$this->session->userdata('customer_id'));
									$query=$this->common_model->select_all();
									
									foreach ($query->result() as $row)
									{
								?>
								<li>
									<span><?php echo $row->message_subject;?></span>
									<span class="continue_read"><a href="<?php echo base_url();?>en/massage_details/?message_id=<?php echo $row->offer_id;?>">Continue reading</a></span>
								</li>
								<?php
									}	
								?>
								
							</ol>
						</div>
                </div>
               
                <div class="below"></div>
                
            </div>
            
            
            
            
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