<?php
/**
* 
*/
class User extends CI_Controller{
	//function auto run
	function __construct(){
		parent::__construct();

		//load auto model
		$this->load->model("user_m");
	}
	public function form()
	{
		$this->load->view("form_user_v");
	}

	public function add(){
		//create data array
		$data = array(
			"username" => $this->input->post("username"),
			"password" => $this->input->post("password"),
			"fullname" => $this->input->post("fullname"),
			"level" => $this->input->post("level")
		);

		//cek data before save
		var_dump($data);
		//
		$this ->user_m->add($data);
	}
}