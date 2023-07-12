<?php
    include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Hanami - Harmony in Nature & Economy</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../img/hanami_logo_hijau.png" rel="icon">
    
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Saira:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="top-bar text-white-50 row gx-0 align-items-center d-none d-lg-flex">
            <div class="col-lg-6 px-5 text-start">
            <small>Didukung Oleh :</small>
                <a class="ms-2" href=""><img style="width: auto; height: 25px;" src="../img/icon/1.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="../img/icon/2.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="../img/icon/3.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="../img/icon/4.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="../img/icon/5.png" alt=""></i></a>
                <a class="ms-2" href=""><img style="width: 25px; height: 25px;" src="../img/icon/6.png" alt=""></i></a>
                </div>
            <div class="col-lg-6 px-5 text-end">
                <!-- <small><i class="fa fa-map-marker-alt me-2"></i>Jalan Binangun 1 No.99, Jakarta Pusat</small> -->
                <small class="ms-4"><i class="fa fa-envelope me-2"></i>admin@hanami.com</small>
                <!-- <a class="icon-nyala ms-3" href=""><i class="fab fa-twitter"></i></a> -->
                <a class="icon-nyala ms-3" href=""></a>
                <a class="icon-nyala ms-3" href="../login_secure/login.php"><i class="fas fa-sign-in-alt"></i></a>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
            <img class="navbar-logo" src="../img/hanami_green1.png" alt="" style="width: 60px;">
            <a href="../index.php" class="navbar-brand ms-4 ms-lg-0">
                <h1 class="fw-bold text-green1 m-0">H A N A M I<span class="text-white"></span></h1>
                <p class="fw-bold navbar-subtitle" style="font-size: 1rem; margin-top: -13px; margin-left: 3px; margin-bottom: 0; color: #aeaeae;">Harmony in Nature & Economy</p>
            </a>

            <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto p-4 p-lg-0">
                    <a href="../index.php" class="nav-item nav-link">Home</a>
                    <a href="../pengurus.php" class="nav-item nav-link">Pengurus</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Program</a>
                        <div class="dropdown-menu m-0">
                            <a href="bank_sampah.php" class="dropdown-item">Bank Sampah</a>
                            <a href="belanja.php" class="dropdown-item active">Belanja Kerajinan</a>
                            <a href="kegiatan.php" class="dropdown-item">Kegiatan PPK Ormawa</a>
                            <a href="jenis_kerajinan.php" class="dropdown-item">Jenis Kerajinan</a>
                        </div>
                    </div>
                    <a href="../publikasi.php" class="nav-item nav-link">Publikasi</a>
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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 wow fadeIn position-relative overlay-bottom" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 29, 35, .8), rgba(0, 29, 35, .8)), url(../img/bg_sampah2.jpg) center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Belanja Kerajinan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Belanja Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <?php
                    $sql = "SELECT * FROM harga_kerajinan ";
                    $query = mysqli_query($conn, $sql);
                    while ($data = mysqli_fetch_array($query)){
                ?>
                    <div class="col-lg-3 col-md-6 col-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item-belanja text-center rounded overflow-hidden">
                            <div class="responsive-belanja" style="background-image: url(../dashboard_admin/assets/img/harga_kerajinan/<?php echo $data['foto'] ?>);"></div>
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
            </div>
        </div>
    </div>
    <!-- Belanja End -->

        

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
                    <img class="navbar-logo" src="../img/hanami_green1.png" alt="" style="width: 60px;">
                    <a href="../index.php" class="navbar-brand ms-4 ms-lg-0">
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
    <script src="../lib/wow/wow.min.js"></script>
    <script src="../lib/easing/easing.min.js"></script>
    <script src="../lib/waypoints/waypoints.min.js"></script>
    <script src="../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../lib/parallax/parallax.min.js"></script>

    <!-- Template Javascript -->
    <script src="../js/main.js"></script>
</body>

</html>