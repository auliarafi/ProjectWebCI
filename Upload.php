<?php
class Upload extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->model('m_upload');
        }

        public function index()
        {
        		
                $this->template->load('static', 'upload_form', array('error' => ' ' ));
        }

        public function do_upload()
        {
			
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'pdf';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->template->load('static', 'upload_form', $error);
                }
                else
                {
                	$file = $this->upload->data();
                	$nama=$this->input->post('nama');
					$NIM=$this->input->post('nim');
					$judul=$this->input->post('judul');

                        $data = array(
							'Nama' => $nama,
							'NIM' => $NIM,
							'Judul' => $judul,
							'File_Proposal' => $file['file_name']);
						
						$this->m_upload->insert_data($data);
                        redirect('Home');
                }
        }
}
?>