<!-- start footer Area -->
<?php

use Database\DataBase;

?>
    <style>
        #imgfooter{
            width: 100%; height: 30%;
        }
        footer{
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
      
        @media screen and (max-width: 768px) {
        #imgfooter{
            width: 30%;
            height: 104%;
        }
        .footer-row {
            margin: 0 20px;
        }
        }

      
    </style>
     <footer class="bg-dark text-white py-3" style="background-image: url('https://png.pngtree.com/background/20210710/original/pngtree-blue-technology-web-banner-picture-image_1038231.jpg'); background-size: cover; background-repeat: no-repeat;">
     
            <div class="row footer-row">
            <div class="col-12 col-md-auto d-flex align-items-start mb-3 pr-0 mb-md-0 " style="width: 7%;">
    <img src="<?= url('./public/banner-image/logo.png') ?>" id="imgfooter" class="img-fluid" alt="Logo">
</div>
                <div class="col-12 col-md-9">
                    <div class="col-md-10 p-0" style="">
                        <p class="m-0 text-uppercase "  style=" font-weight: 500;">
                            Tạp chí khoa học & công nghệ trường Đại học Kinh tế - Kỹ thuật Công nghiệp
                        </p>
                    </div>
                    <p class="mb-2" style="font-weight: 600; border-top: solid #fff 4px; display: inline-block; padding-top: 4px;">
    JOURNAL OF SCIENCE & TECHNOLOGY UNIVERSITY OF ECONOMICS - TECHNOLOGY FOR INDUSTRIES
</p>
                    <div class="row">
                        <div class="col-12 col-md-6" style="font-size:14px; font-weight: 500;">
                            <p class="mb-1 ">Cơ quan chủ quản: Trường Đại học Kinh tế - Kỹ thuật Công nghiệp</p>
                            <p class="mb-1 ">Giấy phép hoạt động số: 193/GP-BTTTT ngày 02-06-2023</p>
                            <p class="mb-1 ">Cơ quan cấp phép: Bộ Thông tin và Truyền thông</p>
                            <p class="mb-1 ">Copyright © 2022 Trường Đại học Kinh tế - Kỹ thuật Công nghiệp</p>
                        </div>
                        <div class="col-12 col-md-6 pr-0" style="font-size:14px; font-weight: 500;">
                            <h5 class="mb-1">Thông tin liên hệ</h5>
                            <p class="mb-1 ">Phòng 402 - Nhà HA.11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, Số 218 Lĩnh Nam, Hoàng Mai, Hà Nội.</p>
                            <p class="mb-1 ">Số điện thoại: 024.36321493</p>
                            <p class="mb-1 ">Email: tapchikhcn@uneti.edu.vn</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-2 d-flex justify-content-center pr-3">
                    <iframe class="w-100 rounded" style="height: 70%;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3725.3077152215537!2d105.8736443747645!3d20.980298780656934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135afd765487289%3A0x21bd5839ba683d5f!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBLaW5oIFThur8gLSBL4bu5IFRodeG6rXQgQ8O0bmcgTmdoaeG7h3A!5e0!3m2!1svi!2s!4v1689386949867!5m2!1svi!2s" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    
    </footer>

<!-- End footer Area -->
<script src="<?= asset('public/app/js/vendor/jquery-2.2.4.min.js') ?>"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="<?= asset('public/app/js/vendor/bootstrap.min.js') ?>"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
<script src="<?= asset('public/app/js/easing.min.js') ?>"></script>
<script src="<?= asset('public/app/js/hoverIntent.js') ?>"></script>
<script src="<?= asset('public/app/js/superfish.min.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.ajaxchimp.min.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.magnific-popup.min.js') ?>"></script>
<script src="<?= asset('public/app/js/mn-accordion.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery-ui.js') ?>"></script>
<script src="<?= asset('public/app/js/jquery.nice-select.min.js') ?>"></script>
<script src="<?= asset('public/app/js/owl.carousel.min.js') ?>"></script>
<script src="<?= asset('public/app/js/mail-script.js') ?>"></script>
<script src="<?= asset('public/app/js/main.js') ?>"></script>
</div>

</body>

</html>