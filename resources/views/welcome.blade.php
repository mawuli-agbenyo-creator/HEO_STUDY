<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>HEO</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
    
	<!-- boxicons link--->
	<link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <!-- remix icons link--->
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.0.0/fonts/remixicon.css"
    rel="stylesheet"/>
    

    <!-- google fonts link--->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@100;200;300;400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,800;1,600;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
        <!-- or -->
        <link rel="stylesheet"
        href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>
<body>

	<header>
		<a href="{{asset('img/HEO TRANS9.png')}}" class="logo">HEO </a>

		<ul class="navmenu">
			<li><a href="/">Welcome</a></li>
			<li><a href="{{route('home')}}">Home</a></li>
			<li><a href="{{route('admission')}}">Admission</a></li>
			<li><a href="{{route('about')}}">About</a></li>
            <li><a href="{{route('career')}}">Career</a></li>
			<li><a href="{{route('contact')}}">Contact</a></li>
		</ul>

		<div class="nav-right">
			<a href="/Admission.html" class="nav-btn">Join us</a>
			<div class="bx bx-menu" id="menu-icon"></div>
		</div>
	</header>

	<section class="hero">
		<div class="hero-text">
			<span>Heo</span>
			<h5>WELCOME</h5>
			<h1>Help Elevate Each Other</h1>
			<p>Empowering Youth, Transforming and Building a Brighter Future, One Byte at a Time.</p>
			<div class="hero-btn">
				<a href="{{route('home')}}">Go To Home<i class="ri-arrow-right-line"></i></a>
				<a href="{{route('admission')}}" class="btn2">Register Now<i class="ri-play-fill"></i></a>
			</div>
		</div>

		<div class="hero-img">
			<img src="{{asset('img/next5trans.png')}}">
		</div>
	</section>

	<div class="images-box">
		<div class="box">
			<div class="box-img">
				<img src="{{asset('img/career5.jpeg')}}">
			</div>

			<div class="box-text">
				<h5>Explore careers</h5>
				<a href="{{route('career')}}">
					
					<i class="ri-star-fill"></i>
				</a>
			</div>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="{{asset('img/career3.jpeg')}}">
			</div>

			<div class="box-text">
				<h5>Administration</h5>
				<a href="{{route('admission')}}">
					
					<i class="ri-star-fill"></i>
				</a>
			</div>
		</div>

		<div class="box">
			<div class="box-img">
				<img src="{{asset('img/career4.jpeg')}}">
			</div>

			<div class="box-text">
				<h5>Explore</h5>
				<a href="{{route('about')}}">
					
					<i class="ri-star-fill"></i>
				</a>
			</div>
		</div>

	</div>

	<div class="social-icons">
		<a href="#"><i class='bx bxl-html5'></i></a>
		<a href="#"><i class='bx bxl-css3'></i></a>
        <a href="#"><i class='bx bxl-javascript'></i></a>
        <a href="#"><i class='bx bxl-java' ></i></a>
        <a href="#"><i class='bx bxl-react' ></i></a>
        <a href="#"><i class='bx bxl-nodejs' ></i></a>
        <a href="#"><i class='bx bxl-python' ></i></a>
		<a href="#"><i class='bx bxl-tailwind-css' ></i></a>
	</div>

    <div class="scroll-btn">
		<a href="#">
			<i class="ri-arrow-down-double-line"></i>
			Scroll Down
		</a>
	</div>

    
    
    




    
        
   
    






    

    





	

	<script src="https://unpkg.com/scrollreveal"></script>

	<!-- custom js file--->
	<script src="{{asset('js/main.js')}}"></script>
      

</body>

  
</html>