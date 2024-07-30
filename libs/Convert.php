<?php
class Convert{
	//pagination
    function pagination($total, $get_pages, $per_page = 20){
        $perpage = $per_page;
        $posts  = $total;
        $pages  = ceil($posts / $perpage);
        //$get_pages = isset($_REQUEST['page']) ? $_REQUEST['page'] : 1;
        $data = array(
            'options' => array(
                'default'   => 1,
                'min_range' => 1,
                'max_range' => $pages
            )
        );

        $number = trim($get_pages);
        $number = filter_var($number, FILTER_VALIDATE_INT, $data);
        $range  = $perpage * ($number - 1);
        $prev = $number - 1;
        $next = $number + 1;
        $pagination = array('range' => $range, 'perpage' => $perpage, 'prev' => $prev, 'next' => $next, 'number' => $number, 'pages' => $pages);
        return $pagination;
    }

	function vn2latin($cs, $tolower = false){
        /*Mảng chứa tất cả ký tự có dấu trong Tiếng Việt*/
        $marTViet=array("à","á","ạ","ả","ã","â","ầ","ấ","ậ","ẩ","ẫ","ă",
            "ằ","ắ","ặ","ẳ","ẵ","è","é","ẹ","ẻ","ẽ","ê","ề",
            "ế","ệ","ể","ễ",
            "ì","í","ị","ỉ","ĩ",
            "ò","ó","ọ","ỏ","õ","ô","ồ","ố","ộ","ổ","ỗ","ơ",
            "ờ","ớ","ợ","ở","ỡ",
            "ù","ú","ụ","ủ","ũ","ư","ừ","ứ","ự","ử","ữ",
            "ỳ","ý","ỵ","ỷ","ỹ",
            "đ",
            "À","Á","Ạ","Ả","Ã","Â","Ầ","Ấ","Ậ","Ẩ","Ẫ","Ă",
            "Ằ","Ắ","Ặ","Ẳ","Ẵ",
            "È","É","Ẹ","Ẻ","Ẽ","Ê","Ề","Ế","Ệ","Ể","Ễ",
            "Ì","Í","Ị","Ỉ","Ĩ",
            "Ò","Ó","Ọ","Ỏ","Õ","Ô","Ồ","Ố","Ộ","Ổ","Ỗ","Ơ","Ờ","Ớ","Ợ","Ở","Ỡ",
            "Ù","Ú","Ụ","Ủ","Ũ","Ư","Ừ","Ứ","Ự","Ử","Ữ",
            "Ỳ","Ý","Ỵ","Ỷ","Ỹ",
            "Đ"," ","$","%","?","&",'"',',',':',"/");

        /*Mảng chứa tất cả ký tự không dấu tương ứng với mảng $marTViet bên trên*/
        $marKoDau=array("a","a","a","a","a","a","a","a","a","a","a",
            "a","a","a","a","a","a",
            "e","e","e","e","e","e","e","e","e","e","e",
            "i","i","i","i","i",
            "o","o","o","o","o","o","o","o","o","o","o","o",
            "o","o","o","o","o",
            "u","u","u","u","u","u","u","u","u","u","u",
            "y","y","y","y","y",
            "d",
            "A","A","A","A","A","A","A","A","A","A","A","A",
            "A","A","A","A","A",
            "E","E","E","E","E","E","E","E","E","E","E",
            "I","I","I","I","I",
            "O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O","O",
            "U","U","U","U","U","U","U","U","U","U","U",
            "Y","Y","Y","Y","Y",
            "D","-","-","-","-","-","-","-",'',"");

        if ($tolower) {
            return strtolower(str_replace($marTViet,$marKoDau,$cs));
        }
        return str_replace($marTViet,$marKoDau,$cs);
    }

	function createLinks($total, $rows, $currentpage, $links = 7) {
        $last = ceil( $total / $rows );
        $start = ( ( $currentpage - $links ) > 0 ) ? $currentpage - $links : 1;
        $end = ( ( $currentpage + $links ) < $last ) ? $currentpage + $links : $last;

        $html = '';
        $class = ( $currentpage == 1 ) ? "active" : "";

        if ( $start > 1 ) {
            $html .= '<a href="?page=1">1</a>';
            $html .= '<a>...</a>';
        }
        for ( $i = $start ; $i <= $end; $i++ ) {
            $class = ( $currentpage == $i ) ? "active" : "";
            $html .= '<a class="'.$class.'" href="?page='.$i.'">' . $i . '</a>';
        }
        if ( $end < $last ) {
            $html .= '<a>...</a>';
            $html .= '<a href="?page='.$last.'">' . $last . '</a>';
        }
        return $html;
    }

