<?php
include_once('api.php');
$rows = $db->query("SELECT * FROM `ps_menu` WHERE 1")->fetchAll();
// print_r($menu);
?>
<!DOCTYPE html>
<html lang="zh-tw">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin> -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans+TC:100,300,400&display=swap&subset=chinese-traditional" rel="stylesheet">
    <link rel="stylesheet" href="css/aos.css">
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.js" defer></script>
    <script src="js/popper.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/all.js" defer></script>
    <script src="js/aos.js" defer></script>
    <script src="js/smooth-scroll.polyfills.min.js"></script>
    <script src="js/script.js" defer></script>
    <title>Pierre Stone</title>
</head>

<body>
    <!-- loading screen start -->
    <div id="loading">
        <div class="lds-ellipsis"><div></div><div></div><div></div><div></div></div>
    </div>
    <!-- loading screen end -->

    <!-- navbar start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark vw-100 fixed-top p-0">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"></span>
            <a class="navbar-brand d-none d-lg-block m-1" href="#carousel">
                <img src="img/pierre_stone_shorthand.svg" alt="皮耶爾" class="ps-sh">
            </a>
            <div class="w-100 text-right m-1 ps-sh">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-content">
                    <img src="img/pierre_stone_shorthand.svg" alt="皮耶爾" class="ps-sh">
                </button>
            </div>
        </div>

        <div id="navbar-content" class="collapse navbar-collapse text-right">
            <ul class="navbar-nav ml-auto pr-4 navbar-link">
                <li class="nav-item">
                    <a class="nav-link" href="#carousel">回到首頁 </i><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">關於我們</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">餐點介紹</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#reservation">預約訂位</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">聯絡我們</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar end -->

    <!-- carousel start -->
    <section id="carousel" class="container-fluid px-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <!-- <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            </ol> -->
            <div class="carousel-inner">
                <div class="carousel-item vh-100 active zoom">
                    <img src="img/carousel_01.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100 zoom">
                    <img src="img/carousel_02.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100 zoom">
                    <img src="img/carousel_03.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100 zoom">
                    <img src="img/carousel_04.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100 zoom">
                    <img src="img/carousel_05.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100 zoom">
                    <img src="img/carousel_06.jpg" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <img src="img/pierre_hero.svg" class="position-absolute w-100 h-100 hero">
            <div class="carousel-caption d-block">
                <a href="#reservation" class="btn btn-ps shadow">立即訂位</a>
            </div>
        </div>
    </section>
    <!-- carousel end -->

    <!-- about start -->
    <section id="about" class="container-fluid overflow-hidden">
        <div class="about-inside"></div>
        <div class="container d-flex flex-column align-items-center py-5 text-light">
            <div class="text-center my-5 pb-5 to-top title-shadow">
                <h1 class="font-weight-light">關於Pierre Stone</h1>
                <h5 class="font-weight-light ps-text-gilded">認識兩位創辦人</h5>
            </div>
            <div class="d-flex flex-column align-items-center p-5 mb-5 ps-bg-dark shadow-heavy rounded-corner text-light" data-aos="fade-right">
                <p class="font-weight-lightest px-lg-5">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="ps-text-gilded"><strong>Pierre Stone</strong></span> 的故事同時也是兩位對美食充滿熱情的合夥人在業界一路奮鬥，並且相遇的過程。兩人對料理的無限想像互相激盪，不斷擦碰出創意的火花，也造就了這間小而精美的法式酒館。Pierre Stone堅持親民合理的價格以及決不對品質妥協的理念，讓有各種需求的客人都能得到近乎獨享的個人體驗。
                </p>
            </div>
            <div class="w-100 row flex-column flex-lg-row justify-content-center align-items-center mb-5 px-lg-5 ps-bg-dark shadow-heavy rounded-corner text-light about-module" data-aos="fade-left">
                <div class="module-img col col-lg-4 text-center h-100 p-5">
                    <img src="img/about_pierre.jpg" class="rounded-circle w-50 w-md-80 w-lg-100">
                </div>
                <div class="col col-lg-8 px-5 pb-5 py-lg-5">
                    <div class="w-100 mx-auto text-center text-lg-left">
                        <h3 class="pb-3">
                            <span class="font-weight-lightest ps-text-gilded">主廚</span>&nbsp;&nbsp;Pierre Wang
                        </h3>
                    </div>
                    <p class="font-weight-lightest">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;行政主廚Pierre Wang擁有10年以上專業法式料理經驗，曾在巴黎、倫敦等美食一級戰區的知名餐廳任職。在英國即將脱歐之際，面對未知的將來，他選擇返回故鄉臺灣，並期許將法式料理與眾不同的風味分享給生活在故土上的人們。Pierre為人木訥卻對烹飪懷有滿腔熱血，他渴望將自己在「料理」上的人生歷練化作一道道佳餚。
                    </p>
                </div>
            </div>
            <div class="w-100 row flex-column flex-lg-row justify-content-center align-items-center mb-5 px-lg-5 ps-bg-dark shadow-heavy rounded-corner text-light about-module" data-aos="fade-right">
                <div class="module-img col col-lg-4 text-center h-100 p-5">
                    <img src="img/about_stone.jpg" class="rounded-circle w-50 w-md-80 w-lg-100">
                </div>
                <div class="col col-lg-8 px-5 pb-5 p-lg-5">
                    <div class="w-100 mx-auto text-center text-lg-left">
                        <h3 class="pb-3">
                            <span class="font-weight-lightest ps-text-gilded">經理</span>&nbsp;&nbsp;Francis J. Stone
                        </h3>
                    </div>
                    <p class="font-weight-lightest">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;餐廳經理Francis J. Stone是一位成功的商人，名下擁有一間國際食品貿易公司，在英國精緻餐飲業界也一直佔有舉足輕重的地位。Pierre Stone象徵著Francis最新一波創業投資，他意圖在亞洲區開闢新戰場，而臺灣正是其東進策略的第一站。Francis從不願隨波逐流，即使身處競爭激烈的餐飲業界，他也以獨到的眼光力抗潮流，走出自己的一條路，並始終相信美食所具備的獨特價值。
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- menu start -->
    <section id="menu" class="container-fluid vh-lg-100 d-flex flex-column align-items-center p-0 pb-5">
        <div class="row py-5 mt-5 w-100">
            <div class="col text-center text-dark p-0">
                <h1 class="">餐點介紹</h1>
                <h5 class="ps-text-gilded">探索 Pierre Stone 的時令佳餚</h5>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center align-items-center m-0 p-0 py-5">
            <div class="row w-100 d-flex justify-content-center pb-5">
                <div class="col-8 col-lg-4 nav d-flex justify-content-around bg-dark p-0 m-0 border-0 rounded-corner" id="menu-tab">
                    <a class="active text-light font-weight-lightest" id="nav-home-tab" data-toggle="tab" href="#nav-lunch">午餐</a>
                    <a class="text-light font-weight-lightest" id="nav-profile-tab" data-toggle="tab" href="#nav-dinner">晚餐</a>
                    <a class="text-light font-weight-lightest" id="nav-contact-tab" data-toggle="tab" href="#nav-drink">酒類</a>
                    <a class="text-light font-weight-lightest" id="nav-contact-tab" data-toggle="tab" href="#nav-coffee">咖啡</a>
                </div>
            </div>
            <div class="tab-content bg-white d-flex justify-content-center bg-transparent" id="menu-tab-content">
                <div class="tab-pane fade show active" id="nav-lunch">
                    <div class="row d-flex flex-row m-0 p-0">
                        <div class="card-deck">
                            <?php
                            foreach ($rows as $row) {
                                if ($row["category"] == "lunch") {
                                    echo '
                                        <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration="1000">
                                            <img src="'.$row["img"].'" class="card-img-top menu-img" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title ps-text-gilded">'.$row["name"].'</h5>
                                                <p class="card-text">'.$row["info"].'</p>
                                            </div>
                                        </div>
                                    ';
                                }
                            }
                            ?>
                            <!-- <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration"1000" data-aos-offset="400" data-aos-duration="2000">
                                <img src="img/Boeuf Bourguignon.jpg" class="card-img-top menu-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title ps-text-gilded">紅酒燉牛肉</h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    </p>
                                </div>
                            </div>
                            <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration"1000" data-aos-offset="400" data-aos-duration="3000">
                                <img src="img/Tarte Tatin.jpg" class="card-img-top menu-img" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title ps-text-gilded">反烤蘋果塔</h5>
                                    <p class="card-text">
                                        This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.
                                    </p>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dinner">
                    <div class="row d-flex flex-row m-0 p-0">
                        <div class="card-deck">
                            <?php
                            foreach ($rows as $row) {
                                if ($row["category"] == "dinner") {
                                    echo '
                                        <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration"1000">
                                            <img src="'.$row["img"].'" class="card-img-top menu-img" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title ps-text-gilded">'.$row["name"].'</h5>
                                                <p class="card-text">'.$row["info"].'</p>
                                            </div>
                                        </div>
                                    ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-drink">
                    <div class="row d-flex flex-row m-0 p-0">
                        <div class="card-deck">
                            <?php
                            foreach ($rows as $row) {
                                if ($row["category"] == "drink") {
                                    echo '
                                        <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration"1000">
                                            <img src="'.$row["img"].'" class="card-img-top menu-img" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title ps-text-gilded">'.$row["name"].'</h5>
                                                <p class="card-text">'.$row["info"].'</p>
                                            </div>
                                        </div>
                                    ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-coffee">
                    <div class="row d-flex flex-row m-0 p-0">
                        <div class="card-deck">
                            <?php
                            foreach ($rows as $row) {
                                if ($row["category"] == "coffee") {
                                    echo '
                                        <div class="card menu-card rounded-corner-s overflow-hidden" data-aos="flip-right" data-aos-delay="500" data-aos-duration"1000">
                                            <img src="'.$row["img"].'" class="card-img-top menu-img" alt="...">
                                            <div class="card-body">
                                                <h5 class="card-title ps-text-gilded">'.$row["name"].'</h5>
                                                <p class="card-text">'.$row["info"].'</p>
                                            </div>
                                        </div>
                                    ';
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- menu end -->

    <!-- reservation start -->
    <section id="reservation" class="container-fluid px-0">
        <div class="container table-responsive py-5">
            <div class="w-100 text-center py-5 mx-auto title-shadow">
                <h1 class="text-center text-light">預約訂位</h1>
                <h5 class="text-center ps-text-gilded">請選擇時間、人數，並留下您的聯絡資訊</h5>
            </div>
            <form class="needs-validation pt-5" novalidate>
                <table class="table table-light table-hover table-striped">
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">姓名</label>
                                <input id="name" type="input" class="form-control" required>
                                <div class="invalid-feedback">
                                    請輸入姓名
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">電話號碼</label>
                                <input id="tel" type="tel" class="form-control" required>
                                <div class="invalid-feedback">
                                    請輸入電話號碼
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">電子郵件</label>
                                <input id="email" type="email" class="form-control" required>
                                <div class="invalid-feedback">
                                    請輸入電子郵件
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">人數</label>
                                <input id="tel" type="tel" class="form-control" required>
                                <div class="invalid-feedback">
                                    請選擇人數
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">是否為公司團體</label>
                                <input id="tel" type="tel" class="form-control" required>
                                <div class="invalid-feedback">
                                    是否為公司團體
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">日期</label>
                                <input id="tel" type="tel" class="form-control" required>
                                <div class="invalid-feedback">
                                    請選擇日期
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="exampleFormControlInput1">時間</label>
                                <input id="tel" type="tel" class="form-control" required>
                                <div class="invalid-feedback">
                                    請選擇時間
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <button type="submit" class="btn btn-dark" title="送出" data-toggle="tooltip">送出</button>
                            <button type="reset" class="btn btn-dark" title="重設" data-toggle="tooltip">重設</button>
                        </td>
                    </tr>
                </table>
            </form>
        </div>
    </section>
    <!-- reservation end -->

    <!-- contact start -->
    <section id="contact" class="container-fluid vh-100 text-light ps-dark px-2 px-lg-0">
        <div class="row w-100 h-100 m-0">
            <div class="col-lg-6 d-none d-lg-block p-0 h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.702152324414!2d121.41729491542732!3d25.044180083967518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bed3dc9b59%3A0x57e6439a2db0fa2a!2zMjQzLCBOZXcgVGFpcGVpIENpdHksIFRhaXNoYW4gRGlzdHJpY3QsIOazsOWxseiBt-iok-S4reW_gw!5e0!3m2!1sen!2stw!4v1567655958210!5m2!1sen!2stw" frameborder="0" allowfullscreen="true" class="w-100 h-100 border-0"></iframe>
            </div>
            <div class="col col-lg-6 h100 d-flex flex-column align-items-left justify-content-around mx-0 p-2 p">
                <div class="w-100 mx-auto text-center">
                    <h2 class="font-weight-light ps-text-gilded">聯絡我們</h2>
                </div>
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3 font-weight-light">
                    <p>
                        Pierre Stone一週營業七天，從早上10點到晚間12點，無論是商業午餐或晚餐聚會，又或者只是想在下班後獨自小酌一杯，我們都提供相應的服務，以下是我們的詳細聯絡資訊與地址，期待不久後能與您見面。
                    </p>
                </div>
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3 font-weight-lightest">
                    <p>
                        <i class="text-light fas fa-clock"></i>&nbsp;&nbsp;&nbsp;10:00 AM&nbsp;&nbsp;-&nbsp;&nbsp;00:00 AM<br>
                        <a href="https://goo.gl/maps/dVoQLnddnu8Utiju6" target="_blank" class="text-light"><i class="fas fa-map-marker-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;24302新北市泰山區貴子里致遠新村55之1號<br>
                        <i class="text-light fas fa-phone"></i>&nbsp;&nbsp;&nbsp;(02) 8888-8888<br>
                        <i class="text-light fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;admin@pierre_stone.com
                    </p>
                </div>
                <div class="w-100 mx-auto text-center">
                    <a href="https://twitter.com" target="_blank" class="ps-text-gilded"><i class="fab fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com" target="_blank" class="ps-text-gilded"><i class="fab fa-facebook-f fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.youtube.com" target="_blank" class="ps-text-gilded"><i class="fab fa-youtube fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com" target="_blank" class="ps-text-gilded"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <!-- footer start -->
                <div class="w-100 mx-auto text-center">
                    <div>
                        <a href="https://github.com/jeffreyyau93" target="_blank" class="text-light"><i class="fab fa-github"></i></a>&nbsp;&nbsp;
                        <a href="https://www.linkedin.com/in/jeffreyyau93" target="_blank" class="text-light"><i class="fab fa-linkedin"></i></a>&nbsp;&nbsp;
                        <a href="" target="_blank" class="text-light"><i class="fab fa-behance"></i></a>&nbsp;&nbsp;
                        <a href="" class="text-light" data-toggle="modal" data-target="#login-modal" data-whatever="@mdo"><i class="fas fa-sign-in-alt"></i></a>
                    </div>
                    <span class="font-weight-light">Copyright &copy; 2019 jeffreyyau93</span>
                    <!-- admin login modal start -->
                    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header text-center border-0">
                                    <h5 class="modal-title w-100 ps-text-gilded" id="login-modal-label">管理員登入</h5>
                                    <!-- <button type="button" class="close" data-dismiss="modal">
                                        <span>&times;</span>
                                    </button> -->
                                </div>
                                <form method="POST" action="api.php?do=check" class="text-dark">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <label for="admin-account" class="col-form-label">帳號</label>
                                            <input type="text" class="form-control" id="admin-account" name="acc" placeholder="admin">
                                        </div>
                                        <div class="form-group">
                                            <label for="password-text" class="col-form-label">密碼</label>
                                            <input type="password" class="form-control" id="password-text" name="pwd" placeholder="1234">
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-center border-0">
                                        <button type="submit" class="btn btn-dark">登入</button>
                                        <button type="button" class="btn btn-dark" data-dismiss="modal">取消</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- admin login modal end -->
                </div>
                <!-- footer end -->
            </div>
        </div>
    </section>
    <!-- contact end -->

    <!-- scroll to top button -->
    <button id="btn-to-top"><i class="fas fa-chevron-up"></i></button>
</body>

</html>
