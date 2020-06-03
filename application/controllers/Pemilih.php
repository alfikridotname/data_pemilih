<?php
/**
 * Author     : Alfikri, M.Kom
 * Created By : Alfikri, M.Kom
 * E-Mail     : alfikri.name@gmail.com
 * No HP      : 081277337405
 * Class      : Pemilih.php
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemilih extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('id_user'))
        {
            redirect('auth');
		}	
	}

	public function index(){
		$data['title']		= "Data Pemilih";
		$page 				= 'pages/pemilih/index';
		$data['pemilih'] 	= $this->data_pemilih()->result();
		$data['menu'] 		= $this->load->view('layout/menu', $data, true);
		$data['extra_css']	= $this->load->view('pages/pemilih/css',$data,true);
		$data['extra_js']	= $this->load->view('pages/pemilih/js',$data,true);
		$this->template->load('backend_template',$page,$data);
	}

	public function data_pemilih()
	{
		$pemilih = $this->db->get('pemilih');
		return $pemilih;
	}

	public function simpan()
	{
		$post = $this->input->post();

		$data = [
			'nik' 		=> $post['nik'],
			'nama'		=> $post['nama'],
			'alamat'	=> $post['alamat'],
			'status'	=> $post['status'],
			'jorong' 	=> $post['jorong'],
			'nagari' 	=> $post['nagari'],
			'kecamatan' => $post['kecamatan'],
		];

		$simpan = $this->db->insert('pemilih', $data);
		if($simpan)
		{
			redirect('pemilih','refresh');
		}else{
			redirect('pemilih','refresh');
		}
	}
}