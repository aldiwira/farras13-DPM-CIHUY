<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('user_model', 'user');
    }

    public function index()
    {
        $this->load->view('user/login/index');
    }

    public function signUp()
    {
        $mail = $this->input->post('email');
        $nim =  $this->input->post('nim1');
        $nama = $this->input->post('name');
        $pass = $this->input->post('password1');
        
        $w = array('EMAIL' => $mail);
        $n = array('NIM' => $nim);
        $cek1 = $this->user->getWhere('users', $w)->row();
        $cek = $this->user->getWhere('users', $n)->row();
        
        if ($cek == null && $cek1 == null) {
            $a = array(
                'NIM' => $nim,
                'NAMA' => $nama,
                'PASSWORD' => $pass,
                'EMAIL' => $mail,
            );
            $exc = $this->user->insertData('users',$a);

            if ($exc > 0) {
                $this->session->set_flashdata('flash-data', 'Alhamdulillah Berhasil Sign Up');
                redirect('login');
            } else {
                $this->session->set_flashdata('flash-data', 'Maaf Anda Kurang Beruntung, Please Try Again');
                redirect('login');
            }
        
        } elseif ($nim != $cek->NIM) {
            if ($cek1->EMAIL != $mail) {
                $arrayName = array(
                    'NIM' => $nim,
                    'NAMA' => $nama,
                    'PASSWORD' => $pass,
                    'EMAIL' => $mail,
                );
                $exc = $this->user->insertData('users',$arrayName);

                if ($exc > 0) {
                    $this->session->set_flashdata('flash-data', 'Alhamdulillah Berhasil Sign Up');
                    redirect('login');
                } else {
                    $this->session->set_flashdata('flash-data', 'Maaf Anda Kurang Beruntung, Please Try Again');
                    redirect('login');
                }
            } else {
                $this->session->set_flashdata('flash-data', 'Email sudah terpakai');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('flash-data', 'Nim sudah terpakai');
            redirect('login');
        }
    }

    public function signIn()
    {
        $nim =  $this->input->post('nim');
        $pass = $this->input->post('password');
        
        $n = array('NIM' => $nim, 'PASSWORD' => $pass);
        $cek = $this->user->getWhere('users',$n)->row();

        if ($cek != null) {
            $userdata = array('nim' => $cek->NIM, 'nama' => $cek->NAMA, 'email' => $cek->EMAIL) ;
			$this->session->set_userdata('user_login', $userdata);
            $datauser = $this->session->userdata('user_login');
            
            if ($datauser != null) {
                // echo "<script>history.go(-2);</script>";
                redirect('Home','refresh');
            }else{
                redirect('Login','refresh');
                
            }
        }else{
            $this->session->set_flashdata('flash-data', 'Pastikan Nim dan Password anda sudah benar');
            redirect('login');
        }
    }
    public function Ladmin()
    {
        $this->load->view('user/login/login_admin');   
    }
    public function signInAdmin()
    {
        $nim =  $this->input->post('username');
        $pass = $this->input->post('pass');
        
        $n = array('USERNAME' => $nim, 'PASSWORD' => $pass);
        $cek = $this->user->getWhere('admin',$n)->row();

        if ($cek != null) {
            $userdata = array('username' => $cek->USERNAME) ;
			$this->session->set_userdata('admin_login', $userdata);
            $datauser = $this->session->userdata('admin_login');
            
            if ($datauser != null) {
               redirect('admin','refresh');
            }else{
                
                redirect('Login/ladmin','refresh');
                
            }
        }else{
            $this->session->set_flashdata('flash-data', 'Pastikan Nim dan Password anda sudah benar');
            redirect('login/Ladmin');
        }
    }
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('Home','refresh'); 
    }
}

/* End of file Login.php */
