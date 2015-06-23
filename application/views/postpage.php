<script language="JavaScript">

	function mortCalc(){
			var princ = $("#principal").val();
			var intRate = ($("#interest").val() / 100) / 12;
			var months = $("#amortization").val() * 12;
			var payment = Math.floor( (princ*intRate) / (1-Math.pow(1+intRate,(-1*months)))*100 ) /100;
			payment = Math.round(payment);
			
			if(!isNaN(payment)){
				$("#monthly").html("$"+payment);
			}else{
				$("#monthly").val('err');
			}
			
		}

</script>

<?php
if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='department';
    $id_field='department_id';
    $result=$this->select_model->Select_Single_Row($id,$table,$id_field);

}

?>

<div class="container-fluid no-margin no-padding" style="background-color: #F6F7F9;">
    <div class="post_page_add_01">
    
    </div>
    
    <div class="container">
        <div class="row">
        
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="row clearfix hidden-xs">

                    <div class="col-xs-12" style="padding-top: 5px;">
                        <a type="button" class="btn btn-default btn-sm" href=""><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span> Back to Search</a>
                    </div>

                    <div class="col-xs-12 hidden-xs">
                        <span class="price padding-right opensans_thin">$464,900</span>
                        <span class="beds-baths">4</span> 
                        <span class="bb-text padding-right opensans_thin">beds</span> 
                        <span class="beds-baths">2.5</span> 
                        <span class="bb-text opensans_thin">baths</span>

                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-sm-12" style="padding: 0px 35px; padding-bottom: 10px;">
                            <span class="address opensans_thin">26 Meadow Crescent </span>
                            <span class="city-province opensans_thin">Guelph, ON </span> 
                            <span class="label label-default sign-style">SIGN # 58526</span>
                        </div>
                    </div>

                </div>
                
                <!--slider starts-->
                <div class="row clearfix">
                    <div class="viewer-border">
                        <ul class="nav nav-tabs gallery-tabs nav-tabs-top" role="tablist">
                          <li class="active"><a href="#photos" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-picture" aria-hidden="true"></span></i> <span class="hidden-xs">Photos</span></a></li>
                          <li><a href="#map" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> <span class="hidden-xs">Map</span></a></li>
                          <li><a href="#videos" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-facetime-video" aria-hidden="true"></span> <span class="hidden-xs">Videos</span></a></li>			  
                          <li><a href="#tour" role="tab" data-toggle="tab"> <span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span> <span class="hidden-xs">Virtual Tour</span></a></li>			  
                          <li class="pull-right hide" style="padding-top: 2px; padding-right:5px;"><button type="button" class="btn btn-success" data-toggle="modal" data-target="#openHouse">Click for Open House Details</button></li>
                    
                        </ul>
                
                
                        <div class="tab-content">
                            <div class="post_details_slider">
								<div class="demo">
									<div class="item">            
										<div class="clearfix" style="max-width:595px;">
											<ul id="image-gallery" class="gallery list-unstyled cS-hidden">
												<li data-thumb="http://lorempixel.com/122/82/transport/"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="http://lorempixel.com/122/82/city/"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
												<li data-thumb="http://lorempixel.com/122/82/transport/"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="http://lorempixel.com/122/82/city/"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
												<li data-thumb="http://lorempixel.com/122/82/transport/"> 
													<img src="http://lorempixel.com/595/400/" />
													 </li>
												<li data-thumb="http://lorempixel.com/122/82/city/"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-7.jpg"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-1.jpg"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-2.jpg"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-3.jpg"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-4.jpg"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-5.jpg"> 
													<img src="http://lorempixel.com/595/400/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-6.jpg"> 
													<img src="http://lorempixel.com/595/400/people/" />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>/img/thumb/cS-7.jpg"> 
													<img src="http://lorempixel.com/595/400/city/" />
													 </li>
											</ul>
										</div>
									</div>


								</div>	
                            </div>
                        </div>
                
                        <div class="row" style="padding: 10px 30px;">
                            <div class="social_icon pull-left">
                                
                            </div>
                            
                            <a href="#" class="btn btn-default pull-right" style="margin-left: 10px;">View Full Screen</a>
                            <a href="#" class="btn btn-default pull-right">Virtual Tour</a>
                        </div>
                    
                    </div>
                </div>
        
                <!-- post details-->
                <div class="row clearfix post_details_part">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#description" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-list-alt"></span><span> Description</span></a></li>
                            <li role="presentation"><a href="#pdetails" role="tab" data-toggle="tab"><span class="glyphicon glyphicon-th-list"></span><span> Property Details</span></a></li>
                            <li role="presentation"><a href="#ldetails" role="tab" data-toggle="tab"><span class=""></span><span> Location Details</span></a></li>
                            <li role="presentation"><a href="#mdetails" role="tab" data-toggle="tab"><span class=""></span><span> Mortgage</span></a></li>
                        </ul>

                          <!-- Tab panes -->
                        <div class="tab-content bg-white">
                            <div role="tabpanel" class="tab-pane active" id="description">
                                <p class="tab-pane description clear-fix active">
                                
                                    This custom designed home at the edge of Cambridge was built in 2003. A loft bungalow floor plan with 4,529 sq feet of finished space.

                                    The main floor has a large entry way the leads into the great room with a ceiling that rises to 17 feet. The great room is flows into the over-sized kitchen with a breakfast bar and eat in dining area. The elevated southern view from the great room and kitchen provide a panoramic view of the back yard, in-ground pool, gardens, surrounding forest and mill pond.</br></br>

