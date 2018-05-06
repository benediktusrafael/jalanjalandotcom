<?php

class User_m extends CI_Model{
	function gets(){
		return $this->db->get("Users")->result();
	}
	function get($data){}


	function add($data){
		$this->db->insert("users", $data);
	}
	function edit(){}
	function del($data){
		$this->db->delete("users",["id"=>$data]);
	}
}

