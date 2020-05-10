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
    public function updateDatas($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}

/* End of file user_model.php */
