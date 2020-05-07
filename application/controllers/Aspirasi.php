<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Aspirasi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('user_model', 'user');
        if ($this->session->userdata('user_login') == null) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['ud'] = $this->session->userdata('user_login');
        $data['oki'] = $this->user->getData('oki')->result();
        $data['kategori'] = $this->user->getData('kategori')->result();
        $this->load->view('user/template/header', $data);
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
            "DATE" => date("Y-m-d H:i:s"),
            "STATUS" => 0
        );
        $exc = $this->user->insertData('aspirasi', $datas);
        if ($exc > 0) {
            redirect("aspirasi/success/sended");
        } else {
            redirect("aspirasi/success/fail");
        }
    }
    public function success($status = null)
    {
        $data['ud'] = $this->session->userdata('user_login');
        $this->load->view('user/template/header', $data);
        if ($status == 'sended') {
            $this->load->view('user/aspirasi/success');
        } else {
            $this->load->view('user/aspirasi/fail');
        }
        $this->load->view('user/template/footer');
    }
}

/* End of file Aspirasi.php */
