<!DOCTYPE HTML>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php echo $this->_Setting[0]['title'] ?></title>
    <meta name="description" content="Phòng khám nội khoa An Khánh. Phòng khám nội khoa chuyên sâu, phòng khám tai mũi họng, phòng khám siêu âm, nhà thuốc và dịch vụ xét nghiệm với công nghệ tiến tiến">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="index, follow"/>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="<?php echo URL.'/styles/' ?>assets/images/Logo_An_Khanh_moi.png">
    <!-- bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/bootstrap.min.css" type="text/css" media="all" />
    <!-- Font Roboto CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/roboto.css" type="text/css" media="all" />
    <!-- carousel CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/owl.carousel.min.css" type="text/css" media="all" />
    <!-- nivo-slider CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/nivo-slider.css" type="text/css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/animate.css" type="text/css" media="all" />
    <!-- animated-text CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/animated-text.css" type="text/css" media="all" />
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/all.min.css" type="text/css" media="all" />
    <!-- font-flaticon CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/flaticon.css" type="text/css" media="all" />
    <!-- theme-default CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/theme-default.css" type="text/css" media="all" />
    <!-- meanmenu CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/meanmenu.min.css" type="text/css" media="all" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/style.css" type="text/css" media="all" />
    <!-- transitions CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/owl.transitions.css" type="text/css" media="all" />
    <!-- venobox CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/venobox.css" type="text/css" media="all" />
    <!-- widget CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/widget.css" type="text/css" media="all" />
    <!-- responsive CSS -->
    <link rel="stylesheet" href="<?php echo URL.'/styles/' ?>assets/css/responsive.css" type="text/css" media="all" />
    <!-- modernizr js -->
    <script type="text/javascript" src="<?php echo URL.'/styles/' ?>assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <script type="text/javascript">
        var baseUrl = '<?php echo URL ?>'
    </script>
</head>
<body>
    <!-- Loder Start-->
    <div class="loader-wrapper">
        <div class="loader"></div>
        <div class="loder-section left-section"></div>
        <div class="loder-section right-section"></div>
    </div>
    <!-- loder End-->

    <div class="header-top-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-8">
                    <div class="dreamit-header-menu-address">
                        <ul>
                            <li><a href="#"><i class="far fa-envelope"></i> <?php echo $this->_Setting[0]['email'] ?></a></li>
                            <li><span><i class="fas fa-map-marker-alt"></i> <?php echo $this->_Setting[0]['address'] ?></span></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-lg-4">
                </div>
            </div>
        </div>
    </div>

    <div class="header-area" id="sticky-header">
        <div class="container">
            <div class="m-logo">
                <a href="index.html"><span class="logo-txt"></span></a>
            </div>
            <div class="menu-toggle"><i class="fas fa-bars"></i></div>
            <div class="menu-wrapper">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="dreamit-header-logo">
                            <a class="main-logo" href="<?php echo URL ?>"><img src="<?php echo URL_IMAGE.'/other/'.$this->_Setting[0]['logo_1'] ?>" alt=""></a>
                            <a class="stiky-logo" href="<?php echo URL ?>"><img src="<?php echo URL_IMAGE.'/other/'.$this->_Setting[0]['logo_2'] ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="dreamit-header-menu">
                            <ul>
                                <?php
                                foreach($this->_Data->return_menu_top() as $row){
                                    $link = $this->_Convert->return_link_menu($row['id'], $row['title'], $row['type'], $row['link']);
                                ?>
                                <li><a href="<?php echo $link ?>"><?php echo $row['title'] ?></a></li>
                                <?php
                                }
                                ?>
                            </ul>
                            <div class="header-button">
                                <a href="<?php echo URL ?>#appointment">Đặt lịch khám</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
