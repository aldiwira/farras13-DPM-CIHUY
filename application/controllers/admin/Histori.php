<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
		$this->load->library('xls', 'xls');
	}

	public function aspirasi()
	{
		$data['aspirasi'] = $this->a->getASP()->result();
		$data['handleType'] = 'aspirasi';
		$data['main_view'] = 'admin/histori_aspirasi';
		$data['asp'] = $this->a->getASP('1')->result();
		$this->load->view('admin/dashboard', $data);
	}
	public function saran()
	{
		$data['main_view'] = 'admin/histori_saran';
		$data['handleType'] = 'saran';
		$tabel = 'saran';
		$joinTabel = "users";
		$joinOn = "users.NIM = saran.NIM";
		$where = null;
		$whereClause = null;
		$attr = "saran.SARAN_ID, users.NAMA, saran.NIM, saran.SARAN, saran.DATE";
		$data['hsr'] = $this->a->getJoinWhere($tabel, $joinTabel, $joinOn, $where, $whereClause, $attr)->result();
		$this->load->view('admin/dashboard', $data);
	}
	public function log()
	{
		$data['main_view'] = 'admin/log';
		$data['log'] = $this->a->get('log')->result();
		$this->load->view('admin/dashboard', $data);
	}
	public function handleAllAction($req = null)
	{
		if ($req == 'aspirasi') {
			if ($_POST['request'] == 'delete') {
				$this->del_aspirasi();
			} else if ($_POST['request'] == 'print') {
				$this->print_aspirasi();
			}
		} else if ($req == 'saran') {
			if ($_POST['request'] == 'delete') {
				$this->del_saran();
			} else if ($_POST['request'] == 'print') {
				$this->print_saran();
			}
		}
	}

	//aspirasi function
	public function del_aspirasi()
	{

		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ASP_ID', $dt[$i], 'aspirasi');
		}

		redirect('admin/Histori/aspirasi');
	}
	public function print_aspirasi()
	{
		$checkedData = $this->input->post_get('pilih');

		if (!empty($checkedData)) {
			foreach ($checkedData as $checked) {
				$data[] = $checked;
			}
			$this->printExecutor($data, 'aspirasi');
			redirect('admin/Histori/aspirasi');
		}
	}
	public function updateAspirasiStatus($id)
	{
		$where = "ASP_ID = " . $id;
		$data = array(
			'STATUS' => 1
		);
		$table = "aspirasi";
		$this->a->update($table, $data, $where);
	}

	//Saran function
	public function del_saran()
	{
		$dt = $this->input->post('pilih');
		$jl = count($dt);
		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('SARAN_ID', $dt[$i], 'saran');
		}
		redirect('admin/saran');
	}
	public function print_saran()
	{
		$checkedData = $this->input->post_get('pilih');
		if (!empty($checkedData)) {
			foreach ($checkedData as $key) {
				$data[] = $key;
			}
			$this->printExecutor($data, 'saran');
			redirect('admin/saran');
		}
	}

	//

	//Print executor
	public function printExecutor($data, $type)
	{
		$__DATA = array();
		if ($type == 'aspirasi') {
			$ct = count($data);
			for ($i = 0; $i < $ct; $i++) {
				//ini buat get id dan kawan kawan
				$id = $data[$i];
				$datas = $this->a->getASPById($id)->result_array();

				//Masukin array biar uwu

				$__DATA["data"][] = $datas;

				//ini untuk manggil update transaksi berdasarkan ID
				$this->updateAspirasiStatus($id);
			}
			//exec
			$this->xls->export_xls_aspirasi($__DATA, 'aspirasi');
		} else if ($type == 'saran') {
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
			$this->xls->export_xls_aspirasi($__DATA, 'saran');
		}
	}
}

/* End of file Histori.php */
/* Location: ./application/controllers/Histori.php */
