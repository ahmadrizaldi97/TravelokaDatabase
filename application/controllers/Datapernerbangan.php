<?php  
	
	require APPPATH . '/libraries/REST_Controller.php';
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Datapernerbangan extends REST_Controller {
	
		public function index()
		{
			
		}

		function index_get() {
 		
 		$get_transaksi = $this->db->get('penerbangan')->result();
 		$this->response(array("status"=>"success","result" => $get_transaksi));
 		}

 		public function index_post()
 		{

 		$array = array(

 			'id_flights' => $this->post('id_flights'),
			'darimana' => $this->post('darimana'),
			'kemana' => $this->post('kemana'),
			'harga' => $this->post('harga'),
			'id_maskapai' => $this->post('id_maskapai')

			);

		$insert = $this->db->insert('penerbangan', $array);

		if ($insert) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' =>'fail', 502));
		}
 		}

 		public function index_put()
	{
		$id = $this->put('id_flights');

		$array = array(
			
			'id_flights' => $this->put('id_flights'),
			'darimana' => $this->put('darimana'),
			'kemana' => $this->put('kemana'),
			'harga' => $this->put('harga'),
			'id_maskapai' => $this->put('id_maskapai')
			);

		$this->db->where('id_flights', $id);
		$update = $this->db->update('penerbangan', $array);

		if ($update) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' => 'fail', 502));
		}
	}


	public function index_delete()
	{
		$id = $this->delete('id_flights');

		$this->db->where('id_flights', $id);

		$delete = $this->db->delete('penerbangan');

		if ($delete) {
			// echo response(array('status' => 'Sukses'),201);
			$this->response(array("status"=>"success"));
			// echo "string";
		}else{
			// echo response(array('status' => 'gagal',502));
		}
	}
	
	}
	
	/* End of file Datapernerbangan.php */
	/* Location: ./application/controllers/Datapernerbangan.php */

?>