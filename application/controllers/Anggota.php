<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Anggota extends CI_Controller
{

    public function index()
    {
        $this->load->view('user/template/header');
        $this->load->view('user/anggota/index');
        $this->load->view('user/template/footer');
    }
}

/* End of file Anggota.php */
