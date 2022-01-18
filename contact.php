<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>
        Contact | Stopla
    </title>
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
    <div class="pg__contact">
        <div class="flash__container" id="flash">
            <div class="message" id="message"></div>
            <button class="close" id="flash-close" onclick="closeFlash()">&#215;</button>
        </div>

        <div class="sending__overlay " id="overlay">
            <div class="bars-container">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>

        <div id="nav-padding-offset">
            <div class="nav-container" id="navbar">
                <nav id="nav">
                    <a href="index.php" class="logoname">STOPLA</a>
                    <ul class="list" id="list">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="products.php"> Buy / Sell</a></li>
                        <li><a href="https://store.shoopy.in/stopla--the-farmers-brand"> SHOP</a></li>
                        <li><a href="blog.php">Blog</a></li>
                        <li><a href="contact.php" class="active-link">Contact</a></li>
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
    </div>

    <div class="pg__contact__info">
        <div class="container">
            <h2 class="heading">
                Get in touch with us
            </h2>
            <p class="text"></p>

            <form class="form" id="contact_form" name="contact_form">
                <div class="form__group">
                    <div class="input__wrapper">
                        <label for="username">Name</label>
                        <span class="error errors"></span>
                        <input type="text" id="username" placeholder="Enter your name" name="username" required>
                    </div>
                    <div class="input__wrapper">
                        <label for="email">Email</label>
                        <span class="error errors"></span>
                        <input type="email" name="email" id="email" placeholder="Enter your email">
                    </div>
                </div>
                <div class="form__group">
                    <div class="input__wrapper">
                        <label for="phone_number">Phone number</label>
                        <span class="error errors"></span>
                        <input type="tel" name="phone_number" id="phone_number" placeholder="Enter your mobile number"
                            required>
                    </div>
                    <div class="input__wrapper">
                        <label for="subject">Subject</label>
                        <select name="subject" id="subject">
                            <option value="general">General</option>
                            <option value="buy">Buy</option>
                            <option value="sell">Sell</option>
                        </select>
                    </div>
                </div>
                <div class="form__group">
                    <div class="input__wrapper">
                        <label for="message">Message</label>
                        <span class="error errors"></span>
                        <textarea name="message" id="message" placeholder="Enter your message" id="" cols="30"
                            rows="10"></textarea>
                    </div>
                    <div class="input__wrapper"></div>
                </div>
                <div></div>
                <button class="btn btn--rev" name="submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
    <hr>


    <?php include("contact-bar.php") ?>

    <hr>
    <?php include("footer.php") ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="public/js/vendor/aos.js"></script>
    <script>
        AOS.init({
            once: "true",
            offset: 100,
        });
    </script>
    <script src="public/js/app.js"></script>
    <script src="public/js/formValidation.js"></script>
    <script src="public/js/vendor/jquery.validate.min.js"></script>
    <script>
        var isValid = $("#contact_form").validate({
            ignore: ".ignore",
            rules: {
                username: {
                    required: true,
                    minlength: 2
                },
                email: {
                    required: true,
                    email: true
                },
                phone_number: {
                    required: true,
                    number: true,
                    minlength: 10,
                    maxlength: 10
                },
                message: {
                    required: true
                }
            },
            messages: {
                username: {
                    required: "Please enter your name",
                    minlength: "Please enter 2 characters or more"
                },
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid eamil address"
                },
                phone_number: {
                    required: "Please enter your phone number",
                    minlength: "Phone number must be 10 digits",
                    maxlength: "Phone number must not be more than 10 digits",
                    number: "Please enter a valid phone number"

                },
                message: {
                    required: "Please enter your message"
                }
            },
            errorElement: "span",
            errorPlacement: function (error, element) {
                error.insertBefore(element);
            }
        });

        $("#contact_form").submit((e) => {
            e.preventDefault();
            if (isValid.valid()) {
                sendingAnimation();
                let name = $("#username").val();
                let email = $("#email").val();
                let number = $("#phone_number").val();
                let subject = $("#subject").val();
                let message = $("textarea#message").val();
                $.ajax({
                    url: 'mail/sendMailContact',
                    method: 'POST',
                    dataType: 'json',
                    data: {
                        name: name,
                        email: email,
                        number: number,
                        subject: subject,
                        message: message
                    },
                    success: function (response) {
                        if (response == true) {
                            $("#contact_form").get(0).reset();
                            $("#overlay").addClass("hide");
                            $("#flash").addClass("flash__container--success show");
                            $("#message").html("Thank you for your intrest, We will get back to you shortly.");
                        } else {
                            $("#overlay").addClass("hide");
                            $("#flash").addClass("flash__container--failed show");
                            $("#message").html("Error occured while sending your request, Please contact us using <b>support@stopla.in</b>")
                        }
                    },
                    error: function (xhr, ajaxOptions, thrownError) { alert("some error occured try again laster  " + xhr.responseText + "  " + thrownError + "  " + ajaxOptions); }
                });
            }
        });

    </script>

</body>

</html>