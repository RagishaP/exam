<?php
/**
* 
*/
class InsertModel extends CI_Model
{
	
	function insert($data)
	{
		$this->db->insert('employee',$data);
	}
		function select()
	{
		$n=$this->db->select('*')
		->from('employee')
		->get();
		$nn=$n->result_array();

		return $nn;

	}
	function selectedit($id)
	{
		$n=$this->db->select('*')
		->from('employee')
		->where('id',$id)
		->get();
		$nn=$n->result_array();

		return $nn;

	}

function delete($id)
	{
$id1=$id;
		$this->db->delete('employee')
		->where('id',$id1);
	}
	function edit($id)
	{
	$q= $this->db->get_where('employee', array('id' => $id));
        return $q->result();
	}
function update($id)
{
	$na=$this->input->get_post('name');
	$po=$this->input->get_post('phone');
	$em=$this->input->get_post('email');
	$this->db->where('id', $id);
        $this->db->update('employee',$data);
}

}