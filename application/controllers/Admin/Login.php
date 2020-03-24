<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	// public function __construct() {
	// 	parent::__construct();
	// 	if ($this->session->userdata("login_status") == FALSE) {
	// 			$this->session->set_flashdata("messages",("access denied"));
	// 				redirect("Welcome",'refresh');
	// 			}
	// 	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 // * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('user/v_login');
	}

	public function cek_login(){	
		if ($this->input->post('email') and $this->input->post('password')) {
			# code...
			$u = $this->input->post('email');
			$pw = $this->input->post('password');
			$ass=md5($pw.$this->config->item('descryption_key'));

			//cek ke table
			$cek_admin = $this->Modeladmin->verify($u,$ass);

			if (count($cek_admin) > 0) {
				# code...
				$login_admin  = array(
					'email' => $u,
					'login_admin' => TRUE,
					'login_status' => TRUE,
					'login_as' => "admin"
				);
				$this->session->set_userdata($login_admin);
				redirect('Admin/Dashbord','refresh');
			}
			else{
				$this->session->set_flashdata('message','Username atau Password anda salah');
				redirect('Admin/Login','refresh');
			}
		}
		else{
			$this->session->set_flashdata('message','Masukan Username dan Pasword');
			redirect('Admin/Login','refresh');
		}
	}

	public function logout()
	{
		$new_data= array(
			'email'=>'',
			'logged_in'=>false
			);
		$this->session->set_userdata($new_data);
		$this->session->set_flashdata('message','Terima kasih anda telah logout');
		 redirect("Welcome",'refresh');
		
		
	}
}
