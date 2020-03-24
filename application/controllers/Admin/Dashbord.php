<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashbord extends CI_Controller {

    // public function __construct() {
    //     parent::__construct();
    //     if ($this->session->userdata("login_status") == ) {
    //             $this->session->set_flashdata("messages",("access denied"));
    //                 redirect("Admin/Login",'refresh');
    //             }
    //         }
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    public function index()
    {
        $data['title']='Home Admin';
        $data['data_admin'] = $this->Modeladmin->get_all_data('admin');
        $tmp['content']=$this->load->view('admin/dashbord',$data,TRUE);
        $this->load->view('admin/template_admin',$tmp);
        
    }
}