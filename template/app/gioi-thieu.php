<html>

</html>
<?php

use App\IntroduceController;

require_once(BASE_PATH . '/template/app/layouts/header.php');

?>

<div class="container-fluid">
    <div class="row mt-4">
        <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

        <div class="col-md-7">
            <?php foreach ($data as $datas): ?>
                <div class="font-weight-bold pb-2 mb-3" style="    border-bottom: 2px dotted red;
    border-left: 2px solid rgb(241, 243, 244);">
                    <div class="row pr-0">
                        <div class="col-sm-5">
                            <img class="anhgt" style="width: 100%;
            height: auto" src="<?=url($datas['banner_img'])?>">
                        </div>
                        <div class="col-sm-7 pl-3">
                            <div class="font-weight-bold">
                                <a href="<?= url('gioithieu/chi-tiet/' . $datas['id']) ?>" style="font-size: 18px;"> <?= $datas['title']; ?></a>
                            </div>
                            <div class="d-flex font-weight-light">
                                <div><?= date("d/m/Y", strtotime($datas['created_at'])); ?> |</div>
                                <div><a href="" class="font-weight-bold">Giới thiệu</a></div>
                            </div>
                            <div class="font-size: 0.8vw; margin: 7px 0;">
                                <div class="summary">
                                    <?= $datas['summary']; ?>
                                </div>
                                <script>
                                    var contentElement = document.querySelector('.summary');
                                    var maxCharacters = 100;
                                    if (contentElement.textContent.length > maxCharacters) {
                                        contentElement.textContent = contentElement.textContent.substr(0, maxCharacters) + '...';
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <?php require_once(BASE_PATH . '/template/app/layouts/phantrang.php') ?>
        </div>

        <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>
    </div>
</div>

<?php require_once(BASE_PATH . '/template/app/layouts/footer.php') ?>
