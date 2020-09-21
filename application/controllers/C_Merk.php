<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Merk extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct()
	{
		parent::__construct();
		$this->load->model('ModelsExecuteMaster');
		$this->load->model('GlobalVar');
		$this->load->model('Apps_mod');
		$this->load->model('LoginMod');
	}
	public function Read()
	{
		$data = array('success' => false ,'message'=>array(),'data' => array());

		$id = $this->input->post('id');

		if ($id == '') {
			$rs = $this->ModelsExecuteMaster->GetData('tmerk');
		}
		else{
			$rs = $this->ModelsExecuteMaster->FindData(array('id'=>$id),'tmerk');
		}
		$data['success'] = true;
		$data['data'] = $rs->result();
		echo json_encode($data);
	}
	public function GetBetween()
	{
		$data = array('success' => false ,'message'=>array(),'resultnilai' => 0);

		$Harga = $this->input->post('Harga');
		$SQL = "SELECT * FROM tnilai WHERE kondisilain = '' AND ".$Harga." BETWEEN batasbawah AND batasatas";

		$rs = $this->db->query($SQL);
		if ($rs->num_rows() > 0) {
			$data['success'] = true;
			$data['resultnilai'] = $rs->row()->indexs;
		}
		echo json_encode($data);
	}
	public function GetNilai()
	{
		$data = array('success' => false ,'message'=>array(),'resultnilai' => 0);

		$param = $this->input->post('param');
		$SQL = "SELECT * FROM tnilai WHERE kondisilain like '%".$param."%' ";

		$rs = $this->db->query($SQL);
		if ($rs->num_rows() > 0) {
			$data['success'] = true;
			$data['resultnilai'] = $rs->row()->indexs;
		}
		echo json_encode($data);
	}
	public function CRUD()
	{
		$data = array('success' => false ,'message'=>array());

		$id = $this->input->post('id');
		$formtype = $this->input->post('formtype');

		if ($formtype != "delete") {
			$Stok = $this->input->post('Stok');
			$images = $this->input->post('images');
			$Merk = $this->input->post('Merk');
			$Harga = $this->input->post('Harga');
			$KondisiFisik = $this->input->post('KondisiFisik');
			$Kelengkapan = $this->input->post('Kelengkapan');
			$UkuranLayar = $this->input->post('UkuranLayar');
			$DTBatrai = $this->input->post('DTBatrai');
			$VGA = $this->input->post('VGA');
			$Processor = $this->input->post('Processor');
			$RAM = $this->input->post('RAM');
			$Hardisk = $this->input->post('Hardisk');
			$N_Harga = $this->input->post('N_Harga');
			$N_KondisiFisik = $this->input->post('N_KondisiFisik');
			$N_Kelengkapan = $this->input->post('N_Kelengkapan');
			$N_UkuranLayar = $this->input->post('N_UkuranLayar');
			$N_DTBatrai = $this->input->post('N_DTBatrai');
			$N_VGA = $this->input->post('N_VGA');
			$N_Processor = $this->input->post('N_Processor');
			$N_RAM = $this->input->post('N_RAM');
			$N_Hardisk = $this->input->post('N_Hardisk');
			// $exploder = explode("|",$ItemGroup[0]);
			$WK_Harga = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 1")->row()->BobotFaktor/(1/$N_Harga);
			$WK_KondisiFisik = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 2")->row()->BobotFaktor/(1/$N_KondisiFisik);
			$WK_Kelengkapan = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 3")->row()->BobotFaktor/(1/$N_Kelengkapan);
			$WK_UkuranLayar = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 4")->row()->BobotFaktor/(1/$N_UkuranLayar);
			$WK_DTBatrai = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 5")->row()->BobotFaktor/(1/$N_DTBatrai);
			$WK_VGA = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 6")->row()->BobotFaktor/(1/$N_VGA);
			$WK_Processor = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 7")->row()->BobotFaktor/(1/$N_Processor);
			$WK_RAM = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 8")->row()->BobotFaktor/(1/$N_RAM);
			$WK_Hardisk = 1 / $this->db->query("SELECT * FROM vw_bobot WHERE kodealternatif = 9")->row()->BobotFaktor/(1/$N_Hardisk);
		}
		$param = array(
			'Merk' => $Merk,
			'Harga' => $Harga,
			'KondisiFisik' => $KondisiFisik,
			'Kelengkapan' => $Kelengkapan,
			'UkuranLayar' => $UkuranLayar,
			'DTBatrai' => $DTBatrai,
			'VGA' => $VGA,
			'Processor' => $Processor,
			'RAM' => $RAM,
			'Hardisk' => $Hardisk,
			'N_Harga' => $N_Harga,
			'N_KondisiFisik' => $N_KondisiFisik,
			'N_Kelengkapan' => $N_Kelengkapan,
			'N_UkuranLayar' => $N_UkuranLayar,
			'N_DTBatrai' => $N_DTBatrai,
			'N_VGA' => $N_VGA,
			'N_Processor' => $N_Processor,
			'N_RAM' => $N_RAM,
			'N_Hardisk' => $N_Hardisk,
			'WK_Harga' => $WK_Harga,
			'WK_KondisiFisik' => $WK_KondisiFisik,
			'WK_Kelengkapan' => $WK_Kelengkapan,
			'WK_UkuranLayar' => $WK_UkuranLayar,
			'WK_DTBatrai' => $WK_DTBatrai,
			'WK_VGA' => $WK_VGA,
			'WK_Processor' => $WK_Processor,
			'WK_RAM' => $WK_RAM,
			'WK_Hardisk' => $WK_Hardisk,
			'Stok'	=> $Stok,
			'images' => $images
		);
		if ($formtype == 'add') {
			$this->db->trans_begin();
			try {
				$call_x = $this->ModelsExecuteMaster->ExecInsert($param,'tmerk');
				if ($call_x) {
					$this->db->trans_commit();
					$data['success'] = true;
				}
				else{
					$data['message'] = "Gagal Input Role";
					goto jump;
				}
			} catch (Exception $e) {
				jump:
				$this->db->trans_rollback();
				// $data['success'] = false;
				// $data['message'] = "Gagal memproses data ". $e->getMessage();
			}
		}
		elseif ($formtype == 'edit') {
			try {
				$rs = $this->ModelsExecuteMaster->ExecUpdate($param,array('id'=> $id),'tmerk');
				if ($rs) {
					$data['success'] = true;
				}
			} catch (Exception $e) {
				$data['success'] = false;
				$data['message'] = "Gagal memproses data ". $e->getMessage();
			}
		}
		elseif ($formtype == 'delete') {
			try {
				$SQL = "DELETE FROM tmerk WHERE ID = ".$id;
				$rs = $this->db->query($SQL);
				if ($rs) {
					$data['success'] = true;
				}
			} catch (Exception $e) {
				$data['success'] = false;
				$data['message'] = "Gagal memproses data ". $e->getMessage();
			}
		}
		else{
			$data['success'] = false;
			$data['message'] = "Invalid Form Type";
		}
		echo json_encode($data);
	}
}
