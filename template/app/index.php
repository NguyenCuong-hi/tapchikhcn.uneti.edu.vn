<html>

</html>
<style>
    .image-container {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .image-item {
        flex: 0 0 180px;
        flex-basis: calc(20% - 11px);
        margin-right: 3.2vw;
        scroll-snap-align: start;
    }

    .image {
       
        margin: 1vh 0;
        width: 30vw;
        height: 18vh;
        cursor: pointer;
        transition: transform .2s ease-out;
        border-radius: 2.5%;
    }

    @media screen and (min-width: 768px) {
        .image {
            height: 28vh;
            width: 13vw;
     
        }

    }

    .image:hover {
        transform: scale(1.1);
    }

    .image-title {
        width: 180px;
        height: auto;
        margin-bottom:4vh;
    }

    .image-container::-webkit-scrollbar {
        height: 8px;
    }

    .image-container::-webkit-scrollbar-thumb {
        background-color: #dddddd77;
        border-radius: 4px;
    }

    .image-container::-webkit-scrollbar-thumb:hover {
        background-color: #cccccc99;
    }

    /* CSS for scrollLeftBtn and scrollRightBtn */
    #scrollLeftBtn,
    #scrollRightBtn {
        background-color: #c0c0c000;
        color: #DDDDDD;
        font-size: 1.7vw;
        border: none;
        padding: 0.8vh 0.5vw;
        cursor: pointer;
        outline: none;
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        z-index: 1;

    }

    #scrollRightBtn:hover {

        cursor: pointer;
    

    }

    #scrollLeftBtn:hover {
      
   
        cursor: pointer;
       

    }

    #scrollLeftBtn {
        left: 0;
        border-radius: 100% 100% 100% 100%;
    }

    #scrollRightBtn {
        right: 0;
        border-radius: 100% 100% 100% 100%;
    }

    /* CSS for the parent div wrapping the .image-container and buttons */
    .image-container-parent {
        position: relative;
        display: flex;
        align-items: center;
        margin-left: 4%;
        /* Adjust the margin as needed */
        margin-right: 4%;
        /* Adjust the margin as needed */
        overflow: hidden;
        /* Hide the scroll buttons if not needed */
    }

    .image-container {
        display: flex;
        overflow-x: scroll;
        scroll-snap-type: x mandatory;
    }

    .image-item {
        /* ... Your previous styles ... */
    }
</style>

<?php
require_once(BASE_PATH . '/template/app/layouts/header.php');
?>

<div class="container-fluid">
<div class="row mt-4">
<?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>
<div class="col-md-7">
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0" >
                            <a href="<?= url('gioithieu') ?>" class="text-decoration-none" style="text-transform: uppercase;color: #0C548A;">
                           
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title" style=" font-weight: 700;   font-size: 29px;">Giới thiệu</h5>
                                </div>
                                <img src="./public/banner-image/gioithieu.png" class="card-img-top" alt="Giới thiệu">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0">
                            <a href="<?= url('thongbao') ?>" class="text-decoration-none "  style="text-transform: uppercase;color: #0C548A;">
                              
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title" style=" font-weight: 700;   font-size: 29px;">Thông báo</h5>
                                </div>
                                <img src="./public/banner-image/thong-bao.png" class="card-img-top" alt="Thông báo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100 border-0">
                            <a href="<?= url('sukien') ?>" class="text-decoration-none" style="text-transform: uppercase;color: #0C548A;">
                               
                                <div class="card-body text-center p-0">
                                    <h5 class="card-title" style=" font-weight: 700;   font-size: 29px;">Sự kiện</h5>
                                </div>
                                <img src="./public/banner-image/sukien.png" class="card-img-top" alt="Sự kiện">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-md-4">
                        <div class="card h-100 border-0">
                            <a href="<?= url('gopy') ?>" class="text-decoration-none " style="text-transform: uppercase;color: #0C548A;">
                              
                                <div class="card-body text-center py-0">
                                    <h5 class="card-title" style=" font-weight: 700;   font-size: 29px;">Góp ý</h5>
                                </div>
                                <img src="./public/banner-image/guibai.png" class="card-img-top"style="width:71%; display:flex; margin:auto" alt="Góp ý">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
<?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>
<div class="row">
            <div class="col-12">
                <h3 class="text-left" style="color: #0C548A; font-weight: 700; font-size: 1.7vw;">Các số đã xuất bản</h3>
                <div class="image-container-parent">
                    <button id="scrollLeftBtn">&#10094;</button>
                    <div class="image-container">
                        <?php foreach ($posts as $datas): ?>
                        <div class="image-item">
                            <?php $id = $datas['id'] ?>
                            <a href="<?= url('khcn/chi-tiet/' . $id) ?>">
                                <img class="image" src="<?php echo $datas['image'] ?>" alt="Nhà xuất bản">
                                <p class="image-title"><?= $datas['title'] ?></p>
                            </a>
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <button id="scrollRightBtn">&#10095;</button>
                </div>
            </div>
            </div>
</div>
</div>


<script>
    const scrollLeftBtn = document.getElementById("scrollLeftBtn");
    const scrollRightBtn = document.getElementById("scrollRightBtn");
    const imageContainer = document.querySelector(".image-container");

    const scrollAmount = 300; 
    const autoScrollInterval = 2500;
    let currentPosition = 0;

    const scrollToPosition = (position) => {
        if (position < 0) {
            position = imageContainer.scrollWidth - imageContainer.clientWidth;
        } else if (position > imageContainer.scrollWidth - imageContainer.clientWidth) {
            position = 0;
        }
        imageContainer.scrollTo({ left: position, behavior: 'smooth' });
        currentPosition = position;
    };

    scrollLeftBtn.addEventListener("click", () => {
        scrollToPosition(currentPosition - scrollAmount);
    });

    scrollRightBtn.addEventListener("click", () => {
        scrollToPosition(currentPosition + scrollAmount);
    });

    const autoScroll = () => {
        scrollToPosition(currentPosition + scrollAmount);
    };

    let autoScrollTimer = setInterval(autoScroll, autoScrollInterval);

  
    imageContainer.addEventListener("mouseenter", () => {
        clearInterval(autoScrollTimer);
    });

   
    imageContainer.addEventListener("mouseleave", () => {
        autoScrollTimer = setInterval(autoScroll, autoScrollInterval);
    });
</script>


<!-- start footer Area -->
<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>