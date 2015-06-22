<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='tbl_states';
    $id_field='states_id';
    $this->delete_model->Delete_Single_Row($id,$table,$id_field);

}
?>

    <div class="box col-md-4">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Insert Division</h2>
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
                <form role="form"  action="" method="post">
                    
                    <div class="control-group">
                    <label class="control-label" for="selectError2">Province Name</label>

                    <div class="controls">
                        <select name="txtCountry" data-placeholder="Your Favorite Football Team" id="selectError2" data-rel="chosen" class="form-control">
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
                 <div class="form-group">
                        <label for="exampleInputEmail1">Division Name</label>
                        <input name="txtState" type="text" class="form-control" id="exampleInputEmail1" placeholder="Write Division Name">
                    </div>
                    <div class="form-group">
                        <label class="red"><?php echo form_error('txtState');?></label>
                        
                    </div>
				  <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>
    </div>
    
    

    <div class="box col-md-6">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2> <i class="glyphicon glyphicon-th-list"></i> Division List</h2>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>State/Province</th>
                        <th>Division Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    <?php 
						
						$query=$this->select_model->Select_State_With_Country();
						
						$sl=1;
						foreach ($query->result() as $row)
						{
					?>
                    <tr>
                        <td><?php echo $sl; ?></td>
                        <td class="center"><?php echo $row->country_name;?></td>
                        <td class="center"><?php echo $row->state_name;?></td>
                        <td class="center"><a href="<?php echo base_url(); ?>admin_panel/edit_country?id=<?php echo $row->states_id;?>"><i class="glyphicon glyphicon-edit"></a></td>
                        <td class="center"><a href="?id=<?php echo $row->states_id;?>" onclick="return confirm(\'Are you really want to delete this item\')"><i class="glyphicon glyphicon-remove red"></a></td>
                        
                    </tr>
                    <?php
						 $sl++;
						}
					?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
        <!--/span-->

       