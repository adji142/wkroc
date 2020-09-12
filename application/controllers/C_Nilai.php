<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Nilai extends CI_Controller {

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
			$SQL = "SELECT a.*,b.NamaAlternatif FROM tnilai a 
					LEFT JOIN talternatif b on b.id = a.kodealternatif
					";
			$rs = $this->db->query($SQL);
		}
		else{
			$rs = $this->ModelsExecuteMaster->FindData(array('id'=>$id),'tnilai');
		}
		$data['success'] = true;
		$data['data'] = $rs->result();
		echo json_encode($data);
	}
	public function CRUD()
	{
		$data = array('success' => false ,'message'=>array());

		$batasatas = $this->input->post('batasatas');
		$batasbawah = $this->input->post('batasbawah');
		$kondisilain = $this->input->post('kondisilain');
		$indexs = $this->input->post('indexs');
		$nilai = $this->input->post('nilai');
		$kodealternatif = $this->input->post('kodealternatif');
		// $exploder = explode("|",$ItemGroup[0]);

		$id = $this->input->post('id');
		$formtype = $this->input->post('formtype');

		$param = array(
			'batasatas' => $batasatas,
			'batasbawah' => $batasbawah,
			'kondisilain' => $kondisilain,
			'indexs' => $indexs,
			'nilai' => $nilai,
			'kodealternatif' => $kodealternatif
		);
		if ($formtype == 'add') {
			$this->db->trans_begin();
			try {
				$call_x = $this->ModelsExecuteMaster->ExecInsert($param,'tnilai');
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
				$rs = $this->ModelsExecuteMaster->ExecUpdate($param,array('id'=> $id),'tnilai');
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
				$SQL = "DELETE FROM tnilai WHERE ID = ".$id;
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
