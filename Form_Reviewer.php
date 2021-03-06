<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Form_reviewer extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('review_model');
	}
	public function index()
	{
		$data['data_review'] = $this->review_model->show_data_review()->result();
		$this->template->load('static','view_reviewer', $data);

	}

	//public function edit($NIM){
	//	$this->load->model("review_model");
	//	$data['tipe'] = "Edit";
	//	$data['default'] = $this->review_model->get_default($NIM);

	//	if(isset($_POST['tombol_submit'])){
	//		$this->review_model->update($_POST, $NIM);
	//		redirect("Form_reviewer");
	//	}

	//	$this->load->view("editreview",$data);
	//}

	function edit ($NIM){

		$where	= array('NIM'=> $NIM);

		$data['review']= $this->review_model->ambil_where($where, 'usulan_ta')->result();

		$this->load->view('edit_data_review', $data);

	}

	function proses_edit(){
		$NIM=$this->input->post('NIM');
		$review=$this->input->post('review');

		$data=array(
			'REVIEW' => $review
		);

		$where = array('NIM'=>$NIM);

		$this->review_model->update($where,$data,'usulan_ta');
		redirect("Form_reviewer");
	}
	
	}