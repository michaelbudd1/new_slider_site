<?php
class Slides extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Slides_model');
	}

	public function index()
	{
		$data['slides'] = $this->Slides_model->get_slides();
	}

	public function view($slug)
	{
		$data['slides'] = $this->Slides_model->get_slides($slug);
	}
}

public function index()
{
	$data['slides'] = $this->slides_model->get_slides();
	$data['title'] = 'Slides archive';

	$this->load->view('templates/header', $data);
	$this->load->view('slides/index', $data);
	$this->load->view('templates/footer');
}

?>