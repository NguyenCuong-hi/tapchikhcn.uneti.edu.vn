<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
require 'vendor/autoload.php';

?>


<style>
    .phongto {
        width: 40px;
        height: 40px;
    }

    .icon-phongto {
        display: inline-block;
        width: 100%;
        height: 100%;
        background-image: url(//ssl.gstatic.com/docs/common/viewer/v3/v-sprite50.svg) !important;
        background-size: cover;
    }
 

</style>

<div class="container-fluid my-4">
    <div class="row">
        <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

        <div class="col-md-7">
            <div class="d-flex flex-column">
            <div class="text-left">
                    <h2 class="h2" style="color: #245d7c;"><?= $post['title'] ?></h2>
                </div>

                <div class="bg-light p-3 mb-4" style="    background: #f2f2f2;
    border: 1px solid #e4e4e4;font-size: 12px;">
                    <div class="d-flex justify-content-between" style="color: #6c757d !important;">
                        <?php 
                        $datetimeString = $post['published_at'];
                        $datetime = new DateTime($datetimeString);
                        $dateOnly = $datetime->format("d-m-Y");
                        ?>
                        <time class="time_sg"><i class="bi bi-calendar"></i> Ngày đăng: <?= $dateOnly ?></time>
                        <span class="sg_view"><i class="bi bi-eye"></i> Lượt xem: <?= $post['view'] ?></span>
                    </div>
                </div>

                <div class="suanh2 bg-secondary position-relative mb-3 w-100 ">
                    <div class="phongto position-absolute top-0 end-0">
                    </div>
                    <?php if (empty($result_file) || !file_exists($result_file['file'])): ?>
                        <p class="text-center text-white">Không có bài viết để hiển thị</p>
                    <?php else : ?>
                        <?php 
                        $extension = pathinfo($result_file['file'], PATHINFO_EXTENSION);
                        $src = '';
                        if ($extension === 'docx') {
                            $src = 'https://view.officeapps.live.com/op/view.aspx?src=' . url($result_file['file']);
                        }
                        if ($extension === 'pdf') {
                            $src = url($result_file['file'].'#toolbar=0');
                        }
                        ?>

                                  <embed type="application/pdf" src="<?= $src ?>" class="w-100" style="height: 650px; border: none;">
                      
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php'); ?>
    </div>
</div>

<?php require_once(BASE_PATH . '/template/app/layouts/footer.php'); ?>
