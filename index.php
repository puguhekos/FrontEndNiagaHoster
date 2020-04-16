<!DOCTYPE html>
<html lang="en">

<head>
    <?php
        include ("com/com-header.php");
    ?>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
    <?php
        include ("com/com-menu.php");
    ?>

    <div class="banner section-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div class="col-sm-6 col-md-6 modul-left-banner">
                        <h3><b>PHP Hosting</b></h3>
                        <h4 class="second-title">Cepat, handal, penuh dengan modul PHP yang Anda butuhkan</h4>
                        <ul class="list-group">
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Solusi PHP untuk performa query yang lebih cepat</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Konsumsi memori yang lebih rendah</p>
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7
                                    </div>
                                </div>
                            </li>
                            <li class="list-group-item">
                                <div class="media">
                                    <div class="media-left">
                                        <i class="fa fa-check"></i>
                                    </div>
                                    <div class="media-body">
                                        <p>Fitur enkripsi IonCube dan Zend Guard Loaders
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-6 img-banner">
                        <img src="assets/svg/illustration-banner-PHP hosting-01.svg">
                    </div>
                </div>
                <div class="col-md"></div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-sm-12 col-md-8">
                    <div class="col-sm-4 col-md-4">
                        <div class="panel panel-default icon-section">
                            <div class="panel-heading">
                                <img src="assets/svg/zendguard.png">
                            </div>
                            <div class="panel-body">
                                PHP Zend Guard Loader
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="panel panel-default icon-section">
                            <div class="panel-heading">
                                <img src="assets/svg/Composer.png">
                            </div>
                            <div class="panel-body">
                                PHP Composer
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-4">
                        <div class="panel panel-default icon-section">
                            <div class="panel-heading">
                                <img src="assets/svg/IonCube-Loader.png">
                            </div>
                            <div class="panel-body">
                                PHP IonCube Loader
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <h3 class="service-title">Paket Hosting Singapura yang Tepat</h3>
                    <h4 class="second-title">Diskon 40% + Domain dan SSL Gratis untuk Anda</h4>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row price-section">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary row">
                            <div class="panel-heading">
                                <h4 class="service-title">Bayi</h4>
                            </div>
                            <div class="panel-body list-price">
                                <div class="disc-price">
                                    Rp <span id="discount1"></span>
                                </div>
                                <div class="normal-price">
                                    <span class="sup">Rp</span>
                                    <span class="normal-price-list" id="price1"></span>
                                    <span class="sup">/ bln</span>
                                </div>
                            </div>
                            <div class="panel-body last-body">
                                <p>
                                    <b>938</b> Pengguna Terdaftar
                                </p>
                            </div>
                            <div class="panel-footer">
                                <ul class="list-group benefit-list">
                                    <li class="list-group-item">
                                        <b>0.5X RESOURCE POWER</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>500MB</b> Disk Space
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Databases
                                    </li>
                                    <li class="list-group-item">
                                        <b>1</b> Domain
                                    </li>
                                    <li class="list-group-item">
                                        <b>Instant</b> Backup
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited SSL</b> Gratis Selamanya
                                    </li>
                                </ul>
                                <div class="button-submit-area">
                                    <button type="button" class="btn btn-default">
                                        Pilih Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary row">
                            <div class="panel-heading">
                                <h4 class="service-title">Pelajar</h4>
                            </div>
                            <div class="panel-body list-price">
                                <div class="disc-price">
                                    Rp <span id="discount2"></span>
                                </div>
                                <div class="normal-price">
                                    <span class="sup">Rp</span>
                                    <span class="normal-price-list" id="price2"></span>
                                    <span class="sup">/ bln</span>
                                </div>
                            </div>
                            <div class="panel-body last-body">
                                <p>
                                    <b>4.168</b> Pengguna Terdaftar
                                </p>
                            </div>
                            <div class="panel-footer">
                                <ul class="list-group benefit-list">
                                    <li class="list-group-item">
                                        <b>1X RESOURCE POWER</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Disk Space
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Bandwidth
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> POP3 Email
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Databases
                                    </li>
                                    <li class="list-group-item">
                                        <b>10</b> Addon Domains
                                    </li>
                                    <li class="list-group-item">
                                        <b>Instant</b> Backup
                                    </li>
                                    <li class="list-group-item">
                                        <b>Domain Gratis</b> Selamanya
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited SSL</b> Gratis Selamanya
                                    </li>
                                </ul>
                                <div class="button-submit-area">
                                    <button type="button" class="btn btn-default">
                                        Pilih Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary row">
                            <div class="panel-heading">
                                <h4 class="service-title">Personal</h4>
                                <div class="box-deal">
                                   <div class="ribbon"><span>BEST SELLER!</span></div>
                                </div>
                            </div>
                            <div class="panel-body list-price">
                                <div class="disc-price">
                                    Rp <span id="discount3"></span>
                                </div>
                                <div class="normal-price">
                                    <span class="sup">Rp</span>
                                    <span class="normal-price-list" id="price3"></span>
                                    <span class="sup">/ bln</span>
                                </div>
                            </div>
                            <div class="panel-body last-body">
                                <p>
                                    <b>10.017</b> Pengguna Terdaftar
                                </p>
                            </div>
                            <div class="panel-footer">
                                <ul class="list-group benefit-list">
                                    <li class="list-group-item">
                                        <b>2X RESOURCE POWER</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Disk Space
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Bandwidth
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> POP3 Email
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Databases
                                    </li>
                                    <li class="list-group-item">
                                        <b>10</b> Addon Domains
                                    </li>
                                    <li class="list-group-item">
                                        <b>Instant</b> Backup
                                    </li>
                                    <li class="list-group-item">
                                        <b>Domain Gratis</b> Selamanya
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited SSL</b> Gratis Selamanya
                                    </li>
                                    <li class="list-group-item">
                                        <b>Private</b> Name Server
                                    </li>
                                    <li class="list-group-item">
                                        <b>SpamAssasin</b> Mail Protection
                                    </li>
                                </ul>
                                <div class="button-submit-area">
                                    <button type="button" class="btn btn-default">
                                        Pilih Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="panel panel-primary row">
                            <div class="panel-heading">
                                <h4 class="service-title">Bisnis</h4>
                            </div>
                            <div class="panel-body list-price">
                                <div class="disc-price">
                                    Rp <span id="discount4"></span>
                                </div>
                                <div class="normal-price">
                                    <span class="sup">Rp</span>
                                    <span class="normal-price-list" id="price4"></span>
                                    <span class="sup">/ bln</span>
                                </div>
                            </div>
                            <div class="panel-body last-body">
                                <p>
                                    <b>3.552</b> Pengguna Terdaftar
                                </p>
                            </div>
                            <div class="panel-footer">
                                <ul class="list-group benefit-list">
                                    <li class="list-group-item">
                                        <b>3X RESOURCE POWER</b>
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Disk Space
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Bandwidth
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> POP3 Email
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited</b> Databases
                                    </li>
                                    <li class="list-group-item">
                                        <b>10</b> Addon Domains
                                    </li>
                                    <li class="list-group-item">
                                        <b>Instant</b> Backup
                                    </li>
                                    <li class="list-group-item">
                                        <b>Domain Gratis</b> Selamanya
                                    </li>
                                    <li class="list-group-item">
                                        <b>Unlimited SSL</b> Gratis Selamanya
                                    </li>
                                    <li class="list-group-item">
                                        <b>Private</b> Name Server
                                    </li>
                                    <li class="list-group-item">
                                        <b>Prioritas</b> Layanan Support
                                    </li>
                                    <li class="list-group-item rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </li>
                                    <li class="list-group-item">
                                        <b>SpamExpert</b> Pro Mail Protection
                                    </li>
                                </ul>
                                <div class="button-submit-area">
                                    <button type="button" class="btn btn-default">
                                        Pilih Sekarang
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row php-section">
                <div class="col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <h4 class="second-title">Powerful dengan Limit PHP yang Lebih Besar</h4>
                    <div class="row">
                        <div class="col-sm-6 col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>max execution time 300s</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>max execution time 300s</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>php memory limit 1024 MB</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-6 col-md-6">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>post max size 128 MB</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>upload max filesize 128 MB</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>max input vars 2500</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
            <div class="row package-section">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <h4 class="second-title">Semua Paket Hosting Sudah Termasuk</h4>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_PHP Semua Versi.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>PHP Semua Versi</h5>
                                    <p>Pilih mulai dari versi PHP 5.3 s/d PHP 7. Ubah sesuka Anda!</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_My SQL.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>MySQL Versi 5.6</h5>
                                    <p>Nikmati MySQL versi terbaru, tercepat dan kaya akan fitur</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_CPanel.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>Panel Hosting cPanel</h5>
                                    <p>Kelola website dengan panel canggih yang familiar di hati Anda.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_garansi uptime.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>Garansi Uptime 99.9%</h5>
                                    <p>Data center yang mendukung kelangsungan website Anda 24/7.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_InnoDB.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>Database InnoDB Unlimited</h5>
                                    <p>Jumlah dan ukuran database yang tumbuh sesuai kebutuhan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-md-4">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <img src="assets/svg/icon PHP Hosting_My SQL remote.svg">
                                </div>
                                <div class="panel-body">
                                    <h5>Wildcard Remote MySQL</h5>
                                    <p>Mendukung s/d 25 max_user_connections dan 100 max_connections.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
            <div class="row framework-section">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <h4 class="second-title">Mendukung Penuh Framework Laravel</h4>
                    <div class="row">
                        <div class="col-sm-6 col-md-6 modul-left-banner">
                            <p>
                                Tak perlu menggunakan dedicated server ataupun VPS yang mahal. Layanan PHP hosting murah kami mendukung penuh framework favorit Anda.
                            </p>

                            <ul class="list-group">
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Install Laravel <b>1 klik</b> dengan Softtacious installer</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Mendukung ekstensi <b>PHP MCrypt, phar, mbstring, json,</b> dan <b>fileinfo</b></p>
                                        </div>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    <div class="media">
                                        <div class="media-left">
                                            <i class="fa fa-check"></i>
                                        </div>
                                        <div class="media-body">
                                            <p>Tersedia <b>Composer</b> dan <b>SSH</b> untuk menginstal package pilihan Anda.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <sub>Nb. Composer dan SSH hanya tersedia pada paket Personal dan Bisnis</sub>
                            <div class="button-submit-area">
                                <button type="button" class="btn btn-default">
                                    Pilih Hosting Anda
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 modul-right-banner ">
                            <img src="assets/svg/illustration banner support laravel hosting.svg">
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="modul-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-sm-12 col-md-8">
                    <h4 class="second-title">Modul Lengkap untuk Menjalankan Aplikasi PHP Anda</h4>
                    <div class="row">
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    IcePHP
                                </li>
                                <li>
                                    apc
                                </li>
                                <li>
                                    apcu
                                </li>
                                <li>
                                    apm
                                </li>
                                <li>
                                    ares
                                </li>
                                <li>
                                    bcmath
                                </li>
                                <li>
                                    bcompiler
                                </li>
                                <li>
                                    big_int
                                </li>
                                <li>
                                    bitset
                                </li>
                                <li>
                                    bloomy
                                </li>
                                <li>
                                    bz2_filter
                                </li>
                                <li>
                                    clamay
                                </li>
                                <li>
                                    coin_acceptor
                                </li>
                                <li>
                                    crack
                                </li>
                                <li>
                                    dba
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    http
                                </li>
                                <li>
                                    huffman
                                </li>
                                <li>
                                    idn
                                </li>
                                <li>
                                    igbinary
                                </li>
                                <li>
                                    imagick
                                </li>
                                <li>
                                    imap
                                </li>
                                <li>
                                    inclued
                                </li>
                                <li>
                                    inotify
                                </li>
                                <li>
                                    interbase
                                </li>
                                <li>
                                    intl
                                </li>
                                <li>
                                    ioncube_loader
                                </li>
                                <li>
                                    ioncube_loader_4
                                </li>
                                <li>
                                    jasmin
                                </li>
                                <li>
                                    json
                                </li>
                                <li>
                                    Idap
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    nd_pdo_mysql
                                </li>
                                <li>
                                    oauth
                                </li>
                                <li>
                                    oci8
                                </li>
                                <li>
                                    odbc
                                </li>
                                <li>
                                    opcache
                                </li>
                                <li>
                                    pdf
                                </li>
                                <li>
                                    pdo
                                </li>
                                <li>
                                    pdo_dblib
                                </li>
                                <li>
                                    pdo_firebird
                                </li>
                                <li>
                                    pdo_mysql
                                </li>
                                <li>
                                    pdo_odbc
                                </li>
                                <li>
                                    pdo_pgsql
                                </li>
                                <li>
                                    pdo_sqlite
                                </li>
                                <li>
                                    pgsql
                                </li>
                                <li>
                                    phalcon
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3">
                            <ul class="list-unstyled">
                                <li>
                                    stats
                                </li>
                                <li>
                                    stem
                                </li>
                                <li>
                                    stomp
                                </li>
                                <li>
                                    suhosin
                                </li>
                                <li>
                                    sybase_ct
                                </li>
                                <li>
                                    sysvmsg
                                </li>
                                <li>
                                    sysvsem
                                </li>
                                <li>
                                    sysvshm
                                </li>
                                <li>
                                    tidy
                                </li>
                                <li>
                                    timzonedb
                                </li>
                                <li>
                                    trader
                                </li>
                                <li>
                                    translit
                                </li>
                                <li>
                                    uploadprogress
                                </li>
                                <li>
                                    uri_template
                                </li>
                                <li>
                                    uuid
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-submit-area">
                        <button type="button" class="btn btn-default">
                            Selengkapnya
                        </button>
                    </div>
                </div>
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
    <div class="footer-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-sm-12 col-md-10">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 modul-left-banner">
                            <h4 class="second-title">Linux Hosting yang Stabil dengan Teknologi LVE</h4>
                            <p>
                                SuperMicro <b>Intel Xeon 24-Cores</b> server dengan RAM <b>128 GB</b> dan teknologi <b>LVE CloudLinux</b> untuk stabilitas server Anda. Dilengkapi dengan <b>SSD</b> untuk kecepatan <b>MySQL</b> dan caching, Apache load balancer berbasis LiteSpeed Technoloies, <b>CageFS</b> security, <b>Raid-10</b> protection dan auto backup untuk keamanan website PHP Anda.
                            </p>
                            <div class="button-submit-area">
                                <button type="button" class="btn btn-default">
                                    Pilih Hosting Anda
                                </button>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-6 modul-right-banner ">
                            <img src="assets/svg/cloud hosting 2.svg">
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="share-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-sm-6 col-md-6">
                    <p>Bagikan jika Anda menyukai halaman ini.</p>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div id="shareIconsCount"></div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>
    <div class="footer-jumbotron jumbotron">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-sm-6 col-md-6">
                    <span class="normal-text">Perlu</span> <span class="capt-text">BANTUAN?</span> <span class="normal-text">Hubungi Kami:</span> <span class="capt-text">0274-5305505</span>
                </div>
                <div class="col-sm-4 col-md-4 live-chat-box">
                    <div class="chat-box">
                        <button type="button" class="btn btn-primary">
                            <span class="fa fa-comments"></span> Live Chat
                        </button>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </div>

    <?php
        include ("com/com-footer.php");
    ?>

</body>
</html>