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
		
		<div class="row no-margin">
			<div class="container">	


				<h1>Your privacy is important to us.</h1>
			

				<div class="col-xs-12 col-sm-8">
				<!-- Left Side Inside this-->

					
					<!-- start Content -->
									<span id="start"><br><br><br></span>
									<h3>Privacy Policy</h3>

										<p class="squeeze">This privacy policy was last updated on <strong>June 2, 2010</strong>.</p>
										<p class="squeeze"><strong>NOTE</strong>: Throughout this page, the terms "we," "us," and "our" are meant to include <strong>Vistamaison.com</strong> staff, franchisees and their team members.</p>
										<p class="squeeze">We have the utmost respect for your privacy.  We've prepared this document to make it easy to understand what we do, and do not do, with the information that we collect from you when you visit this site. Accurately informing our visitors of how we collect, protect, use and share information is incredibly important to us.</p>

											<div class="well well-sm">
												<ul class="list-inline">								
													<li class="padding-top-10"><a href="/site/privacy/#collect"><span class="glyphicon glyphicon-ok"></span> Information We Collect About You</a></li>
													<li class="padding-top-10"><a href="/site/privacy/#use"><span class="glyphicon glyphicon-ok"></span> How We Use Your Information</a></li>	
													<li class="padding-top-10"><a href="/site/privacy/#protect"><span class="glyphicon glyphicon-ok"></span> How We Protect Your Information</a></li>
													<li class="padding-top-10"><a href="/site/privacy/#share"><span class="glyphicon glyphicon-ok"></span> Who May Access Your Information</a></li>	
													<li class="padding-top-10"><a href="/site/privacy/#transitions"><span class="glyphicon glyphicon-ok"></span> Business Transitions</a></li>	
													<li class="padding-top-10"><a href="/site/privacy/#manage"><span class="glyphicon glyphicon-ok"></span> Managing Your Information</a></li>
													<li class="padding-top-10"><a href="/site/privacy/#miscellaneous"><span class="glyphicon glyphicon-ok"></span> Miscellaneous</a></li>
												</ul>
											</div>
									
									<span id="collect"><br><br><br></span>
										<h3>Information We Collect About You</h3>

										<h4 class="squeeze">Registration</h4>
										<p class="squeeze">When you register with our site you will be asked to provide an email address, your first and last name, and your postal or zip code. Optionally you may also provide a home and mobile phone number and choose to opt into our newsletter.</p>
										<p class="squeeze">This information is used to create a unique profile for you on our site.</p>
										<p class="squeeze">You will be sent a randomly generated password which you may change after logging into the site.</p>
										<p class="squeeze">To minimize the information we collect about you, we do <em>not</em> collect your home address.  A postal or zip code allows us to calculate your general location and still provide you with reasonably accurate location features.</p>

										<h4 class="squeeze">Browsing the Site</h4>
										<p class="squeeze">When you visit our web site, we collect information about your visit (e.g. session length, pages visited, network location) based on the <a href="http://en.wikipedia.org/wiki/IP_address">IP address</a> of your computer, or your unique user identifier (if you are a registered user). Our web site uses <a href="http://en.wikipedia.org/wiki/HTTP_cookie">cookies</a> and access logs to facilitate this tracking. </p>
										<p class="squeeze">This information is stored in log files. Log data is used in aggregate to analyze how people use our web site and is not used to identify the behaviour of individual visitors. </p>

										<h4 class="squeeze">Sending a Message or Offer</h4>
										<p class="squeeze">In order to send a message to a seller, or submit an offer on this site we require that a person provide a home phone number. This is to help verify users of our messaging and offer systems in order to help our sellers identify, and avoid receiving messages from users with bad intentions. We also log the unique IP address of your computer.</p>
										<p class="squeeze">Your message or offer is stored in an <a href="http://en.wikipedia.org/wiki/Encryption">encrypted</a> format on our server.  Our staff may not review a message unless the recipient reports that it has violated our <a href="/site/legal">Terms of Use</a>.</p>

										<h4 class="squeeze">Sharing a News Item, Search Results or a Property Listing</h4>
										<p class="squeeze">In order to use our share features we collect your email address and the unique IP address of your computer - we also temporarily collect the email address of the people you are sending the information to.  All email addresses are erased from the system shortly after we have successfully delivered the email.</p>
										<p class="squeeze">We use the information we collect through our share feature exclusively to monitor for abuse of the system.</p>
										<p class="squeeze">In the case of third party web sites like Facebook, Twitter and del.icio.us - we do not collect any information and simply forward you to their web sites.  Please review their privacy policies.</p>

										<h4 class="squeeze">Commenting</h4>
										<p class="squeeze">When you leave a comment on a news or blog article on our web site we log the unique IP address of your computer.  Your comment will be stored in our database.</p>

										<h4 class="squeeze">Using our Online Store</h4>
										<p class="squeeze">If you make a purchase using our online store we will log the history of the transaction, including authentication, order and transaction numbers and billing and shipping addresses.  Our online store does <strong>NOT</strong> store your credit card number or expiry dates. Our store does not request your 3-digit security or CVV2 code from the back of your card. </p>
										<p class="squeeze">When you make a purchase online using your credit card we will send you to our credit card processing partner, <a href="http://www.moneris.com/">Moneris Solutions</a>.</p>

										<h4 class="squeeze">Listing a Property</h4>
										<p class="squeeze">When you list a property on our web site we collect information about its location, condition, features and your asking price.  This information is used to help you attract potential buyers to your listing. During the listing process you will also be asked to provide contact information which will be publicly disclosed so that buyers may contact you.</p>
										<p class="squeeze">Your property features are also used for compiling aggregate data reports, which can't be used to identify your individual property.</p>

										<h4 class="squeeze">Selling a Property</h4>
										<p class="squeeze">When you sell a property listed on our web site we request that you provide us with the sale price.  This information, by law, is public information and your lawyer will file the price with your provincial government office as part of the registration process.  We appreciate you saving us the time of having to send a request to the government for it!</p>
										<p class="squeeze">We use the sale price of your property as part of our non-identifiable aggregate data sets.  We do not publicly post how much your house was sold for.</p>

										<h4 class="squeeze">Participating in a Survey, Contest, or Special Offer</h4>
										<p class="squeeze">Occasionally we may offer a survey, contest or special offer on this site.  When this happens we will clearly define what information is collected and who your information will be shared with if it is an exception to any part of this privacy policy.</p>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										
								
									<span id="use"><br><br><br></span>
										<h3>How We Use Your Information</h3>

										<h4 class="squeeze">Aggregate Information</h4>
										<p class="squeeze">We love aggregate information because it gives us great data on how visitors to our site are using it.  Aggregate information can not be used to identify an individual.  We use aggregate information in every way we possibly can, including selling it to other companies or organizations.</p>

										<h4 class="squeeze">Banning</h4>
										<p class="squeeze">If you violate our <a href="/site/legal">Terms of Use</a> we will use your information in order to put in place appropriate measures to limit or disabled your access to our site.</p>

										<h4 class="squeeze">Email Addresses and Phone Numbers</h4>
										<p class="squeeze">If you are a registered user of our site, your email address is your unique identifier, or user name, for this site.  As a registered user you have access to many features on the web site unavailable to those using the site anonymously (eg. saving searches, bookmarking properties, sending messages).</p>
										<p class="squeeze">If you have subscribed to a newsletter or for property updates we will use your email address to send you the information you have requested.</p>
										<p class="squeeze">If you have subscribed to receive messages via SMS message we will use the mobile phone number you have provided to send you the information you have requested.</p>
										<p class="squeeze">We do not disclose your address, email address, phone number or other contact details publicly or privately to any third parties without your explicit consent.</p>
										<p class="squeeze">Disclosure of your phone number is required in order to use our online offer assistant applications and you must disclose your email address in order to use our Share by Email tools.</p>    


										<h4 class="squeeze">Personally Identifiable Information</h4>
										<p class="squeeze">When you are logged into the site your first name will appear on the top left of every page. </p>
										<p class="squeeze">When you participate in any discussion on <strong>PropertyGuys.com</strong>, information you submit may be made publicly available and attributed to you. For example, when you provide a public comment on an article, both your comment and your name will be shown on the page for other visitors to see. This information may be copied or shared by other people, and unfortunately we have no control over who obtains the information or what they do with it.</p>
										<p class="squeeze">If your participation in a contest, survey, or special offer entitles you to a prize or other gift of thanks, we will use information you provided to us to fulfill your prize. Some survey information may be maintained with your profile so we can tailor the presentation of our work to you.</p>							
										<div class="toplink"><a href="#start">Back to Top</a></div>
							
									
						
								
							
									<span id="protect"><br><br><br></span>
										<h3>How We Protect Your Information</h3>

										<h4 class="squeeze">Financial Information</h4>
										<p class="squeeze">All financial information is managed by our secure third party transaction processor, <a href="http://www.moneris.com/">Moneris Solutions</a>.  Our site does not store credit card numbers or security codes.  Anytime sensitive information is entered on this site it is encrypted using <a href="http://en.wikipedia.org/wiki/HTTP_Secure">Hypertext Transfer Protocol Secure</a>. </p>

										<h4 class="squeeze">Aggregate Data</h4>
										<p class="squeeze">If a data sample is so small that disclosure thereof might potentially allow for the identification of individual data points we do not make the data available for external use.</p>

										<h4 class="squeeze">Personally Identifiable Information</h4>
										<p class="squeeze">To prevent unauthorized access, maintain data accuracy and ensure the appropriate use of information, we have put in place physical, electronic, and managerial procedures to protect the information we collect online. </p>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										
								
													
								
								
								
									<span id="share"><br><br><br></span>
										<h3>Who May Access Your Information</h3>

										<h4 class="squeeze">Advertisers</h4>
										<p class="squeeze">We do not provide personally identifiable information to advertisers and we do not share your contact information with them without your permission.  We do share aggregate information and anonymous demographic information and behaviour patterns which illustrate how our visitors use this site.</p>

										<h4 class="squeeze">Third Party Providers</h4>
										<p class="squeeze">We will not share individual-identifying personal information about you with third parties without your permission, with the exception of service providers or other organizations we contract with to fulfill services on our behalf (e.g. delivering email or mail, executing credit card transactions), or under the circumstances described in Law Enforcement and Legal Compliance below.</p>

										<h4 class="squeeze">Law Enforcement and Legal Compliance</h4>
										<p class="squeeze">We may disclose personally identifiable information if we are required to by law, or we believe that such action is necessary to (<em>a</em>) comply with the law or with legal process, (<em>b</em>) protect and defend our rights and property, (<em>c</em>) protect against misuse or unauthorized use of the <strong>PropertyGuys.com</strong> web site, or (<em>d</em>) protect the personal safety or property of our users or the public. </p>
										<p class="squeeze">If you attempt to pose as someone else, we may disclose information about you or your actions as part of an investigation into any harm done by your actions.</p>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										
								

								
										<span id="transitions"><br><br><br></span>
										<h3>Business Transitions</h3>

										<p class="squeeze">If <strong>Vistamaison.com</strong> were to merge with or acquire another entity, or sell a portion of its assets, some information regarding registered web site users, and/or web site visitors may be transferred.</p>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										

									<span id="manage"><br><br><br></span>
										<h3>Managing Your Information</h3>


										<h4 class="squeeze">Editing Your Profile</h4>
										<p class="squeeze">You may, at anytime, modify the information that we have on file for you by logging into our site and editing your user and/or property profile. </p>


										<h4 class="squeeze">Sending a Letter</h4>
										<p class="squeeze">If you would prefer you may alternatively send a letter outlining your requested changes to the address below:</p>

										<div class="squeeze"><strong>Vistamaison.com Privacy Ombudsman</strong></div>
										<div class="squeeze">1133 St. George Blvd.</div>
										<div class="squeeze">Moncton, New Brunswick  E1E 4E1</div>
										<div class="squeeze">Canada</div>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										
			<span id="miscellaneous"><br><br><br></span>
										<h3>Miscellaneous</h3>

										<p class="squeeze"><strong>Vistamaison.com</strong> is not responsible for the content or the privacy policies of web sites to which it links.</p>
										<p class="squeeze">From time to time, we may use web site visitor information for new, unanticipated uses not previously disclosed in our privacy notice. If our information practices change at some time in the future we will post the policy changes to our web site to notify you of these changes. If you are concerned about how your information is used, you should check this page periodically.</p>
										<div class="toplink"><a href="#start">Back to Top</a></div>
										

						<!-- End Left Pane -->
				</div>
			<div class="col-sm-4">
				<!-- Start Right -->
						<div class="text-center hidden-xs hidden-sm">
							<br>
					<div class="ad_title">Advertisement</div>
					<div class="ad_box">				
						<!-- 300x250_ROS_Bottom -->
						<div id="div-gpt-ad-1400156886399-0" style="width: 300px; height: 250px;">
							
						<div style="border: 0pt none;" id="google_ads_iframe_/117828906/300x250_ROS_Bottom_0__container__"><iframe src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" style="border: 0px none; vertical-align: bottom;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/117828906/300x250_ROS_Bottom_0" id="google_ads_iframe_/117828906/300x250_ROS_Bottom_0" frameborder="0" height="250" width="300"></iframe></div><iframe src="javascript:&quot;<html><body style='background:transparent'></body></html>&quot;" style="border: 0px none; vertical-align: bottom; visibility: hidden; display: none;" marginheight="0" marginwidth="0" scrolling="no" name="google_ads_iframe_/117828906/300x250_ROS_Bottom_0__hidden__" id="google_ads_iframe_/117828906/300x250_ROS_Bottom_0__hidden__" frameborder="0" height="0" width="0"></iframe></div>
					</div>
		<br>			  		
						</div>
						
							<div class="col-sm-12  hidden-xs hidden-sm">
								<div class="panel panel-primary margin-top-10">
								  <div class="panel-heading">
									<h3 class="panel-title">Franchise Opportunities</h3>
								  </div>
								  <div class="panel-body">
									<address>
										<p>Interested in learning how you can become part of
										PropertyGuys.com as a franchise owner? Our franchise
										opportunity site has been lovingly designed to answer
										your questions.</p>
										
									<p class="lead"><a href="/franchise/">1133 St. George Blvd Moncton, NB</a><br>
									  Phone: (506) 860-3433<br>
									  Toll: (866) 666-9744</p>
									</address>
									<h3 class="panel-title">Franchise Opportunities</h3>
								  </div>
								</div>
							</div>
						
						<div class="text-center hidden-xs hidden-sm">
							<br>
					<div class="ad_title">Advertisement</div>
					<div class="ad_box">				
						<!-- 300x250_ROS_Bottom -->
						<div id="div-gpt-ad-1400156886399-0" style="width:300px; height:250px;">
							
						</div>
					</div>
		<br>			  		
						</div>
					<!-- End Right -->

			</div>

			</div>
		</div>

		
		
		