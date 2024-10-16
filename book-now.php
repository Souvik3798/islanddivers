<?php
$mysqli = mysqli_connect("localhost", "u946987511_islanddivers", "Admin*/1234", "u946987511_islanddivers");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
  <title>Book Now | Island diver</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <script src="/cdn-cgi/apps/head/3ts2ksMwXvKRuG480KNifJ2_JNM.js"></script>
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CComfortaa:300,400,700%7COpen+Sans:300,400,600,700">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/fonts.css">
  <link rel="stylesheet" href="css/style.css">
  
  
  
  
  
    <!-- Event snippet for Website lead (1) conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16530938920/6BpuCOqSr90ZEKi4yMo9'});
</script>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-16530938920"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-16530938920');
</script>
  
  
  
  
  
  
  
  <style>
    td,
    th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }

    tr:nth-child(even) {
      background-color: #dddddd;
    }


    table {
      color: #000;
      width: 50%;
      margin-bottom: 30px;
    }
  </style>
</head>

<body>
  <div class="preloader">
    <div class="preloader-body">
      <div class="cssload-bell">
        <div class="cssload-circle">
          <div class="cssload-inner"></div>
        </div>
        <div class="cssload-circle">
          <div class="cssload-inner"></div>
        </div>
        <div class="cssload-circle">
          <div class="cssload-inner"></div>
        </div>
        <div class="cssload-circle">
          <div class="cssload-inner"></div>
        </div>
        <div class="cssload-circle">
          <div class="cssload-inner"></div>
        </div>
      </div>
    </div>
  </div>
  <div class="page">


    <?php include 'include/header.php'; ?>

    <section class="breadcrumbs-custom">
      <div class="parallax-container" data-parallax-img="images/bg-about.jpg">
        <div class="breadcrumbs-custom-body parallax-content context-dark">
          <div class="container">
            <h1 class="breadcrumbs-custom-title">PAYMENT HERE</h1>
          </div>
        </div>
      </div>
      <div class="breadcrumbs-custom-footer">
        <div class="container">
          <ul class="breadcrumbs-custom-path">
            <li><a href="index.php">Home</a></li>

            <li class="active">Book Now</li>
          </ul>
        </div>
      </div>
    </section>
    <!-- Get in touch-->
    <section class="contact-section">
      <div class="container">
        <div class="row g-4">
          <div class="col-lg-8">
            <div class="materialContainer">
              <div class="material-details">
                <div class="title title1 title-effect mb-1 title-left">
                </div>
              </div>
              <form action="ajax/payment.php" method="post">
                <div class="row g-2 mt-md-1 mt-2">
                  <h4>MAKE YOUR PAYMENT HERE</h4>
                  <div class="name_error"></div>
                  <div class="email_error"></div>
                  <div class="mobile_error"></div>
                  <div class="amount_error"></div>
                  <div class="address_error"></div>
                  <div class="message_error"></div>
                  <div class="col-md-6">
                    <label for="name" class="form-label"> Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Your  Name" required>
                  </div>
                  <div class="col-md-6">
                    <label for="last" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" placeholder="Enter Your Email Address">
                  </div>
                  <div class="col-md-6">
                    <label for="amount" class="form-label">Amount</label>
                    <input type="text" class="form-control" id="amount" name="amount"
                      placeholder="Enter Your amount" required>
                  </div>
                  <div class="col-md-6">
                    <label for="amount" class="form-label">address</label>
                    <input type="text" class="form-control" id="address" name="address"
                      placeholder="Enter Your address">
                  </div>
                  <div class="col-md-6">
                    <label for="mobile" class="form-label">Mobile Number</label>
                    <input type="text" class="form-control" id="mobile" name="mobile"
                      placeholder="Enter Your Mobile Number" required>
                  </div>

                  <div class="col-12">
                    <label for="message" class="form-label">Message</label>
                    <textarea class="form-control" id="message" rows="5" name="message"></textarea>
                  </div>

                  <div class="col-auto">
                    <button class="button button-lg button-secondary button-zakaria" type="submit">Pay Now</button>
                  </div>
                </div>
              </form>
            </div>
            <br>
            <table>
              <tr>
                <th>Activity</th>
                <th>RATE</th>

              </tr>
              <tr>
                <td>Shore diving </td>
                <td>3500/- </td>

              </tr>

              <tr>
                <td>Boat diving </td>
                <td>5500/- </td>

              </tr>


              <tr>
                <td>Discover scuba diving </td>
                <td>6500/-</td>

              </tr>
            </table>
          </div>



          <div class="col-lg-4">
            <img src="qr-code.jpg" style="margin-top:20px;">
          </div>
        </div>
      </div>


    </section>

    <!-- Get in touch-->
    <section class="section section-xl bg-gray-4">
      <div class="container">
        <div class="row row-30 justify-content-center">
          <div class="col-sm-6 col-md-4">
            <h4>Phones</h4>
            <ul class="contacts-classic">
              <li>Office <a href="tel:9531979064">+91 9531979064</a>
              </li>

            </ul>
          </div>
          <div class="col-sm-6 col-md-4">
            <h4>Address</h4>
            <div class="contacts-classic"><a href="#">Andaman and Nicobar Islands</a></div>
          </div>
          <div class="col-sm-6 col-md-4">
            <h4>E-mails</h4>
            <ul class="contacts-classic">
              <li><a href="mailTo:Islanddivers7@gmail.com">Islanddivers7@gmail.com</a></li>

            </ul>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <!-- RD Google Map-->
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15608.552414701613!2d92.98437572765063!3d12.034011963611855!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3088d3670f389647%3A0x1282c8bf2a3fceac!2sIsland%20Divers!5e0!3m2!1sen!2sin!4v1666333613880!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>
    <?php include 'include/footer.php'; ?>

  </div>
  <div class="snackbars" id="form-output-global"></div>
  <script src="js/core.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
<!--<script>
		$('form#contactform').submit(function(e) {
			e.preventDefault();
			var name	= $('#name').val();
			var email	= $('#email').val();
			var mobile	= $('#mobile').val();
			var address	= $('#address').val();
			var amount	= $('#amount').val();
			var message	= $('#message').val();
			if(name == ''){
				$(".name_error").html('<div class="alert alert-danger">Required fields cant be empty..</div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			if(email == ''){
				$(".email_error").html('<div class="alert alert-danger">Email Must be Enter </div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			if (mobile.length != 10){
				$(".mobile_error").html('<div class="alert alert-danger">Check Your Mobile No  </div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			if(amount == ''){
				$(".amount_error").html('<div class="alert alert-danger">amount Must be Enter </div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			if(address == ''){
				$(".address_error").html('<div class="alert alert-danger">amount Must be Enter </div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			if(message == ''){
				$(".message_error").html('<div class="alert alert-danger">Message Must be Field </div>').delay(3000).show().fadeOut("slow");
				return false;
			}
			 else {
				$.ajax({
					url: 'ajax/payment.php',
					dataType:"text",
					type: 'POST',
					data: $("form#contactform").serialize(),
					success: function (response) {
						$("#contactres").html(response).delay(5000).show().fadeOut("slow");
						setTimeout(function(){
							$("#email").val('');
							$("#name").val('');
							$("#amount").val('');
							$("#address").val('');
							$("#mobile").val('');
							$("#message").val('');
						}, 5000);
					},
					error:function (xhr, ajaxOptions, thrownError){
						alert(thrownError);
					}
				});
				return false;
			}
		});
        </script>-->