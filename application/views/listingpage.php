        <div class="clearfix"></div>
        
        <!--List page selection part strat here -->
        <div id="search-panel" class="search-bg">
            <div class="container">		  		 


                    <div class="searchpagecontrols">
                        <form role="form">		
                            <div>
                                <div class="clearfix">
                                    <div>
                                        <div class="form-group" style="margin-bottom: 0;">									   
                                            <div id="mainSearchbox" class="searchcontrols">		



                                                        <div class="pull-left hidden-xs hidden-sm">		

                                                            <div class="btn-group">
                                                              <button type="button" class="btn dropdown-toggle btn-info pg-btn-custom pg-btn-border " data-toggle="dropdown">Search <span id="searchToggle">All Types</span> <span class="caret"></span></button>							
                                                                <ul class="dropdown-menu" role="menu">
                                                                    <li><a href="#" id="type_0">All Types</a></li>
                                                                    <li><a href="#" id="type_9">Business</a></li>
                                                                    <li><a href="#" id="type_1">Commercial Property</a></li>
                                                                    <li><a href="#" id="type_2">Condominium</a></li>
                                                                    <li><a href="#" id="type_3">Cottage</a></li>
                                                                    <li><a href="#" id="type_4">Single Family Home</a></li>
                                                                    <li><a href="#" id="type_5">Farm or Acreage with dwelling</a></li>
                                                                    <li><a href="#" id="type_6">Land or Acreage no dwelling</a></li>
                                                                    <li><a href="#" id="type_10">Rent to Own</a></li>
                                                                    <li><a href="#" id="type_7">Semi-Detached House</a></li>
                                                                    <li><a href="#" id="type_8">Townhouse</a></li>	    					    
                                                                </ul>													

                                                                <input autocomplete="off" class="searchpage-textbox searchtextboxwidth ui-autocomplete-input" id="search-keyword" placeholder="Search by city, town or Sign Number" value="toronto" type="text"><span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>											
                                                                <div class="btn-holder">
                                                                    <button type="button" class="btn searchpage-button" id="submitGridSearch"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                                    <a class="white-text" data-toggle="collapse" href="#extendedSearchOptions" aria-expanded="false" aria-controls="extendedSearchOptions" id="ex-text">Less Filters <i class="caret caret-reversed"></i></a>
                                                                </div>												
                                                            </div>

                                                        </div>		




                                                    <div id="searchbox-mini" class="visible-xs visible-sm">

                                                        <div class="input-group">
                                                          <input autocomplete="off" class="form-control searchbox-mini ui-autocomplete-input" name="coreSearch" value="" placeholder="Location or Sign Number" id="coreSearchMini" type="text"><span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>
                                                          <span class="input-group-btn">
                                                            <button class="btn btn-primary btn-mini" type="button" id="coreSearchButtonMini"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                                                          </span>
                                                        </div><!-- /input-group -->




                                                            <div class="text-center padding-top-25 padding-bottom-25">
                                                                                                                            <button type="button" class="btn btn-white-search" id="toggleGridSearchMini"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Grid View</button>
                                                                    <button type="button" class="btn btn-green-search" id="submitMapSearchMini"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Map View</button>


                                                                    <div class="input-group padding-top-25">
                                                                        <a class="white-text" data-toggle="collapse" href="#extendedSearchOptions" aria-expanded="false" aria-controls="extendedSearchOptions" id="ex-text">More Filters <i class="caret"></i></a>
                                                                    </div> 

                                                            </div>



                                                    </div>









                                                        <div class="pull-right hidden-xs hidden-sm">

                                                             <div class="btn-group">

                                                                                                                    <button type="button" class="btn btn-white-search" id="toggleGridSearch"><span class="glyphicon glyphicon-th" aria-hidden="true"></span> Grid View</button>
                                                                <button type="button" class="btn btn-green-search" id="submitMapSearch"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> Map View</button>
                                                                <button type="button" class="btn btn-green-search hidden-xs" id="submitCalendarSearch"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Open House</button>
                                                                                                                 </div>		

                                                            </div>



                                                            <div class="col-md-6 col-md-offset-1 hidden-sm hidden-xs" id="refine-search"><img src="<?php echo base_url(); ?>images/refine.png"></div>

                                                </div>

                                            </div>									
                                        </div>
                                    </div>							
                                </div>	
                                </form>
                            <div class="clear"></div>
                        </div>


                    <div style="height: auto;" class="collapse in" id="extendedSearchOptions">

                            <form class="form-inline">


                                        <div class="form-group">
                                            <label for="">What's your Price Range?</label><br>
                                            <select name="minimum_range">
                                                <option value="1000" selected="selected">No Minimum</option>										
                                                <option value="10000">$10,000</option>
                                                <option value="20000">$20,000</option>
                                                <option value="30000">$30,000</option>
                                                <option value="50000">$50,000</option>
                                                <option value="100000">$100,000</option>
                                                <option value="130000">$130,000</option>
                                                <option value="150000">$150,000</option>
                                                <option value="200000">$200,000</option>
                                                <option value="250000">$250,000</option>
                                                <option value="300000">$300,000</option>
                                                <option value="350000">$350,000</option>
                                                <option value="400000">$400,000</option>
                                                <option value="450000">$450,000</option>
                                                <option value="500000">$500,000</option>
                                                <option value="550000">$550,000</option>
                                                <option value="600000">$600,000</option>
                                                <option value="650000">$650,000</option>
                                                <option value="700000">$700,000</option>
                                                <option value="750000">$750,000</option>
                                                <option value="800000">$800,000</option>
                                                <option value="850000">$850,000</option>
                                                <option value="900000">$900,000</option>
                                                <option value="950000">$950,000</option>
                                                <option value="1000000">$1M</option>										
                                                <option value="1500000">$1.5M</option>
                                                <option value="2000000">$2M</option>
                                                <option value="3000000">$3M</option>
                                                <option value="4000000">$4M</option>
                                                <option value="5000000">$5M</option>
                                                <option value="10000000">$10M</option>
                                                <option value="20000000">$20M</option>
                                            </select>
                                            
                                            <select name="maximum_range">
                                                <option value="100000000000000">No Maximum</option>														
                                                <option value="10000">$10,000</option>
                                                <option value="20000">$20,000</option>
                                                <option value="30000">$30,000</option>
                                                <option value="50000">$50,000</option>
                                                <option value="100000">$100,000</option>
                                                <option value="130000">$130,000</option>
                                                <option value="150000">$150,000</option>
                                                <option value="200000">$200,000</option>
                                                <option value="250000">$250,000</option>
                                                <option value="300000">$300,000</option>
                                                <option value="350000">$350,000</option>
                                                <option value="400000">$400,000</option>
                                                <option value="450000">$450,000</option>
                                                <option value="500000">$500,000</option>
                                                <option value="550000">$550,000</option>
                                                <option value="600000">$600,000</option>
                                                <option value="650000">$650,000</option>
                                                <option value="700000">$700,000</option>
                                                <option value="750000">$750,000</option>
                                                <option value="800000">$800,000</option>
                                                <option value="850000">$850,000</option>
                                                <option value="900000">$900,000</option>
                                                <option value="950000">$950,000</option>
                                                <option value="1000000">$1M</option>										      
                                                <option value="1500000">$1.5M</option>
                                                <option value="2000000">$2M</option>
                                                <option value="3000000">$3M</option>
                                                <option value="4000000">$4M</option>
                                                <option value="5000000">$5M</option>
                                                <option value="10000000">$10M</option>
                                                <option value="20000000">$20M</option>
                                                
                                            </select>	
                                            
                                        </div><!-- /.col -->

                                        <div class="form-group">
                                            <label for="">How Many Bedrooms &amp; Bathrooms?</label><br>
                                            <select data-width="150px" name="bedrooms">								    	
                                                <option value="" selected="selected">Bedrooms</option>
                                                <option value="1">1+ beds</option>
                                                <option value="2">2+ beds</option>
                                                <option value="3">3+ beds</option>
                                                <option value="4">4+ beds</option>
                                                <option value="5">5+ beds</option>										
                                            </select>
                                            

                                            <select data-width="150px" name="bathrooms">
                                                <option value="" selected="selected">Bathrooms</option>
                                                <option value="1">1+ baths</option>
                                                <option value="2">2+ baths</option>
                                                <option value="3">3+ baths</option>
                                                <option value="4">4+ baths</option>
                                                <option value="5">5+ baths</option>
                                            </select>

                                        </div>



                                        <div class="form-group">
                                            <label for="">Increase Search Area <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="top" title="Expand your search beyond the city limit"></span></label><br>
                                            <select data-width="155px" name="area">
                                              <option value="10">Commute Distance</option>
                                              <option value="0">Nothing</option>
                                              <option value="5">5km</option>
                                              <option value="10" selected="selected">10km</option>
                                              <option value="15">15km</option>
                                              <option value="25">25km</option>
                                              <option value="50">50km</option>
                                              <option value="75">75km</option>
                                              <option value="100">100km</option>
                                            </select>

                                        </div>




                                        <div class="form-group">
                                            <label for="">Property Age</label><br>
                                            <select data-width="175px" name="property_age">
                                                <option value="" selected="selected">Show All</option>
                                                <option value="1">0-1 (New Build)</option>
                                                <option value="2">1-2</option>
                                                <option value="5">2-5</option>
                                                <option value="10">5-10</option>
                                                <option value="20">10-20</option>
                                                <option value="50">20-50</option>
                                                <option value="60">50+</option>
                                            </select>
                                        </div>
													</br>
                                        <div class="form-group">
                                            <label for="">Property Use</label><br>
                                                <select data-width="175px" name="property_use">	
												 <option value="" selected="selected">Show All</option>
                                                   <?php 
													$this->common_model->order_column = 'property_type_id';
													$this->common_model->table_name = 'tbl_property_type';
													$query=$this->common_model->select_all();
													
													foreach ($query->result() as $row)
													{
												?>
													<option value="<?php echo $row->property_type_id;?>"><?php echo $row->property_type_name;?></option>     
												<?php
													
													}
												?>
                                                </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="">Interior Options</label><br>
                                                <select data-width="200px" name="interior">
                                                 <option value="" selected="selected">Show All</option>
												<?php 
                                                    $this->common_model->order_column = 'interior_id';
                                                    $this->common_model->table_name = 'tbl_interior';
                                                    $query=$this->common_model->select_all();
                                                    
                                                    foreach ($query->result() as $row)
                                                    {
                                                ?>
                                                    <option value="<?php echo $row->interior_id;?>"><?php echo $row->interior_name;?></option>     
                                                <?php
                                                    
                                                    }
                                                ?> 
                                                </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Exterior Options</label><br>
                                            <select data-width="200px" name="exterior">
                                             <option value="" selected="selected">Show All</option>
                                            
												<?php 
                                                    $this->common_model->order_column = 'exterior_id';
                                                    $this->common_model->table_name = 'tbl_exterior';
                                                    $query=$this->common_model->select_all();
                                                    
                                                    foreach ($query->result() as $row)
                                                    {
                                                ?>
                                                    <option value="<?php echo $row->exterior_id;?>"><?php echo $row->exterior_name;?></option>     
                                                <?php
                                                    
                                                    }
                                                ?>  

                                            </select>

                                        </div>
                                        <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                <button type="submit" class="btn btn-green btn-xs" href="#" id="reSubmitYourSearch"><i class="fa fa-search"></i> Refine Your Search</button>
                                            </div>


                                            
                                            <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                <a class="btn btn-clear-filters btn-xs" href=""><i class="fa fa-times"></i>Clear Filters</a>
                                            </div>
                                        </form>	
                                    </div>
                                </div>
        </div>
        <!-- List page selection part end here -->
		
		<div class="row no-margin">
			<div class="container">
				<div class="row no-margin">
					<p class="region_name pull-left"><a href="#"><?php $state_name=$this->input->post('coreSearch'); echo $state_name;?></a></p>
					<p class="subregion_name pull-left">&nbsp; >> &nbsp;Sub Region</p>
				</div>
			
		
		
		<div class="col-xs-12 col-sm-12 hidden-xs hidden-sm">
							<div class="well well-sm">
								<h4>Surrounding Communities</h4>
									<ul class="list-inline community">
                                    
                                    <?php 
									$state_id=$this->input->post('coreSearchID');
									$this->common_model->order_column = 'area_id';
									$this->common_model->table_name = 'tbl_area';
									$this->common_model->where = array('state_id'=>$state_id);
									$query=$this->common_model->select_all();
							
								foreach ($query->result() as $row)
								{
								?>
									<li class="town">	
										<a href="<?php echo $row->area_id;?>"><?php echo $row->area_name;?></a>
									</li>
									
                                        
								   
									<?php 
									}
									?>	
                                     <li class="town">
										<a >St. Clements</a>
										<input id="cityProfileProvince_185" value="ON" type="hidden">
									</li>
								</ul>
							</div>	
		</div>
		
		
		<div id="sort" style="margin-left: 95px; margin-right:0px;" class="row  hidden-xs">
			<div class="margin-top-10">
					<ul class="list-inline">
						<li>Sort by: </li>
						<li><a class="current" id="sortByPrice" href="#">Price</a></li>
						<li><a id="sortByViews" href="#">Popularity</a></li>
						<li>Include Sold: </li>
						<li> <a class="current" id="showSold" href="#">Yes</a></li>
						<li><a id="dontShowSold" href="#">No</a></li>
						  	
						<li>Results <span>1 - 12</span> of
						<span>30</span> 
						  	
					    </li>
							
		
				</ul>
			</div>
		</div>
		</div><!-- container-->
		</div>
		
		<div class="row no-margin">
			<div class="container no-padding">
				<div class="row no-margin">
					<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
							<div class="row no-margin">
                            <?php 
								$state_id=$this->input->post('coreSearchID');
								$this->common_model->order_column = 'property_id';
								$this->common_model->table_name = 'tbl_property';
								$this->common_model->where = array('states_id'=>$state_id);
								$query=$this->common_model->select_all();
							
								foreach ($query->result() as $row)
								{
							?>
                            
								<div class="col-sm-12 col-md-4">
                                    <div class="item">
                                            <span class="label label-primary most_popular">Most Popular</span>
                                                <a href="<?php echo base_url(); ?>en/postpage?id=<?php echo $row->property_id;?>"><img class="prop-img" src="<?php echo base_url(); ?>/images/property/<?php echo $row->feature_image;?>"></a>
                                                <div class="info"> 
                                                    <h2><a href="<?php echo base_url(); ?>en/postpage?id=<?php echo $row->property_id;?>">$<?php echo $row->price;?></a></h2>
                                                    <div class="price"><?php echo $row->property_address;?></div> 
                                                    <div class="bedsbaths"><strong><?php echo $row->bedroom_no;?></strong> beds <strong><?php echo $row->bathroom_no;?></strong> baths</div>

                                                    <div class="info-listing">

                                                        <span class="badge-row">		                             
                                                            <ul class="list-inline badges pull-left">				                             	

                                                                <li><img src="<?php echo base_url(); ?>/images/icon_16_commuter_on.png"></li>
                                                                <li><img src="<?php echo base_url(); ?>/images/icon_16_new_on.png"></li>
                                                            </ul>		                            
                                                        </span>

                                                        <span class="full-details pull-right"><a href="<?php echo base_url(); ?>en/postpage?id=<?php echo $row->property_id;?>">Full Details</a></span>
                                                    </div>

                                                        <div class="clearfix"></div>

                                                    </d	iv>
                                                </div>
                                            </div>	
                                        </div>	
                                        <?php
                                       }
                                      ?>
		
									  
									</div> <!-- row end-->
					        </div>
					
					</div> <!-- col-8 end-->
					
					<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
					
					</div>

                    <nav>
                      <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                      </ul>
                    </nav>

				    </div>
			    </div>

		    </div>
		</div>
		
		
		
		