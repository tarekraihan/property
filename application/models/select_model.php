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

	
}