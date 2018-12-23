<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modelbarang extends CI_Model {

public function index()
	{
	
		//  $this->load->view('barang/index',array('datas'=>$data));
    }
    public function dtbarang()
    {
            $this->db->select('*');
            $this->db->from('tb_dtbarang');
            $datas = $this->db->get();
            return $datas;
    }
    
    public function simpandata($nmtabel,$data)
    {
        $datas = $this->db->insert($nmtabel, $data);
        return $datas;
    }
    public function simpanupdate($namatabel,$data,$no)
    {
        $this->db->where('no', $no);
        $this->db->update('tb_dtbarang', $data);
        return $data;
    }

    public function hapus($id)
    {
        $this->db->where('no', $id);
        $this->db->delete('tb_dtbarang');
    
    }
}
