<?php
require_once './Site/header.php';
require_once './Site/menu.php';
require_once '../Dao/Logo.php';
require_once '../Dao/banner.php';
$data_banner = select_all_status();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/CSS/bootstrap.min.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/CSS/extencions.css" />
    <!-- CDN icon -->

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= $CONTENT_URL ?>/CSS/style.css" />
    <style>


    </style>
</head>

<body>




    <main class="main">
        <!--==================== HOME ====================-->
        <section class="home" id="home">
            <!-- Swiper-->
            <div class="Myswiper">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <?php
                    foreach ($data_banner as $item) {
                    ?>
                        <!-- Slides -->
                        <div class="swiper-slide">
                            <img onerror="this.src='http://placehold.it/1920'" src="<?= $CONTENT_URL ?>/Images/<?= $item['img'] ?>" alt="" class="home__img" />
                        </div>
                    <?php } ?>
                </div>
                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
            <div style="opacity: 90;" class="home__container container grid">

            </div>
        </section>





        <section class="section pt-50 pb-0">
            <div class="utilities-section">
                <div class="section" id="link-amthuc">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__titleat">???m th???c</h2>
                                        <p class="title-section__text" style="width:1000px">Tr???i nghi???m ???m th???c phong ph?? v???i h??n 10 nh?? h??ng
                                            sang tr???ng, mang ?????n cho th???c kh??ch nh???ng tinh hoa ???m th???c ?????a ph????ng v?? c??c ???m
                                            th???c ?????c s???c tr??n th??? gi???i</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_amthuc_500x340.jpg" alt="">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="utilities__body">
                                        <ul class="utilities__list">
                                            <li><a href="/vi/nha-hang-beach">Nh?? h??ng The Beach <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/nha-hang-poem">Nh?? h??ng Poem <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/nha-hang-bamboo-wings">Nh?? h??ng Bamboo Wings <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/sky-bar-restaurant">Sky Bar &amp; Restaurant <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/nha-hang-forest">Nh?? h??ng Forest <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    .title-section__title {
                        color: white;

                    }

                    .utilities__bodyat ul li a {
                        color: rgb(150, 155, 140)
                    }

                    .utilities__bodyat ul li a:hover {
                        color: white;
                    }
                </style>
                <div class="section" id="link-bark" style="background-color: rgb(47, 60, 67)">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__title">Bars</h2>
                                        <p class="title-section__text" style="color: rgb(150, 155, 140)">Th?????ng th???c nh???ng ly cocktail tuy???t h???o trong kh??ng
                                            gian l??ng m???n c??ng n???n nh???c s???ng ?????ng du d????ng</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">


                                <div class="col-xl-6">
                                    <div class="utilities__bodyat">
                                        <ul class="utilities__list">
                                            <li><a href="/vi/beach-bar">The Beach Bar <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/piano-bar">Piano Bar <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/poem-bar">Poem Bar <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/palm-pool-bar">Palm Pool Bar <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/ham-ruou-bamboo-wings">H???m r?????u Bamboo Wings <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/sky-bar-restaurant-0">Sky bar &amp; Restaurant <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/container-bar">Container Bar <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_bar_500x340.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="link-hoithao">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__titleat">H???i th???o &amp; S??? ki???n</h2>
                                        <p class="title-section__text">N??i t??? ch???c h???i th???o v?? s??? ki???n h??ng ?????u v???i ki???n
                                            tr??c ?????c ????o, kh??ng gian g???n g??i v???i thi??n nhi??n c??ng d???ch v??? s??? ki???n 5 sao</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_sukien_500x340.jpg" alt="">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="utilities__body">
                                        <ul class="utilities__list">
                                            <li><a href="/vi/symphony-hall">Symphony Hall <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/opera-hall">Opera Hall <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/opera-house">Opera House <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/charm-palace">Charm Palace <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/biz-space">Biz Space <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/tiec-cuoi">Ti????c c??????i <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/khong-gian-su-kien-ngoai-troi">Kh??ng gian s???? ki????n ngoa??i
                                                    tr????i <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="link-suckhoe" style="background-color: rgb(47, 60, 67)">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__title">S???c kh???e &amp; S???c ?????p</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">


                                <div class="col-xl-6">
                                    <div class="utilities__bodyat" style="color: rgb(150, 155, 140)">
                                        <p>T??i t???o n??ng l?????ng, c???i thi???n nhan s???c, gi??? tr???n thanh xu??n t???i T??? h???p Spa ch??m
                                            s??c s???c kh???e v?? s???c ?????p h??ng ?????u Vi???t Nam</p>
                                        <ul class="utilities__list">
                                            <li><a href="/vi/seva-boutique">SEVA Boutique <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/seva-beauty">SEVA Beauty <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/seva-spa">SEVA Spa <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_spa_500x340.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="link-vuichoi">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__titleat">Vui ch??i &amp; Gi???i tr??</h2>
                                        <p class="title-section__text">Ch??m ?????m v??o th??? gi???i gi???i tr?? kh??ng gi???i h???n c??ng
                                            lo???t tr???i nghi???m VR Game, r???p chi???u phim, karaoke, c??ng vi??n gi???i tr??...</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_vcgt_500x340.jpg" alt="">
                                    </div>
                                </div>

                                <div class="col-xl-6">
                                    <div class="utilities__body">
                                        <ul class="utilities__list">
                                            <li><a href="/vi/flamingo-play-world">Flamingo Play World <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/flamingo-kids-club">Flamingo Kids Club <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/karaoke">Karaoke <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/rap-chieu-phim">R???p chi???u phim <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/wonder-park">Wonder Park <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/vr-game-park">VR game park <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="link-thethao" style="background-color: rgb(47, 60, 67)">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__title">Th??? thao</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">


                                <div class="col-xl-6">
                                    <div class="utilities__bodyat" style="color: rgb(150, 155, 140)">
                                        <p>C??i thi???n th??? ch???t v???i ??a d???ng c??c lo???i h??nh th??? thao t???i Fitness center, CLB th???
                                            thao v?? CLB b??i bi???n</p>
                                        <ul class="utilities__list">
                                            <li><a href="/vi/trung-tam-fitness">Trung t??m Fitness <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/be-boi">B???? b??i <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/clb-thao">CLB th??? thao <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/clb-bai-bien">CLB b??i bi???n <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_thethao_500x340_0.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section" id="link-nghethuat">
                    <div class="container">
                        <div class="utilities">
                            <div class="row">
                                <div class="col-xl-4">
                                    <div class="title-section">
                                        <h2 class="title-section__titleat">Ngh??? thu???t</h2>
                                    </div>
                                </div>
                            </div>
                            <div class="row row-fix">
                                <div class="col-xl-6">
                                    <div class="utilities__media">
                                        <img src="https://flamingoresorts.vn/sites/default/files/2019-10/flamingo_dai_lai_resort_nghethuat_500x340.jpg" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="utilities__body">
                                        <p>Khu th?????ng th???c ngh??? thu???t ven h??? v?? trong r???ng th??ng v???i qu???n th??? studio ngh???
                                            thu???t tr??ng b??y c??c t??c ph???m ??i??u kh???c - h???i h???a t??? c??c ngh??? s?? n???i ti???ng trong
                                            v?? ngo??i n?????c</p>
                                        <ul class="utilities__list">
                                            <li><a href="/vi/sky-park">Sky Park <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                            <li><a href="/vi/art-forest-0">Art in the forest <span><img src="../themes/md_flamingo/img/icon/hover-go.svg" alt=""></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>       </div>
        </section></body>

</html>
<?php
require_once './Site/footer.php';
