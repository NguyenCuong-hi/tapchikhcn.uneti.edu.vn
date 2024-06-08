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

            .footer {
                background-color: #F7F7F7;
                height: 1vh;
                box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
                width: 100%;
                display: flex;

                align-items: center;

                justify-content: center;
                border-top: 2px #9b3333 solid;
                height: 5vh;
            }

            .current-date {
                color: black;
                font-size: 1.15vw;
                width: 15%;

                font-family: "Times New Roman", Helvetica, sans-serif;
                font-weight: 400;
                text-align: left;
                height: max-content;
                margin-left: 12px;
            }

            .title-head {
                color: #9C1A1A;
                line-height: 37px;
                font-size: 1.2vw;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight: 700;
                text-align: center;
                width: 70%;
                height: max-content;

            }


            .example input[type=text] {
                padding: 8px; /* Adjusted padding for better height balance */
                font-size: 1.2vw;
                border: 1px solid grey;
                float: left;
                width: 77%;
                background: #f1f1f1;
                box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
                height: 35px; /* Set a fixed height */
            }

            .example button {
                float: left;
                width: 16%;
                padding: 8px; /* Adjusted padding to match input */
                background: #2196F3;
                color: white;
                font-size: 1.2vw;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                height: 35px; /* Match the input height */
                box-sizing: border-box; /* Ensures padding and border are included in the element's total width and height */
            }

            .example button:hover {
                background: #0b7dda;
            }

            .navbar-toggler-icon {
                width: 0.5em;
                height: 0.5em;
            }
        </style>

        <div class="container-fluid banner p-0">
            <img src="<?= url($img_banner['image']) ?>" alt="Banner" class="img-fluid custom-height w-100">
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
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <div class="navbar-nav menu">
                        <a class="nav-item nav-link" href="<?= url('/') ?>">Trang chủ</a>
                        <a class="nav-item nav-link" href="<?= url('khoahocconnghe') ?>">Khoa học - công nghệ</a>
                        <a class="nav-item nav-link" href="<?= url('kinhtexahoi') ?>">Kinh tế - xã hội</a>
                        <a class="nav-item nav-link" href="<?= url('diendankhoahoc') ?>">Diễn đàn khoa học</a>
                        <a class="nav-item nav-link" href="<?= url('thongtintraodoi') ?>">Thông tin trao đổi</a>
                        <a class="nav-item nav-link" href="<?= url('lienhe') ?>">Liên hệ</a>
                    </div>
                </div>
            </nav>
        </div>

        <div class="footer">


            <div class="current-date " id="date">
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

            <div class="title-head"> Giáo dục và đào tạo cùng với khoa học và công nghệ là quốc sách hàng đầu</div>

            <form class="example" method="GET" action="<?= url('search') ?>">
                <input type="text" placeholder="Tìm kiếm..." name="keyword">
                <button type="submit"><i class="fa fa-search"></i></button>
            </form>

        </div>

    </header>
