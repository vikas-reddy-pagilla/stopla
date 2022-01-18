<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Welcome | STOPLA:THE FARMERS BRAND</title>
	<meta name="description"
		content="stopla delivers farm-fresh fruits and vegetables from the farm to your doorstep at great prices. We connect farmers to Retailers/Restaurants/hotels and food processing units.">
	<meta name="keywords"
		content="Stopla,The farmers brand,Buy directly from farmers,Fresh fruits and vegetables,Farm-fresh produce,Farm to business,Supply chain problem,price transparency,stopla mini store,stopla franchise,stopla store,lower prices,great quality,locally grown,support local farmers,agriculture automation,supply chain automation,fast delivery,farm to home">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Lato&family=Red+Hat+Display&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="public/css/main.css">
	<link rel="stylesheet" href="public/css/libraries/aos.css">
	<link rel="stylesheet" href="public/css/libraries/swiper.css" />
	<link rel="stylesheet" href="public/css/libraries/button.css" />
</head>

<body>
<div>
	<!-- Messenger Chat plugin Code -->
	<div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat plugin code -->
      <div class="fb-customerchat"
        attribution="biz_inbox"
        page_id="100810425353673">
      </div>
</div>
	<main>
		<!-- Header Starts -->
		<header class="header" id="header">
			<div id="nav-padding-offset">
				<div class="nav-container" id="navbar">
					<nav id="nav">
						<a href="index.php" class="logoname">STOPLA</a>
						<ul class="list" id="list">
							<li><a href="index.php" class="active-link">Home</a></li>
							<li><a href="about.php">About</a></li>
							<li><a href="products.php"> Buy / Sell</a></li>
							<li><a href="Shop1.php"> Shop</a></li>
							<li><a href="blog.php">Blog</a></li>
							<li><a href="contact.php">Contact</a></li>
						</ul>
						<a class="btn btn--rev" href="contact.php">Contac Us</a>
						<button class="menu" id="menu"
							onclick="this.setAttribute('aria-expanded', this.classList.contains('opened'))" aria-label="Main Menu">
							<svg width="50" height="50" viewBox="0 0 100 100">
								<path class="line line1"
									d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
								<path class="line line2" d="M 20,50 H 80" />
								<path class="line line3"
									d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
							</svg>
						</button>
					</nav>
				</div>
			</div>
			<hr id="nav-hr">
			<section class="hero">
				<div class="container">
					<div class="hero__flex">
						<div class="hero__text">
							<h1 class="heading">Fresh fruits and veggies <br>from farm to doorstep</h1>
							<p class="text">The farmers brand delivers the fresh fruits and vegetables to your home directly
								from farmer at best prices.</p>
							<div class="header__buttons">
								<a class="btn btn--rev button" href="https://store.shoopy.in/stopla--the-farmers-brand">Buy Now</a>
							</div>
						</div>
						<div class="hero__img">
							<img loading="lazy" src="public/assets/images/hero_img.png" alt="human shoppping cart store">
						</div>
					</div>
				</div>
			</section>
		</header>
		<!-- Header Ends -->



		




		<!-- Banner Starts -->
		<section class="banner">
			<div class="container">
				<div class="banner__flex" data-aos="fade-up" data-aos="fade-up" data-aos-duration="700">
					<h2>
						Delivering Healthy Food <br> to you and your family.
					</h2>
					<div>
						<a class="btn btn--rev" href="about.php">Learn More</a>
					</div>
				</div>
			</div>
		</section>
		<!-- Banner Ends -->






		
		<hr>



		<?php include("contact-bar.php")?>



	</main>
	<hr>


	<?php include("footer.php") ?>



	<script src="public/js/vendor/aos.js"></script>
	<script>
		AOS.init({
			once: "true",
			offset: 100,
		});
	</script>
	<script src="public/js/vendor/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper('.swiper-container', {
			effect: 'coverflow',
			grabCursor: true,
			centeredSlides: false,
			slidesPerView: 'auto',
			coverflowEffect: {
				rotate: 0,
				stretch: 0,
				depth: 0,
				modifier: 1,
				slideShadows: true,
			},
			loop: true,
			autoplay: true,
		});
	</script>
	<script src="public/js/app.js"></script>
</body>

</html>