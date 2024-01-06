<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="./../vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light-custom">
        <div class="container">
            <div class="col-12">
                <div class="col-12" style="padding-bottom: 12px;">
                    <div class="row d-flex justify-content-end">
                        <a class="btn btn-nav" href="./profile.html"><i class="fa-regular fa-circle-user"></i> <b>Profile</b></a>
                        <div class="vl"></div>
                        <a class="btn btn-nav" href="./login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i> <b>Log IN</b></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 d-none d-md-block">
                        <div class="row align-items-center">
                            <a class="navbar-brand" href="# ">
                                <img class="d-inline-block align-top navbar-logo " src="./img/logo/Square-Full White.png " alt="">
                            </a>
                            <div class="vl brand"></div>
                            <h4 class="navbar-logo-name">INVY Store</h4>
                        </div>
                    </div>
                    <div class="d-flex col-12 col-md-6 align-items-center">
                        <form class=" col-10 ">
                            <div class=" input-group navbar-search ">
                                <input type=" text " class=" form-control form-control-sm " placeholder=" Search... ">
                                <button class=" btn btn-success btn-sm " type=" button ">
                                    <i class=" fa-solid fa-magnifying-glass "></i>
                                </button>
                            </div>
                        </form>
                        <div class="col-2 ">
                            <button class=" btn btn-nav "><i class=" fa-solid fa-lg fa-cart-shopping "></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <div class="container content" style="padding-top: 20px;">
        <div class="col-12">
            <div class="col-12 row" style="margin-left: 0px;padding: 0px;">
                <div class="col-8" style="padding: 0px">
                    <div id="carouselExampleIndicators" class="carousel slide h-auto" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="./img/carausel/img1.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/carausel/img2.png" class="d-block w-100" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="./img/carausel/img3.png" class="d-block w-100" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>
                <div class="col-4" style="padding: 0px;">
                    <div class="col-12 carousel-mini-cover">
                        <a href="#">
                            <img src="img/carausel/Carousel-Mini1.jpg" alt="" class="carousel-mini-item" style="padding-bottom: 2px;">
                        </a>
                    </div>
                    <div class="col-12 carousel-mini-cover">
                        <a href="#">
                            <img src="img/carausel/Carousel-Mini1.jpg" alt="" class="carousel-mini-item">
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-12 d-none d-md-block">
                <div class="info-bar row d-flex justify-content-between">
                    <div class="info-bar-items row align-items-center">
                        <i class="fa-solid fa-2xl fa-rotate-left"></i>
                        <div style="line-height: 0;">
                            <h5><b>7 Hr Pengembalian</b></h5>
                            <small class=" text-muted ">
                                Proses pengembalian gratis & praktis*
                            </small>
                        </div>
                    </div>
                    <div class="info-bar-items row align-items-center">
                        <i class="fa-solid fa-2xl fa-check-double"></i>
                        <div style="line-height: 0;">
                            <h5><b>100% ORI</b></h5>
                            <small class=" text-muted ">
                                Garansi original atau uang kembali
                            </small>
                        </div>
                    </div>
                    <div class="info-bar-items row align-items-center">
                        <i class="fa-solid fa-2xl fa-truck"></i>
                        <div style="line-height: 0;">
                            <h5><b>Gratis Ongkir</b></h5>
                            <small class=" text-muted ">
                                Min. belanja spesial se-Indonesia
                            </small>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="info-bar row d-flex justify-content-between">
                    <div class="col-12 title-layout">
                        Brand Kategori
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/oppo.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/vivo.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/deerma.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/philips.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/dell.png" alt="">
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-brand-layout">
                        <div class="card-brand align-items-center">
                            <img src="./img/brand/samsung.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="info-bar row">
                    <div class="col-12 title-layout">
                        Produk
                    </div>

                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">PHILIPS 1.8L Digital Rice Cooker HD4515/85 - 400Watt - 10 Menu, Green, hijau, mejikom multi fungsi</span>
                                <span class="product product-price">Rp752.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Philips HR2042/13 3000 Series Blender 290W Plastic</span>
                                <span class="product product-price">Rp464.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p3.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Philips Setrika Kering Diva GC122/37 - Ungu, Tapak Non-Stick, Ujung runcing dengan alur kancing, seterika setrikaan gosokan baju</span>
                                <span class="product product-price">Rp199.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p4.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Philips HR2042/30 3000 Series Blender 290W Plastic</span>
                                <span class="product product-price">Rp512.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p5.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">PHILIPS 2L Blender Plastic Jar 4-in-1 HR2223/30, 4 Pisau, chopper, filter, dry mill, plastik, hijau</span>
                                <span class="product product-price">Rp884.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/philips-p6.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Philips Setrika Kering Classic HD1172/99 - Hitam, Tapak Anti Lengket</span>
                                <span class="product product-price">Rp304.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">[NEW LAUNCH] vivo Y27s (8/128) - 50MP Camera, 44WFlashCharge, Snapdragon 680, IP54 Water Resistance</span>
                                <span class="product product-price">Rp2.399.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">vivo Earphone XE160 Original [Suara HD Berkualitas] - Garansi Resmi 6 Bulan</span>
                                <span class="product product-price">Rp99.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p3.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">vivo iQOO Cooling Back Clip Neo</span>
                                <span class="product product-price">Rp299.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p4.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">vivo Color Earphone</span>
                                <span class="product product-price">Rp69.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p5.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">[DISKON 700RB] vivo Y33T/ Y33s - ROM128GB , 50MP Night Camera, 5000mAh+18W Fastcharge</span>
                                <span class="product product-price">Rp1.399.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/vivo-p6.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">vivo Original Charger Adapter 18W - Fast Charging</span>
                                <span class="product product-price">Rp149.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dell-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">DELL Inspiron 7430-i71355U-16-512-U-W11-F-O</span>
                                <span class="product product-price">Rp16.600.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dell-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Dell Optical Mouse - MS116</span>
                                <span class="product product-price">Rp49.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dell-p3.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Dell Thunderbolt Dock - WD22TB4</span>
                                <span class="product product-price">Rp2.959.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dell-p4.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Dell Acc Multimedia Keyboard - KB216</span>
                                <span class="product product-price">Rp119.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/oppo-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">OPPO MH320 Stereo Earphones 3.5mm</span>
                                <span class="product product-price">Rp99.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/oppo-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">[NEW!] OPPO A58 6/128GB [6GB+6GB RAM Expansion, 5000mAh SUPERVOOC 33W, FHD+ Big Screen]</span>
                                <span class="product product-price">Rp2.399.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/oppo-p3.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">[NEW] OPPO A18 4GB/128GB [5000mAh Large Battery, 90Hz Sunlight Display, IP54 Dust Water Resistance]</span>
                                <span class="product product-price">Rp1.799.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/sm-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">[Free Gift] The Freestyle Battery Base VG-FBB3BA/XY for The Freestyle 2 SP-LFF3CLAXXXD All Around</span>
                                <span class="product product-price">Rp1.000.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/sm-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Samsung Galaxy A05 6/128GB - Silver</span>
                                <span class="product product-price">Rp1.899.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/sm-p3.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Samsung Galaxy A54 5G 8/256GB - Awesome Violet</span>
                                <span class="product product-price">Rp5.999.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dm-p1.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Deerma DX700 2-In-1 Handheld Vacuum Cleaner home penyedot debu</span>
                                <span class="product product-price">Rp799.000</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-2 card-product-layout ">
                        <div class="card-product">
                            <div class="product-image">
                                <img src="./img/product/dm-p2.jpg" alt="">
                            </div>
                            <div class="product-desc">
                                <span class="product product-title">Deerma DX700 2-In-1 Handheld</span>
                                <span class="product product-price">Rp999.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="./../vendor/jquery/jquery.min.js"></script>
    <script src="./../vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="./js/2d72363862.js"></script>
</body>

</html>