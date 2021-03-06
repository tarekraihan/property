<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EN extends CI_Controller {

	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : Main controller                   *
	 * Start Date : 10-05-2015                    *
     * Last Update : 10-05-2015                   *
	 **********************************************/
	public function index()
    {
		$data['title']="Home";
        $this->load->view('header_post',$data);
		$this->load->view('home');
        $this->load->view('footer_home');
		$this->load->view('footer2');
    }
	public function buyer()
    {
		$data['title']="Buyer";
        $this->load->view('header_post',$data);
		$this->load->view('buyer');
        $this->load->view('footer1');
	    $this->load->view('footer2');
    }
	public function seller()
    {
		$data['title']="Seller";
        $this->load->view('header_post',$data);
		$this->load->view('seller');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function mortgage()
    {
		$data['title']="Mortgage";
        $this->load->view('header_post',$data);
		$this->load->view('mortgage');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	
	public function sell_listing()
    {
		$data['title']="Sell Listing";
		$this->load->view('header_post',$data);
		$this->load->view('sell_listing');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function register()
    {
		$data['title']="Member Registration";
        $this->load->view('header_post',$data);
		$this->load->view('register');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function profile()
    {
		$data['title']="Member Dashboard";
		$this->load->view('header_dashboard',$data);
		$this->load->view('dashboard_profile');
		$this->load->view('footer2');
    }
	
	public function dashboard()
    {
        $this->load->view('header_dashboard');
		$this->load->view('dashboard_main');
        $this->load->view('footer2');
    }
	
	
    public function dashboard_mess()
    {
        $this->load->view('header_dashboard');
		$this->load->view('dashboard_mass');
        $this->load->view('footer2');
    }
    
    
	
	public function listingpage()
    {
		$data['title']="property List";
        $this->load->view('header_list_post',$data);
		$this->load->view('listingpage');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
    
    public function postpage()
    {
        $data['title']="postpage";
        $this->load->view('header_post_details',$data);
        $this->load->view('postpage');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function rent()
    {
		$data['title']="Rent";
		$this->load->view('header_post',$data);
		$this->load->view('rent');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	
	
	
	public function dashboard_general_setting($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
				
				
			$this->form_validation->set_rules('name_first','First Name','trim|required|min_length[2]|max_length[40]|xss_clean');
			$this->form_validation->set_rules('name_last','Last Name','trim|required|min_length[2]|max_length[40]|xss_clean');
			$this->form_validation->set_rules('country','Country','trim|required');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Member Dashboard";
				$this->load->view('header_dashboard',$data);
				$this->load->view('dashboard_general_setting');
				$this->load->view('footer2');
			}
			else
			{
				
				$this->common_model->data=array(
				'first_name'=>$this->input->post('name_first'),
				'last_name'=>$this->input->post('name_last'),
				'country'=>$this->input->post('country'),
				'zip_code'=>$this->input->post('postalzip'),
				'experiance'=>$this->input->post('usertype'),
			
				);
				$this->common_model->table_name='customer_profile';
				$this->common_model->where=array('customer_id'=>$this->input->post('userId'));
				$result=$this->common_model->update();
												
				if($result)
				{
					redirect('en/dashboard_general_setting/success');
				}
				else
				{
					redirect('en/dashboard_general_setting/error');
				}
	 
			}	
		}
    }

	
	public function dashboard_Contact_Information_Settings($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
				
				
			
			$this->form_validation->set_rules('mobile','mobile','trim|required|max_length[15]');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Member Dashboard";
				$this->load->view('header_dashboard',$data);
				$this->load->view('dashboard_Contact_Information_Settings');
				$this->load->view('footer2');
			}
			else
			{
				
				$this->common_model->data=array(
				'area_code'=>$this->input->post('hm_area'),
				'phone_start'=>$this->input->post('hm_start'),
				'phone_end'=>$this->input->post('hm_end'),
				'email_address'=>$this->input->post('email'),
				'mobile_no'=>$this->input->post('mobile'),
				
			
				);
				$this->common_model->table_name='customer_profile';
				$this->common_model->where=array('customer_id'=>$this->input->post('userId'));
				$result=$this->common_model->update();
												
				if($result)
				{
					redirect('en/dashboard_Contact_Information_Settings/success');
				}
				else
				{
					redirect('en/dashboard_Contact_Information_Settings/error');
				}
	 
			}	
		}
		
    }
	
	public function dashboard_password_setting($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully Change !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
				
			$this->form_validation->set_rules('password_input','Password', 'trim|required|min_length[6]|max_length[12] | xss_clean');
        	$this->form_validation->set_rules('password_confirm','Retype Password', 'trim|required|min_length[6]|max_length[12]|matches[password_input]| xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Change Password";
				$this->load->view('header_dashboard',$data);
				$this->load->view('dashboard_password_setting');
				$this->load->view('footer2');
			}
			else
			{
				
				
				$this->common_model->data=array(
				'password'=>md5($this->input->post('password_input')) ,
				
				);
				$this->common_model->table_name='customer_profile';
				$this->common_model->where=array('customer_id'=>$this->input->post('userId'));
				$result=$this->common_model->update();
												
				if($result)
				{
					redirect('en/dashboard_password_setting/success');
				}
				else
				{
					redirect('en/dashboard_password_setting/error');
				}
	 
			}	
		}
		
    }
	
	public function dashboard_demographic_survey()
    {
		$data['title']="Member Dashboard";
		$this->load->view('header_dashboard',$data);
		$this->load->view('dashboard_demographic_survey');
		$this->load->view('footer2');
    }
	
	
	
	public function privacypolicy()
    {
		$data['title']="Privacy Policy List";
        $this->load->view('header_list_post',$data);
		$this->load->view('privacypolicy');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function terms_of_use()
    {
		$data['title']="Terms of Use";
		$this->load->view('header_dashboard',$data);
		$this->load->view('terms_of_use');
		$this->load->view('footer2');
    }


public function help()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_contact()// Not include
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_contact');
        $this->load->view('footer2');
    }
	
	public function help_change_email()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_change_email');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_change_profile_picture()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_change_profile_picture');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_change_password()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_change_password');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_change_name()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_change_name');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_delete_account()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_delete_account');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_bookmark_a_listing()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_bookmark_a_listing');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_contact_property_seller()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_contact_property_seller');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_Income_property()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_Income_property');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_different_property_types()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_different_property_types');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_continue_a_saved_search()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_continue_a_saved_search');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function help_save_search()
    {
		$data['title']="Help";
        $this->load->view('header_list_post',$data);
		$this->load->view('help_save_search');
		$this->load->view('footer1');
        $this->load->view('footer2');
    }
	
	public function contact_office_page()
    {
		$data['title']="Contact An Office";
        $this->load->view('header_post',$data);
		$this->load->view('contact_office_page');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	
	public function upload_image($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully Uploaded !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Uploaded !!</h4>';
			}
				
			$this->form_validation->set_rules('image','Image', 'trim');
        	
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Member Dashboard";
				$this->load->view('header_dashboard',$data);
				$this->load->view('dashboard_upload_image');
				$this->load->view('footer2');
			}
			else
			{

				$upload_result = $this->do_upload('./images/member/','image');
				$this->common_model->data=array('image_name'=>$upload_result['file_name'],
			);
				$this->common_model->table_name='customer_profile';
				$this->common_model->where=array('customer_id'=>$this->input->post('userId'));
				$result=$this->common_model->update();
												
				if($result)
				{
					redirect('en/upload_image/success');
				}
				else
				{
					redirect('en/upload_image/error');
				}
	 
			}	
			
		}
    }
	
	public function do_upload($path,$field=''){
		$this->load->library('upload');
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '2096';
		$config['file_name'] = '1';
		
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload($field)){
			return $this->upload->display_errors();
		}else{
			return $this->upload->data();
		}
	}
	
	public function message()
    {
		$data['title']="Member Dashboard";
		$this->load->view('header_dashboard',$data);
		$this->load->view('massage');
		$this->load->view('footer2');
    }
	
	public function massage_details()
    {
		$data['title']="Member Dashboard";
		$this->load->view('header_dashboard',$data);
		$this->load->view('massage_details');
		$this->load->view('footer2');
    }
	
	public function alertpage()
    {
		$data['title']="Member Dashboard";
		$this->load->view('header_dashboard',$data);
		$this->load->view('alertpage');
		$this->load->view('footer2');
    }
	
	public function massage_send($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully send !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to send !!</h4>';
			}
				
			$this->form_validation->set_rules('txtSubject','Subject', 'trim|required|xss_clean');
			$this->form_validation->set_rules('message_text','Message', 'trim|required|xss_clean');
        	
			if ($this->form_validation->run() == FALSE)
			{
				
				$data['title']="Member Dashboard";
				$this->load->view('header_dashboard',$data);
				$this->load->view('massage_send');
				$this->load->view('footer2');
			}
			else
			{
				$this->common_model->data=array(
				'property_id'=>$this->input->post('property_id'),
                'property_sign'=>$this->input->post('property_sign'),
                'receiver_id'=>$this->input->post('seller_id'),
				'sender_id'=>$this->input->post('purchaser_id'),
                'send_date'=>$this->input->post('txtDate'),
                'subject'=>$this->input->post('txtSubject'),
				'message'=>$this->input->post('message_text'),
				);
				$this->common_model->table_name='ask_question';
				$result=$this->common_model->insert();
												
				if($result)
				{
					redirect('en/massage_send/success');
				}
				else
				{
					redirect('en/massage_send/error');
				}
			}
		}

    }
	
	public function offerpage($msg='')
    {
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfully send !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to send !!</h4>';
			}
				
			$this->form_validation->set_rules('price','price', 'trim|required|xss_clean|max_length[12]|is_natural');
			$this->form_validation->set_rules('deposit','deposit', 'trim|xss_clean|max_length[12]|is_natural');
        	$this->form_validation->set_rules('additional_message','Message', 'trim|xss_clean|max_length[254]');
			if ($this->form_validation->run() == FALSE)
			{
				
				$data['title']="Make an offer";
				//$this->load->view('header_dashboard_offerpage',$data);
				$this->load->view('header_dashboard',$data);
				$this->load->view('offerpage');
				$this->load->view('footer2');
			}
			else
			{
				$conditions=$this->input->post('offer_condition');
				$condi='';
				foreach ($conditions as $condition){
					$condi .= $condition.",";
					
					}
				$this->common_model->data=array(
				'property_sign'=>$this->input->post('property_sign'),
                'price'=>$this->input->post('price'),
				'property_id'=>$this->input->post('property_id'),
                'pre_qualified'=>$this->input->post('prequalified'),
				'closing_date'=>$this->input->post('txtClosingDate'),
				
                'condition'=>$condi,
				
                'aditional'=>$this->input->post('additional_message'),
				'offer_expire'=>$this->input->post('offerExpires'),
				'owner_id'=>$this->input->post('seller_id'),
                'message_subject'=>$this->input->post('subject'),
				'purchaser_id'=>$this->input->post('purchaser_id'),
				'purchaser_name'=>$this->input->post('purchaser_name'),
				'email_address'=>$this->input->post('purchaser_email'),
				'deposit'=>$this->input->post('deposit'),
				);
				$this->common_model->table_name='tbl_make_an_offer';
				$result=$this->common_model->insert();
												
				if($result)
				{
					redirect('en/offerpage/success');
				}
				else
				{
					redirect('en/offerpage/error');
				}
			}
		}
		
		
    }
	
	
	public function bookmark()
    {
		$data['title']="bookmark";
		$this->load->view('header_dashboard',$data);
		$this->load->view('bookmark');
		$this->load->view('footer2');
    }
	public function bookmarking()
	{
		if(!$this->session->userdata('email_address')){
			redirect('en/start');
		}else{
			
			if(isset($_GET['property_id']))
			{
				$property_id=$_GET['property_id'];
				$customer_id=$this->session->userdata('customer_id');
				$this->common_model->data=array(
				
                'customer_id'=>$customer_id,
				'property_id'=>$property_id,
				'status'=>1,
                
				);
				$this->common_model->table_name='tbl_bookmark_property';
				$result=$this->common_model->insert();
				if($result)
				{
					redirect('en/bookmark/');
				}
				
			}
		
		}
	}
	
	public function start()
    {
		$data['title']="Login";
        $this->load->view('header_post',$data);
		$this->load->view('login');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }

}