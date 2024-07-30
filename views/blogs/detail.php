<div class="breatcumb-area style-two d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-title">
                        <h2>Chi tiết bài viết</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
$item = $this->json;
$width = 900; $height = 550; $img_src = $this->_Convert->convert_img('blogs/content/', $item[0]['image'], $width, $height, 1);
?>
<div class="blog-aera style-six pt-60 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-6 col-sm-12">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dreamit-blog-inner-thumb">
                            <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width.'x'.$height.'/'.$img_src ?>" alt="<?php echo $item[0]['title'] ?>">
                        </div>
                        <div class="militant-blog-content">
                            <div class="blog-details">
                                <div class="blog-title-page">
                                    <h2>
                                        <a href="javascript:void(0)"><?php echo $item[0]['title'] ?></a>
                                    </h2>
                                    <div class="content_blog"><?php echo $item[0]['content'] ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="widget-sidebar-box">
                    <div class="widget-sidebar-title pb-20">
                        <h2>Bài viết liên quan</h2>
                    </div>
                    <?php
                    foreach($this->json_extra as $row){
                        $width_extra = 80; $height_exrta = 80;
                        $img_src_extra = $this->_Convert->convert_img('blogs/content/', $row['image'], $width_extra, $height_exrta, 1);
                    ?>
                    <div class="popular-post-box d-flex">
                        <div class="popular-post-thumb">
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-blogs-'.base64_encode($row['id']).'.html' ?>">
                                <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width_extra.'x'.$height_exrta.'/'.$img_src_extra ?>" alt="<?php echo $row['title'] ?>">
                            </a>
                        </div>
                        <div class="popular-post-content">
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row['title'], true).'-blogs-'.base64_encode($row['id']).'.html' ?>">
                                <?php echo $this->_Convert->catchuoi_tuybien($row['title'], 9) ?>
                            </a>
                            <span><?php echo date("Y F", strtotime($row['create_at'])) ?></span>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="calender-area">
                    <div class="widget-title">
                        <h2>Lịch vạn niên</h2>
                        <span></span>
                    </div>
                    <div class="tag-item">
                        <div class="curr-month"><b>january 2024</b></div>
                        <div class="all-days">
                            <ul>
                                <li>CN</li>
                                <li>T2</li>
                                <li>T3</li>
                                <li>T4</li>
                                <li>T5</li>
                                <li>T6</li>
                                <li>T7</li>
                            </ul>
                        </div>
                        <div class="all-date">
                            <ul>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>