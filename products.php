<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Products | Stopla</title>
    <meta name="description" content="buy farm fresh fruits and vegetables and get them delivered to your door step">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Red+Hat+Display&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/main.css">
    <link rel="stylesheet" href="public/css/libraries/aos.css">
</head>

<body>
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


    <div class="pg__product">
        <div id="nav-padding-offset">
            <div class="nav-container" id="navbar">
                <nav id="nav">
                    <a href="index.php" class="logoname">STOPLA</a>
                    <ul class="list" id="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php" class="active-link"> Buy / Sell</a></li>
                        <li><a href="https://store.shoopy.in/stopla--the-farmers-brand"> Shop</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php">Contact</a></li>
                    </ul>
                    <a class="btn btn--rev" href="contact.php">Contac Us</a>
                    <button class="menu" id="menu"
                        onclick="this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                        aria-label="Main Menu">
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

        <div class="container">
            <div class="pg__product__links">
                <div class="pg__product__links__customer">
                    <img src="public/assets/images/services/cart.png" alt="">
                    <p class="title">Retailers/Businesses</p>
                    <p class="heading">Reach us to buy the fresh and healthy products.</p>
                    <div class="btn--now"> 
                        <a class="btn btn--products" href="buy.php">Contact now</a>
                        <a class="btn btn--products" href="https://wa.me/message/JL63W3XAKNL7O1">Whatsapp now</a>
                    </div>
                </div>
                <div class="pg__product__links__farmer">
                    <img src="public/assets/images/services/farmer.png" alt="">
                    <p class="title">Farmers</p>
                    <p class="heading">Contact us to sell your harvest easily.</p>
                    <div class="btn--now">
                        <a class="btn btn--products" href="sell.php">Contact now</a>
                        <a class="btn btn--products" href="https://wa.me/message/JL63W3XAKNL7O1">Whatsapp now</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <hr>

    <?php include("contact-bar.php")?>
    <hr>
    <?php include("footer.php")?>



    <script src="public/js/vendor/aos.js"></script>
    <script>
        AOS.init({
            once: "true",
            offset: 100,
        });
    </script>
    <script src="public/js/app.js"></script>
</body>

</html>