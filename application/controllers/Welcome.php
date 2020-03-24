<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['judul'] = "DAFTAR VIDEO";
		$data['glr'] = $this->Modeladmin->get_all_data('galeri');
		$data['art'] = $this->Modeladmin->get_all_data('artikel');
		$data['hasil'] = $this->Modeladmin->get_all_data('video');
		$tmp['content'] = $this->load->view('welcome_message',$data, TRUE);
		$this->load->view('welcome_message');
	}

	public function template()
	{
		$this->load->view('user/template');
	}

	public function wisata()
	{
		$data['judul'] = "DAFTAR WISATA";
		$data['hasil'] = $this->Modeladmin->get_all_data('wisata');
		$tmp['content'] = $this->load->view('user/v_wisata',$data, TRUE);
		$this->load->view('user/template',$tmp);
	}

	public function artikel()
	{
		$data['judul'] = "DAFTAR ARTIKEL TERBARU";
		$data['hasil'] = $this->Modeladmin->get_all_data('artikel');
		$tmp['content'] = $this->load->view('user/v_artikel',$data, TRUE);
		$this->load->view('user/template',$tmp);
	}

	public function gallery()
	{
		$data['judul'] = "DAFTAR GALLERY";
		$data['hasil'] = $this->Modeladmin->get_all_data('galeri');
		$tmp['content'] = $this->load->view('user/v_gallery',$data, TRUE);
		$this->load->view('user/template',$tmp);
	}

	public function testi()
	{
		$data['judul'] = "DAFTAR TESTIMONI PENGUNJUNG";
		$data['hasil'] = $this->Modeladmin->get_all_data('testi');
		$tmp['content'] = $this->load->view('user/v_testi',$data, TRUE);
		$this->load->view('user/template',$tmp);
	}

	public function about()
	{
		$data['judul'] = "TENTANG KAMI";
		$tmp['content'] = $this->load->view('user/v_about',$data, TRUE);
		$this->load->view('user/template',$tmp);
	}
}
