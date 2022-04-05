<?php
class Shares extends Controller {
	protected function Index() {
		$viewmodel=new ShareModel();
		$this->returnView($viewmodel->Index(), true);
	}

	protected function add_post($post) {
		$viewmodel=new ShareModel();
		$viewmodel->add_post($post);
		header("location:https://kanhaiya.kuroit.in/oops/project2/shares");
	}
}