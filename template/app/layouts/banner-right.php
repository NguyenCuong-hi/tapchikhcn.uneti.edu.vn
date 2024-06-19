<?php

use Database\DataBase;

$db = new DataBase();
$guibai = $db->select('SELECT * FROM banners WHERE id = 319')->fetch();
$bocongthuong = $db->select('SELECT * FROM banners WHERE id = 308 ')->fetch();
$truongdaihoc = $db->select('SELECT * FROM banners WHERE id = 309 ')->fetch();
$tuyensinh = $db->select('SELECT * FROM banners WHERE id = 317 ')->fetch();

?>
<div class="col-md-2 ml-auto text-center mb-3">
                <div class="card p-2 border-primary">
                    <h6 class="card-title text-left mb-3 border-bottom pb-2 text-center" style="font-size:  12px; font-family: 'Times New Roman';font-weight: bold;">HƯỚNG DẪN DÀNH CHO TÁC GIẢ</h6>
                    <a href="./public/upload/The_le_tap_chi.pdf" class="d-block text-primary mb-2 text-left" style="font-size: 0.9rem;">• Hướng dẫn gửi bài</a>
                    <a href="<?= url("lienhe") ?>" class="d-block text-primary mb-2 text-left" style="font-size: 0.9rem;">• Liên hệ tạp chí</a>
                    <a href="./public/upload/The_le_tap_chi.pdf" class="d-block text-primary mb-2 text-left" style="font-size: 0.9rem;">• Mẫu quy cách bài viết</a>
                    <a href="./public/upload/dao_duc_khi_xuat_ban.pdf" class="d-block text-primary mb-3 text-left" style="font-size: 0.9rem;">• Đạo đức khi xuất bản</a>
                    <a href="<?= url("guibai") ?>">
                    <a href="<?= url("sent-email") ?>">
    <button class="btn btn-primary w-100 mb-2" style="font-weight: bold; font-size: 0.9rem; word-wrap: break-word; white-space: normal;">
        GỬI BÀI VIẾT
    </button>
</a>
<a href="<?= url("sent-email") ?>">
    <button class="btn btn-primary w-100" style="font-weight: bold; font-size: 0.9rem; word-wrap: break-word; white-space: normal;">
        ĐĂNG KÝ GỬI BÀI TẠP CHÍ KH-CN
    </button>
</a>
                </div>
                <h4 class=" mt-4" style="font-size: 1.1rem;color: #155fa2;font-family: 'Times New Roman', Times, serif;">LIÊN KẾT WEBSITE</h4>
                <a href="<?= $bocongthuong['url'] ?>">
                    <img src="<?= url($bocongthuong['image']) ?>" class="img-fluid border-primary mb-3 w-100" >
                </a>
                <a href="<?= $truongdaihoc['url'] ?>">
                    <img src="<?= url($truongdaihoc['image']) ?>" class="img-fluid border-primary mb-3 w-100" >
                </a>
                <a href="<?= $tuyensinh['url'] ?>">
                    <img src="<?= url($tuyensinh['image']) ?>" class="img-fluid border-primary w-100" >
                </a>
            </div>