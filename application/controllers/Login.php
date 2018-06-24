<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

	public function _construct()
	
	{
		//$this->load->model('m_login');
		session_start();
	}
	
	public function index()
	{
		
		//if ($this->session->userdata('isLogin')==TRUE){
		//		redirect('home');
		//	echo "Anda sudah login, gak perlu login lagi !";
		//	}else{
		//		$this->load->view('view_login');
		//	}
		
		$this->load->view('view_login');
		}
		
		public function cek_login()
		{
			if(isset($_POST['login']))
			{
				$user = $this->input->post('username', true);
				$pass = $this->input->post('password', true);
				$cek = $this->M_login->proseslogin($user, $pass);
				$hasil = count($cek);
				if($hasil > 0)
				{
					$pelogin = $this->db->get_where('user', array('username' => $user, 'password' => $pass))->row();
					
					if($pelogin-> level == 'admin')
					{
						redirect ('Home');
					}elseif($pelogin->level == 'mahasiswa')
					{
						redirect('Form_Mahasiswa');
					}elseif($pelogin->level == 'reviewer')
					{
						redirect('Form_Reviewer');
					}elseif($pelogin->level == 'dosen')
					{
						redirect('Form_Dosen');
					}
				}else{
					$this->session->set_flashdata('gagallogin', 'Maaf username dan password yang anda masukkan salah');
					$this->load->view('view_login');
					redirect ('Login');
				}
			}
			//echo ('proses login');
		}
		
	 	//function do_login()
		//{
		//	$username = $this->input->post('username');
		//	$password = $this->input->post('password');
		//	
		//	$cek = $this->M_login->cek_user($username, $password);
		//		if(count($cek)== 1){
		//			$this->session->set_userdata(array(
		//					'isLogin'	=> TRUE, //set data sudah Login
		//					'username'	=> $username, //set session usrname
		//			));
		//			redirect('home');
		//		}else{
		//			$this->session->set_flashdata('gagallogin', 'Maaf username dan password yang anda masukkan salah');
		//			$this->load->view('view_login');
		//		}
		//}
	
}
