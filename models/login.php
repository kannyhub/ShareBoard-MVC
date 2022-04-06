<?php

class LoginModel extends Model{
	public function Index() {
		$this->query("select * from tbl_user");
		$this->execute();
		return $this->result();
	}
}