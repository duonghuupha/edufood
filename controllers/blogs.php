<?php
class Blogs extends Controller{
    function __construct(){
        parent::__construct();
    }

    function index(){
        require('layouts/header.php');

        $id = base64_decode($_REQUEST['id']);
        $json = $this->model->get_info_menu($id);
        $this->view->json = $json;

        $rows = isset($_REQUEST['rows']) ? $_REQUEST['rows'] : 6;
        $get_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $offset = ($get_pages-1)*$rows;
        $jsonObj = $this->model->get_list_data_blogs($json[0]['link'], $offset, $rows);
        $this->view->jsonObj = $jsonObj; $this->view->perpage = $rows; $this->view->page = $get_pages;

        $this->view->render('blogs/index');
        require('layouts/footer.php');
    }

    function detail(){
        require('layouts/header.php');

        $id = base64_decode($_REQUEST['id']);
        $json = $this->model->get_info_content($id);
        $this->view->json = $json;

        $json_extra = $this->model->get_content_extra($json[0]['id'], $json[0]['cate_id']);
        $this->view->json_extra = $json_extra;

        $this->view->render('blogs/detail');
        require('layouts/footer.php');
    }
}
?>
