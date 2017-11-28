<?php  


require APPPATH . '/libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends REST_Controller {

	public function index()
	{
		
	}

	function index_get() {
 		
 		$get_transaksi = $this->db->get('user')->result();
 		$this->response(array("status"=>"success","result" => $get_transaksi));
 	}

 	public function index_post()
 	{

 		$array = array(
			'email' => $this->post('email'),
			'password' => MD5($this->post('password'))

			);

		$insert = $this->db->insert('user', $array);

		if ($insert) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' =>'fail', 502));
		}
 	}

 	public function index_put()
	{
		$id = $this->put('id_user');

		$array = array(
			
			'email' => $this->put('email'),
			'password' => MD5($this->put('password'))

			);

		$this->db->where('id_user', $id);
		$update = $this->db->update('user', $array);

		if ($update) {
			$this->response($array, 200);
		}else{
			$this->response(array('status' => 'fail', 502));
		}
	}

	public function index_delete()
	{
		$id = $this->delete('id_user');

		$this->db->where('id_user', $id);

		$delete = $this->db->delete('user');

		if ($delete) {
			$this->response(array("status"=>"success"));
		}else{
			echo response(array('status' => 'gagal',502));
		}
	}


}

/* End of file User.php */
/* Location: ./application/controllers/User.php */

?>