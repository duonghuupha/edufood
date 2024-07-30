<?php
class Team_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_team($start, $end){
        $result = array();
        $query = $this->db->query("SELECT COUNT(*) AS Total FROM tbl_personnel WHERE status = 1 AND publish = 1");
        $row = $query->fetchAll();
        $query = $this->db->query("SELECT id, fullname, level_job, content, image FROM tbl_personnel WHERE status = 1 AND publish = 1
                                    ORDER BY id DESC LIMIT $start, $end");
        $result['total'] = $row[0]['Total'];
        $result['rows'] = $query->fetchAll();
        return $result;
    }
}
?>