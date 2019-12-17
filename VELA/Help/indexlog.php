<?php
    
	 include_once('../connection.php');
	 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Help Center</title>
    <link rel="shortcut icon" href="../images/sellcialogo3.png" type="image/x-icon" style="min-height:500px;">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="../css/vela.css">
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<header>

<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link rel="stylesheet" href="../vela.css">
<script src="../js/main.js"></script>

<div id="nav">
<nav class="nav1">
      <ul>
     
            <li><a><img src="../images/sellcialogo.png" alt=""></a></li>
                <li class="accessories" style="margin-left:1020px; font-weight:bold; transform:translateY(-70px);font-size:15px;"><a>
                    <div class="login">Login
                        <div class="loginlinks">
                                <button type="button" class="buttonlogin"><a  href="../loginform.php">Login</a></button>
                                <button type="button"><a href="../joinform.php">Join</a></button>
                        </div>
                    </div>
                </a></li>
            <li class="accessories1" style="font-weight:bold; font-size:15px; transform:translateY(-70px);"><a href="../loginform.php">Cart</a></li>
            <li class="accessories1" style="font-weight:bold; font-size:15px; transform:translateY(-70px);"><a class="active">Help</a></li>
        </nav>
      </ul>
    </nav>
    <link rel="stylesheet" href="../vela.css">
    <script src="js/main.js"></script>
    <div class="img-mobile" style="margin-left:32%;">
      <img  style="max-height:150px;"src="../images/sellcialogo.png" alt="">
    </div> 
    <nav class="nav2" style="font-weight:bold; font-size:15px;">
        <ul class="menu" id="menu">  
         <li><div class="user-mobile" style="margin-left:-80px;">
         <p>Hi,Welcome</p>
         </div></li>
         <link rel="stylesheet" href="../css/searchbar.css">
         <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
         <link rel="stylesheet" href="../vela.css">
         <li><div class="search-mobile" style="margin-left:10px;"><form action="../searchlog.php" method="POST">
                    <input class="main" name="search" />
                    <link rel="stylesheet" href="../css/searchbar.css">
                    <button class="searchicon1" name="submit" style="height:-10px;"></button>
                    <div class="microphone" style="transform:translateX(0px);">
                        <div class="mic-stand"></div>
                    </div>
                  </form></div></li>
            <li><a href="../index.php">Home</a></li>
            <li><a href="../electronics.php">Electronics</a></li>
            <li><a href="../shoes.php">Shoes</a></li>
            <li><a href="../phonesandtablets.php">Phones and Tablets</a></li>
            <li><a href="../books.php">Books</a></li>
            <li><div class="prev-nav1">
            <link rel="stylesheet" href="../vela.css">
            <li><div class="login1" style="margin-top:-30px;">
            <button type="button" style="font-size:18px; margin-left:15px;" class="buttonlogin1"><a  href="../loginform.php">Login</a></button>
            <button type="button" style="font-size:18px; margin-left:15px;" class="buttonlogin1"><a href="../joinform.php">Join</a></button>
            <li class="accessories11" style="font-weight:bold; font-size:18px; margin-left:20px;"><a href="loginform.php">Cart</a></li>
                 <a class="accessories11" style="font-weight:bold; font-size:18px; margin-left:-16px; color:black; margin-top:3px;" href="help/indexlog.php">Help</a>
              </div></a></li>
            </div></li>
        </ul>
    </nav>
    <link rel="stylesheet" href="../vela.css">
    <div class="burger" style="transform:translateY(-50px);">
      <div class="line1"></div>
      <div class="line2"></div>
      <div class="line3"></div>
    </div>

