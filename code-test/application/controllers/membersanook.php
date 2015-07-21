<?php
  defined ('BASEPATH') OR exit('No direct script access allowed');                                   
  class MemberSanook  extends CI_controller
  {


    public function index ()
    {
    	$this->load->helper('url');

        if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
        {

            $this->load->model('register');
            $this->register->setUsername($_COOKIE['username']);
            $this->register->setPassword($_COOKIE['password']);
            
            if(!$this->register->checkLogin())
            {
                
                redirect(base_url('index.php/login'));

            }
        } 
            
            else
            {
            	redirect(base_url('index.php/login'));

            }


    	
    	echo '5555555555555'.$_COOKIE['username'].'<a href="'.base_url('index.php/login/logout').'">ออกจากระบบ</a>';

    }
  }
?>