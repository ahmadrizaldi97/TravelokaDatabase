<?php  

require APPPATH . '/libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Maskapai extends REST_Controller {

	public function index()
	{
		
	}

	function index_get() {
 		
 		$get_transaksi = $this->db->get('maskapai')->result();
 		$this->response(array("status"=>"success","result" => $get_transaksi));
 	}

 	public function index_post()
 	{

 		$array = array(
			'nama_maskapai' => $this->post('nama_maskapai')

			);

		$insert = $this->db->insert('maskapai', $array);

		if ($insert) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' =>'fail', 502));
		}
 	}

 	public function index_put()
	{
		$id = $this->put('id_maskapai');

		$array = array(
			
			'nama_maskapai' => $this->put('nama_maskapai')
			);

		$this->db->where('id_maskapai', $id);
		$update = $this->db->update('maskapai', $array);

		if ($update) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' => 'fail', 502));
		}
	}

	public function index_delete()
	{
		$id = $this->delete('id_maskapai');

		$this->db->where('id_maskapai', $id);

		$delete = $this->db->delete('maskapai');

		if ($delete) {
			$this->response(array("status"=>"success"));
		}else{
			echo response(array('status' => 'gagal',502));
		}
	}






}

/* End of file Maskapai.php */
/* Location: ./application/controllers/Maskapai.php */

?>