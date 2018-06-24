<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('m_login');
	}
	public function index()
	{
		if ($this->session->userdata('isLogin')==TRUE){
			redirect('home');
			//echo "Anda sudah login, gak perlu login lagi !";
		}else{
			$this->load->view('view_login');
		}
		//$this->load->view('view_login');
	}
	
	function do_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$cek = $this->m_login->cek_user($username, $password);
			if(count($cek)== 1){
				$this->session->set_userdata(array(
						'isLogin'	=> TRUE, //set data sudah Login
						'username'	=> $username, //set session usrname
				));
				redirect('home');
			}else{
				$this->session->set_flashdata('gagallogin', 'Maaf username dan password yang anda masukkan salah');
				$this->load->view('view_login');
			}
	}
}
