    <div class="breatcumb-area d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcumb-content text-center">
                        <div class="breatcumb-title">
                            <h2>Đội ngũ bác sĩ</h2>
                        </div>
                        <div class="breatcumb-content-text">
                            <ul>
                                <li><a href="#">Trang chủ</a> <i class="fas fa-angle-right"></i> <span>Đội ngũ bác sĩ</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area pt-80 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h5>Bác sĩ của chúng tôi</h5>
                        <h2>Gặp gỡ bác sĩ chuyên môn của chúng tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row pt-40">
                <?php
                foreach($this->jsonObj['rows'] as $row){
                    $width_team = 800; $height_team = 800;
                    $img_src_team = $this->_Convert->convert_img('other/', $row['image'], $width_team, $height_team, 1);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-single-team text-center">
                        <div class="team-single-thumb">
                            <img src="<?php echo URL_IMAGE.'/other/'.$width_team.'x'.$height_team.'/'.$img_src_team ?>" alt="<?php echo $row['fullname'] ?>">
                        </div>
                        <div class="dreamit-team-title">
                            <h2><?php echo $row['fullname'] ?></h2>
                            <span><?php echo $row['level_job'] ?></span>
                            <p><?php echo $row['content'] ?></p>
                        </div>
                    </div>
                </div>
                <?php  
                }
                ?>
            </div>
            <?php
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