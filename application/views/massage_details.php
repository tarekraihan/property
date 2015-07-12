
        
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
                                <h2 class="title">Your Message</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                <?php
					$this->common_model->order_column = 'offer_id';
					$this->common_model->table_name = 'tbl_make_an_offer';
					$this->common_model->where=array('owner_id'=>$this->session->userdata('customer_id'));
					$query=$this->common_model->select_all();
					$row = $query->row(); 
				
				?>
                <div class="row no-margin general">
						<div class="massage_details">
							<p>Subject: <?php echo $row->message_subject;?></p>
                            <p>Property Sign :  <?php echo $row->property_sign;?></p>
                            <p>Property Price : <?php echo $row->price;?></p>
                            <p>Offer Closing : <?php echo $row->closing_date;?></p>
                            <p>Purchaser Name :<?php echo $row->purchaser_name;?></p>
                            <p> Purchaser Email : <?php echo $row->aditional;?></p>
                            
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