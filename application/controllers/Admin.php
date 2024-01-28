<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct()
	{
		parent::__construct();
        $this->load->model('admin_model');
	}

	private function check_login(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login', 'refresh');
		}
	}

	public function master_layout($page='',$data = array())
	{
		$this->load->view('admin/includes/header', $data);
		$this->load->view($page, $data);
		$this->load->view('admin/includes/footer', $data);
	}

	public function login()
	{
		if($this->session->userdata('logged_in')){
			return redirect('admin');
		}

		if(isset($_POST['submit'])){

			$this->load->library('form_validation');

			$this->form_validation->set_rules('email', 'Email','required|valid_email');
			$this->form_validation->set_rules('password', 'Password','required');

			if ($this->form_validation->run() == FALSE) 
                { 
                    $this->master_layout('admin/login', ['invalid' => '']);
                } 
			else 
                { 
                	$email = $this->input->post('email');
					$password = $this->input->post('password');

                	$logged_id = $this->admin_model->login($email, md5($password));

                	if($logged_id){
                		$this->session->set_userdata(['logged_in' => true]);
                		redirect('admin', 'refresh');
                	}else{
                		$this->master_layout('admin/login', ['invalid' => true]);
                	}
                    
                }

		}else{
			$this->master_layout('admin/login', ['invalid' => '']);
		}
		
	}

	public function posts()
	{
		$this->check_login();

		$data['title'] = 'Opportunities';
		$data['posts'] = $this->admin_model->get_posts();
		$this->master_layout('admin/posts/index', $data);
	}

	public function ajax_delete($table='', $id='')
	{
		header('Content-type: application/json');

		if(!empty($table) && !empty($id)){
			$deleted = $this->admin_model->delete_record($table,$id);

			if($deleted){
				echo json_encode(['success' => true]);
			}else{
				echo json_encode(['success' => false]);
			}
		}
	}

	public function logout()
	{
		$this->session->unset_userdata('logged_in');
		redirect('admin/login');
	}



	

}
