<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>
<style>
    .contact-info{
        font-family: "Times New Roman", serif;
        font-weight: 700;
        font-size: 29px;
        color: #2b2bff;
        text-align: center
    }
    .contact-item p{
        font-family: "Times New Roman", serif;
    }
</style>

<div class="container-fluid">
    <div class="row mt-4">
        <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

        <div class="col-md-7">
            <div class="contact-info">
                THÔNG TIN LIÊN HỆ
            </div>
            <div class="contact-details">
                <div class="contact-item">
                    <p style="font-style: italic; font-size: 25px; font-weight: bold; text-align: center">Nội dung chi tiết và thông tin
                        liên hệ xin gửi
                        về:</p>
                    <p style="font-weight: bold; font-style: normal; font-size: 20px;;color: #2b2bff">TÒA SOẠN TẠP CHÍ
                        KHOA HỌC &amp; CÔNG NGHỆ</p>
                    <p style="font-size: 20px;">Phòng 402 – Nhà HA11, Trường Đại học Kinh tế - Kỹ thuật Công nghiệp, số
                        218 Lĩnh Nam, Hoàng
                        Mai, Hà Nội</p>
                    <p style="font-size: 20px;">E-mail: <a href="tapchikhcn@uneti.edu.vn"><span
                                    style="text-decoration: underline;">tapchikhcn@uneti.edu.vn</span></a>;</p>
                    <p style="font-size: 20px;">Website: <a href="https://tckhcn-uneti.vn"><span
                                    style="text-decoration: underline;">https://tckhcn-uneti.vn </span></a></p>
                </div>
            </div>
        </div>

        <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>
    </div>
</div>

<?php require_once(BASE_PATH . '/template/app/layouts/footer.php') ?>
