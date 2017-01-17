<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class SearchModel extends CI_Model
{

	function search()
	{
		$this->load->database();
		if(isset($_POST['search'])) {
			$term =$_POST['term'];

			if ($term) {
				//$result = $this->db->query("SELECT * FROM event WHERE event_name LIKE '%" . $term . "%'");
				$result = $this->db->like('event_name', $term)
	             ->or_like('event_provider', $term)
	             ->get('event');
				return $result;
			}
			else{
				return array();
			}
		}
}
}

?>
