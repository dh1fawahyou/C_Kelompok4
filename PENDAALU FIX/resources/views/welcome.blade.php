<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaalu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('lanpages/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lanpages/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('lanpages/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lanpages/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lanpages/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('lanpages/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('lanpages/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('lanpages/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('lanpages/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('lanpages/css/style.css') }}">
  </head>
  <body>
	<!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="{{ url('/') }}}}"><span><img src="lanpages/images/mainlogo.png" alt=""></span></a>
	      <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
          <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-success">Log in</a>
                    @endauth
                </div>
            @endif
	    </div>
	  </nav>
    <!-- Home -->
    <section class="hero-wrap js-fullheight" style="background-image: url('lanpages/images/mts.png');" data-section="home">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate mt-5" data-scrollax=" properties: { translateY: '70%' }">
            <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Selamat Datang di Pendaalu</h1>
            <p class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Pendaalu merupakan website pendataan alumni untuk Siswa lulusan MTs At - Taqwa Bondowoso. Silahkan login untuk memulai!</p>
          </div>
        </div>
      </div>
    </section>
		
    <!-- Fitur -->
		<section class="ftco-section ftco-services ftco-no-pt">
      <div class="container">
        <div class="row services-section">
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="icon-folder-open"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Kelola Data</h3>
                <p>Pengelolaan data alumni yang meliputi penginputan dan pengeditan.</p>
              </div>
            </div>      
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="icon-search"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Search Data</h3>
                <p>Search data alumni untuk memudahkan Admin dalam mencari data.</p>
              </div>
            </div>    
          </div>
          <div class="col-md-4 d-flex align-self-stretch ftco-animate">
            <div class="media block-6 services text-center d-block">
              <div class="icon"><span class="icon-file"></span></div>
              <div class="media-body">
                <h3 class="heading mb-3">Cetak Laporan</h3>
                <p>Cetak laporan untuk Admin menampilkan rekap data alumnni dalam bentuk file.</p>
              </div>
            </div>      
          </div>
        </div>
      </div>
    </section>

    

    

    

    <!-- Berita -->
    <section class="testimony-section" data-section="testimony">
      <div class="container">
        <div class="row ftco-animate justify-content-center">
        	<div class="col-md-12 d-flex align-items-center">
        		<div class="carousel-testimony owl-carousel">
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(lanpages/images/mts2.png)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			                <p class="name">Jacob Bolton</p>
			                <span class="position">CEO, Founder</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        		<div class="item">
	        			<div class="testimony-wrap d-flex align-items-stretch">
		              <div class="user-img d-flex align-self-stretch" style="background-image: url(lanpages/images/mts3.png)">
		              </div>
		              <div class="text d-flex align-items-center">
		              	<div>
			              	<div class="icon-quote">
			              		<span class="icon-quote-left"></span>
			              	</div>
			                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
			                <p class="name">Jacob Bolton</p>
			                <span class="position">CEO, Founder</span>
		                </div>
		              </div>
		            </div>
	        		</div>
	        	</div>
        	</div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <section class="ftco-section contact-section" data-section="contact">
      <div class="container">
        <div class="row d-flex contact-info">
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-map-signs"></span>
          		</div>
          		<h3 class="mb-4">Alamat</h3>
	            <p>Jl. HOS. Cokroaminoto Kademangan Bondowoso</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-phone2"></span>
          		</div>
          		<h3 class="mb-4">Phone</h3>
	            <p>+62 (0332) 429905</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-paper-plane"></span>
          		</div>
          		<h3 class="mb-4">Email</h3>
	            <p>mtsattaqwabws@gmail.com</p>
	          </div>
          </div>
          <div class="col-md-6 col-lg-3 d-flex">
          	<div class="align-self-stretch box p-4 text-center">
          		<div class="icon d-flex align-items-center justify-content-center">
          			<span class="icon-globe"></span>
          		</div>
          		<h3 class="mb-4">Website</h3>
	            <p><a href="#">-</a></p>
	          </div>
          </div>
        </div>
      </div>
    </section>
		
<!-- Footer 2 -->
    <footer class="ftco-footer ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">MTs At - Taqwa</h2>
              <p>Mengembangkan kultur keteladanan dalam kehidupan masyarakat atas dasar nilai-nilai islam ala ahlusunnah wal jama’ah dan budaya luhur bangsa Indonesia.</p>
              <p>Menyelenggarakan pendidikan dan pembelajaran yang unggul untuk menghasilkan lulusan yang bermutu</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Politeknik Negeri Jember</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 878 6494 5868</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">andiwn121@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('lanpages/js/jquery.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/popper.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/aos.js') }}"></script>
  <script src="{{ asset('lanpages/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('lanpages/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('lanpages/js/google-map.js') }}"></script>
  <script src="{{ asset('lanpages/js/main.js') }}"></script>
    
  </body>
</html>