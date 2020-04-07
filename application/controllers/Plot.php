<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Plot extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model', 'a');
    }


    public function index()
    {
        $data['main_view'] = 'Plot';
        $data['brg'] = $this->a->getPlot()->result();
        $data['item'] = $this->a->get("list_alat")->result();
        $this->load->view('dashboard', $data);
    }
}
    
    /* End of file Plot.php */
/* Wejangangan 
namabarang[] = array untuk nama barang
jumlah[] = array untuk jumlah barang */

