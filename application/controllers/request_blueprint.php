<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Request_Blueprint extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : Message controller                *
	 * Start Date : 1-07-2015                     *
     * Last Update : 1-07-2015                    *
	 **********************************************/
	function blueprint_request($msg='')//Insert Information and create user name and Password----
    {
		if($msg == 'success'){
			$data['feedback'] = 'Thank you</div>';
		}else if($msg == 'error')
		{
			$data['feedback'] = 'Problem to send message !!!';
		}
		
		
		//-----Form Validation-------
		  
     	  $this->form_validation->set_rules('txtEmail','Email Address', 'trim|required|min_length[7]|max_length[70]|xss_clean');
       	  
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

            $this->common_model->data=array(        //Receive form data in post method---
                'email_address'=>$this->input->post('txtEmail'),
               
            );
			
			
			$email=$this->input->post('txtEmail');
			
            $code="<!DOCTYPE HTML>
					<html>
					<head>
					<meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
					<title>Vistamaison</title>
					</head>
					
					<body style=' font-family:Georgia, Times, serif; font-size:14px; '>
						<h3>A Blueprint Request From Vistamaison Website </h3>
						
						<h4>Email : ".$email."</h4>
					
					
					</body>
					</html>
		
					";
		
             $this->common_model->table_name='tbl_blueprint_request';
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
		
		  $this->email->from('academyofheart00@gmail.com', " Vistamaison");
		  $this->email->to('info@brossarddesign.com',' Vistamaison');
		  //$this->email->cc("testcc@domainname.com");
		  $this->email->subject("Blueprint Request from Client ");
		  $this->email->message($code);
		  $this->email->send();
	  
  
                redirect('request_blueprint/blueprint_request/success');
            }else
            {
                redirect('request_blueprint/blueprint_request/error');
            }

        }
		
    }
	
	
	
	
}