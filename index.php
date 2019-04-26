<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/logo-uin.png">
    <title>E-Service - Fakultas Dakwah & Komunikasi</title>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/datepicker3.css" rel="stylesheet">
    <!-- <link href="assets/css/styles.css" rel="stylesheet"> -->
    
    <!--Custom Font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <style>
      body {
        font: 400 15px Lato, sans-serif;
        line-height: 1.8;
        color: #818181;
      }
      h2 {
        font-size: 24px;
        text-transform: uppercase;
        color: #303030;
        font-weight: 40;
        margin-bottom: 30px;
      }
      h4 {
        font-size: 19px;
        line-height: 1.375em;
        color: #303030;
        font-weight: 400;
        margin-bottom: 30px;
      }  
      .jumbotron {
        background-color: #fff;
        color: #000;
        padding: 100px 25px;
        font-family: Montserrat, sans-serif;
      }
      .container-fluid {
        padding: 60px 50px;
      }
      .bg-grey {
        background-color: #f6f6f6;
      }
      .logo-small {
        color: #f4511e;
        font-size: 50px;
      }
      .logo {
        color: #f4511e;
        font-size: 200px;
      }
      .thumbnail {
        padding: 0 0 15px 0;
        border: none;
        border-radius: 0;
      }
      .thumbnail img {
        width: 100%;
        height: 100%;
        margin-bottom: 10px;
      }
      .carousel-control.right, .carousel-control.left {
        background-image: none;
        color: #f4511e;
      }
      .carousel-indicators li {
        border-color: #f4511e;
      }
      .carousel-indicators li.active {
        background-color: #f4511e;
      }
      .item h4 {
        font-size: 19px;
        line-height: 1.375em;
        font-weight: 400;
        font-style: italic;
        margin: 70px 0;
      }
      .item span {
        font-style: normal;
      }
      .panel {
        border: 1px solid #f4511e; 
        border-radius:0 !important;
        transition: box-shadow 0.5s;
      }
      .panel:hover {
        box-shadow: 5px 0px 40px rgba(0,0,0, .2);
      }
      .panel-footer .btn:hover {
        border: 1px solid #f4511e;
        background-color: #fff !important;
        color: #f4511e;
      }
      .panel-heading {
        color: #fff !important;
        background-color: #f4511e !important;
        padding: 25px;
        border-bottom: 1px solid transparent;
        border-top-left-radius: 0px;
        border-top-right-radius: 0px;
        border-bottom-left-radius: 0px;
        border-bottom-right-radius: 0px;
      }
      .panel-footer {
        background-color: white !important;
      }
      .panel-footer h3 {
        font-size: 32px;
      }
      .panel-footer h4 {
        color: #aaa;
        font-size: 14px;
      }
      .panel-footer .btn {
        margin: 15px 0;
        background-color: #f4511e;
        color: #fff;
      }
      .navbar {
        margin-bottom: 0;
        background-color: #000;
        z-index: 9999;
        border: 0;
        font-size: 13px !important;
        line-height: 1.42857143 !important;
        letter-spacing: 1px;
        border-radius: 0;
        font-family: Montserrat, sans-serif;
      }
      .navbar li a, .navbar  {
        color: #30a5ff !important;
      }
      .navbar-nav li a:hover, .navbar-nav li.active a {
        color: #fff !important;
        background-color: #000 !important;
      }
      .navbar-default .navbar-toggle {
        border-color: transparent;
        color: #fff !important;
      }
      footer .glyphicon {
        font-size: 20px;
        margin-bottom: 20px;
        color: #f4511e;
      }
      .slideanim {visibility:hidden;}
      .slide {
        animation-name: slide;
        -webkit-animation-name: slide;
        animation-duration: 1s;
        -webkit-animation-duration: 1s;
        visibility: visible;
      }

    .navbar-header .navbar-brand {
      color: #fff;
      font-size: 20px;
      text-transform: uppercase;
      font-weight: 650;
      height: 60px;
      padding-top: 18px; }

    .navbar-header .navbar-brand span {
      color: #30a5ff; }

    .logo-name .logo img{
        width: 220px;
    }
      @keyframes slide {
        0% {
          opacity: 0;
          transform: translateY(70%);
        } 
        100% {
          opacity: 1;
          transform: translateY(0%);
        }
      }
      @-webkit-keyframes slide {
        0% {
          opacity: 0;
          -webkit-transform: translateY(70%);
        } 
        100% {
          opacity: 1;
          -webkit-transform: translateY(0%);
        }
      }
      @media screen and (max-width: 768px) {
        .col-sm-4 {
          text-align: center;
          margin: 25px 0;
        }
        .btn-lg {
          width: 100%;
          margin-bottom: 35px;
        }
      }
      @media screen and (max-width: 480px) {
        .logo {
          font-size: 150px;
        }
      }
      </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>                        
                </button>
                <a class="navbar-brand" href="#"><span>E-Service</span>FDK-UIN SGD</a>
            </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
                <!-- <li><a href="#profil">Profil</a></li> -->                
                <li class="parent">
                    <a data-toggle="collapse" href="#sub-item-1">Pengajuan Surat<span data-toggle="collapse" href="#sub-item-1" class="caret"></span></a>
                        <ul class="dropdown-menu" id="sub-item-1">
                            <li><a class="" href="script/mhs/form_sak.php">Aktif Kuliah</a></li>
                            <li><a class="" href="script/mhs/form_skkb.php">Keterangan Kelakuan Baik</a></li>
                            <li><a class="" href="script/mhs/form_spmk.php">Surat Pernyataan Masih Kuliah</a></li>
                            <li><a class="" href="script/mhs/form_observasi.php">Surat Observasi</a></li>
                            <li><a class="" href="script/mhs/form_skripsi.php">Bimbingan Skripsi</a></li>
                            <li><a class="" href="script/mhs/form_penelitian.php">Izin Penelitian</a></li>
                            <li><a class="" href="script/mhs/form_pkl.php">Praktek Kerja Lapangan</a></li>
                            <li><a class="" href="script/mhs/form_skl.php">Surat Keterangan Lulus</a></li>
                            <li><a class="" href="script/mhs/form_legalisir.php">Legalisir Ijazah/Transkrip Nilai</a></li>
                            <li><a class="" href="script/mhs/form_ijazah.php">Pengambilan Ijazah</a></li>
                            <li><a class="" href="script/mhs/form_lainnya.php">Surat Keterangan Lainnya</a></li>
                        </ul>
                </li>
                <li><a href="#about">Tentang Kami</a></li> 
                <li><a href="#kontak">Kontak</a></li> 
            </ul>            
        </div>
      </div>
    </nav>

    <div class="jumbotron text-center">
        <div class="logo-name">
            <div class="logo"><a href="index.php" title=""><img src="img/logo_uin.png"
                                                                             alt="logo"></a></div>
        </div>
        <h1>FAKULTAS DAKWAH DAN KOMUNIKASI</h1> 
        <p>UNIVERSITAS ISLAM NEGERI SUNAN GUNUNG DJATI BANDUNG</p> 
        <form>
        <div class="input-group">
            <input type="email" class="form-control" size="50" placeholder="Search" required>
            <div class="input-group-btn">
                <button type="button" class="btn btn-danger">Search</button>
            </div>
        </div>
      </form>
    </div>

    <!-- Container (Contact Section) -->
    <div id="contact" class="container-fluid bg-grey">
      <h2 class="text-center">CONTACT</h2>
      <div class="row">
        <div class="col-sm-5">
          <p>Contact us and we'll get back to you within 24 hours.</p>
          <p><span class="glyphicon glyphicon-map-marker"></span> JL. A. H Nasution No.105, Cipadung, Cibiru, Bandung, Jawa Barat 40614</p>
          <p><span class="glyphicon glyphicon-phone"></span> +62 1515151515</p>
          <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
        </div>
        <div class="col-sm-7 slideanim">
          <div class="row">
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
          </div>
          <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Image of location/map -->
    <img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">

    <footer class="container-fluid text-center">
      <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a>
      <p>E-Service FDK-UIN SGD <a href="#" title="Visit Website FDK-UIN SGD">www.websitefdkuinsgd.com</a></p>
    </footer>

     <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/chart-data.js"></script>
        <script src="assets/js/easypiechart.js"></script>
        <script src="assets/js/easypiechart-data.js"></script>
        <script src="assets/js/bootstrap-datepicker.js"></script>
        <script src="assets/js/custom.js"></script>
    <script>
    $(document).ready(function(){
      // Add smooth scrolling to all links in navbar + footer link
      $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 900, function(){
       
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
      
      $(window).scroll(function() {
        $(".slideanim").each(function(){
          var pos = $(this).offset().top;

          var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
              $(this).addClass("slide");
            }
        });
      });
    })
    </script>

</body>
</html>