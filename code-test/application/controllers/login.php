<?php
  defined ('BASEPATH') OR exit('No direct script access allowed');  
  class Login  extends CI_controller                                       
  {

    public function Logout ()
    {

      $this->load->helper('url');
        setcookie('username','',time()-3600,'/');
        setcookie('password','',time()-3600,'/');
        redirect(base_url('index.php/login'));

    }

    public function index ()
    {
        $this->load->helper('url');

        if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
        {

            $this->load->model('register');
            $this->register->setUsername($_COOKIE['username']);
            $this->register->setPassword($_COOKIE['password']);
            
            if($this->register->checkLogin())
            {
                
                redirect(base_url('index.php/memberzone'));
            }

        }

    	if ($this->input->post())
    		
    	{
    		$this->load->model('register');
    		$this->register->setUsername($this->input->post('username'));
    		$this->register->setPassword($this->input->post('password'));
    		
    		if($this->register->checkLogin())
    		{
    			//ถ้าผ่าน
    			//echo 'Pass';
    			setcookie('username',$this->input->post('username'),(time()+3600),'/');
    			setcookie('password',$this->input->post('password'),(time()+3600),'/');
                redirect(base_url('index.php/memberzone'));
    		}
    		else
    		{
    			//ถ้าไม่ผ่าน
    			echo 'Fail';

    		}
    		

    	}
			
    		$this->load->view('login');

    }
   }
?>