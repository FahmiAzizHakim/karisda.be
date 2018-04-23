<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_master extends CI_Model {

	function getListData($table)
	{
		return $this->db->get($table);
	}

	function getDataWhere($where, $param, $table)
	{
		$this->db->where($where, $param);
		return $this->db->get($table);
	}

	function save($table, $data)
	{
		$this->db->insert($table, $data);
		if($this->db->affected_rows() > 0)
		{
		    return true;
		}else return false;
	}

	function update($where, $id, $data, $table)
	{
		$this->db->where($where, $id);
		$this->db->update($table, $data);
		if($this->db->affected_rows() > 0)
		{
		    return true;
		}else return false;
	}

	function del($id, $kolom, $table)
	{
		$this->db->where($kolom, $id);
		$this->db->delete($table);
	}
}
?>