<?php

defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model', 'a');
    }

    public function index()
    {
        $data['main_view'] = 'admin/aspirasi';
        $data['asp'] = $this->a->getASP('0')->result();
        $this->load->view('admin/dashboard', $data);
    }
}
    
    /* End of file index.php */
