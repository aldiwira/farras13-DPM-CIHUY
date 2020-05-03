<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function getData($tabel)
    {
        return $this->db->get($tabel);
    }

    public function getWhere($tabel, $where)
    {
        $this->db->where($where);
        return $this->db->get($tabel);
    }

    public function insertData($tabel,$object)
    {
        return $this->db->insert($tabel,$object);
    }

}

/* End of file user_model.php */

?>