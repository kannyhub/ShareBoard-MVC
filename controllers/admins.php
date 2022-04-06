<?php
class Admins extends Controller {
	protected function Index() {
		$viewmodel=new AdminModel();
		$this->returnView($viewmodel->Login(), true);
	}
}