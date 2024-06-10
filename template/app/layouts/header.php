<?php

use Database\DataBase;

$db = new DataBase();
$img_banner = $db->select(' SELECT * FROM banners WHERE id = 318 ')->fetch();

?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">


<head>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <meta charset="UTF-8">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
		CSS
		============================================= -->
    <link rel="stylesheet" href="<?= asset('public/app/css/linearicons.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/font-awesome.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/bootstrap.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/magnific-popup.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/nice-select.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/animate.min.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/owl.carousel.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/jquery-ui.css') ?>">
    <link rel="stylesheet" href="<?= asset('public/app/css/main2.css') ?>">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="jquery.gdocsviewer.min.js"></script>
</head>

<body style="background-color:#E6E6E6; ">


<div style="width: 80%; margin: 0 auto; background-color:  white; box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);">
    <header>

        <style>


            * {
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }


            .header-top-right ul {
                display: flex;
                list-style-type: none;
                margin: 8px;
            }

            .header-top-right ul li {
                margin: 8px;
            }


            .custom-height {
                width: 100%;
                height: 35vh;
                object-fit: cover;
            }

            .menu {
                flex-direction: column;
                justify-content: center;
                display: flex;
                justify-content: space-between;
                box-sizing: border-box;
                padding: 1px;
                color: white;
                /* font-size: 12px; */
                margin-bottom: 3vh;
                font-weight: 700;
            }

            .menu a {
                margin: 0 10px;
                font-size: 1vw;
                color: white;
                font-weight: 700;
                border-radius: 8px;
                background-color: #5B9BD5;
                width: 100%;
                border: none;
                margin: 0 0.1vw 0 0.1vw;
                padding: 2.5vh 0px;
                text-align: center;
                /* font-size: 12.5px; */
                box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
                transition: transform 0.3s ease;
                text-transform: uppercase;

            }

            .menu a:hover {
                transform: translateY(-2px) rotateX(8deg) rotateY(3deg);
                text-decoration: none;
            }

            .menu a:hover:before {
                opacity: 1;
            }



            .navbar-toggler-icon {
                width: 0.5em;
                height: 0.5em;
            }
            .navbar-nav a{
                font-size:15px;
            }
            @media screen and (min-width: 768px) {
                #search-tren{
                display:none;
            }
             }
                @media screen and (max-width: 768px) {
                    .navbar-nav a{
                font-size:7px;
            }
            
            #search-duoi{
                display:none;
            }
             }
             #date{
                font-family: "Times New Roman", Helvetica, sans-serif;
                font-weight: 400;
             }

        </style>

        <div class="container-fluid banner p-0">
            <img src="<?= url($img_banner['image']) ?>" alt="Banner" class="img-fluid custom-height" style="width:100%">
        </div>


<!--        <div class="menu navigation-a-right">-->
<!--            <a style=" margin: 0 2px 0 0px;" href="--><?php //= url('/') ?><!--">Trang chủ</a>-->
<!--            <a href="--><?php //= url('khoahoccongnghe') ?><!--">Khoa học - công nghệ</a>-->
<!--            <a href="--><?php //= url('kinhtexahoi') ?><!--">Kinh tế - xã hội</a>-->
<!--            <a href="--><?php //= url('diendankhoahoc') ?><!--">Diễn đàn khoa học</a>-->
<!--            <a href="--><?php //= url('thongtintraodoi') ?><!--">Thông tin trao đổi</a>-->
<!--            <a style=" margin: 0 0px 0 2px;" href="--><?php //= url('lienhe') ?><!--">Liên hệ</a>-->
<!--        </div>-->
<div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg navbar-light bg-light px-0 pt-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="col-9 col-md-3" id="search-tren">
                <form class="form-inline  justify-content-end" method="GET" action="<?= url('search') ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary w-100" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
               
                    <div class="navbar-nav menu  w-100">
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('/') ?>">Trang chủ</a>
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('khoahoccongnghe') ?>">Khoa học - công nghệ</a>
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('kinhtexahoi') ?>">Kinh tế - xã hội</a>
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('diendankhoahoc') ?>">Diễn đàn khoa học</a>
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('thongtintraodoi') ?>">Thông tin trao đổi</a>
                        <a class="nav-item nav-link text-white mt-1" href="<?= url('lienhe') ?>">Liên hệ</a>
                    </div>
                    
                </div>
            </nav>
        </div>

        <div class="container-fluid bg-light border-top border-danger py-2 shadow-sm">
        <div class="row align-items-center justify-content-between">
            <div class="col-12 col-md-2">
                <div id="date" class="text-dark font-weight-bold">
                    <p>
                        <script>
                            var daysOfWeek = ['Chủ nhật', 'Thứ hai', 'Thứ ba', 'Thứ tư', 'Thứ năm', 'Thứ sáu', 'Thứ bảy'];
                            var monthsOfYear = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12'];

                            var today = new Date();
                            var dayOfWeek = daysOfWeek[today.getDay()];
                            var day = today.getDate();
                            var month = monthsOfYear[today.getMonth()];
                            var year = today.getFullYear();

                            var formattedDate = dayOfWeek + ', ' + day + '/' + month + '/' + year;
                            document.getElementById('date').innerHTML = formattedDate;
                        </script>
                    </p>
                </div>
            </div>

            <div class="col-12 col-md-7 text-center pl-3">
                <div class="font-weight-bold" style="color: #9C1A1A;
    font-size: 19px;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    font-weight: 700;">
                    Giáo dục và đào tạo cùng với khoa học và công nghệ là quốc sách hàng đầu
                </div>
            </div>

            <div class="col-12 col-md-3" id="search-duoi">
                <form class="form-inline  justify-content-end" method="GET" action="<?= url('search') ?>">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Tìm kiếm..." name="keyword">
                        <div class="input-group-append">
                            <button class="btn btn-primary w-100" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    </header>
