<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Proses extends CI_Controller {

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
	public function GenerateProcess()
	{
		$data = array('success' => true ,'message'=>array(),'data' => array(),'NoUji' => '');

		$Nama                = $this->input->post('Nama');
        $Email               = $this->input->post('Email');
        $NoTlp               = $this->input->post('NoTlp');

        $harga               = $this->input->post('harga');
        $KondisiFisik        = $this->input->post('KondisiFisik');
        $Kelengkapan         = $this->input->post('Kelengkapan');
        $UkuranLayar         = $this->input->post('UkuranLayar');
        $DTBatrai            = $this->input->post('DTBatrai');
        $VGA                 = $this->input->post('VGA');
        $Processor           = $this->input->post('Processor');
        $RAM                 = $this->input->post('RAM');
        $KapasitasPenyimpnan = $this->input->post('KapasitasPenyimpnan');

        $rs = $this->ModelsExecuteMaster->GetData('tmerk');

        $UT_Harga = 0;
		$UT_KondisiFisik = 0;
		$UT_Kelengkapan = 0;
		$UT_UkuranLayar = 0;
		$UT_DRBatrai = 0;
		$UT_VGA = 0;
		$UT_Processor = 0;
		$UT_RAM = 0;
		$UT_Hardisk = 0;

		$SQL = "SELECT RIGHT(MAX(NoUji),4)  AS Total FROM thasiluji WHERE LEFT(NoUji, LENGTH('10')) = '10'";

		// var_dump($SQL);
		$rsx = $this->db->query($SQL);

		$temp = $rsx->row()->Total + 1;

		$nomor = '10'.str_pad($temp, 6,"0",STR_PAD_LEFT);

		$data['NoUji'] = $nomor;
        if ($rs->num_rows() > 0) {
        	foreach ($rs->result() as $key) {
        		$UT_Harga = 100/100 * ($harga-1)/(3);
				$UT_KondisiFisik = 100/100 * ($KondisiFisik-1)/(3);
				$UT_Kelengkapan = 100/100 * ($Kelengkapan-1)/(3);
				$UT_UkuranLayar = 100/100 * ($UkuranLayar-1)/(3);
				$UT_DRBatrai = 100/100 * ($DTBatrai-1)/(3);
				$UT_VGA = 100/100 * ($VGA-1)/(3);
				$UT_Processor = 100/100 * ($Processor-1)/(3);
				$UT_RAM = 100/100 * ($RAM-1)/(3);
				$UT_Hardisk = 100/100 * ($KapasitasPenyimpnan-1)/(3);

				$update = $this->db->query("UPDATE tmerk set 
					UT_Harga = ".$UT_Harga * $key->WK_Harga.",
					UT_KondisiFisik = ".$UT_KondisiFisik * $key->WK_KondisiFisik.",
					UT_Kelengkapan = ".$UT_Kelengkapan * $key->WK_Kelengkapan.",
					UT_UkuranLayar = ".$UT_UkuranLayar * $key->WK_UkuranLayar.",
					UT_DRBatrai = ".$UT_DRBatrai * $key->WK_DTBatrai.",
					UT_VGA = ".$UT_VGA * $key->WK_VGA.",
					UT_Processor = ".$UT_Processor * $key->WK_Processor.",
					UT_RAM = ".$UT_RAM * $key->WK_RAM.",
					UT_Hardisk = ".$UT_Hardisk * $key->WK_Hardisk."
					WHERE id = ".$key->id.";"
				);
        	}
        }

        echo json_encode($data);
	}
	public function appendhasil()
	{
		$data = array('success' => true ,'message'=>array(),'data' => array(),'NoUji' => '');

		$NoUji	= $this->input->post('NoUji');
		$Nama   = $this->input->post('Nama');
        $Email  = $this->input->post('Email');
        $NoTlp  = $this->input->post('NoTlp');
        $hasil	= $this->input->post('hasil');
        $id 	= $this->input->post('id');

    	$param = array(
				'NoUji' => $NoUji,
				'TglUji'=> date("Y-m-d h:i:sa"),
				'Nama' => $Nama,
				'Email' => $Email,
				'NoTlp' => $NoTlp,
				'Hasil' => $hasil,
				'IdMerk' => $id
			);
    	// print_r($hasilx);
    	$append = $this->ModelsExecuteMaster->ExecInsert($param,'thasiluji');
    	if ($append) {
    		$data['success'] = true;
    	}
    	echo json_encode($data);
	}
	public function GetHasilUji()
	{
		$data = array('success' => false ,'message'=>array(),'data' => array());
		$NoUji = $this->input->post('NoUji');

		$SQL = "SELECT a.*,b.Hasil FROM tmerk a
				LEFT JOIN thasiluji b on a.id = b.IdMerk WHERE b.NoUji = '".$NoUji."' ORDER BY b.Hasil DESC";

		$rs = $this->db->query($SQL);

		if ($rs->num_rows() > 0) {
			$data['success'] = true;
			$data['data'] = $rs->result();
		}
		echo json_encode($data);
	}
}
