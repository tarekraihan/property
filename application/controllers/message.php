<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : Message controller                *
	 * Start Date : 1-07-2015                     *
     * Last Update : 1-07-2015                    *
	 **********************************************/
	function customer_message($msg='')//Insert Information and create user name and Password----
    {
		if($msg == 'success'){
			$data['feedback'] = 'Thank you</div>';
		}else if($msg == 'error')
		{
			$data['feedback'] = 'Problem to send message !!!';
		}
		
		
		//-----Form Validation-------
		  $this->form_validation->set_rules('txtfirst_name','First Name', 'trim|required|min_length[4]|max_length[40]|xss_clean');
		  $this->form_validation->set_rules('txtlast_name','Last Name', 'trim|required|min_length[4]|max_length[40]|xss_clean');
     	  $this->form_validation->set_rules('txtEmail','Email Address', 'trim|required|min_length[7]|max_length[50]|xss_clean');
       	  $this->form_validation->set_rules('txtphone','Phone', 'trim|required|min_length[4]|max_length[15]|xss_clean');
		  $this->form_validation->set_rules('txtpostalCode','Postal Code', 'trim|required|min_length[4]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('txtcontactMessage','Message ', 'trim|required|min_length[4]|xss_clean');
        if ($this->form_validation->run() == FALSE)
        {
			$data['title']="Home";
			$this->load->view('header_post',$data);
			$this->load->view('home');
			$this->load->view('footer_home');
			$this->load->view('footer2');
			
        }
        else
        {
            
				//$rand=substr(str_shuffle(str_repeat('ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789',5)),0,6);
			

            $this->common_model->data=array(        //Receive form data in post method---
                'first_name'=>$this->input->post('txtfirst_name'),
                'last_name'=>$this->input->post('txtlast_name'),
                'email_address'=>$this->input->post('txtEmail'),
				'phone'=>$this->input->post('txtphone'),
                'postalcode'=>$this->input->post('txtpostalCode'),
                'message_body'=>$this->input->post('txtcontactMessage'),
               
                
            );
			
			
			$name=$this->input->post('txtfirst_name')." ".$this->input->post('txtlast_name');
			$email=$this->input->post('txtEmail');
			$phone=$this->input->post('txtphone');
			$postalCode=$this->input->post('txtpostalCode');
			$message_body=$this->input->post('txtcontactMessage');
           
            $code="<!DOCTYPE HTML>
			<html>
			<head>
			<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
			<title>Vistamaison</title>
			</head>
			
			<body style=' font-family:Georgia, Times, serif; font-size:14px; '>
				<h3>Name : ".$name."</h3>
				<h4>Email : ".$email."</h4>
				<h4>Phone : ".$phone."</h4>
				<h4>postalCode : ".$postalCode."</h4><br/>
				<p>
				".$message_body."
				</p>
			
			</body>
			</html>

			";
		
             $this->common_model->table_name='tbl_message';
            $result=$this->common_model->insert();
            if($result)
            {
		// Set SMTP Configuration
		$emailConfig = array(
		   'protocol' => 'smtp',
		    'smtp_host' => 'ssl://smtp.googlemail.com',
		    'smtp_port' => 465,
		    'smtp_user' => 'academyofheart00@gmail.com',
		    'smtp_pass' => 'academy2015',
		    'mailtype'  => 'html',
		    'charset'   => 'iso-8859-1',
		    'wordwrap' => TRUE
		);
		 
 
		  $this->load->library('email', $emailConfig );
		  // Sometimes you have to set the new line character for better result
			$this->email->set_newline("\r\n");
			$this->email->set_mailtype("html");
		
		  $this->email->from('academyofheart00@gmail.com', "Vistamaison");
		  $this->email->to('info@brossarddesign.com','Vistamaison');
		  //$this->email->cc("testcc@domainname.com");
		  $this->email->subject("Message from Client ");
		  $this->email->message($code);
		  $this->email->send();
	  
  
                redirect('message/customer_message/success');
            }else
            {
                redirect('message/customer_message/error');
            }

        }
		
    }
	
	
	
	
}