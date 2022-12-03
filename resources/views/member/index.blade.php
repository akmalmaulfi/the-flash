<!DOCTYPE html>
<html class="no-js">

<head>

	<title>Member | The Flash | E-sport Team</title>

	<!-- Smartphone Responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{!! asset('img/logo/logo.png') !!}">
	<!-- Fontawesome Icon -->
	<link rel="stylesheet" href="{!! asset('library/themefisher-font/style.css') !!}">
	<!-- bootstrap -->
	<link rel="stylesheet" href="{!! asset('library/bootstrap/dist/css/bootstrap.min.css') !!}">
	<!-- Animate css -->
	<link rel="stylesheet" href="{!! asset('library/animate-css/animate.css') !!}">
	<!-- Magnific popup css -->
	<link rel="stylesheet" href="{!! asset('library/magnific-popup/dist/magnific-popup.css') !!}">
	<!-- Slick Carousel -->
	<link rel="stylesheet" href="{!! asset('library/slick-carousel/slick/slick.css') !!}">
	<link rel="stylesheet" href="{!! asset('library/slick-carousel/slick/slick-theme.css') !!}">
	<!-- css -->
	<link rel="stylesheet" href="{!! asset('css/landing/style.css') !!}">


</head>

<body id="home" data-spy="scroll" data-target=".navbar" data-offset="50">

	<!-- Loading -->
	<div id="preloader">
		<div class="preloader">
			<div class="sk-cube-grid">
				<div class="sk-cube sk-cube1"></div>
				<div class="sk-cube sk-cube2"></div>
				<div class="sk-cube sk-cube3"></div>
				<div class="sk-cube sk-cube4"></div>
				<div class="sk-cube sk-cube5"></div>
				<div class="sk-cube sk-cube6"></div>
				<div class="sk-cube sk-cube7"></div>
				<div class="sk-cube sk-cube8"></div>
				<div class="sk-cube sk-cube9"></div>
			</div>
		</div>
	</div>
	<!-- //Loading -->

	<!-- Welcome -->
	<section class="hero-area">
		<div class="block">

			<div>
					<img src="img/logo/logo.png" style=" width: auto; height: 150px;" alt="The Flash Logo"/>
			</div>

			<h1>The Flash Team</h1>
			<p>TheFlash eSport is an Indonesian Leading professional gaming organisation.<br>
				</p>
			<a href="{{ url('/logout') }}" class="btn btn-transparent">Sign out</a>
		</div>
	</section>
	<!-- //Welcome -->

	<!-- Fixed Navbar -->
	<header id="navigation" class="navbar navigation">
		<div class="container">
			<div class="navbar-header">

				<!-- Navbar button -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- //Navbar button -->

				<!-- logo -->
				<a class="navbar-brand logo" href="#home">
					<img src="img/logo/logo2.png" style="width: auto; height: 50px;" alt="The Flash Logo"/>
				</a>
				<!-- //logo -->
			</div>

			<!-- main nav -->
			<nav class="collapse navbar-collapse navbar-right" role="Navigation">
				<ul id="nav" class="nav navbar-nav navigation-menu">
					<li><a data-scroll href="#home">Home</a></li>
					<li><a href="{{ url('/listmember')}}">Member List</a></li>
					<li><a data-scroll href="#about">About Us</a></li>
					<li><a data-scroll href="#merchandise">Merchandise</a></li>
					<li><a data-scroll href="#team">Team</a></li>
					<li><a data-scroll href="#contact-us">Contact</a></li>
				</ul>
			</nav>
			<!-- //main nav -->

		</div>
	</header>
	<!-- //Fixed Navbar -->

	<section class="bg-one about section" id="about">
		<div class="container">
			<div class="row">

				<!-- title -->
				<div class="title text-center wow fadeIn" data-wow-duration="1500ms">
					<h2>About <span class="color">Us</span> </h2>
					<div class="border"></div>
				</div>
				<!-- //title -->

				<!-- About -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms">
					<div class="block">
						<div class="icon-box">
							<i class="tf-ion-trophy"></i>
						</div>
						<div class="content text-center">
							<h3 class="ddd">We're Champions</h3>
							<p>TheFlash has won several matches at the national level as well as won first
							   place in the international PUBG Mobile in Brazil</p>
						</div>
					</div>
				</div>
				<!-- //About -->

				<!-- About -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="250ms">
					<div class="block">
						<div class="icon-box">
							<i class="tf-strategy"></i>
						</div>
						<div class="content text-center">
							<h3>We're Professional</h3>
							<p>TheFlash is a team Pro player that is experienced and has many official
								awards and certificate and the talent of the players.</p>
						</div>
					</div>
				</div>
				<!-- //About -->

				<!-- About -->
				<div class="col-md-4 text-center wow fadeInUp" data-wow-duration="500ms" data-wow-delay="500ms">
					<div class="block kill-margin-bottom">
						<div class="icon-box">
							<i class="tf-ion-flash"></i>
						</div>
						<div class="content text-center">
							<h3>We're Genius</h3>
							<p>always use strategy in attacking and defending as well as excellent teamwork,
							   so as to be able to make opponents become overwhelmed.</p>
						</div>
					</div>
				</div>
				<!-- //About -->

			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</section>
	<!-- //section -->

	<section class="portfolio section" id="merchandise">
		<div class="container">

			<!-- row -->
			<div class="row ">
				<div class="col-lg-12">

					<!-- title -->
					<div class="title text-center">
						<h2>Our <span class="color">Merch</span></h2>
						<div class="border"></div>
					</div>
					<!-- //title -->

				</div>
			</div>
			<!-- //row -->

			<div class="row">
				<div class="col-md-12">
					<div class="portfolio-filter">
						<button type="button" data-filter="all">All</button>
						<button type="button" data-filter=".T-Shirt">T-shirt</button>
						<button type="button" data-filter=".Hoodie">Hoodie</button>
						<button type="button" data-filter=".Accesories">Accessories</button>
					</div>
				</div>
			</div>
			<div class="row portfolio-items-wrapper">

                    @foreach($merchans as $merch)
                    <div class="mix col-md-4 {{ $merch->kategori }}">
                        <div class="portfolio-block">
                            <img class="img-responsive" src="{{ asset('file/merch/'.$merch->foto) }}" alt="" width="200" height="200">
                            <div class="caption">

                                <a class="search-icon image-popup" data-effect="mfp-with-zoom"
                                    href="{{ asset('file/merch/'.$merch->foto) }}" data-lightbox="image-1">
                                    <i class="tf-ion-search"></i>
                                </a>
                                <h4><a href="">{{ $merch->kategori }}</a></h4>
                                <p>
                                    Beli Produk Keche ini hanya di Flash Merch. <br>
                                   <b>Nama Produk :</b> {{ $merch->nama_barang }}<br>
                                   <b>Harga :</b> {{ number_format( $merch->harga ) }} <br>
                                   <b>Stok :</b> {{ $merch->stok }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


			</div>

		</div>
		<!-- //container -->
	</section>
	<!-- //section -->

	<section id="counter" class="parallax-section bg-1 section overly">
		<div class="container">
			<div class="row">

				<!-- sponsor -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms">
					<div class="counters-item">
						<img src="img/sponsor/bagus.png" alt="sponsor">
					</div>
				</div>
				<!-- //sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="200ms">
					<div class="counters-item">
						<img src="img/sponsor/Gopay.png" alt="sponsor">
					</div>
				</div>
				<!-- //sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="400ms">
					<div class="counters-item">
						<img src="img/sponsor/gamely.png" alt="sponsor">
					</div>
				</div>
				<!-- //sponsor -->

				<!-- sponsor -->
				<div class="col-md-3 col-sm-6 col-xs-12 text-center wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="600ms">
					<div class="counters-item kill-margin-bottom">
						<img src="img/sponsor/Mayasi.png" alt="sponsor">
					</div>
				</div>
				<!-- //sponsor -->

			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</section>
	<!-- //section -->

	<section id="team" class="section">
		<div class="container">
			<div class="row">

				<!-- title -->
				<div class="title text-center wow fadeInUp" data-wow-duration="500ms">
					<h2>Our <span class="color">Team</span></h2>
					<div class="border"></div>
				</div>
				<!-- //title -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12  wow fadeInDown" data-wow-duration="500ms">
					<div class="team-member">
						<div class="member-photo">

							<!-- member photo -->
							<img class="img-responsive" src="img/team/team1.jpg" alt="Meghna">
							<!-- //member photo -->

							<!-- member social -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- //member social -->
						</div>

						<!-- member info -->
						<div class="member-meta">
							<h4>Edi Markujang</h4>
							<span>Suport</span>
							<p>Markujang Aka JinxProUjang merupakan seorang Support dari divisi PUBG Mobile.
							   JinxProUjang adalah salah satu penyebab kunci kesuksesan kemenangan Bigetron di berbagai kompetisi PUBG Mobile.
							   Hal ini dikarenakan kemampuannya dalam mengatur strategi serta menganalisa pergerakan lawan</p>
						</div>
						<!-- //member info -->
					</div>
				</div>
				<!-- //team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="200ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="img/team/team2.jpg" alt="Meghna">
							<!-- //member photo -->

							<!-- member social -->
							<div class="mask">
								<ul class="list-inline">
									<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
									<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- //member social -->
						</div>

						<!-- member info -->
						<div class="member-meta">
							<h4>Dio Subagyo</h4>
							<span>Rusher</span>
							<p>merupakan salah satu talenta muda lainnya dan berbakat di game Free Fire. Menginjak usia yang 14 tahun, Kam berhasil menunjukkan taring kepada lawannya.
								Salah satu julukan Kam adalah "Anak Ajaib" hal ini dikarenakan aksi Kam ketika meratakan satu squad dengan seorang diri.
							</p>
						</div>
						<!-- //member info -->

					</div>
				</div>
				<!-- //team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="400ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="img/team/team3.jpg" alt="Meghna">
							<!-- //member photo -->

							<!-- member social -->
							<div class="mask">
								<ul class="list-inline">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- //member social -->
						</div>

						<!-- member info -->
						<div class="member-meta">
							<h4>Fadjar Shidik</h4>
							<span>Flanker</span>
							<p>merupakan Kapten sekaligus shoutcaller dari tim Bigetron divisi Free Fire. Sebagai kapten, Fadjar memiliki jiwa leadership untuk mengatur dan memberikan strategi bagi rekan-rekannya.
							   Prestasi terbaik Fadjar adalah Juara I di Hortus Battle Series #1 serta pernah mendapat gelar Terminator dengan total 28 kills.</p>
						</div>
						<!-- //member info -->

					</div>
				</div>
				<!-- //team member -->

				<!-- team member -->
				<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInDown" data-wow-duration="500ms"
					data-wow-delay="600ms">
					<div class="team-member">
						<div class="member-photo">
							<!-- member photo -->
							<img class="img-responsive" src="img/team/team4.jpg" alt="Meghna">
							<!-- //member photo -->

							<!-- member social -->
							<div class="mask">
								<ul class="list-inline">
										<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
										<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
								</ul>
							</div>
							<!-- //member social -->
						</div>

						<!-- member info-->
						<div class="member-meta">
							<h4>Jennyper Putri</h4>
							<span>Rusher</span>
							<p>merupakan member terakhir TheFlash eSports dari divisi PUBG Mobile.
							   Jenny menjadi serpihan yang melengkapi squad TheFlash untuk menjadi tim terbaik di PUBG Mobile Indonesia
							   sebagai Rusher Jenny Menjadi pendobrak sekaligus ujung tombak untuk menyerang pertahanan lawan.
							</p>
						</div>
						<!-- //member info -->

					</div>
				</div>
				<!-- //team member -->

			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</section>
	<!-- //section -->

	<section id="testimonial" class="testimonial overly section bg-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">

					<div id="testimonials" class="wow fadeInUp" data-wow-duration="500ms" data-wow-delay="100ms">

						<div class="item text-center">

							<!-- leader photo -->
							<div class="client-thumb">
								<img src="img/team/leader.jpg" class="img-responsive" alt="Leader">
							</div>
							<!-- //leader photo -->

							<!-- leader info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Raka</h3>
									<span>Birthday : Jan 05, 2001</span>
								</div>
								<div class="client-comment">
									<p>merupakan seorang Flanker sekaligus Leader dari divisi Free Fire.
									   Raka adalah salah satu penyebab kunci kesuksesan kemenangan The Flash di berbagai kompetisi Free Fire.
									   Hal ini dikarenakan kemampuannya dalam mengatur strategi serta menganalisa pergerakan lawan dengan sangat baik.Selain kepintarannya tersebut,
									   kelebihan Raka lainnya yang tidak dimiliki oleh pro player lainnya adalah kemampuannya dalam memprediksi zona selanjutnya akan menutup.</p>
								</div>
							</div>
							<!-- //leader info -->
						</div>

						<div class="item text-center">

							<!-- colead photo -->
							<div class="client-thumb">
								<img src="img/team/colead.jpg" class="img-responsive" alt="Co Leader">
							</div>
							<!-- //colead photo -->

							<!-- colead info -->
							<div class="client-info">
								<div class="client-meta">
									<h3>Budi Markonak</h3>
									<span>Birthday : Dec 26, 1999</span>
								</div>
								<div class="client-comment">
									<p>merupakan seorang Rusher sekaligus Co Leader dari divisi Free Fire.
										Budi adalah salah satu penyebab kunci kesuksesan kemenangan The Flash di berbagai kompetisi Free Fire.
										Hal ini dikarenakan kemampuannya dalam mengatur strategi serta menganalisa pergerakan lawan dengan sangat baik.
									</p>
								</div>
							</div>
							<!-- //colead info -->
						</div>

					</div>
				</div>
			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</section>
	<!-- //Section -->


	<section id="contact-us" class="contact-us section-bg">
		<div class="container">
			<div class="row">

				<!-- title -->
				<div class="title text-center wow fadeIn" data-wow-duration="500ms">
					<h2>More <span class="color">Info</span></h2>
					<div class="border"></div>
				</div>
				<!-- //title -->

				<!-- Contact info -->
				<div class="contact-info col-md-6 wow fadeInUp" data-wow-duration="500ms">
					<h3>Contact Details</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam, vero, provident, eum eligendi
						blanditiis ex explicabo vitae nostrum facilis asperiores dolorem illo officiis ratione vel
						fugiat dicta laboriosam labore adipisci.</p>
					<div class="contact-details">
						<div class="con-info clearfix">
							<i class="tf-map-pin"></i>
							<span>Jl. Rawa Bebek rt 2 rw 18</span>
						</div>

						<div class="con-info clearfix">
							<i class="tf-ion-ios-telephone-outline"></i>
							<span>Phone: +62 8787 - 9981 - 7102</span>
						</div>

						<div class="con-info clearfix">
							<i class="tf-ion-ios-email-outline"></i>
							<span>Email: theflash@gmail.com</span>
						</div>

						<div class="con-info clearfix">
							<span style="color: #ff5275;">
								want to scream or turney please fill out the form on the side<br>
								<i class="tf-ion-arrow-right-a"></i>
							</span>
						</div>

					</div>
				</div>
				<!-- //Contact info -->

				<!-- Form -->
				<div class="contact-form col-md-6 wow fadeInUp" data-wow-duration="500ms" data-wow-delay="300ms">
					<form id="contact-form" method="post" action="sendmail.php" role="form">

						<div class="form-group">
							<input type="text" placeholder="Your Team" class="form-control" name="name" id="name">
						</div>

						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>

						<div class="form-group">
							<input type="date" class="form-control" name="subject" id="subject">
						</div>

						<div class="form-group">
							<textarea rows="6" placeholder="Description" class="form-control" name="description"
								id="description"></textarea>
						</div>

						<div id="mail-success" class="success">
							Thank you. Your email has been sent :)
						</div>

						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>

						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Send">
						</div>

					</form>
				</div>
				<!-- //Form -->

			</div>
			<!-- //row -->
		</div>
		<!-- //container -->

	</section>
	<!-- //section -->


	<footer id="footer" class="bg-one">
		<div class="container">
			<div class="row wow fadeInUp" data-wow-duration="500ms">
				<div class="col-lg-12">

					<!-- Footer Social -->
					<div class="social-icon">
						<ul class="list-inline">
							<li><a href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-google-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-youtube"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-instagram"></i></a></li>
						</ul>
					</div>
					<!-- //Footer Social -->

					<!-- copyright -->
					<div class="copyright text-center">
						<a href="index.html">
							<img src="img/logo/logo.png" style=" width: auto; height: 60px;" alt="The Flash Logo"/>
						</a>
						<br />

						<p>Design And Developed by <a href="http://www.theflash.com"> The Flash Team.</a>
							<br>
							Copyright
							&copy; <script>
								document.write(new Date().getFullYear())
							</script>. All Rights Reserved.
						</p>
					</div>
					<!-- //copyright -->

				</div>
			</div>
			<!-- //row -->
		</div>
		<!-- //container -->
	</footer>
	<!-- //footer -->

	<!-- Main jQuery -->
	<script type="text/javascript" src="{!! asset('library/jquery/dist/jquery.min.js') !!}"></script>
	<!-- Bootstrap 3.1 -->
	<script type="text/javascript" src="{!! asset('library/bootstrap/dist/js/bootstrap.min.js') !!}"></script>
	<!-- Slick Carousel -->
	<script type="text/javascript" src="{!! asset('library/slick-carousel/slick/slick.min.js') !!}"></script>
	<!-- Portfolio Filtering -->
	<script type="text/javascript" src="{!! asset('library/mixitup/dist/mixitup.min.js') !!}"></script>
	<!-- Smooth Scroll -->
	<script type="text/javascript" src="{!! asset('library/smooth-scroll/dist/js/smooth-scroll.min.js') !!}"></script>
	<!-- Magnific popup -->
	<script type="text/javascript" src="{!! asset('library/magnific-popup/dist/jquery.magnific-popup.min.js') !!}"></script>
	<!-- Sticky Nav -->
	<script type="text/javascript" src="{!! asset('library/Sticky/jquery.sticky.js') !!}"></script>
	<!-- Number Counter Script -->
	<script type="text/javascript" src="{!! asset('library/count-to/jquery.countTo.js') !!}"></script>
	<!-- wow.min Script -->
	<script type="text/javascript" src="{!! asset('library/wow/dist/wow.min.js') !!}"></script>
	<!-- Custom js -->
	<script type="text/javascript" src="{!! asset('js/script.js') !!}"></script>

</body>

</html>
