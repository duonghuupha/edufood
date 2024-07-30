<?php
class About extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('about/index');
        require('layouts/footer.php');
    }
}
?>
