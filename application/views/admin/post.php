<script src='<?php echo base_url(); ?>js/jquery-1.9.0.min.js'></script>

<script>

$(document).ready(function(){
    $("#txtCountry").change(function(){
     var country_id=$("#txtCountry").val();
	 //alert(country_id);
     $.ajax({
          type:"POST",
          url:"<?php echo base_url();?>admin_panel/get_state/",
          data:{cid:country_id},
          success: function(response){
            // alert(response);
               $("#txtStates").html(response);
          }
   	 })
	});
	
	 $("#txtStates").change(function(){
     var states_id=$("#txtStates").val();
	 //alert(country_id);
     $.ajax({
          type:"POST",
          url:"<?php echo base_url();?>admin_panel/get_area/",
          data:{sid:states_id},
          success: function(response){
            // alert(response);
               $("#txtArea").html(response);
          }
   	 })
	});
});


</script>
    <div class="box col-md-10">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Property Post</h2>

                
            </div>
            <div class="box-content"  >
                   <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
						
						
					}
					
				   ?> 
               
             </div>
             
             <div class="box-content red"  >
                   <?php
						echo validation_errors(); 
				   ?> 
               
             </div>
            <div class="box-content">
                <form role="form"  action="" method="post" enctype="multipart/form-data">
                
                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Province Name</label>
                    <div class="controls">
                        <select pattern="[0-9]{1,3}" title="Select a country !!!" name="txtCountry" id="txtCountry" data-rel="chosen" class="form-control">
                            <option value="">Select Province</option>
							<?php 
                                $this->common_model->order_column = 'country_id';
                                $this->common_model->table_name = 'tbl_country';
                                $query=$this->common_model->select_all();
                                
                                foreach ($query->result() as $row)
                                {
                            ?>
                                <option value="<?php echo $row->country_id;?>"><?php echo $row->country_name;?></option>     
                            <?php
                                
                                }
                            ?>

                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Division Name</label>
                    <div class="controls">
                        <select pattern="[0-9]{1,3}" title="Select a State !!!" name="txtStates"  id="txtStates" data-rel="chosen" class="form-control" >
                            <option value="">Select Division</option>
                            
                                
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">City Name</label>
                    <div class="controls">
                        <select name="txtArea" name="txtArea"id="txtArea" data-rel="chosen" class="form-control">
                        	<option value="">Select City</option>
                        </select>
                    </div>
                </div>

                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Property Owner Name</label>
                    <div class="controls">
                        <select pattern="[0-9]{1,3}" title="Select a Property Owner Name !!!" name="txtOwenr" data-rel="chosen" class="form-control">
                            <option value="">Select Owner</option>
                            
                               <?php 
                                $this->common_model->order_column = 'customer_id';
                                $this->common_model->table_name = 'customer_profile';
                                $query=$this->common_model->select_all();
                                
                                foreach ($query->result() as $row)
                                {
                            ?>
                                <option value="<?php echo $row->customer_id;?>"><?php echo $row->first_name;?> <?php echo $row->last_name;?></option>     
                            <?php
                                
                                }
                            ?>
                        </select>
                    </div>
                </div>

               
               
                
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Property address</label>
                    <input type="text" class="form-control" id="txtPropertyAddress" name="txtPropertyAddress"  placeholder="Enter Property Address" value="<?php echo set_value('txtPropertyAddress');?>" pattern="[A-Za-z0-9.- ]{3,255}" title="Write a Property Address !!!">
                </div>
                
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Property Descriptions</label>
                     <textarea class="form-control" name="txtDescription" rows="6">
                   	  <?php echo set_value('txtDescription'); ?> 
                     </textarea>
                </div>
                
                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Property Type</label>
                    <div class="controls">
                        <select pattern="[0-9]{1,3}" title="Select a Property Type !!!" name="txtPropertyType" data-rel="chosen" class="form-control">
                            <option value="">Select Property Type</option>
                            
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
                </div>
                
                <div class="form-group col-md-6">
                    <label class="control-label" for="inputSuccess1">Property Used</label>
                    <div class="controls">
                        <select pattern="[0-9]{1,3}" title="Select a Property Used !!!" name="txtPropertyUsed" data-rel="chosen" class="form-control">
                            <option value="">Select Property Used</option>
                            
                                <?php 
                                $this->common_model->order_column = 'property_used_id';
                                $this->common_model->table_name = 'tbl_property_used';
                                $query=$this->common_model->select_all();
                                
                                foreach ($query->result() as $row)
                                {
                            ?>
                                <option value="<?php echo $row->property_used_id;?>"><?php echo $row->property_used_name;?></option>     
                            <?php
                                
                                }
                            ?>
                        </select>
                    </div>
                </div>
                
               <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Annual Tax</label>
                    <input type="text" class="form-control" id="txtAnnualTax" name="txtAnnualTax" value="<?php echo set_value('txtAnnualTax');?>" placeholder="Enter Annual Tax" pattern="[0-9]{1,12}" title="Enter only Numeric value !!">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Property Age</label>
                    <input type="text" class="form-control"id="txtPropertyAge" name="txtPropertyAge"placeholder="Enter Property Age" value="<?php echo set_value('txtPropertyAge');?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Exterior</label>
                    <input type="text" class="form-control" id="txtExterior" name="txtExterior" placeholder="Enter Exterior" value="<?php echo set_value('txtExterior');?>">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Floring</label>
                    <input type="text" class="form-control" id="txtFloring" name="txtFloring" value="<?php echo set_value('txtFloring');?>" placeholder="Enter floring" >
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Levels</label>
                    <input type="number" class="form-control" id="txtLevels" name="txtLevels"  value="<?php echo set_value('txtLevels');?>"  placeholder="Enter Levels">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Foundation</label>
                    <input type="text" class="form-control" id="txtFoundation" value="<?php echo set_value('txtFoundation');?>"  name="txtFoundation" placeholder="Enter Foundation">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Heatmethod</label>
                    <input type="text" class="form-control" id="txtHeatmethod" value="<?php echo set_value('txtHeatmethod');?>"  name="txtHeatmethod" placeholder="Enter Heatmethod">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Heat Source</label>
                    <input type="text" class="form-control" id="txtHeatSource" value="<?php echo set_value('txtHeatSource');?>"  name="txtHeatSource" placeholder="Enter Heat Source">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Garage</label>
                    <input type="text" class="form-control" id="txtGarage" value="<?php echo set_value('txtGarage');?>" name="txtGarage" placeholder="Enter Garage">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Water Source</label>
                    <input type="text" class="form-control" id="txtWaterSource" value="<?php echo set_value('txtWaterSource');?>" name="txtWaterSource" placeholder="Enter Water Source">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Interior</label>
                    <input type="text" class="form-control" id="txtInterior"  value="<?php echo set_value('txtInterior');?>" name="txtInterior" placeholder="Enter Interior">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id="txtPrice" name="txtPrice"   value="<?php echo set_value('txtPrice');?>" placeholder="Enter Price">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Bedroom No</label>
                    <input type="text" class="form-control" id="txtBedroom" name="txtBedroom" value="<?php echo set_value('txtBedroom');?>" placeholder="Enter Bedroom No">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Bathroom No</label>
                    <input type="text" class="form-control" id="txtBathroom" value="<?php echo set_value('txtBathroom');?>" name="txtBathroom" placeholder="Enter Bathroom No">
                </div>
                
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Feature Image</label>
                    <input type="file"  class="form-control" id="image" name="image"/>
                </div>
                    
                 <div class="form-group col-md-6">
                  <label for="exampleInputEmail1">Feature Post</label>
                    <label class="form-control" for="exampleInputEmail1">Is Feature Post <input type="checkbox"  id="inlineCheckbox1" name="feature_post" /> </label>
                     
                </div>
                
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
    <!--/span-->

