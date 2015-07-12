<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Vistamaison.com                  *
	 * Script : registration controller           *
	 * Start Date : 10-05-2015                    *
     * Last Update : 10-05-2015                   *
	 **********************************************/
	function customer_registration($msg='')//Insert Information and create user name and Password----
    {
		if($msg == 'success'){
			$data['feedback'] = '<div class="success">Please Check Your Email !!</div>';
		}else if($msg == 'error')
		{
			$data['feedback'] = '<div class="error">Problem to registration !!!</div>';
		}
		
		
		//-----Form Validation-------
      
        $this->form_validation->set_rules('register_email','Email Address', 'trim|required|min_length[7]|max_length[80]|xss_clean|valid_email');
        $this->form_validation->set_rules('register_first','First Name', 'trim|required|min_length[2]|max_length[80]|xss_clean|callback_alpha_dash_space');
        $this->form_validation->set_rules('register_last','Last Name', 'trim|required|min_length[2]|max_length[80]|xss_clean|callback_alpha_dash_space');
		 $this->form_validation->set_rules('register_postalzip','Postal Code', 'trim|required|min_length[4]|max_length[10]|xss_clean');
        $this->form_validation->set_rules('hm_area','Area Code', 'trim|required|exact_length[3]|xss_clean');
		$this->form_validation->set_rules('hm_start','Phone Number', 'trim|required|exact_length[3]|xss_clean');
		$this->form_validation->set_rules('hm_end','Phone Number', 'trim|required|exact_length[4]|xss_clean');
        
        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('re_password','Retype Password', 'trim|required|min_length[6]|max_length[12]|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
			$data['title']="Member Registration";

            $this->load->view('header_post',$data);
			$this->load->view('register');
			$this->load->view('footer1');
			$this->load->view('footer2');
        }
        else
        {
            
            $this->common_model->data=array(        //Receive form data in post method---
                'email_address'=>strtolower($this->input->post('register_email')),
                'first_name'=>$this->input->post('register_first'),
                'last_name'=>$this->input->post('register_last'),
                'zip_code'=>$this->input->post('register_postalzip'),
                'area_code'=>$this->input->post('hm_area'),
                'phone_start'=>$this->input->post('hm_start'),
                'phone_end'=>$this->input->post('hm_end'),
                'password'=>md5($this->input->post('password')),
				 'status'=>'0',
                
            );
			
            $this->common_model->table_name='customer_profile';
            $result=$this->common_model->insert();
			
			$id=$this->db->insert_id();
			$name=$this->input->post('register_first').' '.$this->input->post('register_last');
			
			$email_address=strtolower($this->input->post('register_email'));
			
			$body="<!DOCTYPE HTML>
					<html>
					<head>
					<style>
						.link{color: green; font-size:25px;}
					</style>
					<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<title>Vistamaison</title>
					</head>
					
					<body style=' font-family:Georgia, Times, serif; font-size:14px; '>
						<h3>Welcome to  Vistamaison  </h3>
						<h4>Click bellow link for active your Vistamaison account</h4>
						<a class='link' href='".base_url()."register/email_verification/?customer_verification_id=".$id."'  target='_blank'>Vistamaison Account Activition</a>
						
						
					
					
					</body>
					</html>
		
					";

			
			
            if($result)
            {
				// Set SMTP Configuration
				$emailConfig = array(
				   'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
					'smtp_user' => 'tarekraihan.bd@gmail.com',
					'smtp_pass' => 'Turapagla@123',
					'mailtype'  => 'html',
					'charset'   => 'iso-8859-1',
					'wordwrap' => TRUE
				);
				 
		 
				  $this->load->library('email', $emailConfig );
				  // Sometimes you have to set the new line character for better result
					$this->email->set_newline("\r\n");
					$this->email->set_mailtype("html");
					
					
		  $this->email->from($email_address, "Vistamaison");
		  $this->email->to($this->input->post('txtEmail'),$this->input->post('txtName'));
		  //$this->email->cc("testcc@domainname.com");
		  $this->email->subject("Academy of Heart registration verifiaction Code");
		  $this->email->message($code);
		  $this->email->send();
				
				/*  $this->email->from('academyofheart00@gmail.com', " Vistamaison");
				  $this->email->to($email_address,$name);
				  //$this->email->bcc("info@brossarddesign.com");
				  $this->email->subject("Account Activition Email from  Vistamaison");
				  $this->email->message($body);
				  $this->email->send();*/
	
                redirect('register/customer_registration/success');
            }else
            {
                redirect('register/customer_registration/error');
            }

        }
		
    }
	
	public function email_verification()
	{
		$user_id=$_GET['customer_verification_id'];
		$this->common_model->data=array('status'=>'1');
		$this->common_model->where = array('customer_id'=>$user_id);
		$this->common_model->table_name='customer_profile';
		$result=$this->common_model->update();
		if($result)
				{
					redirect('en/start');
				}
				else
				{
					redirect('en/start');
				}
	}
	
}