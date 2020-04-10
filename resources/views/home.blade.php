<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>ClubStore.com</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="assets/image/supermarket.png">
	<!-- Web Font -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="{{url('/assets/library/fontawesome/css/all.min.css')}}">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{url('/assets/usertemplate/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{url('/assets/usertemplate/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{url('/assets/usertemplate/css/reset.css')}}">
	<link rel="stylesheet" href="{{url('/assets/usertemplate/style.css')}}">
    <link rel="stylesheet" href="{{url('/assets/usertemplate/css/responsive.css')}}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	
	
	<!-- Header -->
	<header class="header shop">
		<div class="middle-inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-2 col-md-2 col-12">
						<!-- Logo -->
						<div class="logo">
              			<a class="navbar-brand font-weight-bold" href="{{url('/')}}"><h6>ClubStore.com</h6></a>
						</div>
						<!--/ End Logo -->
						<!-- Search Form -->
						<div class="search-top">
							<div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
							<!-- Search Form -->
							<div class="search-top">
								<form class="search-form">
									<input type="text" placeholder="Search here..." name="search">
									<button value="search" type="submit"><i class="ti-search"></i></button>
								</form>
							</div>
							<!--/ End Search Form -->
						</div>
						<!--/ End Search Form -->
						<div class="mobile-nav"></div>
					</div>
					<div class="col-lg-8 col-md-7 col-12">
						<div class="search-bar-top">
							<div class="search-bar">
								
								<select>
									<option selected="selected">All Category</option>
									@foreach($kategori as $k)
									<option>{{$k->nama}}</option>
									@endforeach
								</select>
								<form>
									<input name="search" placeholder="Search Products Here....." type="search">
									<button class="btnn"><i class="ti-search"></i></button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 col-12">
						<div class="right-bar">
							<!-- Search Form -->
							<div class="sinlge-bar">
								<a href="#" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar">
								<a href="{{url('/login')}}" class="single-icon"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a>
							</div>
							<div class="sinlge-bar shopping">
								<a href="{{url('/keranjang')}}" class="single-icon"><i class="ti-bag"></i></a>
								<!-- Shopping Item
								<div class="shopping-item">
									<div class="dropdown-cart-header">
										<span>2 Items</span>
										<a href="#">View Cart</a>
									</div>
									<ul class="shopping-list">
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Ring</a></h4>
											<p class="quantity">1x - <span class="amount">$99.00</span></p>
										</li>
										<li>
											<a href="#" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
											<a class="cart-img" href="#"><img src="https://via.placeholder.com/70x70" alt="#"></a>
											<h4><a href="#">Woman Necklace</a></h4>
											<p class="quantity">1x - <span class="amount">$35.00</span></p>
										</li>
									</ul>
									<div class="bottom">
										<div class="total">
											<span>Total</span>
											<span class="total-amount">$134.00</span>
										</div>
										<a href="checkout.html" class="btn animate">Checkout</a>
									</div>
								</div>
								/ End Shopping Item -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!--/ End Header -->
	
	<!-- Carousel -->
	<div class="row" style="margin: 30px 10px 0 10px;">
		<div class="col-8">
		  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
			  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
			  <div class="carousel-item active">
				<img class="d-block w-100" src="{{url('/assets/image/dashboard/2.jpg')}}" alt="First slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="{{url('/assets/image/dashboard/3.jpg')}}" alt="Second slide">
			  </div>
			  <div class="carousel-item">
				<img class="d-block w-100" src="{{url('/assets/image/dashboard/2.jpg')}}" alt="Third slide">
			  </div>
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
		</div>
		<div class="col-4">
		  <div class="card text-white flex-md-row mb-4 shadow-sm h-md-150" style="background-color: rgb(216, 216, 216);">
			<div class="card-body d-flex flex-column align-items-start">
			   <strong class="d-inline-block mb-2 text-white">OREO RED VELVET 136gr</strong>
			   <p class="card-text mb-auto">Produk Terlaris></p>
			   <a class="btn btn-outline-light btn-sm" role="button" href="#">More Info <i class="fa fa-chevron-right "></i></a>
			</div>
			<img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{url('/assets/image/warehouse/stok_terlaris.jpg')}}" style="width: 150px; height: 150px;">
		 </div>
		  <div class="card text-white flex-md-row mb-4 shadow-sm h-md-150" style="background-color: rgb(216, 216, 216);" >
			<div class="card-body d-flex flex-column align-items-start">
			   <strong class="d-inline-block mb-2 text-white">OREO RED VELVET 136gr</strong>
			   <p class="card-text mb-auto">Produk Terlaris></p>
			   <a class="btn btn-outline-light btn-sm" role="button" href="#">More Info <i class="fa fa-chevron-right "></i></a>
			</div>
			<img class="card-img-right flex-auto d-none d-lg-block" alt="Thumbnail [200x250]" src="{{url('/assets/image/warehouse/stok_terlaris.jpg')}}" style="width: 150px; height: 150px;">
		 </div>
		</div>
	  </div>
	<!-- End Carousel -->
	
	<!-- Start Small Banner  -->
	<section class="small-banner section">
		<div class="container-fluid">
			<div class="row">
								<!-- Single Banner  -->
								<div class="col-lg-4 col-md-6 col-12">
									<div class="single-banner">
										<img src="{{url('/assets/image/dashboard/1.jpg')}}" alt="#">
										<div class="content">
											<p>Bag Collectons</p>
											<h3>Hush Puppies Green Sling Bag <br> 2020</h3>
											<a href="#">Shop Now</a>
										</div>
									</div>
								</div>
								<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{url('/assets/image/dashboard/4.jpg')}}" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Denim jean's <br> collection</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-4 col-12">
					<div class="single-banner tab-height">
						<img src="{{url('/assets/image/dashboard/5.jpg')}}" alt="#">
						<div class="content">
							<p>Flash Sale</p>
							<h3>Mid Season <br> Up to <span>40%</span> Off</h3>
							<a href="#">Discover Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Small Banner -->
	
	<!-- Start Trending -->
    <div class="product-area section">
            <div class="container">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h2>Trending Item</h2>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="product-info">
							<div class="tab-content" id="myTabContent">
								<!-- Start Single Tab -->
								<div class="tab-pane fade show active" id="man" role="tabpanel">
									<div class="tab-single">
										<div class="row">
											@foreach ($produk as $p)
											<div class="col-xl-3 col-lg-4 col-md-4 col-12">
												<div class="single-product">
													<div class="product-img">
														<a href="#">
															<img class="default-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
															<img class="hover-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
															<span class="out-of-stock">Hot</span>
														</a>
														<div class="button-head">
															<div class="product-action">
																<a title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
																<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
															</div>
															<div class="product-action-2">
																<a title="Add to cart" href="{{url('/keranjang')}}">Add to cart</a>
															</div>
														</div>
													</div>
													<div class="product-content">
														<h3><a href="product-details.html">{{$p->nama}}</a></h3>
														<div class="product-price">
															<span>Rp. {{$p->harga}}</span>
														</div>
													</div>
												</div>
											</div>
											@endforeach
										</div>
									</div>
								</div>
								<!--/ End Single Tab -->
							</div>
						</div>
					</div>
				</div>
            </div>
    </div>
	<!-- End Trending -->
	
	<!-- Start Midium Banner  -->
	<section class="midium-banner">
		<div class="container">
			<div class="row">
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{url('/assets/image/dashboard/6.jpg')}}" alt="#">
						<div class="content">
							<p>Man's Collectons</p>
							<h3>Man's items <br>Up to<span> 50%</span></h3>
							<a href="#">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
				<!-- Single Banner  -->
				<div class="col-lg-6 col-md-6 col-12">
					<div class="single-banner">
						<img src="{{url('/assets/image/dashboard/7.jpg')}}" alt="#">
						<div class="content">
							<p>shoes women</p>
							<h3>mid season <br> up to <span>70%</span></h3>
							<a href="#" class="btn">Shop Now</a>
						</div>
					</div>
				</div>
				<!-- /End Single Banner  -->
			</div>
		</div>
	</section>
	<!-- End Midium Banner -->
	
	<!-- Start Best Seller -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Best Seller</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach ($produk as $p)
						<div class="single-product">
							<div class="product-img">
								<a href="#">
									<img class="default-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
															<img class="hover-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{url('/keranjang')}}">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">{{$p->nama}}</a></h3>
								<div class="product-price">
									<span>{{$p->harga}}</span>
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
                    </div>
				</div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->

	<!-- Start Best Seller -->
	<div class="product-area most-popular section">
        <div class="container">
            <div class="row">
				<div class="col-12">
					<div class="section-title">
						<h2>Top Viewed</h2>
					</div>
				</div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel popular-slider">
						<!-- Start Single Product -->
						@foreach ($produk as $p)
						<div class="single-product">
							<div class="product-img">
								<a href="product-details.html">
									<img class="default-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
															<img class="hover-img" src="data:image/png;base64,{{ base64_encode($p->foto) }}" alt="Card image cap" style="width: 150px; height: 150px;">
								</a>
								<div class="button-head">
									<div class="product-action">
										<a data-toggle="modal" data-target="#exampleModal" title="Quick View" href="#"><i class=" ti-eye"></i><span>Quick Shop</span></a>
										<a title="Wishlist" href="#"><i class=" ti-heart "></i><span>Add to Wishlist</span></a>
									</div>
									<div class="product-action-2">
										<a title="Add to cart" href="{{url('/keranjang')}}">Add to cart</a>
									</div>
								</div>
							</div>
							<div class="product-content">
								<h3><a href="product-details.html">{{$p->nama}}</a></h3>
								<div class="product-price">
									<span>{{$p->harga}}</span>
								</div>
							</div>
						</div>
						@endforeach
						<!-- End Single Product -->
                    </div>
				</div>
            </div>
        </div>
    </div>
	<!-- End Most Popular Area -->
	
	<!-- Start Category List  -->
	<section class="shop-home-list section">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6 col-12">
					<div class="row">
						<div class="col-12">
							<div class="shop-section-title">
								<h1>Category</h1>
							</div>
						</div>
					</div>
					<!-- Start Single List  -->
					<div class="single-list">
						<div class="row">
							@foreach($kategori as $k)
							<div class="col-lg-6 col-md-6 col-12 no-padding">
								<div class="content">
									<h5 class="title"><a href="#">{{$k->nama}}</a></h5>
								</div>
							</div>
							@endforeach
						</div>
					</div>
					<!-- End Single List  -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Home List  -->
	
	<!-- Start Cowndown Area -->
	<section class="cown-down">
		<div class="section-inner ">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-6 col-12 padding-right">
						<div class="image">
							<img src="{{url('/assets/image/dashboard/8.jpg')}}" alt="#">
						</div>	
					</div>	
					<div class="col-lg-6 col-12 padding-left">
						<div class="content">
							<div class="heading-block">
								<p class="small-title">Deal of day</p>
								<h3 class="title">Beatutyful dress for women</h3>
								<p class="text">Suspendisse massa leo, vestibulum cursus nulla sit amet, frungilla placerat lorem. Cars fermentum, sapien. </p>
								<h1 class="price">$1200 <s>$1890</s></h1>
								<div class="coming-time">
									<div class="clearfix" data-countdown="2021/02/30"></div>
								</div>
							</div>
						</div>	
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- /End Cowndown Area -->
	
	<!-- Start Shop Services Area -->
	<section class="shop-services section home">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>Free Return</h4>
						<p>Within 30 days returns</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>Sucure Payment</h4>
						<p>100% secure payment</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>Best Peice</h4>
						<p>Guaranteed price</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Services Area -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- Footer Top -->
		<div class="footer-top section">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer about">
							<div class="logo">
								<h4>ClubStore.com</h4>
							</div>
							<p class="text">Praesent dapibus, neque id cursus ucibus, tortor neque egestas augue,  magna eros eu erat. Aliquam erat volutpat. Nam dui mi, tincidunt quis, accumsan porttitor, facilisis luctus, metus.</p>
							<p class="call">Got Question? Call us 24/7<span><a href="tel:123456789">+0123 456 789</a></span></p>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Information</h4>
							<ul>
								<li><a href="#">About Us</a></li>
								<li><a href="#">Faq</a></li>
								<li><a href="#">Terms & Conditions</a></li>
								<li><a href="#">Contact Us</a></li>
								<li><a href="#">Help</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-2 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer links">
							<h4>Customer Service</h4>
							<ul>
								<li><a href="#">Payment Methods</a></li>
								<li><a href="#">Money-back</a></li>
								<li><a href="#">Returns</a></li>
								<li><a href="#">Shipping</a></li>
								<li><a href="#">Privacy Policy</a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
					<div class="col-lg-3 col-md-6 col-12">
						<!-- Single Widget -->
						<div class="single-footer social">
							<h4>Get In Tuch</h4>
							<!-- Single Widget -->
							<div class="contact">
								<ul>
									<li>NO. 342 - London Oxford Street.</li>
									<li>012 United Kingdom.</li>
									<li>info@eshop.com</li>
									<li>+032 3456 7890</li>
								</ul>
							</div>
							<!-- End Single Widget -->
							<ul>
								<li><a href="#"><i class="ti-facebook"></i></a></li>
								<li><a href="#"><i class="ti-twitter"></i></a></li>
								<li><a href="#"><i class="ti-flickr"></i></a></li>
								<li><a href="#"><i class="ti-instagram"></i></a></li>
							</ul>
						</div>
						<!-- End Single Widget -->
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
						<div class="col-lg-6 col-12">
							<div class="right">
								<img src="{{url('/assets/usertemplate/images/Payments.png')}}" alt="#">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{url('/assets/usertemplate/js/jquery.min.js')}}"></script>
    <script src="{{url('/assets/usertemplate/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{url('/assets/usertemplate/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{url('/assets/usertemplate/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{url('/assets/usertemplate/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{url('/assets/usertemplate/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{url('/assets/usertemplate/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{url('/assets/usertemplate/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{url('/assets/usertemplate/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{url('/assets/usertemplate/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{url('/assets/usertemplate/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{url('/assets/usertemplate/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{url('/assets/usertemplate/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{url('/assets/usertemplate/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{url('/assets/usertemplate/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{url('/assets/usertemplate/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{url('/assets/usertemplate/js/active.js')}}"></script>
</body>
</html>