<html>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</html>

<style>
    body {
        justify-content: center;
        align-items: center;
        font-family: Arial, sans-serif;

    }

    label {
        display: block;
        margin-bottom: 10px;
    }

    input[type="submit"] {
        width: 20%;
        background-color: #2487C8;
        color: white;
        cursor: pointer;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    input[type="submit"]:hover {
        background-color: #299be4;
    }
</style>
<?php

use App\SentMagazineByEmail;

require_once(BASE_PATH . '/template/app/layouts/header.php');


?>

<div class="body_getdata" style="display: flex;  margin-top: 45px; margin-right: 32px">
    <?php require_once(BASE_PATH . '/template/app/layouts/menuleft.php') ?>

    <div id="sendmail" style="width: 62%; display: flex;  flex-direction: column;
         padding: 10px 3vw; box-sizing: border-box">
        <div class="panel panel-default">
            <div class="panel-body">
                <h1 class="text-center">Gửi đóng góp qua email</h1>
                <form id="sendmailForm"
                      class="form-horizontal" role="form"
                      action="<?= url("/gopy/gui") ?>" method="post">
                    <div class="form-group">
                        <label for="sname" class="col-sm-4 control-label">Tên của bạn<em>*</em></label>
                        <div class="col-sm-20">
                            <input id="sname" type="text" name="name_sender" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="syourmail_iavim" class="col-sm-4 control-label">E-mail của bạn</label>
                        <div class="col-sm-20">
                            <input id="syourmail_iavim" type="text" name="mail_sender" value="" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="semail" class="col-sm-4 control-label">E-mail người nhận<em>*</em></label>
                        <div class="col-sm-20">
                            <input id="semail" type="text" name="mail_receive" placeholder="tapchikhcn@uneti.edu.vn"
                                   value="tapchikhcn@uneti.edu.vn" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="scontent" class="col-sm-4 control-label">Nội dung</label>
                        <div class="col-sm-20">
                            <textarea id="scontent" name="title_magaz" rows="5" cols="20" class="form-control"></textarea>
                        </div>
                    </div>

                    <input
                            type="hidden" name="id" value="102">

                    <input id = "sendButton" class="btn btn-default" type="submit" name="submit" value="Gửi">
                </form>
<!--                <button id="sendButton" type="submit" class="btn btn-default"> Gửi</button>-->
            </div>
        </div>
    </div>

    <script type="text/javascript"
            src="https://cdn.jsdelivr.net/npm/@emailjs/browser@4/dist/email.min.js">
    </script>
    <script type="text/javascript">
        (function () {
            emailjs.init({
                publicKey: "5rtdIgjf24916KqfF",
            });
        })();
    </script>

    <script>

        document.getElementById("sendButton").addEventListener("click", function () {
            var email = document.getElementById("email");
            var youremail = document.getElementById("youremail");

            emailjs.init("");

            var messager = document.getElementById("scontent").value;
            var templateParams = {
                to_email: email,
                message: messager
            };

            emailjs.send("tapchikhcn",email, youremail, templateParams)
                .then(function (response) {
                    console.log("Email sent successfully!", response);
                    alert("Email đã được gửi thành công!");
                }, function (error) {
                    console.error("Email sending failed:", error);
                    alert("Gửi email thất bại!");
                });

            document.getElementById("popup").style.display = "none";
            document.getElementById("overlay").style.display = "none";
        });
    </script>

    <div id="openidResult" class="nv-alert" style="display:none"></div>
    <div id="openidBt" data-result="" data-redirect=""></div>
    <script>
        var nv_base_siteurl = "/", nv_lang_data = "vi", nv_lang_interface = "vi", nv_name_variable = "nv",
            nv_fc_variable = "op", nv_lang_variable = "language", nv_module_name = "news", nv_func_name = "sendmail",
            nv_is_user = 0, nv_my_ofs = 7, nv_my_abbr = "+07", nv_cookie_prefix = "nv4", nv_check_pass_mstime = 1738000,
            nv_area_admin = 0, nv_safemode = 0, theme_responsive = 0, nv_is_recaptcha = 0;
    </script>
    <script src="/assets/js/language/vi.js?t=1618628632"></script>
    <script src="/assets/js/global.js?t=1618628632"></script>
    <script src="/themes/default/js/news.js?t=1618628632"></script>
    <script src="/themes/default/js/main.js?t=1618628632"></script>
    <script src="/themes/default/js/bootstrap.min.js?t=1618628632"></script>
    <?php require_once(BASE_PATH . '/template/app/layouts/banner-right.php') ?>


</div>


<?php
require_once(BASE_PATH . '/template/app/layouts/footer.php');
?>