    /**
     * Cat chuoi 
     */
    function cut($str, $len){
        $str = trim($str);
        if (strlen($str) <= $len) return $str;
        $str = substr($str, 0, $len);
        if ($str != "") {
            if (!substr_count($str, " ")) return $str." ...";
            while (strlen($str) && ($str[strlen($str) - 1] != " ")) $str = substr($str, 0, -1);
            $str = substr($str, 0, -1)." ...";
        }
        return $str;
    }

    /**
     * cat chuoi tuy bien
     */
    function catchuoi_tuybien($string,$sochu){
        $cut=explode(" ",trim($string));
        for($i=0; $i<=$sochu; $i++){$stringall=$stringall.$cut[$i].' ';}
        if($cut[$sochu+1]==true){$cham='...';}
        return $stringall.$cham;
    }

    /**
     * Tra ve link cua menu
     */
    function return_link_menu($id, $title, $type_menu, $link){
        if($type_menu == 1){// mot bai viet
            $str_link = URL.'/'.$this->vn2latin($title, true).'-blogs-'.base64_encode($link).'.html';
        }elseif($type_menu == 2){ // danh sach bai viet
            $str_link = URL.'/'.$this->vn2latin($title, true).'-news-'.base64_encode($id).'.html';
        }elseif($type_menu == 3){ // lien he
            $str_link = URL.'/contact.html';
        }elseif($type_menu == 4){ // bac si gia dinh
            $str_link = URL.'/doctor-family.html';
        }elseif($type_menu == 5){ // doi ngu bac si
            $str_link = URL.'/teams.html';
        }else{
            $str_link = $link;
        }
        return $str_link;
    }

    /**
     * Resize and crop image
     */
    function convert_img($folder, $fileimage, $w, $h, $type){
        $dir = DIR_IMAGE.'/'.$folder;
        if(!file_exists($dir.'/'.$w.'x'.$h)){
            mkdir($dir.'/'.$w.'x'.$h, 0777, true);
        }
        if($type == 1){
            $array_img = explode("_", $fileimage);
            if(!file_exists($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'.jpg')){
                $magicianObj = new imageLib($dir.'/'.$fileimage);
                $ext = pathinfo($fileimage, PATHINFO_EXTENSION);
                if($ext == 'png'){
                    $magicianObj -> setTransparency(false);
                    $magicianObj -> setFillColor('#ffffff');
                }
                $magicianObj->resizeImage($w, $h, 'crop');
                $magicianObj->saveImage($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'.jpg', 100);
                $filename = $array_img[0].'.jpg';
            }else{
                $filename = $array_img[0].'.jpg';
            }
        }elseif($type == 2){
            $array_img = explode("_", $fileimage);
            if(!file_exists($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'_'.end($array_img).'.jpg')){
                $magicianObj = new imageLib($dir.'/'.$fileimage);
                $ext = pathinfo($fileimage, PATHINFO_EXTENSION);
                if($ext == 'png'){
                    $magicianObj -> setTransparency(false);
                    $magicianObj -> setFillColor('#ffffff');
                }
                $magicianObj->resizeImage($w, $h, 'crop');
                $magicianObj->saveImage($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'_'.end($array_img).'.jpg', 100);
                $filename = $array_img[0].'_'.end($array_img).'.jpg';
            }else{
                $filename = $array_img[0].'_'.end($array_img).'.jpg';
            }
        }else{
            $array_img = explode(".", $fileimage);
            if(!file_exists($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'.jpg')){
                $magicianObj = new imageLib($dir.'/'.$fileimage);
                $ext = pathinfo($fileimage, PATHINFO_EXTENSION);
                if($ext == 'png'){
                    $magicianObj -> setTransparency(false);
                    $magicianObj -> setFillColor('#ffffff');
                }
                $magicianObj->resizeImage($w, $h, 'crop');
                $magicianObj->saveImage($dir.'/'.$w.'x'.$h.'/'.$array_img[0].'.jpg', 100);
                $filename = $array_img[0].'.jpg';
            }else{
                $filename = $array_img[0].'.jpg';
            }
        }
        return $filename;
    }
}
?>
