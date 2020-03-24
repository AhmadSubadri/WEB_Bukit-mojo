<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_wisata extends CI_Controller {


function index(){

    $data['judul'] = "Wisata";
    $data['sub_judul'] = "Silahkan lakukan operasi";
    $data['hasil'] = $this->Modeladmin->get_all_data('wisata');

    //load template
    $tmp['content'] = $this->load->view("admin/wisata/V_wisata",$data,TRUE);
    $this->load->view("admin/template_admin",$tmp);
}


function add(){
          $this->form_validation->set_rules('judul', 'judul', 'trim|required');
          $this->form_validation->set_rules('keterangan', 'keterangan', 'trim|required');
          if($this->form_validation->run()==FALSE)
          {
                $data['err'] = "Silahkan Isi Data";
                // $data['isi']=$this->Modeladmin->get_all_data('admin');                    
                $tmp['content']=$this->load->view('admin/wisata/C_wisata',$data,true);
                $this->load->view('admin/template_admin',$tmp);
          }
          else
          {
            $gambar=$_FILES['foto']['name'];

            if (empty($gambar))
            {

                    $data = array(
                                   'judul' => $this->input->post('judul'),
                                   'keterangan' => $this->input->post('keterangan'),
                                   'url' => $this->input->post('url'),
                                   'foto' => '',
                                   // 'foto' => ''
                               );
                    $quer=$this->Modeladmin->add('wisata',$data);
                    if ($quer) {
                        $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_wisata","refresh");
                    }
                    else{
                        $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_wisata/add","refresh");
                    }
            }
            else
            {
                $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $nama=str_shuffle($alphanum);//random nama dengan alphanum
                $config['file_name'] = $nama; 
                $config['upload_path'] = "upload/wisata"; // lokasi penyimpanan file
                $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $this->upload->do_upload('fotO');
                if( !$this->upload->do_upload('foto'))
                {
                    $data['hasil']  = $this->Modeladmin->get_all_data('wisata');
                    $this->session->set_flashdata('message',$this->upload->display_errors());
                    $tmp['content'] = $this->load->view('admin/wisata/C_wisata',$data,true);
                    $this->load->view('admin/template_admin',$tmp);
                }
                else
                {
                        $data = array(
                                   'judul' => $this->input->post('judul'),
                                   'keterangan' => $this->input->post('keterangan'),
                                   'url' => $this->input->post('url'),
                                   'foto' => $this->upload->file_name,
                               );
                      $quer=$this->Modeladmin->add('wisata',$data);
                       redirect("Admin/Data_wisata","refresh");
                    }
            }
            
           }
    }

 function edit($id=0)
 {
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $data_model=$this->Modeladmin->GET_DETAAIL_BY_ID_V('wisata','id',$id);
        if (count($data_model)>0){
            $gambar=$_FILES['foto']['name'];
            if (empty($gambar))
            {

                    $data = array(
                                  'judul' => $this->input->post('judul'),
                                  'keterangan' => $this->input->post('keterangan'),
                                  'url' => $this->input->post('url'),
                                   // 'IMAGES' => '',
                               );
                   $aksi = $this->Modeladmin->update('wisata','id',$id,$data);
                    if ($aksi) {
                        $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_wisata","refresh");
                    }
                    else{
                        $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                        redirect("admin/Data_wisata/add","refresh");
                    }
            }
            else
            {
                $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $nama=str_shuffle($alphanum);//random nama dengan alphanum
                $config['file_name'] = $nama; 
                $config['upload_path'] = "upload/wisata"; // lokasi penyimpanan file
                $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $this->upload->do_upload('foto');
                if( !$this->upload->do_upload('foto'))
                {
                    $data['hasil']  = $this->Modeladmin->get_all_data('wisata');
                    $this->session->set_flashdata('message',$this->upload->display_errors());
                    $tmp['content'] = $this->load->view('admin/Data_wisata/C_wisata',$data,true);
                    $this->load->view('admin/template_admin',$tmp);
                }
                else
                {
                        $data = array(
                                  'judul' => $this->input->post('judul'),
                                  'keterangan' => $this->input->post('keterangan'),
                                  'url' => $this->input->post('url'),
                                  'foto'=> $this->upload->file_name
                               );
                       $aksi = $this->Modeladmin->update('wisata','id',$id,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                            redirect("Admin/Data_wisata","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                            redirect("Admin/Data_wisata/add","refresh");
                        }
                    }
            }
        }
        else
        {
            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
            redirect('Admin/Data_wisata/edit/'.$id,'refresh');
        }
    }
    else
    {
             $data['hasil'] = $this->Modeladmin->GET_DETAAIL_BY_ID_V('wisata','id',$id)->row();
            $tmp['content'] = $this->load->view("admin/wisata/E_wisata",$data,TRUE);
            $this->load->view("admin/template_admin",$tmp);
    }
}



 function delete($id){
        $data_admin = $this->Modeladmin->ambil_id_wisata($id);
        $upload_path = './upload/wisata/';
        @unlink($upload_path.$data_admin->foto);
        if ($this->Modeladmin->delete('wisata','id',$id) == TRUE) {
                $this->session->set_flashdata('pesan', 'DATA BERHASIL DI HAPUS');
    }
    redirect('Admin/Data_wisata/','refresh');
}
}
