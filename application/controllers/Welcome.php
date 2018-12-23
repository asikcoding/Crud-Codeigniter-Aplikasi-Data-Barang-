<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Welcome extends CI_Controller {

	public function index()
	{
		$data = $this->modelbarang->dtbarang();
		$this->load->view('barang/index',array('datas'=>$data));	
	}

	
	public function tambah()
	{
		$this->load->view('barang/tambah');
               
	}
	
	public function simpan()
	{
		if (isset($_POST['submit'])) {
			$datas = array(
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'merk' => $this->input->post('merk'), 
				'harga' => $this->input->post('harga'), 
				'harga_jual' => $this->input->post('harga_jual'), 
				'stock' => $this->input->post('stock'), 
				'keterangan' => $this->input->post('keterangan') 
			);
			$data['message'] = 'Data Inserted Successfully';
			$this->modelbarang->simpandata('tb_dtbarang',$datas);
			$data = $this->modelbarang->dtbarang();
			// $data = $this->db->query('SELECT * FROM tb_dtbarang');
			$this->load->view('barang/index',array('datas'=>$data));
		}
	}
	public function edit()
	{
		$id = $_GET['id'];
		$data = $this->db->query("SELECT * FROM `tb_dtbarang` WHERE `no`= '$id' ");
		$this->load->view('barang/edit',['datas'=> $data]);
               
	}
	
	public function simpanedit()
	{
		if (isset($_POST['submit'])) {
			
			$datas = array(
				'kode' => $this->input->post('kode'), 
				'nama' => $this->input->post('nama'), 
				'merk' => $this->input->post('merk'), 
				'harga' => $this->input->post('harga'), 
				'harga_jual' => $this->input->post('harga_jual'), 
				'stock' => $this->input->post('stock'), 
				'keterangan' => $this->input->post('keterangan') 
			);
				$no = $this->input->post('no');
				$this->modelbarang->simpanupdate('tb_dtbarang',$datas,$no);
				$updata = $this->modelbarang->dtbarang();
				$this->load->view('barang/index',array('datas'=>$updata));
		}
	}

	public function hapusdata()
	{
		$id = $_GET['id'];
		$this->modelbarang->hapus($id);
		
		$updata = $this->modelbarang->dtbarang();
		$this->load->view('barang/index',array('datas'=>$updata));
	}

	public function dbjson()
    {
      $dt = $data = $this->modelbarang->dtbarang();
      $dtJSON = json_encode($dt->result_array());
      echo $dtJSON;
    }
}
