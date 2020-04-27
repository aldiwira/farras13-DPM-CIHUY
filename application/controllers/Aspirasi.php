<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Aspirasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model', 'a');
    }


    public function index()
    {
        $data['oki'] = $this->a->get('oki')->result();
        $data['kategori'] = $this->a->get('kategori')->result();
        $this->load->view('user/template/header');
        $this->load->view('user/aspirasi/index', $data);
        $this->load->view('user/template/footer');
    }
    public function sendAspirasi()
    {
        $datas = array(
            'KAT_ID' => $this->input->post('kategori_input'),
            'NIM' => $this->input->post('nim_input'),
            "OKI_ID" => $this->input->post('oki_input'),
            "KONTEN" => $this->input->post('aspirasi_input'),
            "STATUS" => 0
        );
        $this->a->insertAspirasi('aspirasi', $datas);
        redirect("aspirasi/success/sended");
    }
    public function success($status = null)
    {
        $this->load->view('template/header');
        if ($status == 'sended') {
            $this->load->view('aspirasi/success');
        } else {
            $this->load->view('aspirasi/fail');
        }
        $this->load->view('template/footer');
    }
}

/* End of file Aspirasi.php */
