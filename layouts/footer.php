    <div class="contact-address-area pt-80 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="dreamit-contact-content d-flex">
                        <div class="content-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <div class="content-title pr-20">
                            <span>Thứ 2 – Thứ 6 * 17:00 – 21:00</span><br/>
                            <span>Thứ 7 – CN * 8:00 – 21:00</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="dreamit-contact-content d-flex">
                        <div class="content-icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <div class="content-title pr-20">
                            <span><?php echo $this->_Setting[0]['email'] ?></span>
                            <h5>Cần giúp đỡ? Hãy gửi thư</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="dreamit-contact-content d-flex">
                        <div class="content-icon">
                            <i class="fas fa-phone-square-alt"></i>
                        </div>
                        <div class="content-title pr-20">
                            <span><?php echo $this->_Setting[0]['phone'] ?></span>
                            <h5>Cần giúp đỡ? Hãy gọi chúng tôi</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-area pt-65 pb-45">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="footer-logo">
                        <img src="<?php echo URL_IMAGE.'/other/'.$this->_Setting[0]['logo_2'] ?>" alt="">
                    </div>
                    <div class="content-title-text">
                        <p><?php echo $this->_Setting[0]['address'] ?></p>
                        <p><?php echo $this->_Setting[0]['phone'] ?></p>
                        <p><?php echo $this->_Setting[0]['email'] ?></p>
                    </div>
                </div>
                <?php
                $footer1 = $this->_Data->get_info_block_footer(1);
                $menu1 = $this->_Data->get_menu_footer($footer1[0]['menu_id']);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-footer-content">
                        <h2><?php echo $footer1[0]['title'] ?></h2>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <?php
                            foreach($menu1 as $row_1){
                                $link1 = $this->_Convert->return_link_menu($row_1['id'], $row_1['title'], $row_1['type'], $row_1['link']);
                            ?>
                            <li>
                                <a href="<?php echo $link1 ?>">
                                    <i class="fas fa-angle-double-right"></i> <?php echo $row_1['title'] ?>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <?php
                $footer2= $this->_Data->get_info_block_footer(2);
                $menu2 = $this->_Data->get_menu_footer($footer2[0]['menu_id']);
                ?>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-footer-content">
                        <h2><?php echo $footer2[0]['title'] ?></h2>
                    </div>
                    <div class="footer-menu">
                        <ul>
                            <?php
                            foreach($menu2 as $row_2){
                                $link2 = $this->_Convert->return_link_menu($row_2['id'], $row_2['title'], $row_2['type'], $row_2['link']);
                            ?>
                            <li>
                                <a href="<?php echo $link2 ?>">
                                    <i class="fas fa-angle-double-right"></i> <?php echo $row_2['title'] ?>
                                </a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="dreamit-footer-content">
                        <h2>Bản tin</h2>
                    </div>
                    <div class="footer-content">
                        <p>Đăng ký nhận bản tin</p>
                    </div>
                    <div class="footer-style-4">
                        <form action="">
                            <div class="subscribe-box">
                                <input type="email" placeholder="Email của bạn....">
                            </div>
                        </form>
                    </div>
                    <div class="footer-button">
                        <button>Đăng ký</button>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="footer-buttom-area pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copy-right-text">
                        <p>Copyright © Phòng khám An Khánh mọi quyền được bảo lưu.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="footer-text-menu ml-30">
                        <ul>
                            <li><a href="javascript:void(0)">Điều khoản & Điều kiện</a></li>
                            <li><a href="javascript:void(0)">Chính sách bảo mật</a></li>
                            <li><a href="<?php echo URL.'/contact.html' ?>">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="scroll-area">
        <div class="top-wrap">
            <div class="go-top-btn-wraper">
                <div class="go-top go-top-button">
                    <i class="fas fa-arrow-up"></i>
                    <i class="fas fa-arrow-up"></i>
                </div>
            </div>
        </div>
    </div>
  
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/vendor/jquery-3.2.1.min.js"></script>
    <!-- bootstrap js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/bootstrap.min.js"></script>
    <!-- carousel js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/owl.carousel.min.js"></script>
    <!-- counterup js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/jquery.counterup.min.js"></script>
    <!-- waypoints js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/waypoints.min.js"></script>
    <!-- wow js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/wow.js"></script>
    <!-- imagesloaded js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/imagesloaded.pkgd.min.js"></script>
    <!-- venobox js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/venobox.js"></script>
    <!--  animated-text js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/animated-text.js"></script>
    <!-- venobox min js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/venobox.min.js"></script>
    <!-- isotope js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/isotope.pkgd.min.js"></script>
    <!-- jquery nivo slider pack js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/jquery.nivo.slider.pack.js"></script>
    <!-- jquery meanmenu js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/jquery.meanmenu.js"></script>
    <!-- jquery scrollup js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/jquery.scrollUp.js"></script>
    <!-- theme js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/theme.js"></script>
    <!-- jquery js -->
</body>

</html>