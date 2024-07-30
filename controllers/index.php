<?php
class Index extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');
        $this->view->render('index/index');
        require('layouts/footer.php');
    }

    function about(){
        require('layouts/header.php');
        $this->view->render('index/about');
        require('layouts/footer.php');
    }
}
?>
