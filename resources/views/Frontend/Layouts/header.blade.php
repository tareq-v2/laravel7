<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Startech</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('/Frontend/assets') }}/img/logo.png">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/slick.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/webfonts/all.min.css">
	<link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/fontawesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('/Frontend/assets') }}/css/style.css">
</head>
<body>
	<div class="container-fluid p-0">
		<div class="myCart">
			<div id="compare-cart">
				<div class="header">
					<h4>Compare product</h4>
				<a onclick="closeCart()"><i class="fas fa-times"></i></a>
				</div>
			</div>
			<a onclick="compareCart()">
				<div class="box1">
					<div class="box1-layer">
						<span>0</span>
						<i class="fas fa-user"></i><p>Compare</p>
					</div>
				</div>
			</a>
			<a type="button" data-bs-toggle="offcanvas" data-bs-target="{{ url('/category') }}offcanvasRight">
				<div class="box2">
					<div class="box2-layer">
						<span>0</span>
						<i class="fas fa-shopping-cart"></i><p>My Cart</p>
					</div>
				</div>
			</a>
			<div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
				<div class="offcanvas-header">
					<h5>My Cart</h5>
					<button type="button" class="btn" style="font-size: 60%; color: {{ url('/category') }}fff;" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fas fa-times"></i></button>
				</div>
				<div class="offcanvas-body" style="position: relative;">
					<div class="promo-code" style="position: absolute; bottom: 0; margin: 0; width: 399px; display: flex;">
						<form>
							<div class="d-flex">
									<input type="text" class="form-control" name="" placeholder="Coupon code">
									<span class="input-group-append">
										<button class="btn" style="background: orange; color: {{ url('/category') }}fff;">Apply</button>
									</span>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- This is header -->
		<header>
			<div class="header-top">
				<div class="container-fluid">
					<div class="row d-block d-lg-none responsive-header" uk-sticky="animation: uk-animation-slide-top">
						<div class="col-4" style="position: relative;">
							<a data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" ><i class="fas fa-bars"></i></a>
							<div class="offcanvas offcanvas-start" style="position: absolute; top: 90px;" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
								<div class="offcanvas-body">
									<div class="accordion accordion-" id="accordionFlushExample">
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-headingOne">
											<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{ url('/category') }}flush-collapseOne">
												Desktop
											</button>
											</h2>
											<div id="flush-collapseOne" class="accordion-collapse collapse show" aria-labelledby="flush-headingOne" data-bs-parent="{{ url('/category') }}accordionFlushExample">
											<div class="accordion-body">
												<ul class="navbar-nav">
													<li class="nav-item dropdown-mobile">
														<a href="{{ url('/category') }}" class="nav-link dropbtn-mobile">&nbsp;&nbsp;Brand pc</a>
														<ul class="navbar-nav dropdown-content-mobile">
															<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">RYZEN PC</a></li>
															<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gaming PC</a></li>
														</ul>
													</li>
													<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Special pc</a></li>
													<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Gaming pc</a></li>
													<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Star pc</a></li>
												</ul>
											</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-heading2">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{ url('/category') }}flush-collapse2">
												Laptop
												</button>
											</h2>
											<div id="flush-collapse2" class="accordion-collapse collapse show" aria-labelledby="flush-heading2" data-bs-parent="{{ url('/category') }}accordionFlushExample">
												<div class="accordion-body">
													<ul class="navbar-nav">
														<li class="nav-item"><a href="category.html" class="nav-link">&nbsp;&nbsp;All Laptop</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Gaming Laptop</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Premium ultrabook</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Laptop Bag</a></li>
													</ul>
												</div>
											</div>
										</div>
										<div class="accordion-item">
											<h2 class="accordion-header" id="flush-heading3">
												<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="{{ url('/category') }}flush-collapse3">
												Component
												</button>
											</h2>
											<div id="flush-collapse3" class="accordion-collapse collapse" aria-labelledby="flush-heading3" data-bs-parent="{{ url('/category') }}accordionFlushExample">
												<div class="accordion-body">
													<ul class="navbar-nav">
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;SSD</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Ram(Desktop)</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Ram(Laptop)</a></li>
														<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">&nbsp;&nbsp;Motherboard</a></li>
													</ul>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-4">
							<img src="{{ asset('/Frontend/assets') }}/img/logo.png" alt="logo">
						</div>
						<div class="col-4">
							<i class="fas fa-shopping-cart" style="position: absolute; left: 90%; top: 36px;"></i>
							<i class="fas fa-search" onmouseover="mySearch()" style="position: absolute; left: 80%; top: 36px;"></i>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-2 d-none d-lg-block" style="position: relative;">
							<a href="{{ url('/') }}">
								<img src="{{ asset('/Frontend/assets') }}/img/logo.png" alt="logo" class="p-3 mylogo">
							</a>
						</div>
						<div class="col-lg-4  d-none d-lg-block">
							<div class="search">
							  <input type="text" class="form-control d-none d-lg-block" style="margin-top: 25px;" placeholder="Search">
							  <i class="fas fa-search"></i>
							</div>
						</div>
						<div class="col-lg-5 d-flex">
							<div class="d-flex">
								<span class="d-none d-lg-block">
									<i class="fas fa-gift"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Offers</p>
									<a href="{{ url('/latestOffer') }}"><small class="text-muted" style="font-size: 13px;">Latest Offers</small></a>
								</span>
							</div>
							<div class="d-flex">
								<span class="d-none d-lg-block" style="position: relative;">
									<i class="fas fa-bolt bolt-icon" style="position: absolute; font-size: 120%; color: {{ url('/category') }}EF4A23;"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Thunders</p>
									<a href="{{ url('/category') }}"><small class="text-muted" style="margin-top: -15px; font-size: 13px;">Thunder Deals</small></a>
								</span>
							</div>
							<div class="d-flex">
								<span class="d-none d-lg-block">
									<i class="fas fa-user"></i>
								</span>
								<span class="d-none d-lg-block">
									<p>Account</p>
									<small class="text-muted" style="margin-top: -15px; font-size: 13px;">
										<a href="{{ url('/userRegister') }}">Register</a> or 
										<a href="{{ url('/userLogin') }}">Login</a>
									</small>
								</span>
							</div>
							<div id="pc-builder" class="d-none d-lg-block">
								Pc Builder
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-middle" uk-sticky="animation: uk-animation-slide-top">
				<nav class="d-none d-lg-block">
					<ul class="navbar-nav">
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Desktop</a>
							<ul class="dropdown-content">
								<li class="nav-item dropdown1">
									<a href="{{ url('/category') }}" class="nav-link dropbtn1">Special Pc</a>
									<ul class="dropdown-content1">
										<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">1</a></li>
										<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">2</a></li>
										<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">3</a></li>
									</ul>
								</li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Star Pc</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gaming Pc</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Brand Pc</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}"z>Laptop</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="category.html" class="nav-link">All Laptop</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gaming Laptop</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Laptop Bag</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Laptop Accessories</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Component</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">SSD</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">RAM (Laptop)</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">RAM (Desktop)</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Motherboard</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Monitor</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Asus</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">LG</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Dell</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gigabyte</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">UPS</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Online ups</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Offline ups</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Tablet</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Apple</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Lenovo</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Huawei</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Microsoft</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Office Equipment</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Printer</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Projector</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Scanner</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">IPS</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Camera</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">DSLR Camera</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Digital Camera</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Video Camera</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Camera Accessories</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Security</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">CC Camera</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">IP Camera</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Door Lock</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Networking</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Router</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Network Switch</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">LAN Card</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Accessories</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Keyboard</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Mouse</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Mouse Pad</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Headphone</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Software</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Operating System</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Office Application</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Antivirus</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Server & Storage</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Workstation</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Server</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Storage</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">TV</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Sony</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Samsung</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">LG</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">AC</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">General</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Midea</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gree</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Gadget</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Smart Watch</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Drone</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">TV Box</a></li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropbtn" href="{{ url('/category') }}">Gaming</a>
							<ul class="dropdown-content">
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gaming Chair</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Keyboard</a></li>
								<li class="nav-item"><a href="{{ url('/category') }}" class="nav-link">Gaming Pad</a></li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>
			<div class="container-fluid">
				<input type="text" id="hidden-search-icon" class="form-control d-lg-none" placeholder="Search" style="display: none;">
			</div>
		</header>