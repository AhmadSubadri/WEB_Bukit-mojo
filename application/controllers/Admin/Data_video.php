<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * 
 */
class Data_video extends CI_Controller
{
  
  public function __construct()
  {
   # code...
   parent::__construct();
   // if ($this->session->set_flashdata("login_status") == FALSE) {
   //   $this->session->set_flashdata("messages",("access denied"));
   //   redirect("home",'refresh');
   // }
  }

  public function index(){
    $data['artikel'] = $this->Modeladmin->get_all_data('artikel');
    $data['hasil'] = $this->Modeladmin->get_all_data('video');
    //load template
    $tmp['content'] = $this->load->view("admin/video/V_video",$data,TRUE);
    $this->load->view("admin/template_admin",$tmp);
  }

  public function add(){
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
    # code...
    $this->form_validation->set_rules('judul','judul','trim|required|xss_clean');
    $this->form_validation->set_rules('keterangan','keterangan','trim|required|xss_clean');
    $this->form_validation->set_rules('url','url','trim|required|xss_clean');

    if ($this->form_validation->run() == FALSE) {
      # code...
      $data['err'] = validation_errors();
      $tmp['content'] = $this->load->view('admin/video/C_video',$data,TRUE);
    }
    else{
      $data = array(
                    'judul' => $this->input->post('judul'),
                    'keterangan' => $this->input->post('keterangan'),
                    'url' => $this->input->post('url'),
                    );
      $aksi = $this->Modeladmin->add('video',$data);
      if ($aksi) {
        # code...
        $this->session->set_flashdata("message", ("Data Berhasil Dimasukan ke database"));
        redirect('Admin/Data_video/','refresh');
      }
      else{
        $this->session->set_flashdata("message", error("Data Gagal Dimasukan"));
        redirect('Admin/Data_video/add/','refresh');
      }
    }
  }
  $data['sub_judul'] = "Form Tambah Data Admin";
  $tmp['content'] = $this->load->view("admin/video/C_video",$data,TRUE);
  $this->load->view("admin/template_admin",$tmp);
  }

 function edit($id=0)
 {
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $data_model=$this->Modeladmin->GET_DETAAIL_BY_ID_V('video','id',$id);
        if (count($data_model)>0){
            $data = array(  
                          'judul' => $this->input->post('judul'),
                          'keterangan' => $this->input->post('keterangan'),
                          'url' => $this->input->post('url')
                        );
                       $aksi = $this->Modeladmin->update('video','id',$id,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan');
                            redirect("Admin/Data_video","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan...');
                            redirect("Admin/Data_video/edit","refresh");
                        }
                    }
                    else{
                  $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
                  redirect('Admin/Data_video/edit/'.$id,'refresh');
              }
              }
        else{
          $data['hasil'] = $this->Modeladmin->GET_DETAAIL_BY_ID_V('video','id',$id)->row();
          $tmp['content'] = $this->load->view("admin/video/E_video",$data,TRUE);
          $this->load->view("admin/template_admin",$tmp);
        }
    }

 public function delete($id = 0){
        $data_admin = $this->Modeladmin->get_detaiL_id($id);
        // echo count($data_admin);
            if (count($data_admin) > 0) {
                $aksi = $this->Modeladmin->delete('video','id',$id);
                // echo $aksi;
                if ($aksi) {
                    $this->session->set_flashdata("message","Data berhasil dihapus");
                    redirect('Admin/Data_video','refresh');
                }else{
                    $this->session->set_flashdata("message","Data gagal dihapus");
                    redirect ('Admin/Data_video','refresh');
                }
            }else{
                $this->session->set_flashdata("message","Gagal dihapus karena tida ada data");
                redirect('Admin/Data_video','refresh');
            }
    }
}