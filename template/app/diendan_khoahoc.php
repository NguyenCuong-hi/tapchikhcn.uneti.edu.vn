<html>

</html>
<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

<div class="container-fluid">
    <div class="row mt-4">
        <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

        <div class="col-md-7">
            <div class="row mb-4">
                <div class="col-md-12">
                    <form method="GET" action="<?= url('diendankhoahoc') ?>" class="d-flex">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="input-group w-100">
                                    <input class="form-control" type="text" name="keyword" placeholder="Tìm kiếm..."/>
                                    <button type="submit" class="btn btn-secondary">Tìm kiếm</button>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="d-flex align-items-center ml-3 mt-2">
                                    <label class="mr-3">
                                        <input type="radio" name="title"> Tiêu đề
                                    </label>
                                    <label>
                                        <input type="radio" name="author"> Tác giả
                                    </label>
                                </div>
                            </div>
                        </div>


                    </form>
                </div>
            </div>

            <?php foreach ($data as $datas): ?>
                <div class="mb-3 p-3 " style="border-bottom: 2px dotted red; border-left: 2px solid rgb(241,243,244);">
                    <div class="font-weight-bold" style="font-size: 20px;">
                        <?php $id = $datas['id'] ?>
                        <a href="<?= url('ddkh/chi-tiet/' . $id) ?>">
                            <?= $datas['title'] ?>
                        </a>
                    </div>
                    <ul class=" mt-2" style="list-style-type: circle; font-weight: bold; ">
                        <?php
                        $str = $datas['title'];
                        $pos = strrpos($str, " ");
                        $so = $pos !== false ? substr($str, $pos + 1) : '';
                        ?>
                        <li>Số tạp chí: <?= "Số " . $so ?></li>
                        <li>Tác giả: <?= $datas['author_name'] ?></li>
                        <li>Tạp chí xuất bản: <?= $datas['cat_name'] ?></li>
                        <li>
                            <a href="#" onclick="toggleSummary(event)">Tóm tắt</a>
                            <span class="summary d-none"><?= $datas['summary'] ?></span>
                        </li>
                    </ul>
                    <div class="text-right mt-2">
                        <div class="d-inline-block mr-3">
                            <img src="./public/banner-image/dowload.png" alt="Download Icon"
                                 style="max-width: 2vw; max-height: 3vh;"/>
                        </div>
                        <div class="d-inline-block">
                            <img src="./public/banner-image/eyes.png" alt="Eyes Icon"
                                 style="max-width: 1.8vw; max-height: 2.8vh;"/>
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

<script>
    function toggleSummary(event) {
        event.preventDefault();
        var summaryElement = event.target.nextElementSibling;
        summaryElement.classList.toggle('d-none');
        event.target.innerText = summaryElement.classList.contains('d-none') ? 'Tóm tắt' : 'Ẩn tóm tắt';
    }
</script>
