		 
		<link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery-ui.css">

  		<script src="<?php echo base_url(); ?>js/jquery-ui.js"></script>  
		 
		 <?php
			$this->common_model->order_column = 'states_id';
			$this->common_model->table_name = 'tbl_states`';
			$query=$this->common_model->select_all();
							
			?>
		 
		 
		 <script>
			 $(function() {
			 var projects = [
			 <?php
			  foreach ($query->result() as $row){?>
				{
				  value: "<?php echo $row->states_id;?>",
				  label: "<?php echo $row->state_name;?>",
			   },
			  <?php }
			 ?>
			  ];
			 $( "#searchcase" ).autocomplete({
			 minLength: 0,
			 source: projects,
			 focus: function( event, ui ) {
				$( "#searchcase" ).val( ui.item.label );
				return false;
				},
			 select: function( event, ui ) {
				$( "#searchcase" ).val( ui.item.label );
				$( "#searchid" ).val( ui.item.value );
				return false;
			 }
			 })
			 .data( "ui-autocomplete" )._renderItem = function( ul, item ) {
			 return $( "<li>" )
			 .append( "<a>" + item.label + "</a>" )
			 .appendTo( ul );
			 };
			 }); 
		 
		</script>
				
        
        <div class="row no-margin">
			
			<div class="front_page_search_section">
				<div class="container">
					<div class="row no-margin clearfix">
						<div class="col-md-12 column">
							<div class="tagline">
								<span style="padding-left: 5px;">The Future of Real Estate</span>
							</div>
						</div>
						<div class="col-md-12 column text-center">
							<div class="subtagline">
								<span style="padding-left: 5px;">Helping buyers and sellers avoid the high cost of a middleman</span>
							</div>
						</div>
					</div>
		
		
					<div class="hidden-xs hidden-sm">
						<div class="row no-margin clearfix">
							<div class="col-md-12 column">
							
							
								<div id="searchbox" class="searchcontrols">			  			
									<div class="btn-group pull-left">
                                    <form action="<?php echo base_url();?>en/listingpage/" method="post">
									  <button type="button" class="btn dropdown-toggle pg-btn" data-toggle="dropdown"><span id="searchToggle">Find a Home</span> <span class="caret"></span></button>
									  <ul class="dropdown-menu" role="menu">
										<li><a href="#" id="menuBuyHouse">Find a Home</a></li>
										<li><a href="#" id="menuSellHouse">Sell a Home</a></li>
										<li><a href="#" id="menuContactOffice">Contact an Office</a></li>
										<li><a href="/vacation-rentals" id="">Vacation Rentals</a></li>				    
									  </ul>
									</div>	
                                    
                                    
									 <input type="hidden" name="coreSearchID" id="searchid" />
									<input class="search-textbox ui-autocomplete-input" name="coreSearch" value="" placeholder="Search by Location or Sign Number" id="searchcase" type="text"><span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>
									<div class="btn-holder"><button type="submit" class="btn pg-button btn-search pgbutton-30" id="coreSearchButton"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button></div>	
                                    </form>					 
								</div>
								
								
								
							</div>
						</div>
					</div>
		  
					<div class="text-center visible-xs visible-sm">
						<div class="row no-margin clearfix">
							<div class="col-md-12 column">
							<div id="searchbox-mini">
								
									<div class="input-group">
									  <input autocomplete="off" class="form-control searchbox-mini ui-autocomplete-input" name="coreSearch" value="" placeholder="Location or Sign Number" id="coreSearchMini" type="text"><span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>
									  <span class="input-group-btn">
										<button class="btn btn-primary btn-mini" type="button" id="coreSearchButtonMini"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
									  </span>
									</div><!-- /input-group -->
								</div>
							</div>
						</div>
					</div>
		  
					<input name="searchMethod" id="searchMethod" value="buy" type="hidden">
		
		
				</div>
			</div>
		
		</div>
		
		<!--
		<div class="row no-margin">
			<div class="home_page_listing_carousel">
			     <div class="item">
                    <ul id="content-slider" class="content-slider">
                    <?php 
						$this->common_model->order_column="property_id";
						$this->common_model->table_name="tbl_property";
						$this->common_model->where=array('feature_post'=>1);
						$query=$this->common_model->select_all();
						
						foreach($query->result() as $row)
						{
					
					?>
                    
                    
                        <li>
							<img width="180" height="140" class="pull-left slider_img" src="<?php echo base_url();?>images/property/<?php echo $row->image_name;?>"/>
                            <h3>$ <?php echo $row->price;?></h3>
							<p><?php echo $row->property_address;?></p>
                        </li>
                        
                        <?php
						}
						?>
						
						
                    </ul>
                </div>
			</div>
		</div>
		
		-->
        
        
		<div class="icon_homepage_section_01">
			<div class="container-fluid no-margin no-padding">
				<div class="row no-margin section_01_title">
					<p class="big_title">why choose Vista Maison?</p>
					<p style="padding:0px 18%; text-align:center; font-size: 16px;" class="caption-text">We innovate real estate,we help thousands sell their homes with our customizable packages. Save the commission (an average of $18,000) without compromising the results.</p>
                </div>
                
				<div class="row no-margin section_01_bg">
                    
                    <div class="section_01_content">
                    
                        <div class="col-lg-4 col-md-4 col-sm-6 col-md-4">
                            <h3 class="thumbline_subtitle">Tools & Education</h3>

                            <span class="featured_iten_icon glyphicon glyphicon-book" aria-hidden="true"></span>

                            <div class="thumbnail cusrom_thumbnail">

                                 <img src="<?php echo base_url(); ?>/images/icon1.png" alt="Icon">
                                  <div class="caption">

                                    <p>re-engineered almost everything you thought you knew about real estate - not only making it different but                                        also making it better.</p>

                                  </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-md-4">

                             <h3 class="thumbline_subtitle">Save Thousands, Be Seen By Millions</h3>

                            <span class="featured_iten_icon glyphicon glyphicon-map-marker" aria-hidden="true"></span>

                            <div class="thumbnail cusrom_thumbnail">
                                  <img src="http://lorempixel.com/300/200/city/" alt="...">
                                  <div class="caption">

                                    <p>We provide sellers with everything they need to connect directly with buyers - making them more money than                                        if they use an agent.</p>

                                  </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-md-4">
                             <h3 class="thumbline_subtitle">peace of mind and thecnology </h3>

                            <span class="featured_iten_icon glyphicon glyphicon-ok" aria-hidden="true"></span>
                            <div class="thumbnail cusrom_thumbnail">
                                  <img src="http://lorempixel.com/300/200/city/" alt="...">
                                  <div class="caption">

                                    <p>Our system leverages an entire team of specialists. This makes selling your property more efficient and                                          effective than using an agent could ever be.</p>

                                  </div>
                            </div>
                        </div>          
                    
                    </div> <!-- section_01_bg end -->
				</div>  <!-- section_01_conetnt end -->
				
			</div>
		</div>
            
            
        <!-- testimonial carousel -->
        
        <div class="testimonial-bg-full hidden-xs ">
			<div id="carouselTestimonials" class="carousel slide" data-ride="carousel">
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">				   
					  
							    <div class="item active text-center" style="height: 600px; padding-top: 200px;">
							     <div class="row no-margin"><div class="col-sm-8 col-sm-offset-2"><span class="quote">"Nous les remercions de leur bon service."</span></div></div>
							     <div class="row no-margin" style="margin-top: 100px;"><span class="quote-name"><img src="<?php echo base_url(); ?>/images/03.png" class="quote-image"/></span></div>
							     <div class="row no-margin" style="padding-top: 30px;"><span class="quote-name">Rechelle Bourque</span></div>	     
							     <div class="row no-margin" style="padding-top: 10px; display: none;"><span class="quote-name"><button class="btn btn-primary btn-inverse">Customer Profiles</button></span></div>
							    </div>
							
				   
				    			<div class="item text-center" style="height: 600px; padding-top: 200px;">
							     <div class="row no-margin"><div class="col-sm-8 col-sm-offset-2"><span class="quote">"Ils ont été d’une grande aide."</span></div></div>
							     <div class="row no-margin" style="margin-top: 100px;"><span class="quote-name"><img src="<?php echo base_url(); ?>/images/o2.jpg" class="quote-image"/></span></div>
							     <div class="row no-margin" style="padding-top: 30px;"><span class="quote-name">Dana Derbowka</span></div>	     
							     <div class="row no-margin" style="padding-top: 10px; display: none;"><span class="quote-name"><button class="btn btn-primary btn-inverse">Customer Profiles</button></span></div>
							    </div>
				   
				   
				   				<div class="item text-center" style="height: 600px; padding-top: 200px;">
							     <div class="row no-margin"><div class="col-sm-8 col-sm-offset-2"><span class="quote">"c’est simple et efficace avec vista Maison "</span></div></div>
							     <div class="row no-margin" style="margin-top: 100px;"><span class="quote-name"><img src="<?php echo base_url(); ?>/images/03.jpg" class="quote-image"/></span></div>
							     <div class="row no-margin" style="padding-top: 30px;"><span class="quote-name">Guillaume Thibeault</span></div>	     
							     <div class="row no-margin" style="padding-top: 10px; display: none;"><span class="quote-name"><button class="btn btn-primary btn-inverse">Customer Profiles</button></span></div>
							    </div>
				   
				   				
				  </div>
				
				  <!-- Controls -->
				  <a class="left carousel-control" href="#carouselTestimonials" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#carouselTestimonials" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				  </a>

				</div>
			</div>
            
            <!-- section call and quote strats -->
            
            