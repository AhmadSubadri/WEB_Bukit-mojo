<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_komen extends CI_Controller {


function index(){

    $data['judul'] = "Koment";
    $data['sub_judul'] = "Silahkan lakukan operasi";
    $data['hasil'] = $this->Modeladmin->get_all_data('testi');

    //load template
    $tmp['content'] = $this->load->view("admin/testi/V_testi",$data,TRUE);
    $this->load->view("admin/template_admin",$tmp);
	}

function add(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
		# code...
		$this->form_validation->set_rules('name','name','trim|required|xss_clean');
		$this->form_validation->set_rules('email','email','trim|required|xss_clean');
		$this->form_validation->set_rules('saran','saran','trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$data['err'] = validation_errors();
			$tmp['content'] = $this->load->view('user/v_testi',$data,TRUE);
		}
		else{
			$data = array(
                        	'name' => $this->input->post('name'),
                        	'email' => $this->input->post('email'),
                        	'saran' => $this->input->post('saran'),
                               );
			 $quer = $this->Modeladmin->add('testi',$data);
			if ($quer) {
				# code...
				$this->session->set_flashdata("message", ("Data Berhasil Dimasukan ke database"));
				redirect('Welcome/testi','refresh');
			}
			else{
				$this->session->set_flashdata("message", error("Data Gagal Dimasukan"));
				redirect('Admin/Data_komen/add','refresh');
			}
		}
	}
	$data['sub_judul'] = "Form Tambah Data Admin";
	$tmp['content'] = $this->load->view("user/v_testi",$data,TRUE);
	$this->load->view("welcome_message",$tmp);
	}

function delete($id = 0){
        $data_admin = $this->Modeladmin->get_detaiL_id($id);
        // echo count($data_admin);
            if (count($data_admin) > 0) {
                $aksi = $this->Modeladmin->delete('testi','id',$id);
                // echo $aksi;
                if ($aksi) {
                    $this->session->set_flashdata("message","Data berhasil dihapus");
                    redirect('Admin/Data_komen','refresh');
                }else{
                    $this->session->set_flashdata("message","Data gagal dihapus");
                    redirect ('Admin/Data_komen','refresh');
                }
            }else{
                $this->session->set_flashdata("message","Gagal dihapus karena tida ada data");
                redirect('Admin/Data_komen','refresh');
            }
    }
}