<?php
/**
 * Author     : Alfikri, M.Kom
 * Created By : Alfikri, M.Kom
 * E-Mail     : alfikri.name@gmail.com
 * No HP      : 081277337405
 * Class      : Auth.php
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
        if(empty($this->session->userdata('id_user')))
        {
    		$data['title']		= "Login";
    		$page 				= 'pages/auth/index';
    		$data['extra_css']	= $this->load->view('pages/auth/css',$data,true);
    		$data['extra_js']	= $this->load->view('pages/auth/js',$data,true);
    		$this->template->load('auth_template',$page,$data);
        }else{
            redirect('dashboard');
        }
	}

    public function login()
    {
        $data = [
        	'username' => $this->input->post('username')
        ];

        $user = $this->db->get_where('user', $data)->row_array();
        if($user > 0){
        	if(password_verify($this->input->post('password'),$user['password']))
			{
				$session = [
					'id_user' 	=> $user['id_user'],
					'nama'		=> $user['nama']
				];

				$this->session->set_userdata($session);
				redirect('dashboard','refresh');
			}else{
				redirect('auth','refresh');
			}
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('auth');
    }
}