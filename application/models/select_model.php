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
		$sql="SELECT a.*, b.first_name, b.last_name,b.area_code, b.phone_start,b.phone_end,c.state_name,d.property_type_name, e.property_used_name FROM `tbl_property` as a inner join customer_profile as b on a.property_owner_id=b.customer_id inner join tbl_states as c on a.state_id=c.states_id inner join tbl_property_type as d on a.property_type_id=d.property_type_id inner join tbl_property_used as e on a.property_use_id=e.property_used_id where a.property_id='$property_id'";
		$query=$this->db->query($sql);
		return $query;
		
	}

	
}