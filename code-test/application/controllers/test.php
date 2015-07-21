<?php
class Test extends CI_Controller
{
	public function index()
	{
		$registerId =0;
		$this->load->library('unit_test');
		$this->load->model('register');
		$this->register->setName('backk');
		$this->register->setLastName('doremon');
		$this->register->setUserName('mon2535');
		$this->register->setPassWord('abcd2535');
		$test=$this->register->add();
		$registerId = $test ;
		$expencted_resut ='is_int';
		$this->unit->run($test,$expencted_resut,'UT-01 :ADD Member');

##################################################
		$this->register->setUserName('champ');
		$this->register->setPassWord('5555555');
		$test=$this->register->checkLogin();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-02 :Check login not pass');

################################################
		$this->register->setUserName('mon2535');
		$this->register->setPassWord('abcd2535');
		$test=$this->register->checkLogin();
		$expencted_resut=true;
		$this->unit->run($test,$expencted_resut,'UT-03 :Check login pass');

################################################
		$this->register->setUserName('champ');
		$this->register->setPassWord('5656565');
		$test=$this->register->checkLogin();
		$expencted_resut=false;
		$this->unit->run($test,$expencted_resut,'UT-04 :fail  password ');

################################################
	
	echo $this->unit->report();
	}
}
?>
