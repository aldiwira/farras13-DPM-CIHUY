<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aspirasi extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
		$this->load->library('xls', 'xls');
	}

	public function index()
	{
		$data['main_view'] = 'admin/aspirasi';
		$data['asp'] = $this->a->getASP('0')->result();
		$this->load->view('admin/dashboard', $data);
	}

	public function handleAllAction()
	{
		if ($_POST['request'] == 'delete') {
			$this->del_aspirasi();
		} else if ($_POST['request'] == 'print') {
			$this->print_aspirasi();
		}
	}
	public function del_aspirasi()
	{

		$dt = $this->input->post('pilih');
		$jl = count($dt);

		for ($i = 0; $i < $jl; $i++) {
			$this->a->delete('ASP_ID', $dt[$i], 'aspirasi');
		}

		redirect('admin/aspirasi');
	}
	public function print_aspirasi()
	{
		$checkedData = $this->input->post_get('pilih');

		if (!empty($checkedData)) {
			foreach ($checkedData as $checked) {
				$data[] = $checked;
			}
			$this->printExecutor($data);
			redirect('admin/aspirasi');
		}
	}
	public function printExecutor($dataAspirasi)
	{
		$__DATA = array();
		$ct = count($dataAspirasi);
		for ($i = 0; $i < $ct; $i++) {
			//ini buat get id dan kawan kawan
			$id = $dataAspirasi[$i];
			$datas = $this->a->getASPById($id)->result_array();

			//Masukin array biar uwu

			$__DATA["data"][] = $datas;

			//ini untuk manggil update transaksi berdasarkan ID
			$this->updateAspirasiStatus($id);
		}
		$this->xls->export_xls_aspirasi($__DATA, 'aspirasi');
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
}

/* End of file Aspirasi.php */
/* Location: ./application/controllers/Aspirasi.php */
