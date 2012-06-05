<?php

class Slides_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
}

public function get_slides($slug = FALSE)
{
	if ($slug === FALSE)
	{
		$query = $this->db->get('slides');
		return $query->result_array();
	}
	
	$query = $this->db->get_where('slides', array('slug' => $slug));
	return $query->row_array();
}


?>