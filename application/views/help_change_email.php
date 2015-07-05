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
                                            <select>
                                                <option value="0" selected="selected">No Minimum</option>										
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
                                            
                                            <select>
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
                                            <select data-width="150px">								    	
                                                <option value="0" selected="selected">Bedrooms</option>
                                                <option value="1">1+ beds</option>
                                                <option value="2">2+ beds</option>
                                                <option value="3">3+ beds</option>
                                                <option value="4">4+ beds</option>
                                                <option value="5">5+ beds</option>										
                                            </select>
                                            

                                            <select data-width="150px">
                                                <option value="0" selected="selected">Bathrooms</option>
                                                <option value="1">1+ baths</option>
                                                <option value="2">2+ baths</option>
                                                <option value="3">3+ baths</option>
                                                <option value="4">4+ baths</option>
                                                <option value="5">5+ baths</option>
                                            </select>

                                        </div>



                                        <div class="form-group">
                                            <label for="">Increase Search Area <span class="glyphicon glyphicon-question-sign" data-toggle="tooltip" data-placement="top" title="Expand your search beyond the city limit"></span></label><br>
                                            <select data-width="155px">
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
                                            <select data-width="175px">
                                                <option value="0" selected="selected">Show All</option>
                                                <option value="1">0-1 (New Build)</option>
                                                <option value="2">1-2</option>
                                                <option value="3">2-5</option>
                                                <option value="4">5-10</option>
                                                <option value="5">10-20</option>
                                                <option value="6">20-50</option>
                                                <option value="7">50+</option>
                                            </select>
                                        </div>
													</br>
                                        <div class="form-group">
                                            <label for="">Property Use</label><br>
                                                <select data-width="175px">	
	
                                                    <option value="3">Residential</option>
                                                    <option value="1">Recreational</option>
                                                    <option value="2">Commercial</option>
                                                    <option value="4">Agricultural</option>
                                                </select>
                                        </div>


                                        <div class="form-group">
                                            <label for="">Interior Options</label><br>
                                                <select data-width="200px">

                                                    <option value="120">Alternative Heating</option>
                                                    <option value="756">Propane Heating</option>
                                                    <option value="121">Electric Heating</option>
                                                    <option value="125">Solar Heating</option>
                                                    <option value="122">Natural Gas Heating</option>
                                                    <option value="126">Wind Powered</option>
                                                    <option value="123">Oil Powered</option>
                                                    <option value="127">Wood Powered</option>
                                                    <option value="124">Pellets</option>
                                                    <option value="390">Air Conditioning</option>
                                                    <option value="397">In-Law Suite</option>
                                                    <option value="391">Air Exchange</option>
                                                    <option value="398">Jet Tub</option>
                                                    <option value="395">Fireplace</option>
                                                </select>

                                        </div>

                                        <div class="form-group">
                                            <label for="">Exterior Options</label><br>
                                            <select data-width="200px">

                                                            <option value="361">Deck or Patio</option>
                                                            <option value="370">Pool</option>
                                                            <option value="364">Fenced Yard</option>
                                                            <option value="365">Garden</option>
                                                            <option value="373">Water Front</option>
                                                            <option value="366">Hot Tub</option>
                                                            <option value="374">Water View</option>																	
                                                            <option value="375">Wharf or Dock</option>

                                                    </select>

                                        </div>
                                        <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                <a class="btn btn-green btn-xs" href="#" id="reSubmitYourSearch"><i class="fa fa-search"></i> Refine Your Search</a>
                                            </div>


                                            <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                                                        <a href="/start?c=%2Fsearch%3Fk%3Dtoronto" type="button" class="btn btn-clear-filters btn-xs"><span class="fa fa-lock" aria-hidden="true"></span> Login to save search</a>
                                                                                </div>

                                            <div class="form-group">
                                                <label for="">&nbsp;</label><br>
                                                <a class="btn btn-clear-filters btn-xs" href="/search?k=toronto"><i class="fa fa-times"></i>Clear Filters</a>
                                            </div>
                                        </form>	
                                    </div>
                                </div>
        </div>
        <!--List page selection part end here -->
		
		<!--main body part starts-->
		<div class="row no-margin">
			<div class="container">
					<h1 class="black">Help Knowledge Base</h1>	
				
				<div id="left">
							<ol class="breadcrumb">
							  <li><a href="/help/">Help Topics</a></li>
							  <li><a href="/help/category/id/1">Account Profile</a></li>
							  <li class="active">How do I change my email address?</li>
							</ol>
							
					<div class="col-md-6">
							<h3 class="drop black">How do I change my email address?</h3>
							
							<div id="helpdoc">
							<!-- START Help Insert -->
								<p>Sorry, we don't allow changes to an account's email address.</p>							<!-- END Help Insert -->
							</div>

						</div>
					<div class="col-md-6">
						<h3 class="drop black">Popular Questions</h3>
							<ul class="faq">
								<li><a href="<?php echo base_url();?>en/help_change_email/">How do I change my email address?</a></li>
								<li><a href="<?php echo base_url();?>en/help_change_profile_picture/">How do I change my profile picture?</a></li>
								<li><a href="<?php echo base_url();?>en/help_delete_account/">How do I delete my Vista Maisonaccount account?</a></li>
								<li><a href="<?php echo base_url();?>en/help_bookmark_a_listing/">How do I bookmark a listing?</a></li>
							</ul>
							
						
											
					</div>
				</div>
			</div>
		</div><!-- row-->
		
		<!--main body part end-->
		
		
		