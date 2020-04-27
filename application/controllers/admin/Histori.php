<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Histori extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('admin_model', 'a');
	}

	public function aspirasi()
	{
		$data['aspirasi'] = $this->a->getASP()->result();
		$data['main_view'] = 'admin/histori_aspirasi';
		$data['asp'] = $this->a->getASP('1')->result();
		$this->load->view('admin/dashboard', $data);
	}
	public function saran()
	{
		$data['main_view'] = 'admin/histori_saran';
		$data['hsr'] = $this->a->getJoinWhere('saran', 'STATUS', '1')->result();
		$this->load->view('admin/dashboard', $data);
	}
	public function log()
	{
		$data['main_view'] = 'admin/log';
		$data['log'] = $this->a->get('log')->result();
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

		redirect('admin/Histori/aspirasi');
	}
	public function print_aspirasi()
	{
		$checkedData = $this->input->post_get('pilih');

		if (!empty($checkedData)) {
			foreach ($checkedData as $checked) {
				$data[] = $checked;
			}
			$this->printExecutor($data);
			redirect('admin/Histori/aspirasi');
		}
	}
	public function printExecutor($dataAspirasi)
	{
		$ct = count($dataAspirasi);
		for ($i = 0; $i < $ct; $i++) {
			//ini buat get id dan kawan kawan
			$id = $dataAspirasi[$i];
			$dataInfo = $this->a->getASPById($id)->result_array();
			foreach ($dataInfo as $key) {
				$makerName = $key['NAMA'];
				$destination = $key['TUJUAN'];
				$data['dataAspirasi'] = $dataInfo;
				//buat pdf makernya
				$this->load->library('pdf');
				$this->pdf->setPaper('A4', 'potrait');
				$this->pdf->filename = "Aspirasi " . $makerName . " Untuk " . $destination;
				//Desain format laporannya belum aku buat, masih desain acak tapi work kok :)
				$this->pdf->load_view('admin/cetak_aspirasi', $data);
			}
			//ini untuk manggil update transaksi berdasarkan ID
			$this->updateAspirasiStatus($id);
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
}

/* End of file Histori.php */
/* Location: ./application/controllers/Histori.php */
