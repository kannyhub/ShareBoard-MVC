<?php

class Bootstrap {
	private $request;
	private $controller;
	private $action;
	
	public function __construct($request) {
		$this->request=$request;
		if ($this->request['controller']=='') {
			$this->controller='home';
		} else {
			$this->controller=$this->request['controller'];
		}
		if ($this->request['action']=='') {
			$this->action='index';
		} else {
			$this->action=$this->request['action'];
		}
	}

	public function createController() {
			// check class
		if (class_exists($this->controller)) {
			$parents=class_parents($this->controller);
			if (in_array("Controller", $parents)) {
				//   check method
				if (method_exists($this->controller, $this->action)) {
					return new $this->controller($this->action, $this->request);  //  new Home("index",array())
				} else{
					echo "method do not exist";
					return;
				}
			} else {
				echo "base controller not found";
				return;
			}
		} else {
			echo "class does not exist";
			return;
		}
	}
}