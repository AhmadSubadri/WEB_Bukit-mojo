<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_gallery extends CI_Controller {


function index(){

    $data['judul'] = "Gallery";
    $data['sub_judul'] = "Silahkan lakukan operasi";
    $data['hasil'] = $this->Modeladmin->get_all_data('galeri');

    //load template
    $tmp['content'] = $this->load->view("admin/Gallery/V_gallery",$data,TRUE);
    $this->load->view("admin/template_admin",$tmp);
}

function add(){
          $this->form_validation->set_rules('jenis_wisata', 'jenis_wisata', 'trim|required');
          $this->form_validation->set_rules('nama_tempat', 'nama_tempat', 'trim|required');
          if($this->form_validation->run()==FALSE)
          {
                $data['err'] = "Silahkan Isi Data";
                // $data['isi']=$this->Modeladmin->get_all_data('admin');                    
                $tmp['content']=$this->load->view('admin/gallery/C_gallery',$data,true);
                $this->load->view('admin/template_admin',$tmp);
          }
          else
          {
            $gambar=$_FILES['foto']['name'];

            if (empty($gambar))
            {

                    $data = array(
                                   'jenis_wisata' => $this->input->post('jenis_wisata'),
                                    'nama_tempat' => $this->input->post('nama_tempat'),
                                   'FOTO' => '',
                                   // 'foto' => ''
                               );
                    $quer=$this->Modeladmin->add('galeri',$data);
                    if ($quer) {
                        $this->session->set_flashdata('message','Data Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_gallery","refresh");
                    }
                    else{
                        $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_gallery/add","refresh");
                    }
            }
            else
            {
                $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $nama=str_shuffle($alphanum);//random nama dengan alphanum
                $config['file_name'] = $nama; 
                $config['upload_path'] = "upload/gallery"; // lokasi penyimpanan file
                $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $this->upload->do_upload('fotO');
                if( !$this->upload->do_upload('foto'))
                {
                    $data['hasil']  = $this->Modeladmin->get_all();
                    $this->session->set_flashdata('message',$this->upload->display_errors());
                    $tmp['content'] = $this->load->view('admin/gallery/C_gallery',$data,true);
                    $this->load->view('admin/template_admin',$tmp);
                }
                else
                {
                        $data = array(
                                    'jenis_wisata' => $this->input->post('jenis_wisata'),
                                    'nama_tempat' => $this->input->post('nama_tempat'),
                                    'foto' => $this->upload->file_name,
                               );
                      $quer=$this->Modeladmin->add('galeri',$data);
                       redirect("Admin/Data_gallery","refresh");
                    }
            }
            
           }
    }

 function edit($id=0)
 {
    if($_SERVER['REQUEST_METHOD']=="POST")
    {
    $data_model=$this->Modeladmin->GET_DETAAIL_BY_ID_V('galeri','id',$id);
        if (count($data_model)>0){
            $gambar=$_FILES['foto']['name'];
            if (empty($gambar))
            {
                    $data = array(
                                   'jenis_wisata' => $this->input->post('jenis_wisata'),
                                    'nama_tempat' => $this->input->post('nama_tempat'),
                                    // 'foto' => '',
                               );
                   $aksi = $this->Modeladmin->update('galeri','id',$id,$data);
                    if ($aksi) {
                        $this->session->set_flashdata('message','Data Berhasil di simpan');
                        redirect("Admin/Data_gallery","refresh");
                    }
                    else{
                        $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                        redirect("Admin/Data_gallery/add","refresh");
                    }
            }
            else
            {
                $alphanum="ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
                $nama=str_shuffle($alphanum);//random nama dengan alphanum
                $config['file_name'] = $nama; 
                $config['upload_path'] = "upload/gallery"; // lokasi penyimpanan file
                $config['allowed_types'] = 'gif|jpg|JPEG|png|BMP|bmp'; // format foto yang diizinkan 
                $this->load->library('upload',$config);
                $this->upload->initialize($config);
                $this->upload->do_upload('foto');
                if( !$this->upload->do_upload('foto'))
                {
                    $data['hasil']  = $this->Modeladmin->get_all();
                    $this->session->set_flashdata('message',$this->upload->display_errors());
                    $tmp['content'] = $this->load->view('admin/gallery/C_gallery',$data,true);
                    $this->load->view('admin/template_admin',$tmp);
                }
                else
                {
                        $data = array(
                                        'jenis_wisata' => $this->input->post('jenis_wisata'),
                                        'nama_tempat' => $this->input->post('nama_tempat'),
                                        'foto'=> $this->upload->file_name
                               );
                       $aksi = $this->Modeladmin->update('galeri','id',$id,$data);
                        if ($aksi) {
                            $this->session->set_flashdata('message','Data Berhasil di simpan');
                            redirect("Admin/Data_gallery","refresh");
                        }
                        else{
                            $this->session->set_flashdata('message','Data Tidak Berhasil di simpan tanpa foto...');
                            redirect("Admin/data_gallery/add","refresh");
                        }
                    }
            }
        }
        else
        {
            $this->session->set_flashdata("message","Data Gagal Diedit Karena  Tidak Ada Data");
            redirect('Admin/Data_gallery/edit/'.$id,'refresh');
        }
    }
    else
    {
        // $data_model = $this->Modeladmin->get_detaiL_id($id);
            // echo $id;
             $data['hasil'] = $this->Modeladmin->GET_DETAAIL_BY_ID_V('galeri','id',$id)->row();
            $tmp['content'] = $this->load->view("admin/gallery/E_gallery",$data,TRUE);
            $this->load->view("admin/template_admin",$tmp);
    }
}

 function delete($id){
        $data_admin = $this->Modeladmin->ambil_id_gambar($id);
        $upload_path = './upload/gallery/';
        @unlink($upload_path.$data_admin->foto);
        if ($this->Modeladmin->delete('galeri','id',$id) == TRUE) {
                $this->session->set_flashdata('pesan', 'DATA BERHASIL DI HAPUS');
    }
    redirect('Admin/Data_gallery/','refresh');
}
}