</header>
    <div class="searchbarcode" style="transform:translateY(-100px);">
            <link rel="stylesheet" href="../css/searchbar.css">
            <link rel="stylesheet" href="../vela.css">
            <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
                <div class="container">
                        <form action="../search.php" method="POST">
                          <input class="main" name="search" style="transform:translateX(-16px);"/>
                          <button class="searchicon" name="submit"></button>
                          <div class="microphone" style="transform:translateX(0px);">
                              <div class="mic-stand"></div>
                          </div>
                        </form>
                        <div class="icon-holder">
                            <div class="icon" id="parking">
                            <div class="tooltip">Electronics</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking1"></div>
                            <div class="tooltip">Shoes</div>
                        </div>
                        <div class="icon" id="">
                            <div class="pho" id="parking2"></div>
                            <div class=""></div>
                            <div class="tooltip">Phones and Tablets</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking3"></div>
                            <div class="tooltip">Books</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">More</div>
                        </div>
                </div>
        </div>
    </div>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css/style.css"> <!-- Resource style -->
	<script src="js/modernizr.js"></script> <!-- Modernizr -->
<section class="cd-faq">
	<ul class="cd-faq-categories">
		<li><a class="selected" href="#basics">Basics</a></li>
							
		<li><a href="#account">Account</a></li>
		<li><a href="#payments">Payments</a></li>
		<li><a href="#privacy">Privacy</a></li>
		<li><a href="#delivery">Delivery</a></li>
	</ul> <!-- cd-faq-categories -->

	<div class="cd-faq-items">
		<ul id="basics" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Basics</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">How do I change my password?</a>
				<div class="cd-faq-content">
					<p>Contact customer care support to reset your password.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I sign up?</a>
				<div class="cd-faq-content">
					<p>Simply click the login link and then the join button.</p>
				</div> <!-- cd-faq-content -->
			</li>

			
		</ul> <!-- cd-faq-group -->

		
		<ul id="account" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Account</h2></li>
			

			<li>
				<a class="cd-faq-trigger" href="#0">How do I delete my account?</a>
				<div class="cd-faq-content">
					<p>Contact customer care support.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do I change my account settings?</a>
				<div class="cd-faq-content">
					<p>Visit the profile page and update your account details.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">I forgot my password. How do I reset it?</a>
				<div class="cd-faq-content">
					<p>Contact customer care support</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="payments" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Payments</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Can I have an invoice for my subscription?</a>
				<div class="cd-faq-content">
					<p>Yes,with a Paypal account.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Why did my credit card or PayPal payment fail?</a>
				<div class="cd-faq-content">
					<p>This could be due to incorrect payment details in your paypal account.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Why does my bank statement show multiple charges for one product?</a>
				<div class="cd-faq-content">
					<p>This is because the charges include tax and shipping charges.</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="privacy" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Privacy</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">Can I specify my own private account?</a>
				<div class="cd-faq-content">
					<p>This is only possible with an admin account.</p>
				</div> <!-- cd-faq-content -->
			</li>

			

			<li>
				<a class="cd-faq-trigger" href="#0">How can I access my account data?</a>
				<div class="cd-faq-content">
					<p>Simply visit the profile page.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How can I control if other search engines can link to my profile?</a>
				<div class="cd-faq-content">
					<p>This is not possible at all.</p>
				</div> <!-- cd-faq-content -->
			</li>
		</ul> <!-- cd-faq-group -->

		<ul id="delivery" class="cd-faq-group">
			<li class="cd-faq-title"><h2>Delivery</h2></li>
			<li>
				<a class="cd-faq-trigger" href="#0">What should I do if my order hasn't been delivered yet?</a>
				<div class="cd-faq-content">
					<p>Contact customer care support.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How can I find your international delivery information?</a>
				<div class="cd-faq-content">
					<p>Contact customer care support.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">Who takes care of shipping?</a>
				<div class="cd-faq-content">
					<p>At Sellcia we have agents in 13 countries all over the world taking care of shipping.</p>
				</div> <!-- cd-faq-content -->
			</li>

			<li>
				<a class="cd-faq-trigger" href="#0">How do returns or refunds work?</a>
				<div class="cd-faq-content">
					<p>To conduct a refund contact customer care support.</p>
				</div> <!-- cd-faq-content -->
			</li>

			

			<li>
				<a class="cd-faq-trigger" href="#0">When will my order arrive?</a>
				<div class="cd-faq-content">
					<p>Once an order has been placed it takes between 4-7 working days to arrive.</p>
				</div> <!-- cd-faq-content -->
			</li>

			
		</ul> <!-- cd-faq-group -->
	</div> <!-- cd-faq-items -->
	<a href="#0" class="cd-close-panel">Close</a>
