<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Data_admin extends CI_Controller
{
	
	// public function __construct()
	// {
	// 	# code...
	// 	parent::__construct();
	// 	if ($this->session->set_flashdata("login_status") == FALSE) {
	// 		$this->session->set_flashdata("messages",("access denied"));
	// 		redirect("home",'refresh');
	// 	}
	// }

	public function index(){
		$data['hasil'] = $this->Modeladmin->get_all_data('admin');
		//load template
		$tmp['content'] = $this->load->view("admin/adm/V_admin",$data,TRUE);
		$this->load->view("admin/template_admin",$tmp);
	}

	public function add(){
		if ($_SERVER['REQUEST_METHOD'] == "POST") {
		# code...
		$this->form_validation->set_rules('na','nama_awal','trim|required|xss_clean');
		$this->form_validation->set_rules('nak','nama_akhir','trim|required|xss_clean');
		$this->form_validation->set_rules('email','email','trim|required|xss_clean');
		$this->form_validation->set_rules('password','password','trim|required|xss_clean');
		$this->form_validation->set_rules('telp','telp','trim|required|xss_clean');

		if ($this->form_validation->run() == FALSE) {
			# code...
			$data['err'] = validation_errors();
			$tmp['content'] = $this->load->view('admin/adm/C_admin',$data,TRUE);
		}
		else{
			$aksi = $this->Modeladmin->add_admin();
			if ($aksi) {
				# code...
				$this->session->set_flashdata("message", ("Data Berhasil Dimasukan ke database"));
				redirect('Admin/Data_admin/','refresh');
			}
			else{
				$this->session->set_flashdata("message", error("Data Gagal Dimasukan"));
				redirect('Admin/Data_admin/add/','refresh');
			}
		}
	}
	$data['sub_judul'] = "Form Tambah Data Admin";
	$tmp['content'] = $this->load->view("admin/adm/C_admin",$data,TRUE);
	$this->load->view("admin/template_admin",$tmp);
	}

 function edit($id=0)
 {
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $data_model=$this->Modeladmin->GET_DETAAIL_BY_ID_V('admin','password',$id);
        if (count($data_model)>0){
            $data = array(	
            				'nama_awal' => $this->input->post('na'),
                        	'nama_akhir' => $this->input->post('nak'),
                        	'email' => $this->input->post('email'),
                        	'password' => $this->input->post('password'),
                        	'telp'=> $this->input->post('telp')
                        );
                       $aksi = $this->Modeladmin->update_admin('admin','password',$id,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan');
                            redirect("Admin/Data_admin","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
                            redirect("Admin/Data_admin/edit","refresh");
                        }
                    }
                    else{
			            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
			            redirect('Admin/Data_admin/edit/'.$id,'refresh');
        			}
            	}
		    else{
		    	$data['hasil'] = $this->Modeladmin->GET_DETAAIL_BY_ID_V('admin','password',$id)->row();
		    	$tmp['content'] = $this->load->view("admin/adm/E_admin",$data,TRUE);
		    	$this->load->view("admin/template_admin",$tmp);
		    }
		}

 public function delete($id = 0){
        $data_admin = $this->Modeladmin->get_detaiL_id($id);
        // echo count($data_admin);
            if (count($data_admin) > 0) {
                $aksi = $this->Modeladmin->delete('admin','password',$id);
                // echo $aksi;
                if ($aksi) {
                    $this->session->set_flashdata("message","Data berhasil dihapus");
                    redirect('Admin/Data_admin','refresh');
                }else{
                    $this->session->set_flashdata("message","Data gagal dihapus");
                    redirect ('Admin/Data_admin','refresh');
                }
            }else{
                $this->session->set_flashdata("message","Gagal dihapus karena tida ada data");
                redirect('Admin/Data_admin','refresh');
            }
    }
}