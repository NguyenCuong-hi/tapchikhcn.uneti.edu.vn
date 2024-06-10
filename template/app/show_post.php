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


    .pdf-container {
        width: 100%;
        height: 650px;
        border: none;
        /*overflow: hidden;*/
        overflow-y: scroll;
        -webkit-overflow-scrolling: touch; /* Smooth scrolling on iOS */
    }

    .pdf-page {
        width: 100%;
        border: none;
    }

    @media (max-width: 768px) {
        .pdf-container {
            height: 500px;
        }
    }

    @media (max-width: 576px) {
        .pdf-container {
            height: 400px;
        }
    }

 

</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.min.js"></script>

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
                            $src = url($result_file['file'].'?#zoom=85&scrollbar=0&toolbar=0&navpanes=0');
                        }
                        ?>

                        <div class="pdf-container" id="pdf-container"></div>
                        <script>
                            const url = '<?= $src ?>';

                            const pdfjsLib = window['pdfjs-dist/build/pdf'];
                            pdfjsLib.GlobalWorkerOptions.workerSrc = 'https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.9.359/pdf.worker.min.js';

                            const loadingTask = pdfjsLib.getDocument(url);
                            loadingTask.promise.then(pdf => {
                                console.log('PDF loaded');
                                const container = document.getElementById('pdf-container');
                                for (let pageNum = 1; pageNum <= pdf.numPages; pageNum++) {
                                    pdf.getPage(pageNum).then(page => {
                                        console.log('Page loaded');

                                        const scale = 1.5;
                                        const viewport = page.getViewport({scale: scale});

                                        const canvas = document.createElement('canvas');
                                        canvas.className = 'pdf-page';

                                        const context = canvas.getContext('2d');
                                        canvas.height = viewport.height;
                                        canvas.width = viewport.width;

                                        container.appendChild(canvas);

                                        const renderContext = {
                                            canvasContext: context,
                                            viewport: viewport
                                        };
                                        page.render(renderContext).promise.then(() => {
                                            console.log('Page rendered');
                                        });
                                    });
                                }

                            }, reason => {
                                console.error(reason);
                            });
                        </script>
                    <?php endif; ?>

                </div>
            </div>
        </div>

        <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php'); ?>
    </div>
</div>

<?php require_once(BASE_PATH . '/template/app/layouts/footer.php'); ?>
