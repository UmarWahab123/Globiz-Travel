<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Frontend extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = SITE_TITLE;
		$this->master_layout('home', $data);
	}

	public function study_in_uk()
	{
		$data['title'] = 'Study in the UK | '.SITE_COMPANY;
		$this->master_layout('study_in_uk', $data);
	}

	public function levels_for_degree()
	{
		$data['title'] = 'Levels for Degree | '.SITE_COMPANY;
		$this->master_layout('levels_for_degree', $data);
	}

	public function eng_lang_reqs()
	{
		$data['title'] = 'English Language Requirements | '.SITE_COMPANY;
		$this->master_layout('eng_lang_reqs', $data);
	}

	public function information()
	{
		$data['title'] = 'Information | '.SITE_COMPANY;
		$this->master_layout('information', $data);
	}

	public function canada_visa_services()
	{
		$data['title'] = 'Canada Visa Services | '.SITE_COMPANY;
		$this->master_layout('canada_visa_services', $data);
	}

	public function courses()
	{
		$data['title'] = 'Courses | '.SITE_COMPANY;
		$this->master_layout('courses', $data);
	}

	public function terms_conditions()
	{
		$data['title'] = 'Terms & Conditions | '.SITE_COMPANY;
		$this->master_layout('terms_conditions', $data);
	}

	public function privacy_policy()
	{
		$data['title'] = 'Privacy Policy | '.SITE_COMPANY;
		$this->master_layout('privacy_policy', $data);
	}

	public function about()
	{
		$data['title'] = 'About Us | '.SITE_COMPANY;
		$this->master_layout('about', $data);
	}

	public function contact()
	{
		$data['title'] = 'Contact Us | '.SITE_COMPANY;
		$this->master_layout('contact', $data);
	}
	
	public function what_we_do()
	{
		$data['title'] = 'What We Do | '.SITE_COMPANY;
		$this->master_layout('what_we_do', $data);
	}
	
	public function master_layout($page='',$data = array())
	{
		$this->load->view('includes/header', $data);
		$this->load->view($page, $data);
		$this->load->view('includes/footer', $data);
	}
}
