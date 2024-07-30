    <?php
    $setting = $this->_Data->get_setting();
    ?>
    <div class="breatcumb-area style-two d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breatcumb-content text-center">
                        <div class="breatcumb-title">
                            <h2>Liên hệ</h2>
                        </div>
                        <div class="breatcumb-content-text">
                            <ul>
                                <li><a href="#">Trang chủ</a> <i class="fas fa-angle-right"></i> <span>Liên hệ</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="contact-us-area style-two pt-90 pb-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-6 col-sm-12">
                    <div class="dreamit-section-title text-center pb-10">
                        <h4>Liên hệ với chúng tôi</h4>
                        <h2 class="pb-4">Liên hệ với chúng tôi</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="row pt-2">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="contact-content-box">
                                <div class="contact-inner-title">
                                    <h3>Phòng khám An Khánh</h3>
                                    <p>
                                    <?php echo $setting[0]['address'] ?><br> 
                                        Email: <?php echo $setting[0]['email'] ?><br>
                                        Điện thoại: <?php echo $setting[0]['phone'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12">
                    <div class="appointment-inner-box style-five">
                        <form id="contact_form" action="https://formspree.io/f/myyleorq" method="POST"
                            id="dreamit-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <input type="text" name="name" placeholder="Họ và tên">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <input type="email" name="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form_box mb-30">
                                        <textarea name="message" id="message" cols="30" rows="10"
                                            placeholder="Nội dung"></textarea>
                                    </div>
                                    <div class="quote_btn text_center">
                                        <button class="btn" type="button">Gửi liên hệ</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div id="status"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="map-area style-two">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 pt-0">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723.9381699358423!2d105.9069680860484!3d21.03515983759308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135a90d8f78ec55%3A0xfbb889bb792188ae!2zUGjDsm5nIGtow6FtIEFuIEtow6FuaCYgbmjDoCB0aHXhu5FjIEFuIEtow6FuaA!5e0!3m2!1svi!2s!4v1712395218550!5m2!1svi!2s"
                        width="1920" height="360" frameborder="0" style="border:0;" allowfullscreen=""
                        aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>