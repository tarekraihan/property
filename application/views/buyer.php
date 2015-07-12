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
                                     <input type="hidden" name="coreSearchID" id="searchid2" />
									<input class="search-textbox ui-autocomplete-input" name="coreSearch" value="" placeholder="Search by Location or Sign Number" id="searchcase2" type="text"><span class="ui-helper-hidden-accessible" aria-live="polite" role="status"></span>
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
		
		<div class="row no-margin">
			<!--<div class="home_page_listing_carousel">
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
							<img width="180" height="140" class="pull-left slider_img" src="<?php echo base_url();?>images/property/<?php echo $row->feature_image;?>"/>
                            <h3>$ <?php echo $row->price;?></h3>
							<p><?php echo $row->property_address;?></p>
                        </li>
                        
                        <?php
						}
						?>
						
						
                    </ul>
                </div>
			</div>
		</div>-->
        
        
        <!-- Buyer page Buyer Tools section starts-->
        
        <div class="products-bg">
            <div class="container">
                <div class="row no-margin clearfix">
                     <div id="better" class="better">			
                        <div class="container">
                            <div class="row no-margin clearfix">
                              <div class="col-md-12 pg-better-panel hidden-xs"><p class="better-tag opensans_thin">We provide tons of buyer tools and support<br>to help you along the way.</p></div>
                              <div class="col-xs-12 pg-better-panel visible-xs"><h3 class="smalltitle">We provide tons of buyer tools and support<br>to help you along the way.</h3></div>
                              <div class="col-md-12 text-center padding-bottom-10" style="display: none;"> <p class="caption-text" style="padding: 0px 18%;">Need buyer sub text here Need buyer sub text here Need buyer sub text here</p></div>
                            </div>
                            <div class="row clearfix">

                                    <div class="col-xs-12 col-sm-12">

                                      <div class="col-xs-12 col-sm-4">
                                        <div class="thumbnail custom_thumbnail">
                                          <img alt="" src="<?php echo base_url(); ?>/images/icon-green-share.png" class="img-responsive">
                                          <div class="caption text-center">
                                            <span class="caption-title">Social Media</span>
                                            <p class="caption-text">Sharing online has never been so easy.</p>	            
                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-4">
                                        <div class="thumbnail custom_thumbnail">
                                           <img alt="" src="<?php echo base_url(); ?>/images/icon-green-100-hand.png" class="img-responsive">
                                          <div class="caption text-center">
                                            <span class="caption-title">Negotiating</span>
                                            <p class="caption-text">Tools to help get the ball rolling.</p>

                                          </div>
                                        </div>
                                      </div>

                                      <div class="col-xs-12 col-sm-4">
                                        <div class="thumbnail custom_thumbnail">
                                          <img alt="" src="<?php echo base_url(); ?>/images/icon-green-100-clock.png" class="img-responsive">
                                          <div class="caption text-center">
                                            <span class="caption-title">Appointment Booking</span>
                                            <p class="caption-text">Connecting with sellers is stress-free.</p>

                                          </div>
                                        </div>
                                      </div>
                                   </div>
                                </div>
                            </div>
                        </div>
                    </div>		
                </div>
            </div>
        
        
            <!-- Buyer page section 07 mortgage pro -->

            <div class="greenback hidden-xs blue_bg" id="calc">
                <div class="container text-center panel-padding-50">
                     <div class="row no-margin clearfix">

                            <div class="col-xs-12 column">
                                <h1 class="mortgage-title white">vista Mortgage</h1>
                            </div>



                            <div class="col-xs-12 column">
                                <p class="mortgage-text white-text opensans_thin">We help sellers get their buyers qualified. We provide all the necessary advice, guidance and support to get the deal closed. Our access to better rates and a wide variety of lending programs (with over 20 lenders) gives us the power to match buyers with the right financing solution.</p>
                            </div>



                            <div class="col-xs-12 column">
                                <h2 class="greenback-title opensans_thin">Today's 5 year fixed rate.</h2>
                            </div>



                            <div class="col-xs-12 column">
                                <span class="mortgage-rate" id="mortrate">2.54%*</span>
                                <p style="padding-top: 30px;">* APR 2.54% Rates are subject to change and OAC. Certain terms and conditions apply. </p>
                            </div>


                        <div class="padding-top-25">				
                            <div class="col-12-xs padding-bottom-50">
                                <a href="<?php echo base_url();?>en/mortgage/" type="button" class="btn btn-white btn-lg">More Information</a>
                            </div>		
                        </div>
                    </div>
                </div>
             </div>
        
        
            <!-- Buyer page Faq Section starts -->
            <div class="row no-margin">
                <div class="seller_page_section_05_faq">
                    <!-- Indicators -->
                    <div class="container padding-top-50">
                         <div class="row no-margin clearfix">

                        <p class="big_title text-center">Frequently Asked Questions</p>

                        <div id="carouselFaq" class="carousel slide" data-ride="carousel" data-interval="false">


                                <div class="carousel-inner">

                                        <div class="item active">
                                           <h3 class="faq-title text-center">What about dealing with buyers' agents?</h3>	
                                            <p class="faq-text">We make it easy for sellers to consider offers from buyers who use buyers' agents. How much commission is offered and paid to a buyer's agent is totally up to the seller.</p>		      
                                        </div>

                                        <div class="item">
                                           <h3 class="faq-title text-center">How do I set up my house at the right price ?</h3>	
                                            <p class="faq-text">Sellers are able to get a pricing blueprint specific to their property by experts we call vista Value . Unlike agents, these certified appraisers have nothing to lose or gain from the sale, so the advice they provide is truly unbiased.</p>		      
                                        </div>

                                        <div class="item">
                                           <h3 class="faq-title text-center">What about taking calls & booking appointments?</h3>	
                                            <p class="faq-text">Sellers can enjoy the convenience of our  answering service to answer calls and help book showings. We call this Vista Assistance ©</p>	                                             
                                        </div>
                                        
                                        <div class="item">
                                           <h3 class="faq-title text-center">What about showings?</h3>	
                                            <p class="faq-text">We believe that the seller is the best person to show the property. After all, sellers know the details of the property and the neighborhood better than anyone.</p>	                                             
                                        </div>
                                        
                                        <div class="item">
                                           <h3 class="faq-title text-center">Can I delay my payment instead of paying for the package right now ?</h3>	
                                            <p class="faq-text">Yes, With this option, sellers can enjoy the benefit of our marketing package today with a convenient way of paying for it later. Sellers often choose to pay once their property has sold.</p>	                                             
                                        </div>
                                        
                                        <div class="item">
                                           <h3 class="faq-title text-center">How do you differ from agents ?</h3>	
                                            <p class="faq-text">We're not agent or brokers. We're a specialized marketing company that helps sellers market their properties directly to buyers or even buyer's agents over a private platform instead of the way agents do it. This way of selling is not only less expensive but can also be more convenient. Lucky for us, our customers agree.</p>	                                             
                                        </div>
                                        
                                        <div class="item">
                                           <h3 class="faq-title text-center">How much is it going to cost ?</h3>	
                                            <p class="faq-text">The price of Vista Maison marketing package is completely dependent on the level of service you choose and also what services you require. The best way to find out how much it costs is to request a quote orcontact us.</p>	                                             
                                        </div>
                                        
                                        <div class="item">
                                           <h3 class="faq-title text-center">What about extra exposure on on the Mls ?</h3>	
                                            <p class="faq-text">With Vista maison you have the option to list on the MLS . We will help you reach a wider audience and we will give your property all the exposure you'll ever need to get it SOLD.</p>	                                             
                                        </div>

                                </div>

                            <a href="#carouselFaq" data-slide="prev" class="carousel-control left custom_carousel_left_right center-arrow_02"><img src="<?php echo base_url(); ?>/images/server_run_left_thin.png"></a>
                            <a href="#carouselFaq" data-slide="next" class="carousel-control right custom_carousel_left_right center-arrow_02"><img src="<?php echo base_url(); ?>/images/server_run_right_thin.png"></a>	

                    </div>

                </div>
            </div>
                </div>
            </div> <!-- Buyer page Faq Section end -->
        
            
            <!-- Buyer Tool Box -->
        
            <div id="buyer-toolbox">
                <div class="container">
                    <div class="row no-margin clearfix">

                        <div class="col-xs-12 text-center"><h1 class="proservices-maintitle opensans_thin"><span class="pg-text-blue">VistaMaison  buyer’s Assistance </h1></div>
                        <div class="col-xs-12 text-center" style="display: none;"><p class="proservices-text"></p></div>

                        <div class="col-xs-10 col-xs-offset-1 padding-bottom-100">

                            <div class="media">
                              <div class="pull-left media-image-fix">
                                  <img alt="" class="media-object" src="<?php echo base_url(); ?>/images/icon-white-bookmark.png">			       
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading pg-text-blue media-title opensans_thin">Bookmark Your Favorite Properties</h4>
                                <span class="proservices-text">You can keep track of your favorite properties with one click and then access them on any computer - at home, at work, at the dentist - anywhere! Your bookmarks are saved on our website instead of in your browser, so that you can access them from anywhere.</span>
                              </div>
                            </div>

                            <div class="media">
                              <div class="pull-left media-image-fix">
                                  <img alt="" class="media-object" src="<?php echo base_url(); ?>/images/icon-white-drop.png">			       
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading pg-text-blue media-title opensans_thin">Price Drop Notifications</h4>
                                <span class="proservices-text">It's a beautiful property but a bit out of your price range? Use our one click price drop notification feature to set the price that would make you take a second look. If the price is reduced to your threshold, we'll send you an alert.</span>
                              </div>
                            </div>


                            <div class="media">
                              <div class="pull-left media-image-fix">
                                  <img alt="" class="media-object" src="<?php echo base_url(); ?>/images/icon-white-calculator.png">			       
                              </div>
                              <div class="media-body">
                                <h4 class="media-heading pg-text-blue media-title opensans_thin">Offer Maker®</h4>
                                <span class="proservices-text">Make an offer on a property using our online offer wizard. Negotiate directly with sellers online. We've made it as easy. Simply enter your information, check some boxes - and press submit.</span>
                              </div>
                            </div>

                        </div>

                    </div>
                </div>
             </div>
        
            <!-- Buyers Guide -->
            <div id="buyerguide">
                <div class="container">
                    <div class="row clearfix no-margin">
                        <div class="text-center">		 			
                            <div class="col-sm-12 padding-top-50"><h1 class="buyerguide-title opensans_thin">When you choose to purchase direct<br>from the seller, you both win.</h1></div> 		
                            <div class="col-sm-12"><p class="faq-text">The reason for that is simple. Without the seller needing to pay hefty commissions to agents, they are often far more flexible on their price, which can ultimately give you a better deal. Our Buyers' Guide will provide you with all the "how-to" information you need.</p></div>
                            <div class="col-md-12 padding-top-50 padding-bottom-50"><button type="button" class="btn btn-green" data-toggle="modal" data-target="#hotPropertyModal">Download Buyers Guide</button></div>
                        </div>
                    </div>	
                </div> 
             </div>

        
        
