<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model', 'a');
        $a = $this->session->userdata('admin_login');
        if ($a == null) {
            redirect('Login/Ladmin');
        }
    }

    public function index()
    {
        $data['ud'] = $this->session->userdata('admin_login');
        $data['main_view'] = 'admin/homepage';
        // $data['asp'] = $this->a->getASP('0')->result();
        $this->load->view('admin/dashboard', $data);
    }
}
    
    /* End of file index.php */
