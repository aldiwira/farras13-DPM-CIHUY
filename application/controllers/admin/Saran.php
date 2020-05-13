<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Saran extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
		$this->load->library('xls', 'xls');
		$a = $this->session->userdata('admin_login');
		if ($a == null) {
			redirect('admin/login');
		}
	}

	public function index()
	{
		$data['ud'] = $this->session->userdata('admin_login');
		$data['main_view'] = 'admin/saran';
		$tabel = 'saran';
		$joinTabel = "users";
		$joinOn = "users.NIM = saran.NIM";
		$where = null;
		$whereClause = null;
		$attr = "saran.SARAN_ID, users.NAMA, saran.NIM, saran.SARAN, saran.DATE";
		$data['srn'] = $this->a->getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function handleAllAction()
	{
		if ($_POST['request'] == 'delete') {
			$this->del_saran();
		} else if ($_POST['request'] == 'print') {
			$this->print_saran();
		}
	}

	public function del_saran()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);
		if ($jl != 0) {
			for ($i = 0; $i < $jl; $i++) {
				$this->a->delete('SARAN_ID', $dt[$i], 'saran');
			}
		} else {
			redirect('admin/saran');
		}
	}
	public function print_saran()
	{
		$checkedData = $this->input->post_get('pilih');
		if (!empty($checkedData)) {
			foreach ($checkedData as $key) {
				$data[] = $key;
			}
			$this->printExecutor($data);
		} else {
			redirect('admin/saran');
		}
	}
	public function printExecutor($data)
	{
		$__DATA = array();
		foreach ($data as $key) {
			//Get saran data by id
			$tabel = 'saran';
			$joinTabel = "users";
			$joinOn = "users.NIM = saran.NIM";
			$where = "saran.SARAN_ID";
			$whereClause = $key;
			$attr = "saran.SARAN_ID, users.NAMA, saran.NIM, saran.SARAN, saran.DATE";
			$saranData = $this->a->getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)->result_array();

			//push to array 
			$__DATA["data"][] = $saranData;
		}
		//exec
		$this->xls->export_xls($__DATA, 'saran');
	}
}

/* End of file Saran.php */
/* Location: ./application/controllers/Saran.php */
