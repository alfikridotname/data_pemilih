<?php
/**
 * Author     : Alfikri, M.Kom
 * Created By : Alfikri, M.Kom
 * E-Mail     : alfikri.name@gmail.com
 * No HP      : 081277337405
 * Class      : Dashboard.php
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
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
		$data['title']		= "Dashboard";
		$data['jml'] 		= $this->data_pemilih()->num_rows();
		$data['jml_pelapor']= $this->db->get_where('pemilih', ['status' => 'PELAPOR'])->num_rows();
		$data['jml_pemilih']= $this->db->get_where('pemilih', ['status' => 'PEMILIH'])->num_rows();
		$page 				= 'pages/dashboard/index';
		$data['menu'] 		= $this->load->view('layout/menu', $data, true);
		$data['extra_css']	= $this->load->view('pages/dashboard/css',$data,true);
		$data['extra_js']	= $this->load->view('pages/dashboard/js',$data,true);
		$this->template->load('backend_template',$page,$data);
	}

	public function data_pemilih()
	{
		$pemilih = $this->db->get('pemilih');
		return $pemilih;
	}
}