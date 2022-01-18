<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sell | STOPLA</title>
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
  <div class="pg__buy-sell">
    <div class="container">

      <div class="buy-banner" style="background-color: mediumseagreen;">
        <a href="products.php">
          <div class="arrow-back">
            <svg xmlns='http://www.w3.org/2000/svg' class='ionicon' viewBox='0 0 512 512'>
              <path fill='none' stroke='currentColor' stroke-linecap='round' stroke-linejoin='round' stroke-width='48'
                d='M244 400L100 256l144-144M120 256h292' />
            </svg><span>Back</span>
          </div>
        </a>
        <div class="flex-wrapper">
          <div class="buy-banner__image">
            <img src="public/assets/images/services/farmer.png" alt="">
          </div>
          <div class="buy-banner__info">
            <h1 class="heading">Contact us to sell the produce at one click.</h1>
            <p class="text">Why should you sell us ?, Now you can sell your harvest in one click.
              We collect at your farm , provide transparent weighing and payment into your account in 24 hours.
              message us with the details of your crops, Our team will contact you soon.
            </p>
          </div>
        </div>
      </div>

      <div class="buy-wrapper">

        <div class="buy__heading">
          <h2 class="heading">
            Get in touch with us
          </h2>
          <p class="text">Leave us a message , we will get in touch shortly.</p>
        </div>

        <form class="form" id="sell_form" name="sell_Form">
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
              <input type="tel" name="phone_number" id="phone_number" placeholder="Enter your mobile number" required>
            </div>
            <div class="input__wrapper">
              <label for="pincode">Pincode</label>
              <span class="error errors"></span>
              <input type="number" name="pincode" id="pincode" placeholder="Enter your pincode" required>
            </div>
          </div>


          <div class="form__group">
            <div class="input__wrapper">
              <label for="address">Address</label>
              <span class="error errors"></span>
              <input type="text" name="address" id="address" placeholder="Enter your address" required>
            </div>
          </div>

          <div class="form__group">
            <div class="input__wrapper">
              <label for="type">Crops</label>
              <div>
                <input id="crops" placeholder="Enter your crops " type="text" name="crops"><button class="crops-add"
                  id="crops-add" type="button">add</button>
              </div>
            </div>
            <div class="input__wrapper"></div>
          </div>

          <div class="form__group">
            <div class="input__wrapper">
              <div class="sell__crops-list">
                <p class="heading">Crops added</p>
                <ul class="crops-list" id="crops-list">
                  <li>Tomato<button class="del" onclick="return this.parentNode.remove();"
                      type=" button">remove</button>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <button class="btn btn--rev" type="submit">Submit</button>
        </form>


      </div>
    </div>
  </div>
  <?php include("contact-bar.php") ?>

  <hr>
  <?php include("footer.php") ?>
  <script src="public/js/vendor/aos.js"></script>
  <script>
    AOS.init({
      once: "true",
      offset: 100,
    });
  </script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
    integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script src="public/js/vendor/jquery.validate.min.js"></script>
  <script src="public/js/formValidation.js"></script>
  <script>
    var isValid = $("#sell_form").validate({
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
        pincode: {
          required: true,
          number: true,
          minlength: 6,
          maxlength: 6
        },
        address: {
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
        pincode: {
          required: "Please enter your pincode",
          minlength: "Pincode must be 6 digits",
          maxlength: "Pincode must not be more than 6 digits",
          number: "Please enter a valid pincode"

        },
        address: {
          required: "Please enter your address"
        }
      },
      errorElement: "span",
      errorPlacement: function (error, element) {
        error.insertBefore(element);
      }
    })
  </script>


  <script>

    $("#crops-add").click(function () {
      let crops_list = document.getElementById('crops-list');
      let input_crops_value = document.getElementById("crops");
      if (input_crops_value.value !== "") {
        let button = document.createElement("button");
        let item = document.createElement("li");
        textnode = document.createTextNode(input_crops_value.value);
        item.appendChild(textnode);
        button.type = "button";
        button.className = "del";
        button.innerText = "remove";
        button.onclick = function () {
          this.parentNode.remove();
        };
        item.appendChild(button);
        crops_list.appendChild(item);
      }
      input_crops_value.value = "";
    });

    $('#crops').on({
      keypress: function (event) {
        if (event.keyCode === 13) {
          event.preventDefault();
          document.getElementById("crops-add").click();
        }
      }
    });

    $("#sell_form").submit(e => {
      e.preventDefault();
      if (isValid.valid()) {
        sendingAnimation();
        var name = $("#username").val();
        var email = $("#email").val();
        var number = $("#phone_number").val();
        var pincode = $("#pincode").val();
        var address = $("#address").val();
        var listItems = document.getElementById("crops-list").getElementsByTagName("li");
        var crops_array = map(listItems, getText);
        function map(arrayLike, fn) {
          var ret = [], i = -1, len = arrayLike.length;
          while (++i < len) ret[i] = fn(arrayLike[i]);
          return ret;
        }
        function getText(node) {
          if (node.nodeType === 3) return node.data;
          var txt = '';
          if (node = node.firstChild) do {
            txt += getText(node);
          } while (node = node.nextSibling);
          return txt;
        }
        var crops = crops_array.join();
        crops = crops.replace(/remove/g, '');
        $.ajax({
          url: 'mail/sendMailSell',
          method: 'POST',
          dataType: 'json',
          data: {
            name: name,
            email: email,
            number: number,
            crops: crops,
            pincode: pincode,
            address: address
          }, success: function (response) {
            if (response == true) {
              $("#sell_form").get(0).reset();
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
        })
      }
    });

  </script>
</body>

</html>