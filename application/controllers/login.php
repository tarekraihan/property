<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {


	public function login_validation()
    {
        $this->form_validation->set_rules('login_email','User Name', 'trim|required|min_length[5]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('password','Password', 'trim|required|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('en/index');
           //$this->load->view('login');
		   
		  // echo "sorry";
        }
        else
        {
            
            $data['email_address']=$_POST['login_email'];
            $data['password']=$_POST['password'];

            $result=$this->registration_model->check_user($data);


            if($result)
            {
                $data['customer_id']=$result->customer_id;

                
                    $sdata['email_address']=$result->email_address;
                    $sdata['first_name']=$result->first_name;
                    $sdata['last_name']=$result->last_name;
                    $sdata['password']=$result->password;
                    
                    $this->session->set_userdata($sdata);

                    
                    redirect('en/dashboard');
                

            }
            else
            {

                $sdata['error']="User Name and Password Not Correct!!";
                $this->session->set_userdata($sdata);
                redirect('en/index');
            }

        }
    }
	
	public function admin_login()
    {
        $this->form_validation->set_rules('txtEmail','Email Address', 'trim|required|min_length[5]|max_length[30]|xss_clean');
        $this->form_validation->set_rules('txtPassword','Password', 'trim|required|min_length[6]|max_length[12]');

        if ($this->form_validation->run() == FALSE)
        {
            redirect('admin_panel/index');

        }
        else
        {
            
            $data['email_address']=$this->input->post('txtEmail');
            $data['password']=$this->input->post('txtPassword');

            $result=$this->registration_model->check_admin_user($data);


            if($result)
            {
                	$sdata['user_id']=$result->user_id;

                
                    $sdata['email_address']=$result->email_address;
                    $sdata['first_name']=$result->first_name;
                    $sdata['last_name']=$result->last_name;
                    $sdata['user_role_id']=$result->user_role_id;
                    $sdata['password']=$result->password;
                    $this->session->set_userdata($sdata);

                    
                    redirect('admin_panel/dashboard');
                

            }
            else
            {

                $sdata['error']="User Name and Password Not Correct!!";
                $this->session->set_userdata($sdata);
                redirect('admin_panel/index');
            }

        }
    }
	
	public function log_out()
    {
        

        $this->session->unset_userdata();
        $this->session->sess_destroy();
		
		redirect('en/index');
    }
	public function admin_log_out()
    {
        

        $this->session->unset_userdata();
        $this->session->sess_destroy();
		
		redirect('admin_panel');
    }
	
}