The home has living space on 3 levels with 2,100 sq feet on the main level, 980 sq. feet on the second floor and another 1,500 sq. feet on the lower level.</br></br>

Highlights include the main floor master bedroom with dressing room and private bath. A main floor office doubles as a guest room complete with an adjacent 3pc bath. A formal dining room that looks out to the front of the house. And the most popular room, the kitchen, measures 14.5 x 24 feet.

Upstairs are 3 generous bedrooms and a shared 4pc bath. On the lower level, which has a walk out to the lower level patio, you will find 2 additional bedrooms, plus a 4pc bath.</br></br>

The lower level has 600 sq. feet set aside for storage and a full sized workshop. Downstairs has an open billiards room with oversized pool table and built in bar. And the home theatre room with a 10 foot screen, digital 7.1 sound system and ample seating area for 8-10.</br></br>

From the kitchen, sliding doors leads outside to the 400 sq foot covered outdoor patio. The patio includes outdoor living space, dining area and outdoor kitchen with built in BBQ, counter and sink.

From the patio, stairs lead down to the 20 x 40 salt-water pool and pool patio which includes 1,100 sq. ft stamped cement patio and pool house. There has been extensive landscaping done with armor stone walls, many varieties of trees, shrubs and ground cover used throughout. The pool area serves as a focal point and offers ultimate privacy in resort-like surroundings.</br></br>

There is a 3 car attached garage which has been insulated dry-walled and stuccoed. The house is heated with natural gas, which is also used for the stove, hot-water, fireplace, pool heater and outdoor BBQ. All lines and piping are buried. The deep well provides unlimited spring like water.</br></br>

