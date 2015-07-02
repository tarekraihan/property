<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='tbl_area';
    $id_field='area_id';
    $this->delete_model->Delete_Single_Row($id,$table,$id_field);

}
?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

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
               $("#txtState").html(response);
          }
   	 })
	});
});


</script>

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Insert City</h2>

            </div>
            <div class="box-content"  >
                   <?php
			
				   //-----Display Success or Error message---
					if(isset($feedback)){
						echo $feedback;
					}
				   ?> 
               
             </div>
            <div class="box-content">
                <form role="form"  action="<?php echo base_url(); ?>admin_panel/area/" method="post">
                <div class="control-group">
                    <label class="control-label" for="selectError2">Province Name</label>
						
                    <div class="controls">
                        <select name="txtCountry" data-placeholder="Your Favorite Football Team" id="txtCountry" data-rel="chosen" class="form-control">
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
                 <div class="form-group">
                        <label class="red"><?php echo form_error('txtCountry');?></label>
                        
                    </div>
                <div class="control-group">
                    <label class="control-label" for="selectError2">Division Name</label>

                    <div class="controls">
                        <select name="txtState"  id="txtState"class="form-control">
                        <option value='' >--Select One--</option>
                        </select>
                    </div>
               	 </div>
                 <div class="form-group">
                        <label class="red"><?php echo form_error('txtState');?></label>
                        
                    </div>
                 
                    <div class="form-group">
                        <label for="exampleInputEmail1">City Name</label>
                        <input type="text" name="txtArea" class="form-control" id="exampleInputEmail1" placeholder="Write City">
                    </div>
                    <div class="form-group">
                        <label class="red"><?php echo form_error('txtArea');?></label>
                        
                    </div>
                    
				  <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>
    </div>
    
    

    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2> <i class="glyphicon glyphicon-th-list"></i> City List</h2>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>City Name</th>
                        <th>Division</th>
                        <th>Province</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
						
						//$query=$this->select_model->Select_Area_With_State_With_Country();
						
						$sl=1;
						foreach ($results as $row)
						{
					?>
                    <tr>
                        <td><?php echo $sl; ?></td>
                        <td class="center"><?php echo $row->area_name;?></td>
                        <td class="center"><?php echo $row->area_id;?></td>
                        <td class="center"><?php echo $row->state_id;?></td>
                        <td class="center"><i class="glyphicon glyphicon-edit"></td>
                        <td class="center"><a href="?id=<?php echo $row->area_id;?>" onclick="return confirm(\'Are you really want to delete this item\')"><i class="glyphicon glyphicon-remove red"></a></td>
                        
                    </tr>
                    <?php
						 $sl++;
						}
					?>
                    </tbody>
                </table>
                <ul class="pagination pagination-centered">
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li><a href="#">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
        <!--/span-->

      