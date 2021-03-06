<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_Panel extends CI_Controller {
	
	
	/**********************************************
	 * Developer : Tarek Raihan                   *
     * Developer Email : tarekraihan@yahoo.com    *
     * Project : Properyt guy                     *
	 * Script : Main controller                   *
	 * Start Date : 10-05-2015                    *
     * Last Update : 10-05-2015                   *
	 **********************************************/
	 
	 public function __construct() {
        parent:: __construct();
        $this->load->helper("url");

        $this->load->library("pagination");
    }
	
	
	public function index()
    {
		if($this->session->userdata('email_address')){
			redirect('admin_panel/dashboard');
		}else{
			$data['title']="Login";
			$this->load->view('admin/login',$data);
			
		}
    }
	
	
	public function dashboard()
    {	if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
		
			$data['title']="Dashboard";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/index');
			$this->load->view('admin/footer');
		}
    }
	
	public function property_post($msg='')
    {	
	
	if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
				
				$this->form_validation->set_rules('txtCountry','Country', 'trim|required|is_natural|xss_clean');
				$this->form_validation->set_rules('txtStates','State', 'trim|required|is_natural|xss_clean');
				$this->form_validation->set_rules('txtArea','Area', 'trim|required|is_natural|xss_clean');
				$this->form_validation->set_rules('txtOwenr','Owner', 'trim|required|is_natural|xss_clean');
				
				$this->form_validation->set_rules('txtPropertyAddress','Property Address','trim|required|min_length[2]|max_length[250]|xss_clean');
				$this->form_validation->set_rules('txtDescription','Property Description','trim|required|min_length[2]|max_length[1500]|xss_clean');
				$this->form_validation->set_rules('txtPropertyType','Property Type', 'trim|required|is_natural|xss_clean');
				$this->form_validation->set_rules('txtPropertyUsed','Property Used', 'trim|required|is_natural|xss_clean');
				$this->form_validation->set_rules('txtAnnualTax','Annual Tax','trim|required|is_natural|min_length[2]|max_length[12]|xss_clean');
				$this->form_validation->set_rules('txtPropertyAge','Property Age','trim|required|min_length[1]|max_length[25]|xss_clean');
				$this->form_validation->set_rules('txtExterior','Exterior','trim|required|min_length[2]|max_length[255]|xss_clean');
				$this->form_validation->set_rules('txtFloring','Floring','trim|required|min_length[2]|max_length[200]|xss_clean');
				$this->form_validation->set_rules('txtLevels','Levels','trim|required|min_length[1]|max_length[2]|xss_clean');
				$this->form_validation->set_rules('txtFoundation','Foundation','trim|required|min_length[2]|max_length[200]|xss_clean');
				$this->form_validation->set_rules('txtHeatmethod','Heat method','trim|required|min_length[2]|max_length[100]|xss_clean');
				$this->form_validation->set_rules('txtHeatSource','HeatSource','trim|required|min_length[2]|max_length[100]|xss_clean');
				$this->form_validation->set_rules('txtGarage','Garage','trim|required|min_length[2]|max_length[100]|xss_clean');
				$this->form_validation->set_rules('txtWaterSource','Water Source','trim|required|min_length[2]|max_length[100]|xss_clean');
				$this->form_validation->set_rules('txtInterior','Interior','trim|required|min_length[2]|max_length[100]|xss_clean');
				$this->form_validation->set_rules('txtPrice','Price','trim|required|min_length[2]|max_length[12]|is_natural|xss_clean');
				$this->form_validation->set_rules('txtBedroom','Bedroom','trim|required|min_length[1]|is_natural|max_length[12]|xss_clean');
				$this->form_validation->set_rules('txtBathroom','Bathroom','trim|required|min_length[1]|max_length[12]|is_natural|xss_clean');
				
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Property Post";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/post');
				$this->load->view('admin/footer');
			}
			else
			{
				$rand=substr(str_shuffle(str_repeat('0123456789',15)),0,6);
				$sign='#'.$rand;
				
				if($this->input->post('feature_post'))
				{
					$feature_post="1";
				}
				else
				{
					
					$feature_post="0";
				}
				
				$upload_result = $this->do_upload('./images/property/','image');
				$this->common_model->data=array(
				
				'states_id'=>$this->input->post('txtStates'),
                'area_id'=>$this->input->post('txtArea'),
                'property_owner_id'=>$this->input->post('txtOwenr'),
                'sign'=>$sign,
                'property_address'=>$this->input->post('txtPropertyAddress'),
                'description'=>$this->input->post('txtDescription'),
              
                'property_type_id'=>$this->input->post('txtPropertyType'),
                'property_use_id'=>$this->input->post('txtPropertyUsed'),
                'annual_tax'=>$this->input->post('txtAnnualTax'),
                'age'=>$this->input->post('txtPropertyAge'),
                'exterior'=>$this->input->post('txtExterior'),
                'floring'=>$this->input->post('txtFloring'),
                'leavels'=>$this->input->post('txtLevels'),
                'foundation'=>$this->input->post('txtFoundation'),
                'heatmethod'=>$this->input->post('txtHeatmethod'),
                'heat_source'=>$this->input->post('txtHeatSource'),
                'garage'=>$this->input->post('txtGarage'),
                'water_source' =>$this->input->post('txtWaterSource'),
				
				'interior'=>$this->input->post('txtInterior'),
                'price'=>$this->input->post('txtPrice'),
                'bedroom_no'=>$this->input->post('txtBedroom'),
                'bathroom_no'=>$this->input->post('txtBathroom'),
                'feature_post'=>$feature_post,
                'image_name'=>$upload_result['file_name']
				);
				$this->common_model->table_name='tbl_property';
				$result=$this->common_model->insert();
												
				if($result)
				{
					redirect('admin_panel/property_post/success');
				}
				else
				{
					redirect('admin_panel/property_post/error');
				}
	 
			}	
		}
		
    }
	
	public function do_upload($path,$field=''){
		$this->load->library('upload');
		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = '4096';
		$config['file_name'] = '1';
		
		$this->upload->initialize($config);
		
		if(!$this->upload->do_upload($field)){
			return $this->upload->display_errors();
		}else{
			return $this->upload->data();
		}
	}
	
	public function country($msg='')
    {	
		if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
				
				
			$this->form_validation->set_rules('txtCountry','Country','trim|required|callback_alpha_dash_space|min_length[2]|max_length[40]|xss_clean|is_unique[tbl_country.country_name]');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Province Post";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/country');
				$this->load->view('admin/footer');
			}
			else
			{
				
				$this->common_model->data=array('country_name'=>$this->input->post('txtCountry'));
				$this->common_model->table_name='tbl_country';
				$result=$this->common_model->insert();
												
				if($result)
				{
					redirect('admin_panel/country/success');
				}
				else
				{
					redirect('admin_panel/country/error');
				}
	 
			}	
		}
    }
	
	function alpha_dash_space($str)
    {
        return ( ! preg_match("/^([-a-zA-Z_ .-])+$/i", $str)) ? FALSE : TRUE;
    }
	
	public function state($msg='')
    {	
		if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
			$this->form_validation->set_rules('txtCountry','Country', 'trim|required|is_natural_no_zero|xss_clean');
			$this->form_validation->set_rules('txtState','State Name', 'trim|required|min_length[2]|max_length[40]|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Division Post";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/state');
				$this->load->view('admin/footer');
			}
			else
			{
				$this->common_model->data=array('state_name'=>$this->input->post('txtState'),'country_id'=>$this->input->post('txtCountry'));
				$this->common_model->table_name='tbl_states';
				$result=$this->common_model->insert();
				
				if($result)
				{
					redirect('admin_panel/state/success');
				}
				else
				{
					redirect('admin_panel/state/error');
				}
	 
			}		
			
		}
    }
	
	public function area($msg='')
    {	
		if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
			$this->form_validation->set_rules('txtCountry','Country', 'trim|required|is_natural_no_zero|xss_clean');
			$this->form_validation->set_rules('txtState','State', 'trim|required|is_natural_no_zero|xss_clean');
			$this->form_validation->set_rules('txtArea','Area Name', 'trim|required|min_length[2]|max_length[40]|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
				
				
				$config['base_url'] = base_url() . "admin_panel/area/";
				$config['total_rows'] = $this->select_model->record_count();;
				$config['per_page'] = "10";
				$config["uri_segment"] = 3;
				$choice = $config["total_rows"] / $config["per_page"];
				$config["num_links"] = floor($choice);
				$config['use_page_numbers'] = TRUE;


				//Link customization
				$config['full_tag_open'] = '<ul class="pagination pagination-centered">';
				$config['full_tag_close'] = '</ul>';
				$config['first_link'] = false;
				$config['last_link'] = false;
				$config['first_tag_open'] = '<li>';
				$config['first_tag_close'] = '</li>';
				$config['prev_link'] = 'Prev';
				$config['prev_tag_open'] = '<li class="prev">';
				$config['prev_tag_close'] = '</li>';
				$config['next_link'] = 'Next';
				$config['next_tag_open'] = '<li>';
				$config['next_tag_close'] = '</li>';
				$config['last_tag_open'] = '<li>';
				$config['last_tag_close'] = '</li>';
				$config['cur_tag_open'] = '<li class="active"><a href="#">';
				$config['cur_tag_close'] = '</a></li>';
				$config['num_tag_open'] = '<li>';
				$config['num_tag_close'] = '</li>';
				$this->pagination->initialize($config);		
				$page = ($this->uri->segment(3)) ? ($this->uri->segment(3)-1)*$config['per_page'] : 0;
        		$data["results"] = $this->select_model->fetch_data($config["per_page"], $page);
        		$data['pagination'] = $this->pagination->create_links();
				

				$data['title']="City Post";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/area');
				$this->load->view('admin/footer');
			}
			else
			{
				$this->common_model->data=array('state_id'=>$this->input->post('txtState'),'area_name'=>$this->input->post('txtArea'));
				$this->common_model->table_name='tbl_area';
				$result=$this->common_model->insert();
				
				if($result)
				{
					redirect('admin_panel/area/success');
				}
				else
				{
					redirect('admin_panel/area/error');
				}
			}
		}
    }
	
	public function property_type($msg='')
    {	
		if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
			
			$this->form_validation->set_rules('txtProperty_Type','Property Type Name', 'trim|required|min_length[2]|max_length[40]|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
				
			 
				$data['title']="Property Type Post";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/property_type');
				$this->load->view('admin/footer');
			}
			else
			{
				$this->common_model->data=array('property_type_name'=>$this->input->post('txtProperty_Type'));
				$this->common_model->table_name='tbl_property_type';
				$result=$this->common_model->insert();
				
				if($result)
				{
					redirect('admin_panel/property_type/success');
				}
				else
				{
					redirect('admin_panel/property_type/error');
				}
			}
			
		}
    }
	
	public function property_used($msg='')
    {	
			if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Save !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to Insert !!</h4>';
			}
			
			$this->form_validation->set_rules('txtProperty_used','Property Used', 'trim|required|min_length[2]|max_length[40]|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Property Used";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/property_used');
				$this->load->view('admin/footer');
			}
			else
			{
				$this->common_model->data=array('property_used_name'=>$this->input->post('txtProperty_used'));
				$this->common_model->table_name='tbl_property_used';
				$result=$this->common_model->insert();
				
				if($result)
				{
					redirect('admin_panel/property_used/success');
				}
				else
				{
					redirect('admin_panel/property_used/error');
				}
			}
		}
    }
	
	
	
	function get_state(){
        $country_id=$this->input->post('cid');
		//$query = $this->db->query("SELECT * FROM tbl_states WHERE country_id=".$country_id);
		
		$this->common_model->order_column = 'states_id';
        $this->common_model->table_name = 'tbl_states';
		$this->common_model->where = array('country_id'=>$country_id);
        $query=$this->common_model->select_all();
								
								
		
        $option = "<option value='' >Select One</option>";
        foreach($query->result() as $state){
            $option .= "<option value='".$state->states_id."'>".$state->state_name."</option>";
        }
        echo $option;
		
    }
	
	function get_area(){
        $state_id=$this->input->post('sid');
		//$query = $this->db->query("SELECT * FROM tbl_states WHERE country_id=".$country_id);
		
		$this->common_model->order_column = 'area_id';
        $this->common_model->table_name = 'tbl_area';
		$this->common_model->where = array('state_id'=>$state_id);
        $query=$this->common_model->select_all();
								
								
		
        $option = "<option value='' >Select One</option>";
        foreach($query->result() as $area){
            $option .= "<option value='".$area->area_id."'>".$area->area_name."</option>";
        }
        echo $option;
		
    }
	
	public function edit_province($msg='')
	{
		
		if(!$this->session->userdata('email_address')){
			redirect('admin_panel');
		}else{
			
			if($msg == 'success'){
			$data['feedback'] = '<h4 style="text-align:center; " class="animated green flipInX">Successfull Update !!</h4>';
			}else if($msg == 'error')
			{
				$data['feedback'] = '<h4 style="text-align:center; " class="animated red flipInX">Problem to update !!</h4>';
			}
			
			$this->form_validation->set_rules('txtCountry','Edit Province', 'trim|required|min_length[2]|max_length[40]|xss_clean');
			if ($this->form_validation->run() == FALSE)
			{
			 
				$data['title']="Edit Province";
				$this->load->view('admin/header',$data);
				$this->load->view('admin/edit_country');
				$this->load->view('admin/footer');
			}
			else
			{
				$this->common_model->data=array('country_name'=>$this->input->post('txtCountry'));
				$this->common_model->where = array('country_id'=>$this->input->post('txtCountryID'));
				$this->common_model->table_name='tbl_country';
				$result=$this->common_model->update();
				
				if($result)
				{
					redirect('admin_panel/edit_province/success');
				}
				else
				{
					redirect('admin_panel/edit_province/error');
				}
			}
		}
		
		
	}
	
	
	public function pagination()
	{
		 //$config = array();
       $config["base_url"] = base_url() . "admin_panel/pagination";
        $total_row = $this->cities->record_count();
        $config["total_rows"] = $total_row;
        $config["per_page"] = 1;
        $config['use_page_numbers'] = TRUE;
        $config['num_links'] = 3;
        $config['cur_tag_open'] = '&nbsp;<a class="current">';
        $config['cur_tag_close'] = '</a>';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Previous';
        
        $this->pagination->initialize($config);
        if($this->uri->segment(3)){
        $page = ($this->uri->segment(3)) ;
          }
        else{
               $page = 1;
        }
        $data["results"] = $this->cities->fetch_data($config["per_page"], $page);
        $str_links = $this->pagination->create_links();
        $data["links"] = explode('&nbsp;',$str_links );
		
		foreach ($results as $data) {
			$sl=1;
			echo"<tr>
                        <td> ". $sl ."</td>
                        <td class='center'>". $row->area_name."</td>
                        <td class='center'>". $row->state_name."</td>
                        <td class='center'>".$row->country_name ."</td>
                        <td class='center'><i class='glyphicon glyphicon-edit'></td>
                        <td class='center'><a href='?id=".$row->area_id ."' onclick='return confirm(\"Are you really want to delete this item\")'><i class='glyphicon glyphicon-remove red'></a></td>
                        
                    </tr>";
					$sl++;
		}
		
	}
	
	
	public function image_water()
	{	
	
	/*
		// Create Thumbnail of an image
	
		$config['image_library'] = 'gd2';
		$config['source_image'] = './images/w.jpg';
		$config['create_thumb'] = TRUE;
		$config['maintain_ratio'] = TRUE;
		$config['width'] = 75;
		$config['height'] = 50;
		$config['new_image'] = './images/';
		$this->load->library('image_lib', $config);
*/

		/*if(!$this->image_lib->resize())
		{
			 echo $this->image_lib->display_errors();
			
		}
		else
		{
			echo "generate img ";	
		}*/		
	
	
	/*	// Text Woater mark script----working 100%
	
	
		$config['image_library'] = 'gd2';
		$config['source_image'] = './images/w.jpg';
		$config['wm_text'] = 'Copyright 2006 - Tarek Raihan';
		$config['wm_type'] = 'text';
		$config['wm_font_path'] = './system/fonts/texb.ttf';
		$config['wm_font_size'] = '26';
		$config['wm_font_color'] = '000fff';
		$config['wm_vrt_alignment'] = 'top';
		$config['wm_hor_alignment'] = 'center';
		$config['wm_padding'] = '100';
		$config['new_image'] = './images/';
		$this->load->library('image_lib', $config);
		
		
		if(!$this->image_lib->watermark())
		{
			 echo $this->image_lib->display_errors();
			
		}
		else
		{
			echo "generate watermark text ";	
		}*/	
		
		
		
		
		/* // 
		// Image Watermark script----working 100%
		
		
		$config['image_library'] = 'gd2';
		$config['source_image'] = './images/new_image.jpg';
		
		$config['wm_type'] = 'overlay';
		$config['wm_overlay_path'] = './images/nav-logo.png';
		$config['wm_vrt_alignment'] = 'bottom';
		$config['wm_hor_alignment'] = 'left';
		$config['new_image'] = './images/';
		$this->load->library('image_lib', $config);
		
		
		if(!$this->image_lib->watermark())
		{
			 echo $this->image_lib->display_errors();
			
		}
		else
		{
			echo "generate Watermark overlay ";	
		}*/
	}

}