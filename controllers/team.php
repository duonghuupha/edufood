<?php
class Team extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');

        $rows = isset($_REQUEST['rows']) ? $_REQUEST['rows'] : 8;
        $get_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $offset = ($get_pages-1)*$rows;
        $jsonObj = $this->model->get_team($offset, $rows);
        $this->view->jsonObj = $jsonObj; $this->view->perpage = $rows; $this->view->page = $get_pages;

        $this->view->render('team/index');
        require('layouts/footer.php');
    }
}
?>
