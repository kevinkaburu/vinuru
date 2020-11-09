<!DOCTYPE html>
<html lang="en">
<head>
	<!-- set the encoding of your site -->
	<meta charset="utf-8">
	<!-- set the viewport width and initial-scale on mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
	<title>{{ config('app.name', 'Vinuru Travel') }}</title>
	<!-- include the site stylesheet -->
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900,900italic%7cMontserrat:400,700%7cOxygen:400,300,700' rel='stylesheet' type='text/css'>
	<!-- include the site stylesheet -->
         <link href="{{ asset('css/bootstrap.css') }}" rel="stylesheet">

  <!-- include the site stylesheet -->
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/icon-fonts.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/main.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
</head>
<body>
	<!-- main container of all the page elements -->
	<div id="wrapper">
		<!-- Page Loader -->
    <div id="pre-loader" class="loader-container">
      <div class="loader">
        <img src="{{ asset('images/svg/rings.svg') }}" alt="loader">
      </div>
    </div>
		<!-- W1 start here -->
		<div class="w1">
			<!-- mt header style4 start here -->
			<header id="mt-header" class="style4">
				<!-- mt bottom bar start here -->
				<div class="mt-bottom-bar">
					<div class="container-fluid">
						<div class="row">
							<div class="col-xs-12">
								<!-- mt logo start here -->
								<div class="mt-logo"><a href="#"><img src="{{ asset('images/mt-logo.png') }}" alt="schon"></a></div>
								<!-- mt icon list start here -->
								<ul class="mt-icon-list">
									
									
									<li class="drop">
										<a href="#" class="cart-opener">
											<span class="icon-handbag"></span>
											<span class="num">3</span>
										</a>
                                                                            <!-- mt drop start here -->
										<div class="mt-drop">
											<!-- mt drop sub start here -->
											<div class="mt-drop-sub">
												<!-- mt side widget start here -->
												<div class="mt-side-widget">
													<!-- cart row start here -->
													<div class="cart-row">
														<a href="#" class="img"><img src="http://placehold.it/75x75" alt="image" class="img-responsive"></a>
														<div class="mt-h">
															<span class="mt-h-title"><a href="#">Maasai Mara 3 nights</a></span>
															<span class="price"><i class="fa fa-eur" aria-hidden="true"></i> Ksh 45,000</span>
															<span class="mt-h-title">1:  Adult</span>
														</div>
														<a href="#" class="close fa fa-times"></a>
													</div><!-- cart row end here -->
													<!-- cart row start here -->
													
													
													<!-- cart row total start here -->
													<div class="cart-row-total">
														<span class="mt-total">Sub Total</span>
														<span class="mt-total-txt"><i class="fa fa-eur" aria-hidden="true"></i> Ksh 45,000</span>
													</div>
													<!-- cart row total end here -->
													<div class="cart-btn-row">
														<a href="#" class="btn-type3">CHECKOUT</a>
													</div>
												</div><!-- mt side widget end here -->
											</div>
											<!-- mt drop sub end here -->
										</div><!-- mt drop end here -->
										
										<span class="mt-mdropover"></span>
									</li>
									
								</ul><!-- mt icon list end here -->
								<!-- navigation start here -->
								<nav id="nav">
									<ul>
                                                                            <li><a href="">🔥Top Attractions near you </a></li>
                                                                            <li><a href="about-us.html">Safaris</a></li>
                                                                            
                                                                            
										<li>
											<a class="drop-link" href="homepage1.html">Country <i class="fa fa-angle-down hidden-lg hidden-md" aria-hidden="true"></i></a>
											<div class="s-drop">
												<ul>
													<li><a href="homepage1.html">Kenya</a></li>
													<li><a href="homepage2.html">Tanzania</a></li>
													<li><a href="homepage3.html">South Africa</a></li>
												</ul>
											</div>
										</li>
										<li class="drop">
											<a href="product-grid-view.html"> ❤️Destinations<i class="fa fa-angle-down" aria-hidden="true"></i></a>
											<!-- mt dropmenu start here -->
											<div class="mt-dropmenu text-left">
												<!-- mt frame start here -->
												<div class="mt-frame">
													<!-- mt f box start here -->
													<div class="mt-f-box">
														<!-- mt col3 start here -->
														<div class="mt-col-3">
															<div class="sub-dropcont">
																<strong class="title"><a href="product-grid-view.html" class="mt-subopener">East Africa</a></strong>
																<div class="sub-drop">
																	<ul>
																		<li><a href="product-grid-view.html">Maasai Mara</a></li>
																		<li><a href="product-list-view.html">Meru National Park</a></li>
																		<li><a href="product-detail.html">Mombasa</a></li>
																	</ul>
																</div>
															</div>
															<div class="sub-dropcont">
																<strong class="title"><a href="#" class="mt-subopener">UAE</a></strong>
																<div class="sub-drop">
																	<ul>
																		<li><a href="404-page.html">Dubai</a></li>
																		<li><a href="404-page2.html">Abu dhabi</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<!-- mt col3 end here -->

														<!-- mt col3 start here -->
														<div class="mt-col-3">
															<div class="sub-dropcont">
																<strong class="title"><a href="#" class="mt-subopener">Morroco</a></strong>
																<div class="sub-drop">
																	<ul>
																		<li><a href="about-us.html">Marrakesh</a></li>
                                                                                                                                                <li><a href="about-us.html">Casablanca</a></li>
																	</ul>
																</div>
															</div>
															
														</div>
														<!-- mt col3 end here -->

														<!-- mt col3 start here -->
														<div class="mt-col-3">
															<div class="sub-dropcont">
																<strong class="title"><a href="#" class="mt-subopener">South Africa</a></strong>
																<div class="sub-drop">
																	<ul>
																		<li><a href="#">Cape Town</a></li>
																		<li><a href="#">Kruger National Park</a></li>
																		<li><a href="#">Johannesburg</a></li>
																	</ul>
																</div>
															</div>
														</div>
														<!-- mt col3 end here -->
                                                                                                                <div class="mt-col-3">
															<div class="sub-dropcont">
																<strong class="title"><a href="#" class="mt-subopener">More</a></strong>
																<div class="sub-drop">
																	<ul>
																		<li><a href="#">Bangkok - Thailand</a></li>
																		<li><a href="#">Jerusalem - Israel</a></li>
																		<li><a href="#">Paris - France</a></li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
													<!-- mt f box end here -->
												</div>
												<!-- mt frame end here -->
											</div>
											<!-- mt dropmenu end here -->
											<span class="mt-mdropover"></span>
										</li>
										
										<li><a href="about-us.html">Tour Operator</a></li>
										
									</ul>
								</nav>
								<!-- mt icon list end here -->
							</div>
						</div>
					</div>
				</div>
				<!-- mt bottom bar end here -->
				<span class="mt-side-over"></span>
			</header><!-- mt header style4 end here -->
			
			<!-- mt main start here -->
			<main id="mt-main">
				
                             @yield('content')
                            
			</main><!-- mt main end here -->
			<!-- footer of the Page -->
			<footer id="mt-footer" class="style1 wow fadeInUp" data-wow-delay="0.4s">
				
				<!-- Footer Area of the Page -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<p>© <a href="index.html">Vinuru.</a> - All rights Reserved</p>
							</div>
							<div class="col-xs-12 col-sm-6 text-right">
								<div class="bank-card">
									<img src="images/bank-card.png" alt="bank-card">
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Footer Area of the Page end -->
			</footer><!-- footer of the Page end -->
		</div><!-- W1 end here -->
		<span id="back-top" class="fa fa-arrow-up"></span>
	</div>
	<!-- include jQuery -->
	<script src="{{ asset('js/jquery.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('js/plugins.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('js/jquery.main.js') }}"></script>
</body>
</html>
