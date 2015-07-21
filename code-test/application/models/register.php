<?php                																		

class Register extends CI_model        
{
	function __construct()
	{
		$this->load->database();
		parent::__construct();
	}


		var $id; //
		var $name; //
		var $lastname; //
		var $username; //
		var $password; //



	public function setId($id)
	{
		$this->id = $id;
	}

	public function getId()
	{
		return $this->id;
	}
	public function setName($name)
	{
		$this->name = $name;
	}

	public function getName()
	{
		return $this->name;
	}
	public function setLastname($lastname)
	{
		$this->lastname = $lastname;
	}

	public function getLastname()
	{
		return $this->lastname;
	}
	public function setUsername($username)
	{
		$this->username = $username;
	}

	public function getUsername()
	{
		return $this->username;
	}
	public function setPassword($password)
	{
		$this->password = $password;
	}

	public function getPassword()
	{
		return $this->password;
	}

     ######################################################## ADD #################################################################

	public function add()
	{
		$array = array
		(
			
			'name'  => $this->getName(),
			'lastname' => $this->getLastname(),
			'username' => $this->getUsername(),
			'password' => $this->getPassword()
			
		);

		$this->db->insert('memberss', $array);
		return $this->db->insert_id();
	}


	######################################################## ADD #################################################################
	

	######################################################## checkLogin #################################################################
	public function checkLogin()
	{
		$sql = sprintf
			('
				SELECT id FROM memberss WHERE username = "%s" AND password = "%s"',
				$this->getUsername(),
				$this->getPassword()
			);
			
			$query = $this->db->query($sql);

		return $query->num_rows();
	}

	######################################################## checkLogin #################################################################
}
?>