</section> <!-- cd-faq -->

<br><br>
<link rel="stylesheet" href="../css/vela.css">
<div class="kay" >
<h1>Online Shopping with Sellcia Kenya - Africa's No 1 Online Store</h1>
<p><b>VELA Kenya</b> is your number one Online Shopping solution. 
You can purchase all your mobile phones, tablets, computers,laptops, and more online and have them delivered to you.
 VELA has payment options that suit everyone, and we have a payment-on-delivery option for extra convenience.</p>
 <p>Be in the loop with new products and from top brands in VELA Kenya and make use of our latest offers to shop at the best price guarantee!
  In our online shop, you are even able to pre-order the phones you want. 
  Also take advantage of computing products available to own, printers and other Electronic devices such as hard drives at affordable prices.
   VELA remains your No°1 online marketplace for easy convenience and you get nothing but the best!

   <br><br>
   Love reading? Browse through our books categories to order educational books for your kids and loved ones and get the best deal on small and large appliances for the home. </p>
<p>Shop for smartphones <a href="phonesandtablets.php">Smartphones</a> on VELA, as we offer huge discounts on all mobiles, tablets and accessories. Join the biggest online sales event ever today. We have the latest collection of smartphones like the <a href="phonesandtablets.php">Samsung Note 9</a> and gadgets from the best brands in the industry! </p>
</div>
    <section class="footer">
        <footer>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link href="../css/footer.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT SELLCIA</h5>
						<p class="mb-4">Etiam laoreet in ex quis efficitur.</p>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-map-marker"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="far fa-envelope"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Have any questions?</h6>
										<p><a href="#">Support@userthemes.com</a></p>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fas fa-phone-volume"></i></div>
									<div class="col-10">
										<h6 class="font-weight-bold mb-0">Address:</h6>
										<p><a href="#">+XX (0) XX XX-XXXX-XXXX</a></p>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">FRESH TWEETS</h5>
						<ul class="f-address">
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
							<li>
								<div class="row">
									<div class="col-1"><i class="fab fa-twitter"></i></div>
									<div class="col-10">
										<p class="mb-0"><a href="#">@userthemesrel </a> HTML Version Out Now</p>
										<label>10 Mins Ago</label>
									</div>
								</div>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">LET US HELP YOU</h5>
						<ul class="recent-post">
							<li>
								<label class="mr-3">28 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">29 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
							<li>
								<label class="mr-3">30 <br><span>APR</span></label>
								<span>Rendomised words which dont look eveable.</span>
							</li>
						</ul>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">CONNECT WITH US</h5>
						<div class="input-group">
						  	<input type="text" class="form-control" placeholder="Your Email Address">
						  	<span class="input-group-addon" id="basic-addon2"><i class="fas fa-check"></i></span>
						</div>
						<ul class="social-pet mt-4">
							<li><a href="#" title="facebook"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" title="twitter"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" title="google-plus"><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href="#" title="instagram"><i class="fab fa-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
		<!-- Copyright -->
		<section class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-md-12 ">
						<div class="text-center text-white">
							&copy; 2019 SELLCIA. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
        </footer>
    </section>
    <script src="../js/man.js"></script>

<script src="js/jquery-2.1.1.js"></script>
<script src="js/jquery.mobile.custom.min.js"></script>
<script src="js/main.js"></script> <!-- Resource jQuery -->
</body>
</html>