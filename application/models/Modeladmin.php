<?php
/**
 * 
 */
class modeladmin extends CI_Model
{
	
	function __construct()
	{
		# code...
		parent::__construct();
		$this->load->model('Modeladmin');
	}

	function verify($u,$pw)
			{
				$this->db->where('email',$u);
				$this->db->where('password',$pw);
				$this->db->limit(1);
				$Q = $this->db->get('admin');
				if ($Q->num_rows() > 0)
					{
						$row = $Q->row_array();
						return $row;
					}
				else
					{
						$this->session->set_flashdata('message', 'Sorry, try again!');	
						return array();
					}		
			}

	function add_admin()
        {
          $pss=$this->input->post('password');
          $ass=md5($pss.$this->config->item('encryption_key'));
            $data = array(
            				'nama_awal' => $this->input->post('na'),
            				'nama_akhir' => $this->input->post('nak'),
            				'email' => $this->input->post('email'),
                        	'password' => $ass,
                        	'telp' => $this->input->post('telp'),
                          // 'stat' => $this->input->post('stt')
                        );
            $action = $this->db->insert('admin', $data);  
            return $action;
        }

    function update_admin($tabel,$col,$id,$data)
        {
          $pss=$this->input->post('password');
          $ass=md5($pss.$this->config->item('encryption_key'));
            $data = array(	
            				'nama_awal' => $this->input->post('na'),
            				'nama_akhir' => $this->input->post('nak'),
            				'email' => $this->input->post('email'),
                        	'password' => $ass,
                        	'telp' => $this->input->post('telp'),
                        );
            $this->db->where('password',$id);
            $action = $this->db->update('admin',$data);  
            return $action;
        }    

	function add($tabel,$data){
		$Q =$this->db->insert($tabel,$data);
		return $Q;
	}
	
	function get_all_data($tabel){
		return $this->db->get($tabel)->result_array();
	}

	function delete($tabel,$col,$id){
		$this->db->where($col,$id);
		$action = $this->db->delete($tabel);
		return $action;
	}

	function get_detaiL_id($id=0){
		$this->db->where('email',$id);
		$data = $this->db->get('admin');
		return $data;
	}

	function GET_DETAAIL_BY_ID_V($tabel,$col,$id){
		$this->db->where($col,$id);
		$data = $this->db->get($tabel);
		return $data;
	}

	function update($tabel,$col,$id,$data)
	{
		$this->db->where($col,$id);
		$action = $this->db->update($tabel,$data);
		return $action;
	}

	function ambil_id($id)
	  {
	    $this->db->from('artikel');
	    $this->db->where('id', $id);
	    $result = $this->db->get('');
	    // periksa ada datanya atau tidak
	    if ($result->num_rows() > 0) {
	      return $result->row();//ambil datanya berdasrka row id
	    }  
	  }

	  function ambil_id_wisata($id)
	  {
	    $this->db->from('wisata');
	    $this->db->where('id', $id);
	    $result = $this->db->get('');
	    // periksa ada datanya atau tidak
	    if ($result->num_rows() > 0) {
	      return $result->row();//ambil datanya berdasrka row id
	    }  
	  }

	function ambil_id_gambar($id)
	  {
	    $this->db->from('galeri');
	    $this->db->where('id', $id);
	    $result = $this->db->get('');
	    // periksa ada datanya atau tidak
	    if ($result->num_rows() > 0) {
	      return $result->row();//ambil datanya berdasrka row id
	    }  
	  }
}