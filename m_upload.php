<?php
	class m_upload extends CI_Model {
		function __construct()
        {
                parent::__construct();
        }
        
        function insert_data($data)
    { 
        $this->db->insert('daftar_sempro', $data);
    }
    function berhasil()
	{
		echo "Data berhasil di Upload !";
	}
}
?>