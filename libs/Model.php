<?php
class Model {
    function __construct() {
		$this->db = new Database();
	}

    // them moi du lieu
    function insert($table, $array){
        $cols = array();
        $bind = array();
        foreach($array as $key => $value){
            $cols[] = $key;
            $bind[] = "'".$value."'";
        }
        $query = $this->db->query("INSERT INTO ".$table." (".implode(",", $cols).") VALUES (".implode(",", $bind).")");
        return $query;
    }

    // cap nhat du lieu
    function update($table, $array, $where){
        $set = array();
        foreach($array as $key => $value){
            $set[] = $key." = '".$value."'";
        }
        $query = $this->db->query("UPDATE ".$table." SET ".implode(",", $set)." WHERE ".$where);
        return $query;
    }

    // xoa du lieu
    function delete($table, $where = ''){
        if($where == ''){
            $query = $this->db->query("DELETE FROM ".$table);
        }else{
        $query = $this->db->query("DELETE FROM ".$table." WHERE ".$where);
        }
        return $query;
    }
///////////////////////////// cac ham khac //////////////////////////////////////////////////////////////////////////////////
    /**
     * Thong tin website
     */
    function get_setting(){
        $query = $this->db->query("SELECT * FROM tbl_setting_web WHERE id = 1");
        return $query->fetchAll();
    }
    /**
     * tra ve menu top
     */
    function return_menu_top(){
        $query = $this->db->query("SELECT id, type, link, title FROM tbl_menu WHERE status = 1 AND position = 1 ORDER BY order_menu ASC");
        return $query->fetchAll();
    }

    /**
     * tra ve hinh anh slide
     */
    function return_item_slide(){
        $query = $this->db->query("SELECT id, title_1, title_2, image FROM tbl_block_1 WHERE status = 1 ORDER BY id DESC");
        return $query->fetchAll();
    }

    /**
     * tra ve thong tin block_3
     */
    function get_info_block_3(){
        $query = $this->db->query("SELECT * FROM tbl_block_3 WHERE id = 1");
        return $query->fetchAll();
    }

    /**
     * Tra ve danh sach bai viet cua block_3
     */
    function get_list_blogs_of_block_3($array_data){
        $query = $this->db->query("SELECT id, title, create_at, image FROM tbl_content WHERE status = 1 AND FIND_IN_SET(cate_id, '$array_data') ORDER BY id DESC
                                    LIMIT 0, 3");
        return $query->fetchAll();
    }

    /**
     * Tra ve danh sach bac si
     */
    function get_list_team(){
        $query = $this->db->query("SELECT id, image, fullname, level_job, content FROM tbl_personnel WHERE status = 1 AND publish = 1
                                    ORDER BY RAND() LIMIT 0, 4");
        return $query->fetchAll();
    }

    /**
     * Tra ve thong tin block footer
     */
    function get_info_block_footer($id){
        if($id == 1){
            $query = $this->db->query("SELECT title, menu_id FROM tbl_block_footer_1 WHERE id = 1");
        }else{
            $query = $this->db->query("SELECT title, menu_id FROM tbl_block_footer_2 WHERE id = 1");
        }
        return $query->fetchAll();
    }

    /**
     * Tra ve danh sach menu footer
     */
    function get_menu_footer($array_id){
        $query = $this->db->query("SELECT id, type, link, title FROM tbl_menu WHERE FIND_IN_SET(id, '$array_id') AND status = 1 AND position = 2");
        return $query->fetchAll();
    }

    /**
     * Tra ve list doctor
     */
    function get_list_doctor_family($code){
        $query = $this->db->query("SELECT * FROM tbl_doctor_family_list WHERE code_doctor = $code");
        return $query->fetchAll();
    }
/////////////////////////////////////end cac ham khac ///////////////////////////////////////////////////////////////////////
}

?>
