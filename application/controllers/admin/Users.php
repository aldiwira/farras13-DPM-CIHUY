<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{


    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('admin_model', 'a');
        $a = $this->session->userdata('admin_login');
        if ($a == null) {
            redirect('admin/login');
        }
    }


    public function index()
    {
        $data['ud'] = $this->session->userdata('admin_login');
        $data['main_view'] = 'admin/users';
        $data['usrs'] = $this->a->get('users')->result();
        $this->load->view('admin/dashboard', $data);
    }

    public function handleAllAction()
    {
        if ($_POST['delete'] != null) {
            $this->del_user($_POST['delete']);
        } else if ($_POST['edit'] == "userdatas") {
            $this->edit_user();
        }
    }
    public function del_user($nim)
    {
        $this->a->delete('NIM', $nim, 'users');
        redirect("admin/users");
    }
    public function edit_user()
    {
        $datas = array(
            'NIM' => $this->input->post('nim'),
            'NAMA' => $this->input->post('nama'),
            'PASSWORD' => $this->input->post('password'),
            "EMAIL" => $this->input->post('email')
        );
        $where = array(
            'NIM' => $this->input->post('nim')
        );
        $this->a->updateDatas($where, $datas, "users");
        redirect("admin/users");
    }
}
    
    /* End of file Users.php */
