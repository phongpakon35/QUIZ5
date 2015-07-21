<?php
	
	class TestRegister extends CI_Controller
	{
		
		public function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('form_validation');
		}
		public function index()
		{

			$this->load->view('registerform');
		}
		public function checkregister()
		{
			$this->form_validation->set_rules('name', 'ชื่อสมาชิก', 'required|min_length[3]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('lastname', 'รหัสผ่าน', 'required|min_length[3]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('username', 'ชื่อผู้ใช้งาน', 'required|min_length[5]|max_length[20]',
			array(
				'required' => '***กรุณากรอก{field}',
				'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'**ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
				)
			);
			$this->form_validation->set_rules('password', 'รหัสผ่าน', 'required|min_length[5]|max_length[50]',
			array(
				'required' => '***กรุณากรอก{field}',
				 'min_length'=>'**ช่อง{field}ต้องไม่น้อยกว่า {param} ตัวอักษร',
				'max_length'=>'**ช่อง{field}ไม่มากกว่า {param}ตัวอักษร'
				)
			);
			
			
			if ($this->form_validation->run() == FALSE)
                {

                        $this->load->view('registerform');

                }
                else
                {
                				$this->load->model('register');
		                        $this->register->setName($this->input->post('name'));
		                        $this->register->setLastname($this->input->post('lastname'));
		                        $this->register->setUsername($this->input->post('username'));
		                        $this->register->setPassword($this->input->post('password'));
		                        $this->register->add();
 								$this->load->view('login');
                } 

 			

			}

	}
?>