The property is 6 minutes off Hwy 401 from the Town Line exit in Cambridge. Easy access to schools, shopping, sports facilities. The Speed river trail is literally out the front door, Irish Creek in the back yard and the surrounding property is environmentally protected. 
                                
                                </p>
                            </div>
                    
                            <!-- porperty details tab-->
                            <div role="tabpanel" class="tab-pane" id="pdetails">
                                <div class="row property_details">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <ul class="list-unstyled">
																		
                                            <li>
                                                <div class="marker">Property Type:</div>
                                                <div class="data">Detached House</div>
                                                <div class="clear"></div>
                                            </li>

                                                                                <li><div class="marker">Property Use:</div>
                                            <div class="data">Residential</div><div class="clear"></div></li>


                                                                                                                    <li><div class="marker">Annual Taxes:</div>
                                            <div class="data">$8,479</div><div class="clear"></div></li>





                                                                                <li><div class="marker">Age:</div>
                                            <div class="data">10 years old (circa 2005)</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Exterior:</div>
                                            <div class="data">Brick</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Flooring:</div>
                                            <div class="data">Carpet, Ceramic Tile, Hardwood</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Levels:</div>
                                            <div class="data">2</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Space:</div>
                                            <div class="data">4,529 sq. ft. (421 m<span class="super">2</span>)</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Foundation:</div>
                                            <div class="data">Poured Concrete</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Roof Age:</div>
                                            <div class="data">10 years old (circa 2005)</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Basement:</div>
                                            <div class="data">Partially Finished</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Cabinets:</div>
                                            <div class="data">Wood Veneer</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Countertop:</div>
                                            <div class="data">Laminate</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Garage:</div>
                                            <div class="data">Multi-Vehicle</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Driveway:</div>
                                            <div class="data">Gravel</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Parking Spaces:</div>
                                            <div class="data">10</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Heat Method:</div>
                                            <div class="data">Forced Air, Furnace</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Heat Source:</div>
                                            <div class="data">Natural Gas</div><div class="clear"></div></li>


                                                                                <li><div class="marker">Zoning:</div>
                                            <div class="data">RT- Residential</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Lot:</div>
                                            <div class="data">60,400 sq. ft. / 1.39 ac. (5,611 m<span class="super">2</span>)</div><div class="clear"></div></li>

                                                                                <li><div class="marker">Lot Dimensions:</div>
                                            <div class="data">148FT x443FT</div><div class="clear"></div></li>


                                        </ul>
                                    </div>
                                    
                                    
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                        
                                        <div class="pull-left">
                                            <p class="post_dec_subcat">Exterior</p>
                                            <ul class="unstyled">
                                                <li>Fenced Yard</li>
                                                <li>Inground Sprinkler</li>
                                                <li>Landscaped</li>
                                                <li>Mature Trees</li>
                                                <li>Pool</li>
                                                <li>Storage Shed</li>
                                            </ul>
                                        </div>
                                        
                                        <div class="pull-left" style="margin-left:65px;">
                                            <p class="post_dec_subcat">Interior</p>
                                            <ul class="unstyled">
                                                <li>Air Conditioning</li>
                                                <li>Central Vacuum</li>
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>

                            <!--location part starts-->
                            <div role="tabpanel" class="tab-pane" id="ldetails">
                                <div class="row property_details">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="pull-left">
                                            <p class="post_dec_subcat">Education</p>
                                            <ul class="unstyled">
                                                <li>Day Care</li>
                                                <li>Primary School</li>
                                            </ul>
                                            
                                            <p class="post_dec_subcat">Health & Wellness</p>
                                             <ul class="unstyled">
                                                <li>Cycling Paths</li>
                                                <li>Walking Trails</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="pull-left">
                                            <p class="post_dec_subcat">Recreation</p>
                                            <ul class="unstyled">
                                                <li>Park</li>
                                                <li>Playground</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="pull-left">
                                            <p class="post_dec_subcat">Transportation</p>
                                            <ul class="unstyled">
                                                <li>School Bus Route</li>
                                                <li>Transit Bus Route</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                             <!--mortgage part starts-->
                            <div role="tabpanel" class="tab-pane" id="mdetails">
                                <div class="row property_details">
                                    <div class="col-sm-12 text-center">
                                        <h1 class="better-tag hidden-xs opensans_thin">PropertyGuys.com Mortgage</h1>
                                        <h3 class="visible-xs opensans_thin">PropertyGuys.com Mortgage</h3>
                                        <h2 class="caption-title opensans_thin">We work for you.</h2>
                                        <h3 class="caption-text opensans_thin">Your situation is unique and you are not just a number to us. We work with over 30 lenders and banks. Banks are limited to their own financial products and bankers work for banks - not for you. Allow us to show you a whole new world of competitive and flexible mortgage solutions. But don't just take our word for it, hear directly from our customers.</h3>
                                        <p class="caption-text opensans_thin">Get started and apply online, or speak to a <strong>PropertyGuys.com MortgagePro at 1 (888) 765-7333.</strong></p>						
                                        <div class="padding-top-50"><a href="#" type="button" class="btn btn-green">More Information</a></div>

                                    </div>
                                 </div>
                            </div>



                            <div role="tabpanel" class="tab-pane" id="ldetails">...</div>
                            <div role="tabpanel" class="tab-pane" id="mortgage">...</div>
                        </div>
                    </div>
                </div>
        
        
        
            </div>
            
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="card-container">
                        <div class="card">
                            <div class="front">
                                 <!--<div class="cover" style="background-image: url(http://round.s3.amazonaws.com/images/properties/9/86605/1023475_102.jpg); background-position: center center; background-size: cover;">
                                    Background image is handled via code 
                                </div>-->

                                <div class="content">
                                    <div class="main">
                                        <h3 class="name">Emmi Perkins</h3>
                                        <p class="profession">Contact the Seller</p>

                                        <h5><i class="fa fa-map-marker fa-phone text-muted"></i> 1 (519) 341-0987 </h5>
                                                                            <h5><i class="fa fa-building-o fa-phone text-muted"></i> 1 (855) 742-4539</h5>
                                                                        <h5><i class="fa fa-envelope-o fa-envelope-o  text-muted"></i> <a href="/launch-messages/compose/p/86605">Send a Message</a></h5>

                                        <a type="button" class="btn btn-question btn-lgx" href="/launch-messages/compose/p/86605"><i class="fa fa-question-circle"></i> Ask a Question</a>

                                        <a type="button" class="btn btn-question btn-lgx" href="/launch-messages/offer/p/86605"><i class="fa fa-file-text"></i> Make an Offer</a>

                                        <div class="tools">
                                            <div class="row clearfix">
                                                <div class="col-xs-6 col-sm-6 text-center"><a href="#" id="bookmark"><img src="<?php echo base_url(); ?>/images/icon-green-100-bookmark.png"><br>login to Bookmark</a></div>
                                                <div class="col-xs-6 col-sm-6 text-center"><a href="#" data-toggle="modal" data-target="#priceChangeAlert"><img src="<?php echo base_url(); ?>/images/icon-green-100-pricechange.png"><br>Set Price<br>Change Alert</a></div>
                                                <div class="col-xs-12 text-center padding-top-25"><button type="button" class="btn btn-offer btn-lgx" id="printFeatureSheet"><i class="fa fa-download"></i> View Feature Sheet</button></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="footer">
                                        <div class="social-links text-center">
                                            <!-- Social Share -->
                                            
                                        </div><!-- end Social -->
                                    </div><!-- end Footer panel -->
                                </div><!-- end content -->
                            </div> <!-- end front panel -->
                        </div> <!-- end card -->
                    </div>
                
                
                
                <div class="col-sm-12 well" style="margin-top: 15px;">
                    <h3><span class="caption-title">Mortgage Calculator</span> </h3>
                        <div class="row">

                            <div class="col-sm-12">
                                <form role="form">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Principal Amount</label>
                                    <div class="input-group">
                                      <span class="input-group-addon">$</span>
                                      <input class="form-control mort-calc" id="principal" onkeyup="mortCalc()"  value="464900.00" type="text">
                                      <span class="input-group-addon">.00</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Annual Interest</label>
                                    <div class="input-group">
                                      <input class="form-control mort-calc" id="interest" onkeyup="mortCalc()"  value="2.54" type="text">
                                      <span class="input-group-addon">%</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Amortization Period (years)</label>
                                    <div class="input-group">
                                      <input class="form-control mort-calc" id="amortization" onkeyup="mortCalc()"  value="25" type="text">
                                      <span class="input-group-addon">yrs.</span>
                                    </div>

                                  </div>

                                </form>
                                </div>

                                <div class="col-sm-12 text-center">

                                    <h3>Monthly Payment</h3>
                                    <p class="monthly_payment" id="monthly">$2095</p>

                                </div>
                            </div>
                        <small>The calculator is based on the Canadian Mortgage formula (compounded semi-annually). The monthly payment will automatically be updated by changing the values for the loan amount, interest rate and load period.</small>		 	
                </div>
            </div>
        
        </div> <!-- row complete -->

    </div> <!-- conatiner complete -->

    <div class="post_page_prefooter_image">
        <div class="container">
            <div class="col-md-6 col-md-offset-6" style="padding-top: 60px;">
                <h3>Locations Serving </h3>
						

                <h4><a href="/location/site/f/2209">PropertyGuys.com Guelph</a></h4>
                <p>Servicing Guelph and Wellington County. Dave and Mike are your local PG Pros and their years of experience, along with the local partners will be able to provide you everything from Pricing to Legal to SOLD. Contact us directly for a free information session where we can answer all your questions. </p>
				<h4>1 (519) 824-7253</h4>

				<a href="/location/site/f/2209">Homepage</a>
            </div>
        </div>
    </div>

</div>