<div class="breatcumb-area style-two d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-title">
                        <h2><?php echo $this->json[0]['title'] ?></h2>
                    </div>
                    <div class="breatcumb-content-text">
                        <ul>
                            <li><a href="#">Trang chủ</a> <i class="fas fa-angle-right"></i> <span><?php echo $this->json[0]['title'] ?></span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$jsonObj = $this->jsonObj; $perpage = $this->perpage; $pages = $this->page;
?>
<div class="blog-aera style-six pt-60 pb-50">
    <div class="container">
        <div class="row">
            <?php
            foreach($jsonObj['rows'] as $row){
                $width = 390; $height = 290;
                $img_src = $this->_Convert->convert_img('blogs/content/', $row['image'], $width, $height, 1);
            ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="dreamit-blog-box">
                    <div class="dreamit-blog-thumb">
                        <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width.'x'.$height.'/'.$img_src ?>" alt="<?php echo $row['title'] ?>">
                    </div>
                    <div class="dreamit-blog-title">
                        <div class="blog-meta-box">
                            <span><?php echo date("F j, Y", strtotime($row['create_at'])) ?> </span>
                        </div>
                        <h2>
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-blogs-'.base64_encode($row['id']).'.html' ?>">
                                <?php echo $this->_Convert->catchuoi_tuybien($row['title'], 10) ?>
                            </a>
                        </h2>
                        <div class="blog-button">
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-blogs-'.base64_encode($row['id']).'.html' ?>">
                                Đọc Tiếp <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            }
            if($jsonObj['total'] > $perpage){
                $pagination = $this->_Convert->pagination($jsonObj['total'], $pages, $perpage);
                $createlink = $this->_Convert->createLinks($jsonObj['total'], $perpage, $pagination['number'], 1);
            ?>
            <div class="col-lg-12 col-md-12 col-sm-12 text-center">
                <div class="pagination">
                    <?php echo $createlink ?>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>