<?php
class Doctor extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');

        $jsonObj = $this->model->get_list_doctor();
        $this->view->jsonObj = $jsonObj;

        $this->view->render('doctor/index');
        require('layouts/footer.php');
    }
}
?>
