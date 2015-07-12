<?php
//date_default_timezone_set('Asia/Dhaka');

/**********************************************
 * Developer : Tarek Raihan                   *
 * Project : Vistamaison.com                  *
 * Script : All Login & Attendance Query      *
 * Start Date :   13-06-2015                  *
 * Last Update : 10-07-2015                   *
 **********************************************/
class Registration_Model extends CI_Model {

	public function check_user($data)
	{
		
		$email_address=strtolower($data['email_address']);
        $password=md5($data['password']);
		
		$sql="select * from `customer_profile` where `email_address`='$email_address' and `password`='$password'";
		$select_result=$this->db->query($sql);
		$result=$select_result->row();
		return $result;
	}
	
	public function check_acitve($data)
	{
		$email_address=strtolower($data['email_address']);
        $password=md5($data['password']);
		
		$sql="select * from `customer_profile` where `email_address`='$email_address' and `password`='$password' and `status`='1'";
		$select_result=$this->db->query($sql);
		$result=$select_result->row();
		return $result;
	}
	
	public function check_admin_user($data)
	{
		
		$email_address=$data['email_address'];
        $password=md5($data['password']);
		
		$sql="select * from `tbl_user` where `email_address`='$email_address' and `password`='$password'";
		$select_result=$this->db->query($sql);
		$result=$select_result->row();
		return $result;
	}

    function admin_logout($array_items,$data)
    {
        $feedback=0;
        $user_id=$data['user_id'];
        $exit_time=$data['time'];
        $exit_date=$data["date"];
        $exit_meridiem = $data['meridiem'];
        $query="update attendance set exit_time='$exit_time',exit_meridiem='$exit_meridiem' where user_id='$user_id' and exit_date='$exit_date' and special_day_id = '0'";

        $result=$this->db->query($query);
        if($result)
        {
            $this->session->unset_userdata($array_items);
            $this->session->sess_destroy();
            $feedback=1;

        }
        return $feedback;
    }

    

    function change_password($data)
    {
        $user_id=$data['user_id'];
        $password=$data['new_password'];
        $sql="update user set password='$password' where user_id='$user_id'";
        $query=$this->db->query($sql);
        return $query;
    }

} 