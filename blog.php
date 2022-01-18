<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Blog | STOPLA</title>
  <meta name="description" content="">
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
  <div class="pg__blog">
    <div id="nav-padding-offset">
      <div class="nav-container" id="navbar">
        <nav id="nav">
          <a href="index.php" class="logoname">STOPLA</a>
          <ul class="list" id="list">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="products.php"> Buy / Sell</a></li>
            <li><a href="https://store.shoopy.in/stopla--the-farmers-brand"> SHOP</a></li>
            <li><a href="blog.php" class="active-link">Blog</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
          <a class="btn btn--rev" href="contact.php">Contac Us</a>
          <button class="menu" id="menu" onclick="this.setAttribute('aria-expanded', this.classList.contains('opened'))"
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
      <div class="pg__blog__header">
        <h3 class="title">Our blog</h3>
        <h2 class="heading">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        </h2>
      </div>
    </div>
    <div class="pg__blog__nav">
      <div class="container">
        <ul>
          <li><a href="#">Featured</a></li>
          <li><a href="#">Machinery</a></li>
          <li><a href="#">Farming</a></li>
          <li><a href="#">Tech</a></li>
          <li><a href="#">Cultivation</a></li>
          <li><a href="#">Organic</a></li>
        </ul>
      </div>
    </div>

    <div class="container">

      <div class="pg__blog__grid">
        <div class="pg__blog__grid__main">
          <div>
            <h4 class="title">Featured post</h4>
            <a href="blog/blog-template.php">
              <article class="featured">
                <img src="public/assets/images/blog/4.jpg" alt="vegetables and fruits on table">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
              </article>
            </a>
          </div>

          <div class="pg__blog__grid__main__normal">
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/1.jpg" alt="sapling">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/4.jpg" alt="vegetables and fruits on table">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
          </div>
          <div class="pg__blog__grid__main__normal">
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/2.jpg" alt="vegetables in retail store">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/3.jpg" alt="black and green grapes hanging from tree">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
          </div>
          <div class="pg__blog__grid__main__normal">
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/4.jpg" alt="vegetables and fruits on table">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
            <a href="blog/blog-template.php">
              <article>
                <img src="public/assets/images/blog/2.jpg" alt="vegetables in retail store">
                <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
                <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
                <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolor odit eos rerum doloribus
                  cum exercitationem. Minima voluptates aliquam vel a?</p>
                <button class="btn">Read more</button>
              </article>
            </a>
          </div>


        </div>


        <div class="pg__blog__grid__side">
          <h5 class="title">Popular Posts</h5>
          <a href="blog/blog-template.php">
            <article class="pg__blog__article">
              <img src="public/assets/images/blog/1.jpg" alt="sapling">
              <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
              <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
            </article>
          </a>
          <a href="blog/blog-template.php">
            <article class="pg__blog__article">
              <img src="public/assets/images/blog/2.jpg" alt="vegetables in retail store">
              <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
              <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
            </article>
          </a>
          <a href="blog/blog-template.php">
            <article class="pg__blog__article">
              <img src="public/assets/images/blog/3.jpg" alt="black and green grapes hanging from tree">
              <p class="text blog__article__details">Health -- JUNE 22, 2019</p>
              <h3 class="text blog__article__title">Lorem ipsum dolor sit amet consectetur.</h3>
            </article>
          </a>
        </div>
      </div>
    </div>


    <?php include("contact-bar.php") ?>

    <hr>
    <?php include("footer.php") ?>


  </div>




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