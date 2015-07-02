<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cities extends CI_Model {
      function __construct() {
        parent::__construct();
    }
    // Count all record of table "contact_info" in database.
      public function record_count() {
        return $this->db->count_all("tbl_area");
    }
    
    // Fetch data according to per_page limit.
    public function fetch_data($limit, $id) {
		//$sql="SELECT a.area_id,a.area_name,b.state_name,c.country_name FROM tbl_area as a inner join tbl_states as b on a.state_id=b.states_id inner join tbl_country as c on b.country_id=c.country_id WHERE a.area_id='$id'  ORDER BY a.area_id DESC LIMIT $limit";
		//$query=$this->db->query($sql);
		
        $this->db->limit($limit);
        $this->db->where('area_id', $id);
        $query = $this->db->get("tbl_area");
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
         
            return $data;
        }
        return false;
   }
}
?>