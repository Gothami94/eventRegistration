
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class UpdateModel extends CI_Model
{
  function update_event($id){
		// $e_id=intval($id);
    $this->load->database();

    if(isset($_POST['save'])) {
    //leave post request
				$e_id= intval($_POST['event_id']);
        $name = $_POST['event_name'];
        $provider = $_POST['event_provider'];
        $category = $_POST['category'];
        $date = $_POST['e_date'];
        $stime = $_POST['start_time'];
        $etime = $_POST['end_time'];

        $sql = $this->db->query("UPDATE event SET event_name='$name',event_provider='$provider',category='$category',e_date='$date',start_time='$stime',end_time='$etime' WHERE event_id=$e_id");
				return TRUE;
      }
			return FALSE;

    }

  function select_event($id)
	{
    $this->load->database();
		$e_id=$id;
    $result = $this->db->query("SELECT * FROM event WHERE event_id=$e_id LIMIT 1");
    return $result;
	}

}
?>
