<?php
defined('BASEPATH') or exit('No direct script access allowed');
require APPPATH . 'libraries/RestController.php';

use chriskacerguis\RestServer\RestController;

class Rest extends RestController
{

	function __construct()
	{
		// Construct the parent class
		parent::__construct();
	}


	public function pegawai_get()
	{
		$data = $this->db->get('tb_pegawai')->result_array();
		if ($data) {
			$this->response($data, RestController::HTTP_OK);
		} else {
			$this->response([
				'status' => false,
				'message' => 'Data tidak ditemukan'
			], RestController::HTTP_NOT_FOUND);
		}
	}
	public function jabatan_get()
	{
		$data = $this->db->get('tb_jabatan')->result_array();
		if ($data) {
			$this->response($data, RestController::HTTP_OK);
		} else {
			$this->response([
				'status' => false,
				'message' => 'Data tidak ditemukan'
			], RestController::HTTP_NOT_FOUND);
		}
	}
}
