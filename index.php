<?php
include_once('api.php');
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
    <!-- <link rel="stylesheet" href="css/all.css"> -->
    <link rel="stylesheet" href="css/style.css">
    <script src="js/jquery-3.4.1.js" defer></script>
    <script src="js/popper.min.js" defer></script>
    <script src="js/bootstrap.js" defer></script>
    <script src="js/all.js" defer></script>
    <script src="js/script.js" defer></script>
    <title>Pierre Stone</title>
</head>

<body>
    <!-- navbar start -->
    <nav id="navbar" class="navbar navbar-expand-lg navbar-dark fixed-top p-0">
        <div class="d-flex flex-grow-1">
            <span class="w-100 d-lg-none d-block"></span>
            <a class="navbar-brand d-none d-lg-block" href="#carousel">
                <img src="img/pierre_stone_shorthand.svg" alt="皮耶爾" style="width:72px;">
            </a>
            <div class="w-100 text-right">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-links">
                    <img src="img/pierre_stone_shorthand.svg" alt="皮耶爾" style="width:72px;">
                </button>
            </div>
        </div>
        <div class="ther-blur"></div>

        <div class="collapse navbar-collapse text-right" id="navbar-links">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item pr-3 active">
                    <a class="nav-link" href="#carousel">回到首頁 </i><span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#about">關於我們</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#menu">餐點介紹</a>
                </li>
                <li class="nav-item pr-3">
                    <a class="nav-link" href="#reservation">預約訂位</a>
                </li>
                <li class="nav-item pr-3">
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
                <div class="carousel-item vh-100 active">
                    <img src="img/carousel_01.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100">
                    <img src="img/carousel_02.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100">
                    <img src="img/carousel_03.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100">
                    <img src="img/carousel_04.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100">
                    <img src="img/carousel_05.jpg" class="d-block w-100 h-100" alt="...">
                </div>
                <div class="carousel-item vh-100">
                    <img src="img/carousel_06.jpg" class="d-block w-100 h-100" alt="...">
                </div>
            </div>
            <img src="img/pierre_hero.svg" class="position-absolute w-100 h-100 hero">
            <div class="carousel-caption d-block">
                <a href="#reservation" class="btn btn-light shadow">立即訂位</a>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <!-- carousel end -->

    <!-- about start -->
    <section id="about" class="container-fluid">
        <div class="row py-5 justify-content-center text-light">
            <div class="text-center mb-5">
                <h1 class="font-weight-light">關於Pierre Stone</h1>
                <p class="font-weight-lightest">認識兩位創辦人</p>
            </div>
            <div class="d-flex flex-column align-items-center p-5 mb-5 ps-bg-light shadow-heavy rounded-corner text-dark">
                <img src="img/about_pierre.jpg" class=" rounded-circle w-50 py-5">
                <h3 class="pb-3">
                    <span class="font-weight-lightest">主廚</span>&nbsp;Pierre Wang
                </h3>
                <p class="font-weight-lightest">
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                </p>
            </div>
            <div class="d-flex flex-column align-items-center p-5 ps-bg-dark shadow-heavy rounded-corner text-light">
                <img src="img/about_stone.jpg" class=" rounded-circle w-50 py-5">
                <h3 class="pb-3">
                    <span class="font-weight-lightest">經理</span>&nbsp;Francis Stone
                </h3>
                <p class="font-weight-lightest">
                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in fucibus.
                </p>
            </div>
        </div>
    </section>
    <!-- about end -->

    <!-- menu start -->
    <section id="menu" class="container-fluid p-0 p-lg-5">
        <div class="row pt-5 pb-5 w-100">
            <div class="col col-md-12 text-center text-dark">
                <h1>餐點介紹</h1>
                <p>探索 Pierre Stone 的時令佳餚</p>
            </div>
        </div>

        <div class="container d-flex flex-column justify-content-center p-0">
            <div class="row pb-5 w-100">
                <!-- <div class="col-4"></div> -->
                <div class="col-4 nav justify-content-around align-items-center bg-light" id="menu-tab">
                    <a class="active text-dark" id="nav-home-tab" data-toggle="tab" href="#nav-lunch">午餐</a>
                    <a class="text-dark" id="nav-profile-tab" data-toggle="tab" href="#nav-dinner">晚餐</a>
                    <a class="text-dark" id="nav-contact-tab" data-toggle="tab" href="#nav-alcohol">酒類</a>
                    <a class="text-dark" id="nav-contact-tab" data-toggle="tab" href="#nav-coffee">咖啡</a>
                </div>
                <!-- <div class="col-4"></div> -->
            </div>
            <div class="tab-content bg-white" id="menu-tab-content">
                <div class="tab-pane fade show active" id="nav-lunch">
                    <div class="row d-flex flex-row m-0 p-0">
                        <div class="card-group">
                            <div class="card">
                                <img src="img/card_1.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/card_2.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                </div>
                            </div>
                            <div class="card">
                                <img src="img/card_3.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-dinner"></div>
                <div class="tab-pane fade" id="nav-alcohol"></div>
                <div class="tab-pane fade" id="nav-coffee"></div>
            </div>
        </div>
    </section>
    <!-- menu end -->

    <!-- reservation start -->
    <section id="reservation" class="container-fluid vh-100 px-0">
        <div class="container table-responsive">
            <h1 class="text-center text-dark py-4">預約訂位</h1>
            <form class="needs-validation" novalidate>
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
                                <label for="exampleFormControlInput1">留言訊息</label>
                                <textarea id="message" rows="3" class="form-control"></textarea>
                                <div class="invalid-feedback">
                                    請輸入留言訊息
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
    <section id="contact" class="container-fluid vh-100 text-light ps-dark">
        <div class="row w-100 h-100 m-0">
            <div class="col-lg-6 d-none d-lg-block p-0 h-100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3614.702152324414!2d121.41729491542732!3d25.044180083967518!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442a7bed3dc9b59%3A0x57e6439a2db0fa2a!2zMjQzLCBOZXcgVGFpcGVpIENpdHksIFRhaXNoYW4gRGlzdHJpY3QsIOazsOWxseiBt-iok-S4reW_gw!5e0!3m2!1sen!2stw!4v1567655958210!5m2!1sen!2stw" frameborder="0" allowfullscreen="true" class="w-100 h-100 border-0"></iframe>
            </div>
            <div class="col col-lg-6 h100 d-flex flex-column align-items-left justify-content-around mx-0 p-0">
                <div class="w-100 mx-auto text-center">
                    <h2 class="font-weight-light">聯絡我們</h2>
                </div>
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3 font-weight-light">
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veritatis qui nisi numquam suscipit aliquid dolores, fugiat velit molestias. Assumenda ad soluta dolore adipisci atque omnis id eius nam asperiores. Rerum nostrum libero illum hic consequatur amet, saepe veritatis et nihil fuga mollitia dignissimos commodi officia natus eos architecto accusantium ipsa?</p>
                </div>
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3 font-weight-lightest">
                    <p>
                        <i class="fas fa-clock"></i>&nbsp;&nbsp;&nbsp;10:00 AM&nbsp;&nbsp;-&nbsp;&nbsp;00:00 AM<br>
                        <a href="https://goo.gl/maps/dVoQLnddnu8Utiju6" target="_blank" class="text-light"><i class="fas fa-map-marker-alt"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;24302新北市泰山區貴子里致遠新村55之1號<br>
                        <i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;(02) 8888-8888<br>
                        <i class="fas fa-envelope"></i>&nbsp;&nbsp;&nbsp;admin@pierre_stone.com
                    </p>
                </div>
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3">
                    <a href="https://twitter.com" target="_blank" class="text-light"><i class="fab fa-twitter fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.facebook.com" target="_blank" class="text-light"><i class="fab fa-facebook-f fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com" target="_blank" class="text-light"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
                <!-- footer start -->
                <div class="mx-lg-5 mx-md-4 mx-sm-1 mx-3">
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
                                    <h5 class="modal-title text-dark w-100" id="login-modal-label">管理員登入</h5>
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
</body>

</html>
