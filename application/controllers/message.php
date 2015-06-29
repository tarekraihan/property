<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : Message  controller               *
	 * Start Date : 30-06-2015                    *
     * Last Update : 30-06-2015                   *
	 **********************************************/
	function customer_message($msg='')//Insert Information and create user name and Password----
    {
		if($msg == 'success'){
			$data['feedback'] = '<div class="success">Successfully Send !!</div>';
		}else if($msg == 'error')
		{
			$data['feedback'] = '<div class="error">Problem to send !!!</div>';
		}
		
		
		//-----Form Validation-------
      
        $this->form_validation->set_rules('register_email','Email Address', 'trim|required|min_length[7]|max_length[30]|xss_clean|valid_email|is_unique[customer_profile.email_address]');
        $this->form_validation->set_rules('register_first','First Name', 'trim|required|min_length[4]|max_length[80]|xss_clean|callback_alpha_dash_space');
        $this->form_validation->set_rules('register_last','Last Name', 'trim|required|min_length[4]|max_length[80]|xss_clean|callback_alpha_dash_space');
		 $this->form_validation->set_rules('register_postalzip','Postal Code', 'trim|required|min_length[4]|max_length[10]|xss_clean');
        $this->form_validation->set_rules('hm_area','Area Code', 'trim|required|exact_length[3]|xss_clean|is_natural');
		$this->form_validation->set_rules('hm_start','Phone Number', 'trim|required|exact_length[3]|xss_clean|is_natural');
		$this->form_validation->set_rules('hm_end','Phone Number', 'trim|required|exact_length[4]|xss_clean|is_natural');
        
        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[12]');
        $this->form_validation->set_rules('re_password','Retype Password', 'trim|required|min_length[6]|max_length[12]|matches[password]');

        if ($this->form_validation->run() == FALSE)
        {
			$data['title']="Member Registration";

            $this->load->view('header',$data);
			$this->load->view('register');
			$this->load->view('footer1');
			$this->load->view('footer2');
        }
        else
        {
            
            $this->common_model->data=array(        //Receive form data in post method---
                'email_address'=>$this->input->post('register_email'),
                'first_name'=>$this->input->post('register_first'),
                'last_name'=>$this->input->post('register_last'),
                'zip_code'=>$this->input->post('register_postalzip'),
                'area_code'=>$this->input->post('hm_area'),
                'phone_start'=>$this->input->post('hm_start'),
                'phone_end'=>$this->input->post('hm_end'),
                'password'=>md5($this->input->post('password')),
                
            );

            $this->common_model->table_name='customer_profile';
            $result=$this->common_model->insert();
            if($result)
            {
                redirect('register/customer_registration/success');
            }else
            {
                redirect('register/customer_registration/error');
            }

        }
		
    }
	
	}