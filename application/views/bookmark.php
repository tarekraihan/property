
        
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
                                <h2 class="title">Bookmark</h2>
                        </div>
                    </div>
                    <div class="below"></div>
                </div>
                
                <div class="row no-margin">   
                    <div class="buffer">
						<form id="searchForm" class="default" method="get" action="/launch-people/people-bookmarks">
							<input id="sortBy" name="sb" value="v" type="hidden">
							<input id="includeSold" name="is" value="y" type="hidden">
							<input id="totalCount" name="tc" value="1" type="hidden">
							 <input id="goToPage" name="gtp" type="hidden">
							<input id="clearBookmark" name="clearBookmark" value="" type="hidden">
										
							<div id="sort">
								<div class="text-right" id="solds">Include Sold: <a id="sortIncludeSoldYes" href="#" class="current">Yes</a> <span>|</span> <a id="sortIncludeSoldNo" href="">No</a></div>
								<div class="text-left" id="criteria">Sort bookmarks by: <a id="sortByPrice" href="#" class="">Price</a> </div>								
								<div class="clear"></div>
							</div>
								
							</form>		
					</div>
                </div>
               
                <div class="below"></div>
				
				<div class="row no-margin">   
					<div class="">
							<ul id="inventorytop">
								<li class="results">
									Results <span>1 - 1</span> of
									<span>1</span> returned in <span>0.00</span> seconds.
								</li>
							</ul>
							<div class="clear"></div>
														
							<ul id="inventory">
									<?php 
										$customer_id=$this->session->userdata('customer_id');
										$query=$this->select_model->select_bookmark_property($customer_id);
										
										foreach ($query->result() as $row)
											{
										?>
										<li class="item" id="">
									<div class="photo"><a href="#"><img style="width:185px; height:125px;" src="<?php echo base_url();?>/images/property/<?php echo $row->feature_image; ?>"></a></div>
									<div class="tools">
										<h4 class="price_db"><a href="#">$<?php echo $row->price; ?></a></h4>
										<div class="icons">
									
											<div class="zoom"><a href="#"><span title="View this listing" class="glyphicon glyphicon-search" aria-hidden="true"></span></a></div>
											
											<div class="bookmarked"><a id="removebookmark_84527" href="#"><span title="remove Bookmark" class="glyphicon glyphicon-star text_yellow" aria-hidden="true"></span></a></div>
										
										</div>
										<div class="clear"></div>
									</div>
								
									<div class="address"><a href="#"><?php echo $row->property_address;?></a></div>
									
									
									<div class="tease">
										<div>
										<span class="sign"><a href="#">Sign  <strong><?php echo $row->sign; ?></strong></a></span> Desirable Upper Beechwood Estate Home <a href="<?php echo base_url();?>en/postpage?id=<?php echo $row->property_id;?>" class="more">More »</a></div>
									</div>
								</li>
										<?php
											}
										?>

							</ul>
							<div class="clear"></div>
						
					</div>
                </div>
               
                <div class="below"></div>
                
            </div>
		
            
            
            
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                
                <div class="box-rounded_02">
                    <div class="box-shadow-inner_02">
                        <h3 class="drop">Person Menu</h3>
                        <ul id="submenu" class="nav nav-pills nav-stacked">
                            <li><a href="<?php echo base_url(); ?>en/dashboard">Profile</a></li>
				            <li off=""><a href="<?php echo base_url(); ?>en/upload_image">Photo</a></li>	
				            <li class="current"><a href="<?php echo base_url(); ?>en/alertpage">Alert Settings</a></li>								
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
                            <li><a href="#">How do I delete my PropertyGuys.com account?</a></li>
				            <li><a href="#">How do I bookmark a listing?</a></li>	
				            <li><a href="#">What is experience level used for?</a></li>					
                        </ul>
                    </div>
                </div>
            
            </div>
        </div>
    </div>