</div>
    
    
    <!-- HotProperty Modal -->
        <div class="modal fade" id="hotPropertyModal" tabindex="-1" role="dialog" >
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body">

			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="glyphicon glyphicon-remove-sign" aria-hidden="true"></span></button>
                        <h2 class="caption-title text-center">Get a FREE SAMPLE</h2> 
                            <div class="caption-text"><p>All we need is your email address and we'll send you a link to download a sample Buyer's Guide.</p></div>
                                <div class="row clear-fix">
                                    <div class="col-xs-12 col-md-6" style="padding-top: 25px;">   
                                        <form class="form" role="form" id="frmBuyerguide">
                                                <input type="hidden" name="firstName_158" id="firstName_158" value="" />
                                                <input type="hidden" name="lastName_158" id="lastName_158" value="" />				        	

                                                  <div class="row padding-bottom-10">
                                                      <div class="form-group">
                                                        <label class="" for="exampleInputEmail2">Email Address</label>
                                                        <input  type="email" class="form-control" id="email_158" name="email_158" value="" placeholder="Email Address" />

                                                            <div class="checkbox">					    
                                                                <label style="font-size: 11px;">
                                                                  <input type="checkbox" id="agree_158" name="agree_158" value="1">  I agree to receive email messages from PropertyGuys.com Inc. containing news, updates and promotions. I understand I can withdraw my consent at any time by using the "Unsubscribe" "link" contained in each email message. You can view the site <a href="#">Privacy Policy here</a>.
                                                                </label>
                                                            </div>
                                                      </div>
                                                    </div>
                                          <div class="row text-center hidden-sm hidden-sm">
                                            
                                            <button type="submit" class="btn btn-green btn-block" id="btn_158">Send me a FREE sample!</button>
                                          </div>
                                        </form>
                                </div>

                            <div class="col-md-6 pull-right hidden-xs hidden-sm "><img class="downloadables-image"  src="<?php echo base_url(); ?>/images/book_PNG2116.png" style="width: 200px;"/></div>
                        </div>

              </div><!-- Close Body -->
            </div><!-- .modal-content -->
          </div><!-- .modal-dialog -->
        </div><!-- .modal -->

   
</body>
</html>