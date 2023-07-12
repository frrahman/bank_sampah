<?php
    include("config.php");
    $sql = "SELECT * FROM kegiatan_ppk_ormawa ";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);
    $no = 1;

    require 'hitcounter.php';

    $hit = new HitCounter();

    //cek dan simpan
     $hit->Hitung();

    //tampilkan counter
    // echo 'jumlah pengunjung :' . $hit->tampil();

    //tampilkan history jika ada
    // $h = $hit->waktu();
    // if (!empty($h)) {
    //     echo '<br>Anda telah mengunjungi halaman ini pada : ' . $h;
    // }
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon" href="img/hanami_logo_hijau.png">

    <meta charset="utf-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="apple-touch-icon" sizes="76x76" href="img/hanami_logo_hijau.png">
    <link rel="icon" type="image/png" href="img/hanami_logo_hijau.png"> -->
    <title>Hanami - Harmony in Nature & Economy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/hanami_logo_hijau.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <!-- scroll image -->
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="css/scroll_image.css"> -->

</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-green1" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
            <small>Didukung Oleh : <?php echo $hit->tampil();?></small>
                <a class="ms-2" href=""><img style="width: auto; height: 25px;" src="img/icon/1.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="img/icon/2.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="img/icon/3.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="img/icon/4.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="img/icon/5.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="img/icon/6.png" alt=""></i></a>
                </div>
            <div class="col-lg-6 px-5 text-end">
                <!-- <small><i class="fa fa-map-marker-alt me-2"></i>Jalan Binangun 1 No.99, Jakarta Pusat</small> -->
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>admin@hanami.com</small>
                <!-- <a class="icon-nyala ms-3" href=""><i class="fab fa-twitter"></i></a> -->
                <a class="icon-nyala ms-3" href=""></a>
                <a class="icon-nyala ms-3" href="login_secure/login.php?jv=<?php echo $hit->tampil(); ?>"><i class="fas fa-sign-in-alt"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <img class="navbar-logo" src="img/hanami_green1.png" alt="" style="width: 60px;">
            <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-green1 m-0">H A N A M I<span class="text-white"></span></h1>
                <p class="fw-bold navbar-subtitle" style="font-size: 1rem; margin-top: -13px; margin-left: 3px; margin-bottom: 0; color: #aeaeae;">Harmony in Nature & Economy</p>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="index.php" class="nav-item nav-link active">Home</a>
                    <a href="pengurus.php" class="nav-item nav-link">Pengurus</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Program</a>
                        <div class="dropdown-menu m-0">
                            <a href="pages/bank_sampah.php" class="dropdown-item">Bank Sampah</a>
                            <a href="pages/belanja.php" class="dropdown-item">Belanja Kerajinan</a>
                            <a href="pages/kegiatan.php" class="dropdown-item">Kegiatan PPK Ormawa</a>
                            <a href="pages/jenis_kerajinan.php" class="dropdown-item">Jenis Kerajinan</a>
                        </div>
                    </div>
                    <!-- <a href="program.php" class="nav-item nav-link">Program</a> -->
                    <a href="publikasi.php" class="nav-item nav-link">Publikasi</a>
                </div>
                <div class="d-none d-lg-flex ms-2">
                    <a class="btn btn-outline-green1 py-2 px-3" href="">
                        Hubungi Kami
                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner overlay-bottom">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-5.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Change The World With Humanity</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <a class="btn btn-green1 py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-4.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 pt-5">
                                    <h1 class="display-4 text-white mb-3 animated slideInDown">Let's Save More Lifes With Our Helping Hand</h1>
                                    <p class="fs-5 text-white-50 mb-5 animated slideInDown">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                                    <a class="btn btn-green1 py-2 px-3 animated slideInDown" href="">
                                        Learn More
                                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                                            <i class="fa fa-arrow-right"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Tentang Hanami Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden h-100" style="min-height: 400px;">
                        <img class="position-absolute w-100 h-100 pt-5 pe-5" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 bg-white ps-2 pb-2" src="img/about-2.jpg" alt="" style="width: 200px; height: 200px;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Tentang Hanami</div>
                        <h1 class="display-6 mb-5">Mari Mengenal Apa itu HANAMI</h1>
                        <div class="bg-light border-bottom border-5 border-primary rounded p-4 mb-4">
                            <p class="text-dark mb-2">Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet lorem sit clita duo justo erat amet</p>
                            <span class="text-green1">Jhon Doe, Founder</span>
                        </div>
                        <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                        <a class="btn btn-green1 py-2 px-3 me-3" href="">
                            Learn More
                            <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                        <a class="btn btn-outline-green1 py-2 px-3" href="">
                            Contact Us
                            <div class="d-inline-flex btn-sm-square bg-green1 text-white rounded-circle ms-2">
                                <i class="fa fa-arrow-right"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Hanami End -->



    <!-- Tentang Kegiatan PPK Ormawa Start -->
    <div class="container-xxl py-5 position-relative background-green overlay-top overlay-bottom">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Kegiatan PPK Ormawa</div>
                <h1 class="display-6 mb-5">Setia Mengabdi Kepada Masyarakat dan Negara</h1>
            </div>
            <div class="row">
                <?php
                    $sql = "SELECT * FROM kegiatan_ppk_ormawa ORDER BY tanggal DESC LIMIT 6";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query))
                    {
                ?>
                    <div class="col-lg-4 col-md-6 wow slideInUp mt-4" data-wow-delay="0.1s">
                        <div class="blog-item bg-light rounded overflow-hidden">
                            <div class="blog-img position-relative overflow-hidden">
                                <div class="responsive-kegiatan img-fluid img-kegiatan" style="background-image: url(dashboard_admin/assets/img/kegiatan_ppk_ormawa/<?php echo $data['foto'] ?>);"></div>
                                <a class="position-absolute top-0 start-0 bg-green1 text-white rounded-end mt-2 py-2 px-4" href=""><i class="fas fa-map-marker-alt"></i> <?php echo $data['lokasi'] ?></a>
                            </div>
                            <div class="p-4">
                                <div class="d-flex mb-3">
                                    <small class="me-3"><i class="far fa-user text-green1 me-2"></i>Admin</small>
                                    <small><i class="far fa-calendar-alt text-green1 me-2"></i><?php echo $data['tanggal'] ?></small>
                                </div>
                                <h4 class="mb-3"><?php echo $data['nama_kegiatan'] ?></h4>
                                <p class="max-text"><?php echo $data['deskripsi'] ?></p><p>...</p>
                                <a class="text-uppercase" href="">Read More <i class="bi bi-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-lg-12 col-md-12 wow slideInUp mt-4" style="text-align: center;">
                    <a class="btn btn-green1 py-2 px-3 animated slideInDown" href="pages/kegiatan.php">
                        Lihat Lebih Banyak
                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Kegiatan PPK Ormawa End -->


    <!-- Tentang pengolahan Sampah Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Tentang Pengolahan Sampah</div>
                    <h1 class="display-6 mb-5">Penjelasan Bagaimana Mengelola Sampah Dengan Baik & Benar</h1>
                    <p class="mb-5">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-5 gx-4">
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-green1 rounded-circle me-3">
                                    <i class="fa fa-bread-slice text-white"></i>
                                </div>
                                <h5 class="mb-0">Quality Products</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-green1 rounded-circle me-3">
                                    <i class="fa fa-birthday-cake text-white"></i>
                                </div>
                                <h5 class="mb-0">Custom Products</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-green1 rounded-circle me-3">
                                    <i class="fa fa-cart-plus text-white"></i>
                                </div>
                                <h5 class="mb-0">Online Order</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                        <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                            <div class="d-flex align-items-center mb-3">
                                <div class="flex-shrink-0 btn-square bg-green1 rounded-circle me-3">
                                    <i class="fa fa-truck text-white"></i>
                                </div>
                                <h5 class="mb-0">Home Delivery</h5>
                            </div>
                            <span>Magna sea eos sit dolor, ipsum amet ipsum lorem diam eos</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row img-twice rounded position-relative h-100">
                        <div class="col-6">
                            <img class="img-fluid rounded" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-6 align-self-end">
                            <img class="img-fluid rounded" src="img/service-2.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang pengolahan Sampah End -->


    <!-- Tentang Jenis Jenis Sampah Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Jenis Jenis Sampah</div>
                <h1 class="display-6 mb-5">Belajar Mengenal Berbagai Jenis Sampah</h1>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item text-center">
                    <div class="position-relative overflow-hidden h-100 responsive-box-sampah">
                        <img class="position-absolute w-100 rounded-circle h-auto pt-2 pe-2" src="img/about-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 rounded-circle bg-white ps-2 pb-2 responsive-jenis-sampah" src="img/about-2.jpg" alt="">
                    </div>
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="position-relative overflow-hidden h-100 responsive-box-sampah">
                        <img class="position-absolute w-100 rounded-circle h-auto pt-2 pe-2" src="img/testimonial-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 rounded-circle bg-white ps-2 pb-2 responsive-jenis-sampah" src="img/about-2.jpg" alt="">
                    </div>                    
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <div class="position-relative overflow-hidden h-100 responsive-box-sampah">
                        <img class="position-absolute w-100 rounded-circle h-auto pt-2 pe-2" src="img/testimonial-1.jpg" alt="" style="object-fit: cover;">
                        <img class="position-absolute top-0 end-0 rounded-circle bg-white ps-2 pb-2 responsive-jenis-sampah" src="img/about-2.jpg" alt="">
                    </div>                    
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Clita clita tempor justo dolor ipsum amet kasd amet duo justo duo duo labore sed sed. Magna ut diam sit et amet stet eos sed clita erat magna elitr erat sit sit erat at rebum justo sea clita.</p>
                        <h5 class="mb-1">Doner Name</h5>
                        <span class="fst-italic">Profession</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Tentang Jenis Jenis Sampah End -->



    <!-- Jenis Kerajinan Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Jenis Kerajinan</div>
                <h1 class="display-5 mb-5">Kerajinan Yang Dapat Kita Hasilkan Dari Sampah</h1>
            </div>
            <div class="row g-4">
                <?php
                    $sql = "SELECT * FROM jenis_jenis_kerajinan ORDER BY id DESC LIMIT 6";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query))
                    {
                ?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item rounded d-flex h-100">
                            <div class="service-img rounded">
                                <div class="img-fluid responsive-kerajinan" style="background-image: url(dashboard_admin/assets/img/jenis_jenis_kerajinan/<?php echo $data['foto'] ?>);"></div>
                                <!-- <img class="img-fluid" src="img/service-1.jpg" alt=""> -->
                            </div>
                            <div class="service-text rounded p-5 w-100">
                                <div class="btn-square rounded-circle mx-auto mb-3">
                                    <img class="img-fluid" src="img/icon/icon-3.png" alt="Icon">
                                </div>
                                <h4 class="mb-3"><?php echo $data['jenis_kerajinan'] ?></h4>
                                <p class="mb-4"><?php echo $data['deskripsi'] ?></p>
                                <a class="btn btn-sm" href="pages/jenis_kerajinan_rincian.php?id=<?php echo $data['id']; ?>"><i class="fa fa-plus text-green1 me-2"></i>Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-lg-12 col-md-12 wow slideInUp mt-4" style="text-align: center;">
                    <a class="btn btn-green1 py-2 px-3 animated slideInDown" href="pages/jenis_kerajinan.php">
                        Lihat Lebih Banyak
                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Jenis Kerajinan End -->



    <!-- Belanja Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Belanja</div>
                <h1 class="display-6 mb-4">Value Yang Dapat Dihasilkan Dari Sampah</h1>
            </div>
            <div class="row g-4">
                <?php
                    $sql = "SELECT * FROM harga_kerajinan ORDER BY id DESC LIMIT 4";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)){
                ?>
                    <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item-belanja text-center rounded overflow-hidden">
                            <div class="responsive-belanja" style="background-image: url(dashboard_admin/assets/img/harga_kerajinan/<?php echo $data['foto'] ?>);"></div>
                            <!-- <img class="img-fluid" src="img/team-1.jpg" alt=""> -->
                            <div class="team-text">
                                <div class="team-title">
                                    <h5><?php echo $data['jenis_kerajinan'] ?></h5>
                                    <span>Rp.<?php echo $data['harga'] ?></span>
                                </div>
                                <div class="team-social">
                                    <a class="btn btn-outline-green1-belanja py-2 px-3 white" href="">
                                        Pesan via WhatsApp
                                        <div class="d-inline-flex btn-sm-square bg-green1 text-white rounded-circle ms-2">
                                            <i class="fab fa-whatsapp"></i>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-lg-12 col-md-12 wow slideInUp mt-4" style="text-align: center;">
                    <a class="btn btn-green1 py-2 px-3 animated slideInDown" href="pages/belanja.php">
                        Lihat Lebih Banyak
                        <div class="d-inline-flex btn-sm-square bg-white text-green1 rounded-circle ms-2">
                            <i class="fa fa-arrow-right"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Belanja End -->



    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
                <div class="d-inline-block rounded-pill bg-secondary text-green1 py-1 px-3 mb-3">Testimoni</div>
                <h1 class="display-6 mb-5">Mereka Yang Telah Merasakan Manfaat Dari Organisasi Ini</h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-left h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="owl-carousel testimonial-carousel2">
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-1.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-2.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                        <div class="testimonial-item text-center">
                            <img class="img-fluid mx-auto mb-4" src="img/testimonial-3.jpg" alt="">
                            <p class="fs-5">Dolores sed duo clita tempor justo dolor et stet lorem kasd labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy et labore et tempor diam tempor erat.</p>
                            <h5>Client Name</h5>
                            <span>Profession</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="testimonial-right h-100">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-1.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-2.jpg" alt="">
                        <img class="img-fluid animated pulse infinite" src="img/testimonial-3.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-white-50 footer mt-5 pt-5 wow fadeIn position-relative overlay-top" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                
                <div class="col-lg-4 col-md-4" style="text-align: end;">
                    <br><br><br><br>
                    <h5 class="text-light mb-4">Address</h5>
                    <p>123 Street, New York, USA<i class="fa fa-map-marker-alt ms-3"></i></p>
                    <p>+012 345 67890<i class="fa fa-phone-alt ms-3"></i></p>
                </div>
                <div class="col-lg-4 col-md-4" style="text-align: center;">
                    <img class="navbar-logo" src="img/hanami_green1.png" alt="" style="width: 60px;">
                    <a href="index.html" class="navbar-brand ms-4 ms-lg-0">
                        <h1 class="fw-bold text-green1 m-0">H A N A M I<span class="text-white"></span></h1>
                        <p class="fw-bold navbar-subtitle" style="font-size: 1rem; margin-top: -13px; margin-left: 3px; margin-bottom: 0; color: #aeaeae;">Harmony in Nature & Economy</p>
                    </a>
                    <!-- <h1 class="fw-bold text-green1 mb-4">Chari<span class="text-white">Team</span></h1> -->
                    <p style="text-align: justify;">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita</p>
                    <div class="d-flex pt-2" style="justify-content: center !important;">
                        <a class="btn btn-square me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <br><br><br><br>
                    <h5 class="text-light mb-4">Address</h5>
                    <p><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <p><i class="fa fa-envelope me-3"></i>info@example.com</p>
                </div>
                
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0"> Copyright
                        &copy; 2022, dibuat dengan <i class="fa fa-heart"></i> by <a href="#">Tim Hanami</a> & <a href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                         <a href="">Harmony in Nature & Economy</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-green1 btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/parallax/parallax.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
        // Testimonials carousel
        $(".testimonial-carousel2").owlCarousel({
            autoplay: true,
            smartSpeed: 1000,
            items: 1,
            dots: false,
            loop: true,
            nav: true,
            navText : [
                '<i class="bi bi-chevron-left"></i>',
                '<i class="bi bi-chevron-right"></i>'
            ]
        });
    </script>
</body>

</html>