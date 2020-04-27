<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model', 'a');
    }


    public function index()
    {
        $data['galeri'] = $this->a->get("galeri")->result();
        $this->load->view('user/template/header');
        $this->load->view('user/home/index', $data);
        $this->load->view('user/template/footer');
    }
}

/* End of file Home.php */
