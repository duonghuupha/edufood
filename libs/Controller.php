<?php
class Controller {
    public $_Data;
    public $_Convert;
	public $_Setting;
	function __construct() {
		$this->view = new View(); 
        $this->_Data = new Model();
		$this->_Setting = $this->_Data->get_setting();
        $this->_Convert = new Convert();
	}

	public function loadModel($name) {
		$path = 'models/'.$name.'_model.php';
		if (file_exists($path)) {
			require 'models/'.$name.'_model.php';
			$modelName = $name . '_Model';
			$this->model = new $modelName();
		}
	}
}
?>
