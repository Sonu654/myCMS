<?php 
	class Main extends Controller{
		function Index(){
			echo '<h2>This is Main Index!!</h2>';
		//	$res=$this->load->model('Test');
		//	print_r($res);
			//$data['title']='title';
			$data['dbResponse']=$this->db->selectAll('table1');
			print_r($data['dbResponse']);
		//		
		}

		function test(){
			$this->load->view('Header',['title'=>'Test']);
			$this->load->view('footer');
		}
	}