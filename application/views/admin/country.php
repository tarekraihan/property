<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='tbl_country';
    $id_field='country_id';
    $this->delete_model->Delete_Single_Row($id,$table,$id_field);

}
?>

	 <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Insert province</h2>

                
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
                    <div class="form-group">
                        <label for="exampleInputEmail1">Province Name</label>
                        <input type="text" name="txtCountry" class="form-control"  placeholder="Write province">
                    </div>
                    <div class="form-group">
                        <label class="red"><?php echo form_error('txtCountry');?></label>
                        
                    </div>
				  <button type="submit" class="btn btn-primary">Save</button>
                </form>

            </div>
        </div>
    </div>
    
    
       
      <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2> <i class="glyphicon glyphicon-th-list"></i>Province List</h2>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Province</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    
                    <tbody>
                    <?php 
						$this->common_model->order_column = 'country_id';
						$this->common_model->table_name = 'tbl_country';
						$query=$this->common_model->select_all();
						$sl=1;
						foreach ($query->result() as $row)
						{
					?>
                    <tr>
                        <td><?php echo $sl; ?></td>
                        <td class="center"><?php echo $row->country_name;?></td>
                        <td class="center"><a href="<?php echo base_url(); ?>admin_panel/edit_country?id=<?php echo $row->country_id;?>"><i class="glyphicon glyphicon-edit"></a></td>
                        <td class="center"><a href="?id=<?php echo $row->country_id;?>" onclick="return confirm(\'Are you really want to delete this item\')"><i class="glyphicon glyphicon-remove red"></a></td>
                        
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

