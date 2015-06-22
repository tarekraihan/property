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
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function buyer()
    {
		$data['title']="Buyer";
        $this->load->view('header',$data);
		$this->load->view('buyer');
        $this->load->view('footer1');
	    $this->load->view('footer2');
    }
	public function seller()
    {
		$data['title']="Seller";
        $this->load->view('header',$data);
		$this->load->view('seller');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function mortgage()
    {
		$data['title']="Mortgage";
        $this->load->view('header',$data);
		$this->load->view('mortgage');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	
	public function sell_listing()
    {
		$this->load->view('header');
		$this->load->view('sell_listing');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function register()
    {
		$data['title']="Member Registration";
        $this->load->view('header',$data);
		$this->load->view('register');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	public function dashboard()
    {
		$this->load->view('header_dashboard');
		$this->load->view('dashboard');
		$this->load->view('footer2');
    }
	
	public function listingpage()
    {
        $this->load->view('header_list_post');
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
		$this->load->view('header',$data);
		$this->load->view('rent');
        $this->load->view('footer1');
		$this->load->view('footer2');
    }
	

}