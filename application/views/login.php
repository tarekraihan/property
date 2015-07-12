<div class="conatainer no-padding no-margin ">
	
	<div class="row no-margin">
	<div class="container">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
					<div class="login">
                        <div class="omb_login">
                            <h3 class="omb_authTitle caption-title">Login or <a href="<?php echo base_url(); ?>register/customer_registration/">Register</a></h3>
                            <div class="row omb_row-sm-offset-3 omb_socialButtons text-center login-social">
                                <a href="https://www.facebook.com/" target="_blank"><img class="text-center" src="<?php echo base_url(); ?>/images/facebook.png"></a>
                                <a href="https://www.linkedin.com/nhome/" target="_blank"><img class="text-center" src="<?php echo base_url(); ?>/images/linkedin.png"></a>
                            </div>

                            <div class="row omb_row-sm-offset-3 omb_loginOr">
                                <div class="col-xs-12 col-sm-6">
                                    <hr class="omb_hrOr">
                                    <span class="omb_spanOr">or</span>
                                </div>
                            </div>

                            <div class="row omb_row-sm-offset-3">
							
                                <div class="col-xs-12 col-sm-6">	
                                    <form class="omb_loginForm" action="<?php echo base_url(); ?>login/login_validation/" autocomplete="off" method="POST">
                                    	<span class="help-block" style="color:#860F12;">
										<?php
										$feedback=$this->session->userdata('error');
										if(isset($feedback)){echo $feedback;}
										$this->session->unset_userdata('error');
										?>
                            			</span>
                                  
                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                                            <input class="form-control" placeholder="email address" name="login_email" id="email" type="text">
                                        </div>
                                        <span class="help-block"></span>

                                        <div class="input-group">
                                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock" aria-hidden="true"></span></span>
                                            <input class="form-control" placeholder="Password" name="password" id="password_input" type="password">
                                        </div>
                                        <span class="help-block" style="display: none;">Password error</span>

                                        <div class="text-center"><button class="btn btn-green" type="submit" name="btnLogin" style="margin-top: 10px;">Login</button></div>
                                    </form>
                                </div>
                            </div>
                              
							<p class="text-center padding_bottom_20"> <a href="/start/reset">Forgot password?</a></p>
    	
                        </div>
					</div>
		</div>
		
		<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
			<img src="<?php echo base_url(); ?>images/monitor.png"/>
		</div>
    </div>
	</div>
	
</div>   
        