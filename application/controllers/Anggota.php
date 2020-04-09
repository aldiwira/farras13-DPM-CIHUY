<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

    public function index()
    {
        $this->load->view('template/header');
        $this->load->view('anggota/index');
        $this->load->view('template/footer');
        
    }

}

/* End of file Anggota.php */
