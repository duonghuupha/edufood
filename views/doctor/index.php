<div class="breatcumb-area style-two d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breatcumb-content text-center">
                    <div class="breatcumb-title">
                        <h2>Hướng tới sự các thể hóa trong chăm sóc và quản lý sức khỏe lâu dài</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="pricing-area pt-70 pb-50">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="dreamit-section-title text-center">
                    <h2>Dịch vụ bác sĩ riêng</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <?php
            $array = ['1 tháng', '3 tháng', '6 tháng', '9 tháng', '1 năm'];
            foreach($this->jsonObj as $row){
                $list = $this->_Data->get_list_doctor_family($row['code']);
            ?>
            <div class="col-lg-4">
                <div class="dreamit-pricing-box">
                    <div class="pricing-title">
                        <h3><?php echo $row['title'] ?></h3>
                    </div>
                    <div class="pricing-tk">
                        <h3><?php echo number_format($row['price']) ?><span>/ <?php echo $array[$row['per_time'] - 1]?></span></h3>
                    </div>
                    <div class="pricing-body">
                        <ul>
                            <?php
                            foreach($list as $item){
                            ?>
                            <li class="li"><?php echo $item['content'] ?></li>
                            <?php 
                            }
                            ?>
                        </ul>
                    </div>
                    <div class="pricing-button">
                        <a href="javascript:void(0)">Tìm hiểu ngay</a>
                    </div>
                </div>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>