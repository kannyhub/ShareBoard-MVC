<?php

class UserModel extends Model{
	public function register() {
		$post=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
		if (isset($post['register'])) {
			$this->query("INSERT INTO `tblusers`(`name`, `email`, `password`) VALUES (:name,:email,:password)");
			$this->bind(':name',$post['name']);
			$this->bind(':email',$post['email']);
			$this->bind(':password',$post['password']);
			$this->execute();
			if ($this->lastInsertId()) {
				echo "registered";
				// header('Location:'.ROOT_URL.'users');
			}
		}
		return;
	}

	public function login($post) {
		$this->query("select * from tbluser WHERE email=:email AND password=:password");
		$this->bind(":email",$post['email']);
		$this->bind(":password",$post['password']);
		$this->execute();
		$this->result();
	}
}