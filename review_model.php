<?php
class review_model extends CI_Model {
    function __construct(){
        parent::__construct();  
    }
      
    function show_data_review(){        
        $this->db->select('*');
        $this->db->from('usulan_ta');
        return $this->db->get(); 
    }

    function edit_data_review($where,$table){
    	return $this->db->get_where($table,$where);
    }

    //function update_data_review($where, $data, $table) {
    	//$this->db->where->($where);
    	//$this->db->update->($table, $data);
    //}
    //function simpan_data_review($data){
        //$this->db->insert($data); }

    //function update_data_review($NIM, $data){
		//$this->db->where('NIM', $data);
		//$this->db->update('usulan_ta', $data); }
}
?>
