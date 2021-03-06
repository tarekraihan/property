<?php

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $table='tbl_property_type';
    $id_field='property_type_id';
    $this->delete_model->Delete_Single_Row($id,$table,$id_field);

}
?>

    <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2><i class="glyphicon glyphicon-edit"></i> Insert Property Type</h2>

                
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
                        <label for="exampleInputEmail1">Property Type </label>
                        <input type="text" name="txtProperty_Type" class="form-control" id="exampleInputEmail1" placeholder="Write Contry">
                    </div>
                    
                    <div class="form-group">
                        <label class="red"><?php echo form_error('txtProperty_Type');?></label>
                        
                    </div>
				  <button type="submit" class="btn btn-default">Save</button>
                </form>

            </div>
        </div>
    </div>
    
    <div class="box col-md-5">
        <div class="box-inner">
            <div class="box-header well" data-original-title="">
                <h2> <i class="glyphicon glyphicon-th-list"></i> Property Type</h2>
            </div>
            <div class="box-content">
                <table class="table">
                    <thead>
                    <tr>
                        <th>SL No</th>
                        <th>Property Type</th>
                        <th>Status</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php 
						$this->common_model->order_column = 'property_type_id';
						$this->common_model->table_name = 'tbl_property_type';
						$query=$this->common_model->select_all();
						$sl=1;
						foreach ($query->result() as $row)
						{
					?>
                    <tr>
                        <td><?php echo $sl; ?></td>
                        <td class="center"><?php echo $row->property_type_name;?></td>
                        <td class="center"><i class="glyphicon glyphicon-edit"></td>
                        <td class="center"><a href="?id=<?php echo $row->property_type_id;?>" onclick="return confirm(\'Are you really want to delete this item\')"><i class="glyphicon glyphicon-remove red"></a></td>
                        
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
