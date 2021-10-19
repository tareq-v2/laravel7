<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Admin</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	{{-- <link rel="stylesheet" href="https://fonts.maateen.me/adorsho-lipi/font.css"> --}}
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.6.22/css/uikit.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('Backend') }}/assets/css/responsive.css">
	<link rel="stylesheet" type="text/css" href="{{ asset('Backend') }}/assets/css/admin-style.css">
</head>
<style>
	*{
		font-family: 'Playfair Display', serif !important;
	}
</style>
<body>
    <div class="container-fluid">
		<div class="row">
			<div class="col-2 px-0">
				<div class="top-nav-logo">
					<a href="{{ url('/admin') }}">
						<img class="img-fluid" style="z-index: 9; height: 65px;" src="{{ asset('Backend') }}/assets/img/logo.png" alt="#">
					</a>
				</div>
			</div>
			<div class="col-10 px-0">
				<div class="top-nav">
					<div>
						<h6>Welcome to <span style="color: rgba(252, 40, 2, 0.767); font-size: 16px;">startech admin panel</span></h6>
					</div>
					<div id="logout-section" onclick="logoutDiv()">
						<div id="profile-pic">
							<div id="active"></div>
							<img src="https://scontent.fdac24-1.fna.fbcdn.net/v/t1.6435-9/89026459_2017960218349464_1632933994569924608_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=4XXWG8TPaU8AX89Pff0&_nc_ht=scontent.fdac24-1.fna&oh=ca1954269beb417c1068a3d0350ecea2&oe=616D79A3" alt="#">
						</div>
						<span style="margin: 20px 0 0 15px; color: green; font-size: 13px;">SBIT</span><span style="color: rgb(243, 52, 52); margin: 15px 0 0 0;">&nbsp;&#11167;</span>
					</div>
					<div id="login-card">
						<div id="testId">
							<a onclick="closeCard()"><i class="fas fa-times"></i></a>
						</div>
						<div>
							<img src="https://scontent.fdac24-1.fna.fbcdn.net/v/t1.6435-9/89026459_2017960218349464_1632933994569924608_n.jpg?_nc_cat=106&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=4XXWG8TPaU8AX89Pff0&_nc_ht=scontent.fdac24-1.fna&oh=ca1954269beb417c1068a3d0350ecea2&oe=616D79A3" alt="#">
							<div class="inner-text">
								<p style="color: green; font-size: 22px;">SBIT</p>
									<small class="text-muted mb-2">trqhossain@gmail.com</small>
								<br>
								<br>
								<span>
									<i class="fas fa-power-off" style="color: rgb(54, 211, 223); margin-left: 3px;"></i>&nbsp;<a href="{{ route('login') }}"><span style="color: red;">Sign Out</span></a>
								</span>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-2 px-0">
				<div class="accordion accordion-flush" id="accordionFlushExample">
					<div class="accordion-item">
					  <h4 class="accordion-header" id="flush-headingOne">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
							<i class="fab fa-expeditedssl" style="width: 25px; font-size: 22px;"></i>&nbsp;Administrator
						</button>
					  </h4>
					  <div id="flush-collapseOne" class="accordion-collapse show" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<ul>
								
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="admininfo.html" target="framebody">Admin Information</a></li>
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="createadmin.html" target="framebody">Create Admin</a></li>
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="viewadmin.html" target="framebody">View Admin</a></li>
								<li><i class="fas fa-user-shield"></i><a href="#">&nbsp;&nbsp;<a href="createadmin.html" target="framebody">Remove Admin</a></li>
							</ul>
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="flush-headingTwo">
						<button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<i class="fas fa-bars" style="width: 25px; font-size: 22px;"></i>&nbsp;Main Menu
						</button>
					  </h2>
					  <div id="flush-collapseTwo" class="accordion-collapse show" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<div class="accordion-body" style="background: #6D747A;">
								<ul>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/addProduct') }}" target="framebody">Add product</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/addItems') }}" target="framebody">Add Items</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/item-info') }}" target="framebody">View Items Resource</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/item-info') }}/create" target="framebody">Create Items Resource</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/addCategory') }}" target="framebody">Add Category</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addsubcategory.html" target="framebody">Add Sub-Category</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addslider.html" target="framebody">Add Slider</a></li>
									<li><i class="fab fa-product-hunt"></i><a href="#">&nbsp;&nbsp;<a href="addsideimg.html" target="framebody">Add Side Image</a></li>
								</ul>
							</div>
						</div>
					  </div>
					</div>
					<div class="accordion-item">
					  <h2 class="accordion-header" id="flush-headingThree">
						<button class="accordion-button xxx collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<i class="fas fa-cogs" style="width: 25px; font-size: 22px;"></i>&nbsp;&nbsp;Setting
						</button>
					  </h2>
					  <div id="flush-collapseThree" class="accordion-collapse show" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<ul>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="addprivacy.html" target="framebody">Privacy policy</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="{{ url('/addAbout') }}" target="framebody">Add About Us Texts</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="addtermsandcondition.html" target="framebody">Terms and conditions</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="faq.html" target="framebody">Frequently Ask Question</a></li>
								<li><i class="fas fa-cogs"></i><a href="#">&nbsp;&nbsp;<a href="career.html" target="framebody">Careers</a></li>
							</ul>
						</div>
					  </div>
					</div>
				  </div>
			</div>
			<div class="col-10 px-0">
