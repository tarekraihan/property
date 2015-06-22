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


<div class="row no-margin">
            <div class="mortgage_header_bg_img text-center">
                
                <p class="tagline">PropertyGuys.com Mortgage</p>
                <p class="subtagline">
                    We negotiate with the banks so you don't have to
				</p>
                <button class="btn btn-lg btn-green">APPLY NOW</button>

            </div>
        </div>
        
        <div class="row no-margin">
        
            <div class="container custom_panel-padding-50">
                  <div class="row no-margin clearfix">
                        <div class="col-md-6 padding-top-50">
                            <iframe class="embed-responsive-item" src="http://player.vimeo.com/video/95436334" webkitallowfullscreen="" mozallowfullscreen="" allowfullscreen="" frameborder="0" height="284" width="100%"></iframe>
                        </div>

                        <div class="col-md-6">
                            <p class="better-tag opensans_thin">We work for you.</p>
                                <p class="caption-text">Your situation is unique and you are not just a number to us. We work with over 30 lenders and banks. Banks are limited to their own financial products and bankers work for banks - not for you. Allow us to show you a whole new world of competitive and flexible mortgage solutions. But don't just take our word for it, hear directly from our customers.</p>
                                <p class="caption-title">Get started and <a href="#" data-toggle="modal" data-target="#mortgageContact">apply online</a>, or speak to a PropertyGuys.com MortgagePro at <strong>1 (888) 765-7333</strong>..</p>	
                                <button class="btn btn-green" data-toggle="modal" data-target="#mortgageContact"> Contact Me!</button>
                        </div>

                    </div>
                </div>
        
        </div>
        <div class="clearfix"></div>
        
        <!--mortgage shopping starts -->
        
        <div class="panel-artical">
            <div class="container custom_panel-padding-50">

                <div class="col-md-6 col-xs-12 col-sm-12">
                    <h1 class="caption-title">Why you should let us do your mortgage shopping.</h1>
                            <p class="caption-text"><strong>It's what we do everyday, and we're darn good at it.</strong><br>Most mortgage shoppers are too busy to land themselves the best deal. Getting the best mortgage terms and rate could save you 10's of thousands of dollars.</p>
                            <p class="caption-text"><strong>Expert non-biased advice</strong><br>By letting us do all the legwork you are virtually guaranteed a better rate than by simply using your bank. We work for you, not the bank. We'll explain all of your mortgage options in easy to understand language so you can make a more informed decision.</p>
                            <p class="caption-text"><strong>It pays to compare</strong><br>All mortgages aren't created equally. We'll present you with competing offers from Canada's leading mortgage lenders so you can be sure you are leaving no stone unturned.</p>			
                            <p class="caption-text"><strong>We're quick, easy and free</strong><br>Our service is absolutely without cost, commitment or obligation. After filling out our easy pre-approval application - you can expect us to get back to you within 24 hours.</p>
                        <div class="text-center"><a href="#" data-toggle="modal" data-target="#mortgageContact" type="button" class="btn btn-green btn-lg">Get Pre-Approved</a></div>

                </div>
                <div class="col-md-6 well hidden-xs hidden-sm">
                    <h1 class="better-tag opensans_thin">Mortgage Calculator</h1>
                        <div class="row no-margin">
                            <div class="col-sm-4">
                                <form role="form">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">Principal Amount</label>
                                    <div class="input-group">
                                      <span class="input-group-addon">$</span>
                                      <input class="form-control mort-calc" id="principal" onkeyup="mortCalc()"  value="464900.00" style="width: 110px;" type="text">

                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">Annual Interest</label>
                                    <div class="input-group">
                                      <input class="form-control mort-calc" onkeyup="mortCalc()"  id="interest" value="2.54" type="text">
                                      <span class="input-group-addon">%</span>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputFile">Amortization Period (years)</label>
                                    <div class="input-group">
                                      <input class="form-control mort-calc" onkeyup="mortCalc()"  id="amortization" value="25" type="text">
                                      <span class="input-group-addon">yrs.</span>
                                    </div>

                                  </div>
        <!-- 						   <div class="form-group"> -->
        <!-- 						    <label for="exampleInputFile">Monthly Payment</label> -->
        <!-- 						   		<div class="input-group"> -->
        <!-- 								  <span class="input-group-addon">$</span> -->
        <!-- 								  <input type="text" class="form-control"> -->
        <!-- 								  <span class="input-group-addon">.00</span> -->
        <!-- 								</div> -->
        <!-- 						  </div> -->
                                </form>
                                </div>
                                <div class="col-sm-7 text-center">

                                    <h3>Monthly Payment</h3>
                                    <p class="monthly" id="monthly">$1352</p>

                                </div>
                            </div>
                        <small class="caption-text">The calculator is based on the Canadian Mortgage formula (compounded semi-annually). The monthly payment will automatically be updated by changing the values for the principal amount, interest rate and amortization period.</small>		 	
                </div>
            </div>
 
        </div>
        
        <!-- MortgagePro© FAQ starts -->
        
        <div class="mortgage_faxpro">
            <div class="container"> 

                <div class="col-12-sm column text-center padding-bottom-50 padding-top-50"><span class="better-tag opensans_thin">MortgagePro© FAQ</span></div>

                <div class="col-md-1"></div>
                    <div class="col-md-10">
                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail custom_thumbnail thumbnail-fix">
                          <img alt="" src="<?php echo base_url(); ?>/images/icon-green-100-lock.png">
                          <div class="caption text-center">
                            <h3 class="caption-title">Will my information stay secure?</h3>
                                <p class="caption-text">Absolutely. If you would rather do it over the phone, just call <strong>1-888-765-7333</strong>, we'd love to chat. </p>


                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail custom_thumbnail thumbnail-fix">
                           <img alt="" src="<?php echo base_url(); ?>/images/icon-green-100-apply.png">
                          <div class="caption text-center">
                            <h3 class="caption-title">How does applying online work?</h3>
                                    <p class="caption-text">You give us enough info to get started and we'll give you a call to confirm the details and answer any questions you may have.</p>

                          </div>
                        </div>
                      </div>

                      <div class="col-sm-6 col-md-4">
                        <div class="thumbnail custom_thumbnail thumbnail-fix">
                          <img alt="" src="<?php echo base_url(); ?>/images/icon-green-100-home.png">
                          <div class="caption text-center">
                            <h3 class="caption-title">What if I just began househunting?</h3>
                            <p class="caption-text">That's okay! By knowing your options early, you can refine your search and be protected against rising rates so that you can focus on finding your dream home. Best of all there's no cost, commitment or obligation. </p>

                          </div>
                        </div>
                      </div>



                   </div>
                <div class="col-md-1"></div>

                <div class="col-12-sm column text-center padding-bottom-50"><a href="#" data-toggle="modal" data-target="#mortgageContact" type="button" class="btn btn-green btn-lg">Apply Now</a></div>

            </div>
        </div>
        
        <!-- pre approved section -->
        
        <div class="greenback" id="calc">
            <div class="container text-center custom_panel-padding-50">
                <h2 class="greenback-title padding-bottom-50 opensans_thin">Today's 5 year fixed rate.</h2>
                    <span class="mortrate dollars" style="width: 500px;" id="mortrate">2.54%*</span>
                <p style="padding-top: 30px;">* APR 2.54% Rates are subject to change and OAC. Certain terms and conditions apply. </p>
                <a href="#" data-toggle="modal" data-target="#mortgageContact" type="button" class="btn btn-white btn-lg">Get Pre-Approved</a>
            </div>
        </div>
        
        <!-- leading partner section -->
        
        <div class="leading_partner_section">
            <div class="container custom_panel-padding-50">
                        <h2 class="better-tag">Our Lending Partners</h2>
                        <div class="text-center pad_bottom_25 hidden-xs hidden-sm"><img src="<?php echo base_url(); ?>/images/mortgage_partners.jpg">                         </div>	
                        <p class="caption-text">PropertyGuys.com, PropertyGuys.com Mortgage and Mortgage Architects do not underwrite, approve or deny loans directly. Typical guidelines apply for all mortgage applications. PropertyGuys.com Mortgage Ontario Brokerage #12466. All personal information you do provide is protected under the Federal Privacy Act. <a href="#" data-toggle="modal" data-target="#mortgagePrivacy">View Our Privacy Policy</a></p>	
                        <div style="width: 100%;text-align: center;"><img src="<?php echo base_url(); ?>/images/mort_arc_lg_wide.jpg"></div>
            </div>
         </div>
        
         <!-- section call and quote strats -->

                <div class="row no-margin clearfix">
                    <div class="section_02_title">
                        <p class="big_title">you are one step away </p>
                    </div>
                </div>

                <div class="row no-margin clearfix section_02">

                                <div class="container">

                                  <div class=" col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                    <div class="thumbnail thumbnail_section_02">
                                      <a href="#" data-toggle="modal" data-target="#sevenMinModal"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-clock.png" class="img-responsive"></a>
                                      <div class="caption text-center">
                                        <span class="caption-title"><a href="#" data-toggle="modal" data-target="#sevenMinModal">Easy Call</a></span>
                                        <p class="caption-text">It all starts with a conversation that on average takes only seven minutes. Take the call that could make you thousands of dollars when you sell. <a href="#" data-toggle="modal" data-target="#sevenMinModal">Request a call.</a></p>	            
                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                    <div class="thumbnail thumbnail_section_02">
                                       <a href="#" data-toggle="modal" data-target="#freeOfferModal"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-tag.png" class="img-responsive"></a>
                                      <div class="caption text-center">
                                        <span class="caption-title"><a href="#" data-toggle="modal" data-target="#freeOfferModal">What's my home worth?</a></span>
                                        <p class="caption-text">With our pricing blueprint, you can more easily establish your asking price in a way that helps you make more money. <br><a href="#" data-toggle="modal" data-target="#freeOfferModal">Send me a sample blueprint.</a></p>

                                      </div>
                                    </div>
                                  </div>

                                  <div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
                                    <div class="thumbnail thumbnail_section_02">
                                      <a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote"><img alt="" src="<?php echo base_url(); ?>/images/icon-green-book.png" class="img-responsive"></a>
                                      <div class="caption text-center">
                                        <span class="caption-title"><a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote">Request a Free Quote</a></span>
                                        <p class="caption-text">The cost of our services varies. We offer both full and self service options. Requesting a quote is the best way to know how much it will actually cost you. <a href="#" class="launchContactModalQuote" data-toggle="modal" data-target="#modalFreeQuote">Request a FREE quote.</a></p>

                                      </div>
                                    </div>
                                  </div>
                               </div>

                </div>  <!-- section 02 end -->