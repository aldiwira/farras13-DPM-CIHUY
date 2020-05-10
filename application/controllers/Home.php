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
        $this->load->view('user/template/header', $data);
        $this->load->view('user/home/index', $data);
        $this->load->view('user/template/footer');
    }

    public function handleAllAction()
    {
        if ($_POST['edit'] == "password") {
            $this->changePassword();
        } else if ($_POST['send'] == "saran") {
            $this->sendSaran();
        }
    }
    private function changePassword()
    {
        $old = $this->input->post('oldpassword');
        $new = $this->input->post('newpassword');
        $confirm = $this->input->post("confirmpassword");
        $nim = $this->input->post('nimpassword');
        $where = array(
            "NIM" => $nim,
            "PASSWORD" => $old
        );
        if ($old != null && $new != null && $confirm != null) {
            $searchDatas = $this->user->getWhere('users', $where)->result_array();
            foreach ($searchDatas as $key) {
                $truePassword = $key['PASSWORD'];
            }
            if ($searchDatas != null) {
                if ($truePassword == $old && $new == $confirm) {
                    $datas = array(
                        "PASSWORD" => $confirm
                    );
                    $this->user->updateDatas($where, $datas, 'users');
                    $this->notif("Password berhasil di update");
                } else {
                    $this->notif("Pastikan password baru yang anda masukan sudah benar dan sesuai");
                }
            } else {
                $this->notif("Password lama yang anda masukkan salah");
            }
        } else {
            $this->notif("Masukkan password lama dan password baru terlebih dahulu");
        }
    }
    private function notif($arrg)
    {
        $this->session->set_flashdata('flash-data', $arrg);
        redirect('home');
    }
    private function sendSaran()
    {
        $name = $this->input->post('nama');
        $email = $this->input->post('email');
        $saran = $this->input->post('saran');
        $daata = $this->session->userdata('user_login');

        $datas = array(
            'NIM' => $daata['nim'],
            'SARAN' => $saran,
        );

        $this->user->insertData("saran", $datas);
        $this->notif("Saran sudah kami terima, terima kasih sudah mengirimkan saran kepada kami");
    }
}

/* End of file Home.php */
