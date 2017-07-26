<?php
class Graph extends CI_Controller {
    
    function index() {
        $this->load->helper('url');
        $this->load->database();
        $query = $this->db->query("select * from AVT_IOT_DATA where name = 'a' order by date_time");

        $data['data'] = $query->result_array();

        $this->load->view('graph_view', $data);
    }
}
?>