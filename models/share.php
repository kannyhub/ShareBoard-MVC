<?php

class ShareModel extends Model{
	public function Index() {
		$this->query("select * from tblshares");
		$this->execute();
		return $this->result();
	}

	public function add_post($post) {
		$this->query("INSERT INTO `tblshares`(`title`, `body`, `link`) VALUES (:title,:body,:link)");
		$this->bind(':title',$post['title']);
		$this->bind(':body',$post['body']);
		$this->bind(':link',$post['link']);
		$this->execute();
	}
}