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
                    
                    <?php
						if(isset($_GET['id']))
						{
							$property_id=$_GET['id'];
							
							$query=$this->select_model->Select_Single_Property_Info($property_id);
							foreach($query->result() as $row)
							{
						
					?>

                    <div class="col-xs-12 hidden-xs">
                        <span class="price padding-right opensans_thin">$<?php echo $row->price; ?></span>
                        <span class="beds-baths"><?php echo $row->bedroom_no; ?></span> 
                        <span class="bb-text padding-right opensans_thin">beds</span> 
                        <span class="beds-baths"><?php echo $row->bathroom_no; ?></span> 
                        <span class="bb-text opensans_thin">baths</span>

                    </div>
                    
                    <div class="row clearfix">
                        <div class="col-sm-12" style="padding: 0px 35px; padding-bottom: 10px;">
                            <span class="address opensans_thin"><?php echo $row->property_address; ?> </span>
                            <span class="city-province opensans_thin"><?php echo $row->state_name; ?> </span> 
                            <span class="label label-default sign-style">SIGN  <?php echo $row->sign; ?> </span>
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
												
                                                <li data-thumb="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>" > 
													<img src="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>"  />
													 </li>
                                                     
                                                  <li data-thumb="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>" > 
													<img src="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>"  />
													 </li>
												<li data-thumb="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>" > 
													<img src="<?php echo base_url(); ?>images/property/<?php echo $row->image_name; ?>"  />
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
                                
                                   <?php echo $row->description; ?>
                                
                                </p>
                            </div>
                    
                            <!-- porperty details tab-->
                            <div role="tabpanel" class="tab-pane" id="pdetails">
                                <div class="row property_details">
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <ul class="list-unstyled">
																		
                                            <li>
                                                <div class="marker">Property Type:</div>
                                                <div class="data"><?php echo $row->property_type_name; ?></div>
                                                <div class="clear"></div>
                                            </li>

                                                <li><div class="marker">Property Use:</div>
                                            <div class="data"><?php echo $row->property_used_name; ?></div><div class="clear"></div></li>


                                              <li><div class="marker">Annual Taxes:</div>
                                            <div class="data">$<?php echo $row->annual_tax; ?></div><div class="clear"></div></li>





                                                <li><div class="marker">Age:</div>
                                            <div class="data"><?php echo $row->age; ?></div><div class="clear"></div></li>

                                                  <li><div class="marker">Exterior:</div>
                                            <div class="data"><?php echo $row->exterior; ?></div><div class="clear"></div></li>


                                                  <li><div class="marker">Flooring:</div>
                                            <div class="data"><?php echo $row->floring; ?></div><div class="clear"></div></li>


                                                  <li><div class="marker">Levels:</div>
                                            <div class="data"><?php echo $row->leavels; ?></div><div class="clear"></div></li>

                                                                                
                                                   <li><div class="marker">Foundation:</div>
                                            <div class="data"><?php echo $row->foundation; ?></div><div class="clear"></div></li>

                                                   <li><div class="marker">Heatmethod:</div>
                                            <div class="data"><?php echo $row->heatmethod; ?></div><div class="clear"></div></li>


                                                  <li><div class="marker">Heat Source:</div>
                                            <div class="data"><?php echo $row->heat_source; ?></div><div class="clear"></div></li>


                                                  <li><div class="marker">Garage:</div>
                                            <div class="data"><?php echo $row->garage; ?></div><div class="clear"></div></li>

                                                                           

                                                   <li><div class="marker">Water Source:</div>
                                            <div class="data"><?php echo $row->water_source; ?></div><div class="clear"></div></li>

                                                                               


                                                   <li><div class="marker">Interior:</div>
                                            <div class="data"><?php echo $row->interior; ?></div><div class="clear"></div></li>

                                               
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

                   <?php }}?>
                             <!--mortgage part starts-->
                            <div role="tabpanel" class="tab-pane" id="mdetails">
                                <div class="row property_details">
                                    <div class="col-sm-12 text-center">
                                        <h1 class="better-tag hidden-xs opensans_thin">Vista Maison Mortgage</h1>
                                        <h3 class="visible-xs opensans_thin">Vista Maison Mortgage</h3>
                                        <h2 class="caption-title opensans_thin">We work for you.</h2>
                                        <h3 class="caption-text opensans_thin">Your situation is unique and you are not just a number to us. We work with over 30 lenders and banks. Banks are limited to their own financial products and bankers work for banks - not for you. Allow us to show you a whole new world of competitive and flexible mortgage solutions. But dont just take our word for it, hear directly from our customers.</h3>
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
                                        <h3 class="name"><?php echo $row->first_name;?> <?php echo $row->last_name;?></h3>
                                        <p class="profession">Contact the Seller</p>

                                        <h5><i class="fa fa-map-marker fa-phone text-muted"></i> 1 (<?php echo $row->area_code;?>) <?php echo $row->phone_start;?>-<?php echo $row->phone_end;?> </h5>
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
						

                <h4><a href="/location/site/f/2209">Vista Maison Guelph</a></h4>
                <p>Servicing Guelph and Wellington County. Dave and Mike are your local PG Pros and their years of experience, along with the local partners will be able to provide you everything from Pricing to Legal to SOLD. Contact us directly for a free information session where we can answer all your questions. </p>
				<h4>1 (519) 824-7253</h4>

				<a href="/location/site/f/2209">Homepage</a>
            </div>
        </div>
    </div>

</div>