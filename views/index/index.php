
    <div class="slider_list owl-carousel">
        <?php
        foreach($this->_Data->return_item_slide() as $row_sl){
        ?>
        <div class="slider-area slider1 d-flex align-items-center" style="background: url(<?php echo URL_IMAGE.'/slider/'.$row_sl['image'] ?>)">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="dreamit-slider-content text-center">
                            <div class="dreamit-slider-content-inner white">
                                <h1><?php echo $row_sl['title_1'] ?></h1>
                                <h2><?php echo $row_sl['title_2'] ?></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>

    <div class="feature-area">
        <div class="container">
            <div class="row mtmargin">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-box-icon">
                            <img src="<?php echo URL.'/styles/' ?>assets/images/feature-1.png" alt="">
                        </div>
                        <div class="single-feature-content text-center">
                            <h4>Xét nghiệm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-box-icon">
                            <img src="<?php echo URL.'/styles/' ?>assets/images/feature2.png" alt="">
                        </div>
                        <div class="single-feature-content text-center">
                            <h4>Siêu âm</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-box-icon">
                            <img src="<?php echo URL.'/styles/' ?>assets/images/feature3.png" alt="">
                        </div>
                        <div class="single-feature-content text-center">
                            <h4>Nội soi</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-feature-box">
                        <div class="dreamit-feature-box-icon">
                            <img src="<?php echo URL.'/styles/' ?>assets/images/feature3.png" alt="">
                        </div>
                        <div class="single-feature-content text-center">
                            <h4>Chụp X-Quang</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="about-area pt-70 pb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="dreamit-about-image">
                        <img src="<?php echo URL.'/styles/' ?>assets/images/about.jpg" alt="">
                    </div>
                    <div class="dreamit-about-calender-box">
                        <div class="dreamit-about-content-inner">
                            <h3>Thời gian làm việc</h3>
                            <ul>
                                <li>Thứ hai - Thứ sáu<span>17.30 - 21.00</span></li>
                                <li>Thứ bảy/Chủ nhật<span>8.00 - 21.00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-50">
                    <div class="dreamit-setcion-title text-left">
                        <h4>Về chúng tôi</h4>
                        <h2>Thiết bị tiên tiến và Bác sĩ đầu ngành</h2>
                        <p class="pt-20 pb-4">
                            Với mục tiêu chăm sóc sức khỏe cho người dân, phòng khám ứng dụng
                            công nghệ tiên tiến trên thế thới và các chuyên gia đầu ngành trong chẩn đoán và điều trị.
                        </p>
                    </div>
                    <div class="dreamit-about-content">
                        <div class="dreamit-content-inner">
                            <ul>
                                <li><i class="fas fa-check-circle"></i> Khám và điều trị các bệnh lý cấp và mãn tính</li>
                                <li><i class="fas fa-check-circle"></i> Khám & tầm soát quản lý sức khỏe</li>
                                <li><i class="fas fa-check-circle"></i> Siêu âm, sàng lọc bệnh lý ung thư</li>
                                <li><i class="fas fa-check-circle"></i> Dịch vụ bác sĩ riêng, bác sĩ gia đình</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="appointment-aera pt-80 pb-65" id="appointment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="appointment-left-box">
                        <div class="appointment-left-title">
                            <h1>Bạn cần chúng tôi giúp gì?</h1>
                            <h2>Đặt lịch khám</h2>
                        </div>
                    </div>
                    <div class="dreamit-appointment-box">
                        <form id="contact_form" method="POST">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <input type="text" name="phone" placeholder="Điện thoại">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="from-box">
                                        <input type="text" id="myDate" placeholder="Năm sinh">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="quote_btn">
                                        <button class="btn" type="button">Đặt lịch</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="appointment-image pl-10">
                        <img src="<?php echo URL.'/styles/' ?>assets/images/about-1.jpg" alt="">
                    </div>
                    <div class="section-title text-left">
                        <h1>PHÒNG KHÁM AN KHÁNH</h1>
                        <h2>Thân thiết như người nhà</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="team-area pt-80 pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h5>Đội ngũ bác sĩ</h5>
                        <h2>Gặp gỡ đội ngũ bác sĩ chuyên môn của chúng tôi</h2>
                    </div>
                </div>
            </div>

            <div class="row pt-40">
                <?php
                foreach($this->_Data->get_list_team() as $row_team){
                    $width_team = 800; $height_team = 800;
                    $img_src_team = $this->_Convert->convert_img('other/', $row_team['image'], $width_team, $height_team, 1);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-single-team text-center">
                        <div class="team-single-thumb">
                            <img src="<?php echo URL_IMAGE.'/other/'.$width_team.'x'.$height_team.'/'.$img_src_team ?>" alt="<?php echo $row_team['fullname'] ?>">
                        </div>
                        <div class="dreamit-team-title">
                            <h2><?php echo $row_team['fullname'] ?></h2>
                            <span><?php echo $row_team['level_job'] ?></span>
                            <p><?php echo $row_team['content'] ?></p>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    $block_3 = $this->_Data->get_info_block_3();
    $data_blogs = $this->_Data->get_list_blogs_of_block_3($block_3[0]['data_view']);
    ?>
    <div class="blog-aera pt-60 pb-50">
        <div class="container">
            <div class="row align-items-center pb-35">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2><?php echo $block_3[0]['title'] ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach($data_blogs as $row_bl){
                    $width_bl = 390; $height_bl = 290;
                    $img_src_bl = $this->_Convert->convert_img('blogs/content/', $row_bl['image'], $width_bl, $height_bl, 1);
                ?>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="dreamit-blog-box">
                        <div class="dreamit-blog-thumb">
                            <img src="<?php echo URL_IMAGE.'/blogs/content/'.$width_bl.'x'.$height_bl.'/'.$img_src_bl ?>" alt="<?php echo $row_bl['title'] ?>"/>
                        </div>
                        <div class="dreamit-blog-icon">
                            <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row_bl['title'], true).'-blogs-'.base64_encode($row_bl['id']).'.html' ?>"><i class="fas fa-arrow-right"></i></a>
                        </div>
                        <div class="dreamit-blog-title">
                            <div class="blog-meta-box">
                                <span>December 4, 2024</span>
                            </div>
                            <h2 title="<?php echo $row_bl['title'] ?>">
                                <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row_bl['title'], true).'-blogs-'.base64_encode($row_bl['id']).'.html' ?>">
                                    <?php echo $this->_Convert->catchuoi_tuybien($row_bl['title'], 10) ?>
                                </a>
                            </h2>
                            <div class="blog-button">
                                <a href="<?php echo URL.'/'.$this->_Convert->vn2latin($row_bl['title'], true).'-blogs-'.base64_encode($row_bl['id']).'.html' ?>">Đọc tiếp <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>