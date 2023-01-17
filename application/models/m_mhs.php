<?php 

class M_mhs extends CI_Model{
    public function get_data(){
        return $this->db->get('tbl_mahasiswa')->result_array();
    }
}
?>