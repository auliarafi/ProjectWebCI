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

    //public function get_default($NIM){
        //$sql = $this->db->query("SELECT * FROM usulan_ta WHERE NIM = ".intval($NIM));
        //if($sql->num_rows() > 0)
          //  return $sql->row_array();
        //return false;
    //}

    //public function update($post, $NIM){
      //  $review = $this->db->escape($post['review']);

        //$sql = $this->db->query("UPDATE usulan_ta SET REVIEW = $review WHERE NIM = ".intval($NIM));

        //return true;
    //}

    function ambil_where ($where, $table){
        return $this->db->get_where($table,$where);

    }

    function update ($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }   
}
?>
