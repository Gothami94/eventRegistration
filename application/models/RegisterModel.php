
<?php

defined('BASEPATH') OR exit('No direct script access allowed');
class RegisterModel extends CI_Model
{
  function reg_event(){
    $this->load->database();
    if(isset($_POST['submit'])) {
        $name = $_POST['event_name'];
        $provider = $_POST['event_provider'];
        $category = $_POST['category'];
        $date = $_POST['e_date'];
        $stime = $_POST['start_time'];
        $etime = $_POST['end_time'];
        $sql = $this->db->query("INSERT INTO event (event_name,event_provider,category,e_date,start_time,end_time) VALUES ('$name','$provider','$category','$date','$stime','$etime')");
        return 1;
      }
    }

  function select_table($id)
	{
    $this->load->database();
    $result = $this->db->query("SELECT * FROM event ORDER BY event_id");
    return $result;
	}

}
?>
