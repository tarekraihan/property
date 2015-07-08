<?php

class Select_Model extends CI_Model
{
	public function __construct()
    {
        parent::__construct();
    }
	
	public function Select_State_With_Country()
	{
		$sql="SELECT a.states_id,a.state_name,b.country_name FROM tbl_states AS a INNER JOIN tbl_country AS b ON a.country_id=b.country_id ORDER BY a.states_id DESC";
		$query=$this->db->query($sql);
		return $query;
		
	}
	
	public function Select_Area_With_State_With_Country()
	{
		$sql="SELECT a.area_id,a.area_name,b.state_name,c.country_name FROM tbl_area as a inner join tbl_states as b on a.state_id=b.states_id inner join tbl_country as c on b.country_id=c.country_id ORDER BY a.area_id DESC";
		$query=$this->db->query($sql);
		return $query;
		
	}
	
	public function Select_Single_Property_Info($property_id)
	{
		$sql="SELECT a.*, b.customer_id, b.first_name, b.last_name,b.area_code, b.phone_start,b.phone_end,c.property_type_name,d.property_used_name,e.state_name FROM `tbl_property` as a inner join customer_profile as b on a.property_owner_id=b.customer_id inner join tbl_property_type as c on a.property_type_id=c.property_type_id inner join tbl_property_used as d on a.property_use_id=d.property_used_id inner join tbl_states as e on a.states_id=e.states_id where a.property_id='$property_id'";
		$query=$this->db->query($sql);
		return $query;
		
	}
	
	public function Select_Country_Info($id)
	{
		
		$sql="SELECT * From";
		
	}
	
	
	// Count all record of table "contact_info" in database.
      public function record_count() {
        return $this->db->count_all("tbl_area");
    }
    
    // Fetch data according to per_page limit.
    public function fetch_data($limit, $offset) {
		$sql="SELECT a.area_id,a.area_name,b.state_name,c.country_name FROM tbl_area as a inner join tbl_states as b on a.state_id=b.states_id inner join tbl_country as c on b.country_id=c.country_id  ORDER BY a.area_id ASC LIMIT $offset, $limit";
		$query=$this->db->query($sql);
		
        //$this->db->limit($limit);
        //$this->db->where('area_id', $id);
        //$query = $this->db->get("tbl_area");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
         
            return $data;
        }
        return false;
   }
   
  /* public function Select_Single_Row($id,$table,$id_field){
	   $sql="SELECT * FROM customer_profile WHERE $id_field='$id'";
		$query=$this->db->query($sql);
		$row=$query->result_array();
		return $row;
	   
	   }*/
	 public function  Select_Single_Row($id,$table,$id_field)
    {
        $result=mysql_query("SELECT * FROM `$table` WHERE `$id_field`='$id'");
        $data=mysql_fetch_array($result);
        return $data;
    }
	public function Select_Single_Property_Info1($property_id)
	{
		$sql="SELECT a.*, b.customer_id, b.first_name, b.last_name,b.area_code, b.phone_start,b.phone_end,c.property_type_name,d.property_used_name,e.state_name FROM `tbl_property` as a inner join customer_profile as b on a.property_owner_id=b.customer_id inner join tbl_property_type as c on a.property_type_id=c.property_type_id inner join tbl_property_used as d on a.property_use_id=d.property_used_id inner join tbl_states as e on a.states_id=e.states_id where a.property_id='$property_id'";
		
		$result=mysql_query($sql);
		$data=mysql_fetch_array($result);
        return $data;
		
	}
   

	
}