<?php
class InsertController extends CI_Controller
{
function insert()
{
	$name=$this->input->get_post('name');
	$phone=$this->input->get_post('phone');
	$email=$this->input->get_post('email');
	$gender=$this->input->get_post('r');
	$hobby=$this->input->get_post('c');
	$h=implode(',',$hobby); 

    $country=$this->input->get_post('country');
	// echo $country;
$data=array('name'=>$name,'phone'=>$phone,'email'=>$email,'gender'=>$gender,'hobby'=>$h,'country'=>$country);

$this->load->model('InsertModel');
$this->InsertModel->insert($data);
}

function edit()
{
	$this->load->model('InsertModel');
		$view['data']=$this->InsertModel->select();

}
	// function edit($id)
	// {
	// 	   $data['result']=$this->InsertModel->edit($id);
 //        $this->load->view('editemployee',$data);
	// }

function delete()
{
	$id=$this->input->get_post('id');
	$this->load->model('InsertModel');
		$this->InsertModel->delete($id);
}
function update()
{
	$id=$this->input->get_post('id');
	$this->load->model('InsertModel');
		$this->InsertModel->update($id);
}

}
?>