<?php
class Blogs_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_info_menu($id){
        $query = $this->db->query("SELECT * FROM tbl_menu WHERE id = $id");
        return $query->fetchAll();
    }

    function get_list_data_blogs($where_cloud, $start, $end){
        $result = array();
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_content WHERE status = 1 AND FIND_IN_SET(cate_id, '$where_cloud')");
        $row = $query->fetchAll();
        $query = $this->db->query("SELECT id, title, image, create_at FROM tbl_content WHERE status = 1 AND FIND_IN_SET(cate_id, '$where_cloud')
                                    ORDER BY id DESC LIMIT $start, $end");
        $result['total'] = $row[0]['Total'];
        $result['rows'] = $query->fetchAll();
        return $result;
    }

    function get_info_content($id){
        $query = $this->db->query("SELECT * FROM tbl_content WHERE id = $id");
        return $query->fetchAll();
    }

    function get_content_extra($id, $cate_id){
        $query = $this->db->query("SELECT id, title, image, create_at FROM tbl_content WHERE id != $id AND cate_id = $cate_id AND status = 1
                                    ORDER BY RAND() LIMIT 0, 5");
        return $query->fetchAll();
    }
}
?>