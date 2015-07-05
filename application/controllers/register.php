<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : registration controller           *
	 * Start Date : 10-05-2015                    *
     * Last Update : 10-05-2015                   *
	 **********************************************/
	function customer_registration($msg='')//Insert Information and create user name and Password----
    {
		if($msg == 'success'){
			$data['feedback'] = '<div class="success">Successfully Registered !!</div>';
		}else if($msg == 'error')
		{
			$data['feedback'] = '<div class="error">Problem to registration !!!</div>';
		}
		
		
		//-----Form Validation-------
      
        $this->form_validation->set_rules('register_email','Email Address', 'trim|required|min_length[7]|max_length[30]|xss_clean|valid_email');
        $this->form_validation->set_rules('register_first','First Name', 'trim|required|min_length[4]|max_length[80]|xss_clean|callback_alpha_dash_space');
        $this->form_validation->set_rules('register_last','Last Name', 'trim|required|min_length[4]|max_length[80]|xss_clean|callback_alpha_dash_space');
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
                'email_address'=>$this->input->post('register_email'),
                'first_name'=>$this->input->post('register_first'),
                'last_name'=>$this->input->post('register_last'),
                'zip_code'=>$this->input->post('register_postalzip'),
                'area_code'=>$this->input->post('hm_area'),
                'phone_start'=>$this->input->post('hm_start'),
                'phone_end'=>$this->input->post('hm_end'),
                'password'=>md5($this->input->post('password')),
				 'status'=>'1',
                
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