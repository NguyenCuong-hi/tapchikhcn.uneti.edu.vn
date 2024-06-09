<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
require 'vendor/autoload.php';
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\Writer\PDF\DomPDF;
use PhpOffice\PhpWord\Shared\ZipArchive;
?>
<div class="container-fluid">
    <div class="row mt-4">
  
            <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>
        
        <div class="col-md-7">
            <div class="text-left">
                <h1 class="h2" style="color: #245d7c;"><?= $post['title'] ?></h1>
            </div>

            <div class="bg-light p-3 mb-4" style="    background: #f2f2f2;
    border: 1px solid #e4e4e4;font-size: 12px;">
                <div class="d-flex justify-content-between">
                    <?php 
                    $datetimeString = $post['published_at'];
                    $datetime = new DateTime($datetimeString);
                    $dateOnly = $datetime->format("d-m-Y");
                    ?>
                    <time class="text-muted"><i class="bi bi-calendar"></i> Ngày đăng: <?=$dateOnly?></time>
                    <span class="text-muted"><i class="bi bi-eye"></i> Lượt xem: <?=$post['view']?></span>
                </div>
            </div>

            <?php foreach ($result_image as $item): ?>
                <div class="mb-4">
                    <img class="img-fluid w-100" src="<?= url($item['image']) ?>" alt="">
                </div>
            <?php endforeach; ?>

            <div class="mb-4" style="font-family: 'Times New Roman', Times, serif; font-size: 1rem; font-style: italic;">
                <b>Nguồn đăng:</b> Ban biên tập tạp chí
            </div>

            <div>
                <h3 class="h5">DANH MỤC BÀI VIẾT</h3>
                <table class="table table-hover">
                    <tbody>
                    <?php $counter = 1; ?>
                    <?php foreach ($result_file as $file): ?>
                        <tr>
                            <td class="font-weight-normal"><?= $counter; ?>.</td>
                            <td class="text-uppercase">
                                <a class="text-primary" href="<?= url('chi-tiet/bai-dang/' . $file['id']) ?>">
                                    <?= $file['name']; ?>
                                </a>
                            </td>
                        </tr>
                        <?php $counter++; ?>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

  
            <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>

    </div>
</div>

<?php require_once(BASE_PATH . '/template/app/layouts/footer.php'); ?>
