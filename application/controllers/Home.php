<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){

        parent::__construct();

        $this->load->model('penelitian');

        }

	public function index()

	{

		$data['data_penelitian'] = $this->penelitian->show_penelitian()->result();

		$this->template->load('static', 'home', $data);

	}
}
