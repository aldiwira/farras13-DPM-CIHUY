<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        $this->load->model('user_model', 'user');
    }

    public function index()
    {
        $data['ud'] = $this->session->userdata('user_login');
        $data['galeriDatas'] = $this->user->getData("galeri")->result();
        $this->load->view('user/template/header',$data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/template/footer');
    }

    public function Saran()
    {
        
    }
}

/* End of file Home.php */
