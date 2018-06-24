<?php
	class penelitian extends CI_Model {
    function __construct(){
        parent::__construct();  
    }
     function show_penelitian(){        
        $this->db->select('*');
        $this->db->from('penelitian');
        return $this->db->get(); 
    }
}
?>