@extends('Frontend.Layouts.master')
@section('body')
<div id="example"></div>
		<!-- This is main section -->
		<section id="main">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9">
						<div class="carousel-layer">
							<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
								<div class="carousel-indicators">
								  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
								  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></button>
								  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></button>
								</div>
								<div class="carousel-inner">
								  <div class="carousel-item active">
									<img src="{{ asset('/Frontend/assets') }}/img/caro1.jpg" class="d-block w-100" alt="caro1">
								  </div>
								  <div class="carousel-item">
									<img src="{{ asset('/Frontend/assets') }}/img/caro2.jpg" class="d-block w-100" alt="caro2">
								  </div>
								  <div class="carousel-item">
									<img src="{{ asset('/Frontend/assets') }}/img/caro3.jpg" class="d-block w-100" alt="caro3">
								  </div>
								</div>
								<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
								  <span class="visually-hidden">Previous</span>
								</button>
								<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
								  <span class="visually-hidden">Next</span>
								</button>
							</div>
						</div>
					</div>
					<div class="col-lg-3">
						<div class="compare">
							<h5>Compare Products</h5>
							<p class="text-muted">Choose two product to compare</p>
							<div style="position: relative;">
								<input type="text" class="form-control" placeholder="Search item">
								<i class="fas fa-search" style="position: absolute; right: 6%; bottom: 25%; color: rgb(175, 171, 171);"></i>
							</div>
							<br>
							<div style="position: relative;">
								<input type="text" class="form-control" placeholder="Search item">
								<i class="fas fa-search" style="position: absolute; right: 6%; bottom: 25%; color: rgb(175, 171, 171);"></i>
							</div>
							<button class="w-100 btn btn-block compare-btn my-3">Compare</button>
						</div>
						<div class="compare-img d-none d-md-block">
							<img src="{{ asset('/Frontend/assets') }}/img/caro-side.jpg" alt="#">
						</div>
					</div>
				</div>
				<div class="container-fluid">
					<marquee width="100%" direction="left" height="30%">
						২৫ জুন রোজ শুক্রবার, স্টার টেক এর গাজীপুর, চট্টগ্রাম, খুলনা ও রংপুর শাখা ব্যতীত সকল শাখার কার্যক্রম সকাল ১০টা থেকে রাত ৮টা পর্যন্ত চালু থাকবে। গাজীপুর শাখা লকডাউনের জন্য সন্ধ্যা ৬টা পর্যন্ত খোলা থাকবে। এছাড়াও আমাদের ৬৪ জেলায় অনলাইন ডেলিভারি চালু আছে।
					</marquee>
				</div>
				<div class="container text-center main-pro-title">
					<h2>Featured Products</h2>
					<p class="text-muted">Check & Get Your Desired Product !</p>
				</div>
				<section id="all-product">
					<div class="container-fluid px-0 mx-0">
						<div class="row justify-content-center">
							<div class="col-12 col-md-4 col-lg-2">
								<div class="product-cart">
									<div class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro1.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Lenovo Yoga 9 14ITL5 Core i7 11th Gen 14” Full HD Touch Laptop</a></p>
										<h6 class="price">199,000৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro2.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Dell Vostro 14 3400 Core i3 11th Gen 14" HD Laptop</a></p>
										<h6 class="price">48,000৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro3.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Lenovo ThinkPad E14 Core i5 10th Gen 4GB RAM 14" FHD Laptop</a></p>
										<h6 class="price">66,000৳</h6>
									</div>
								</div>
							</div>	
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro4.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Dell XPS 17 9700 Core i7 10th Gen 17" FHD Laptop</a></p>
										<h6 class="price">250,000৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro5.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Lenovo IdeaPad Slim 3 Ryzen 3 3250U 15.6" FHD Laptopp</a></p>
										<h6 class="price">43,000৳</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro6.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">EVOLUR LD001 Gaming Chair Red</a></p>
										<h6 class="price">13,500৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro7.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Rolling Laptop Table with Wheels Adjustable Folding Computer Desk Stand</a></p>
										<h6 class="price">3,200৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro8.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Xiaomi Haylou Solar LS05-1 Smart Watch Black</a></p>
										<h6 class="price">2,399৳</h6>
									</div>
								</div>
							</div>	
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro9.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Xiaomi MI 4A Horizon Edition 43" Full HD Smart TV</a></p>
										<h6 class="price">3,500৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro10.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Gamdias Mars M1 Mid Tower Gaming Casing</a></p>
										<h6 class="price">5,000৳</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro11.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">ASRock B560M Steel Legend 10th and 11th Gen Micro ATX Motherboard</a></p>
										<h6 class="price">14,500৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro12.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">TEAM NIGHT HAWK UD 8GB 3200MHz RGB DDR4 Desktop RAM</a></p>
										<h6 class="price">5,900৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro13.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Antec NX220 Mid Tower Gaming Case</a></p>
										<h6 class="price">3,550৳</h6>
									</div>
								</div>
							</div>	
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro14.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Razer Viper Ambidextrous Gaming Mouse</a></p>
										<h6 class="price">6,000৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro15.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">MaxGreen MG-LI-EAM-1200VA Offline UPS (Metal)</a></p>
										<h6 class="price">5,100৳</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="row justify-content-center mt-4">
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro16.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">XFX SPEEDSTER QICK 319 RX 6700 XT 12GB DDR6 Graphics Card</a></p>
										<h6 class="price">80,000৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro17.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">ZADAK TWSS3 512GB SATA3 2.5" SSD</a></p>
										<h6 class="price">7,600৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro18.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">InFocus IN112xv SVGA 3800 LUMENS Projector</a></p>
										<h6 class="price">32,000৳</h6>
									</div>
								</div>
							</div>	
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro19.jpg" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">MaxGreen 5908BG Casing</a></p>
										<h6 class="price">2,600৳</h6>
									</div>
								</div>
							</div>
							<div class="col-12 col-md-6 col-lg-2">
								<div class="product-cart">
									<div  class="img-div">
										<img src="{{ asset('/Frontend/assets') }}/img/fpro20.png" alt="lenovo">
									</div>
									<div class="p-detaits mt-2">
										<p><a href="{{ url('product') }}">Gamdias Kratos E1-500 500 Watt RGB Power Supply</a></p>
										<h6 class="price">3,900৳</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="container text-center d-none d-lg-block main-pro-title">
					<h2>Featured Category</h2>
					<p class="text-muted">Get Your Desired Product from Featured Category!</p>
				</div>
				<div class="container-fluid d-none d-lg-block">
					<div class="row justify-content-center feature-category">
						<div class="col-1 cat-icon"><i class="fas fa-desktop"></i></div>
						<div class="col-1 cat-icon"><a href="category.html"><i class="fas fa-laptop"></i></a></div>
						<div class="col-1 cat-icon"><i class="fas fa-microchip"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-tv"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-eye-slash"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-tablet-alt"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-paperclip"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-camera"></i></div>
					</div>
					<div class="row justify-content-center feature-category">
						<div class="col-1 cat-name"><p>Desktop</p></div>
						<div class="col-1 cat-name"><p>All Laptop</p></div>
						<div class="col-1 cat-name"><p>Componenet</p></div>
						<div class="col-1 cat-name"><p>Monitor</p></div>
						<div class="col-1 cat-name"><p>security</p></div>
						<div class="col-1 cat-name"><p>Tablet</p></div>
						<div class="col-1 cat-name"><p>Office Equipment</p></div>
						<div class="col-1 cat-name"><p>Camera</p></div>
					</div>
				</div>
				<div class="container-fluid d-none d-lg-block">
					<div class="row justify-content-center feature-category">
						<div class="col-1 cat-icon"><i class="fas fa-network-wired"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-mouse"></i></div>
						<div class="col-1 cat-icon"><i class="fab fa-windows"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-server"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-satellite-dish"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-fan"></i></div>
						<div class="col-1 cat-icon"><i class="fab fa-creative-commons-sampling"></i></div>
						<div class="col-1 cat-icon"><i class="fas fa-gamepad"></i></div>
					</div>
					<div class="row justify-content-center feature-category">
						<div class="col-1 cat-name"><p>Networking</p></div>
						<div class="col-1 cat-name"><p>Accessories</p></div>
						<div class="col-1 cat-name"><p>Software</p></div>
						<div class="col-1 cat-name"><p>Server & Storage</p></div>
						<div class="col-1 cat-name"><p>TV</p></div>
						<div class="col-1 cat-name"><p>AC</p></div>
						<div class="col-1 cat-name"><p>Gadget</p></div>
						<div class="col-1 cat-name"><p>Gaming</p></div>
					</div>
				</div>
				<div class="container-fluid" style="font-family: 'Trebuchet MS', sans-serif; margin: 25px 0;">
					<h5>Leading Retail Computer Shop in Bangladesh</h5>
					<small>Technology has touched each part of our lives and made living serene than ever before. We provide one-stop solutions for all IT items; your bliss is just a click away. Star Tech trusts in quality client services over the number of clients. We believe the promotion of a brand is done successfully by the words of our clients, not through banners or posters. For that, we ensure the best possible services & facilities at our disposal to make sure our customers are satisfied & have a remarkable experience with us.  

					Our expert team of researchers investigates the current economic situation & provide the best reasonable prices for Laptops, Desktop PC, Graphics Card, Processor, Monitor, Headphone, Cameras, CC TV, Speaker, office equipment, software, Gaming Chair & all other gaming components. To ensure nothing is beyond a customer's reach.Even if a client is not ready to purchase, they can still visit Star tech's official website for the latest news on IT information to do their due research on updated products. Selecting which components will be best suited for their needs & estimated price. Star Tech is the leading IT shop in Bangladesh both in the retail & e-commerce sectors therefore we always try to provide our customers with not only products & services but also knowledge & information via our website.
					With a mission to assemble an advanced tomorrow, we acknowledge ever-changing demands & customer preferences & try to move forward with the fast-growing technology to meet present-day life needs.</small>
				</div>
			</div>
		</section>
@endsection