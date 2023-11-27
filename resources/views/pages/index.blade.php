@extends('layouts.app')

@section('content')

    <!DOCTYPE html>
    <html>
    <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eventsnes hhhh</title>

	<link rel="stylesheet"  type="text/css" href="css/style.css">


    

	<link rel="stylesheet"
    href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

</head>
<body> 
	<header>
		<a href="#" class="logo">EVENTS<span>nes</span></a>
		<ul class="navbar">
			<li><a href="#">Home</a></li>
			<li><a href="/about">About</a></li>
			<li><a href="#">Contact</a></li>
			
		</ul>

		<div class="h-right">
			<a href="#"> Follow us</a>
			<a href="#"><i class="ri-instagram-line"></i></a>
			<a href="#"><i class="ri-facebook-line"></i></a>

		</div>
	</header>

	

	<section class="home">
		<div class="home-text">
			<h5>Creating </h5>
			<h1>Unforgettable <br> experiences </h1> 
			<p>Let's find an event that meets your interests in the territory of Mongolia</p>
			

			<a href="/login" class="btn">Log in</a>
		</div>
	</section>

	<section class ="feature">
		<div class="feature-content">
			<div class="row">
				<div class="row-img">
					<img src="images/mic.jpg">
				</div>
				<a href="/Enter" class="btn"><h4>Entertaiment</h4></a>
			</div>

			<div class="row">
				<div class="row-img">
					<img src="images/booo.jpg" >
				</div>
				<h4>Education</h4>
			</div>

			<div class="row">
				<div class="row-img">
					<img src="images/scc.jpg">
				</div>
				<h4>Science</h4>
			</div>

			<div class="row">
				<div class="row-img">
					<img src="images/he.jpg">
				</div>
				<h4>Social</h4>
			</div>

			<div class="row">
				<div class="row-img">
					<img src="images/wh.jpg">
				</div>
				<h4>Sport</h4>
			</div>

		</div>
	</section> 
	
	<section class="enjoy">
		<div class="enjoy-img">
			<img src="images/enjoy.jpg">
		</div>

		<div class="enjoy-text">
			<h5>Enjoy the moment</h5>
			<h2>YOLO! </h2>
			<p>Welcome to eventsnes, your ultimate guide to finding events in the beautiful territory of Mongolia. Whether you're looking for concerts, festivals, or conferences, our team is here to help you discover and attend the best events that match your interests. Click here to learn more about us and how we can assist you in planning your next adventure.</p>
		</div>

	</section>

	<section class="newslatter">
		<div class="newsletter-content">
			<div class="newsletter-text">
				<h2>Are you ready?</h2>
				<p>Create memories for yourself</p>
			</div>
		  

		 <form action="">
			<input type="email" placeholder="Enter your email..." required>
			<input type="submit" value="Get started" class="btn">
		 </form>
		</div>
	</section>

	<section class="footer">
		<div class="footer-box">
			<h3>Services</h3>
			<a href="#">Email Marketing</a>
			<a href="#">Company</a>
			<a href="#">Branding</a>
		</div>

		<div class="footer-box">
			<h3>About</h3>
			<a href="#">Our story</a>
			<a href="#">Team</a>
			<a href="#">Careers</a>
		</div>

		<div class="footer-box">
			<h3>Help</h3>
			<a href="#">FAQs</a>
			<a href="#">Contact us</a>
		</div>

		<div class="footer-box">
			<h3>Social</h3>
			<div class="social">
				<a href="#"><i class="ri-instagram-line"></i></a>
			    <a href="#"><i class="ri-facebook-line"></i></a>
			</div>
		</div>

	</section>

	<div class="copyright">
		<p>Copyright 2023 By Eventsnes</p>
	</div>






	<script src="js/script.js"></script>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>

</html>

@endsection
