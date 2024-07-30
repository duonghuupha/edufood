<?php
class Doctor_Model extends Model{
    function __construct(){
        parent::__construct();
    }

    function get_list_doctor(){
        $query = $this->db->query("SELECT id, code, title, price, per_time FROM tbl_doctor_family_web WHERE status = 1
                                    ORDER BY order_doctor ASC");
        return $query->fetchAll();
    }
}
?>