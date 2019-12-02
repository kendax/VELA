<?php
	session_start();
	
	// Check if the user is logged in, if not then redirect him to login page
	if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
		header("location: ../loginform.php");
		exit;
	}
 	
    include_once('../connection.php');

    $User = ($_SESSION["username"]);  
    $stmt1 = "SELECT * FROM shopping  WHERE ProductID ='20' ORDER BY ProductID ASC;";
    $UserID = "SELECT UserID FROM users WHERE UserName = $User ORDER BY UserID ASC;";
    
    

    $result1 = mysqli_query($conn, $stmt1);
    

	$rows1 = mysqli_fetch_assoc ($result1);
	$ProductID = $rows1['ProductID'];
    
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
    <link rel="shortcut icon" href="../images/velatitle.png" type="image/x-icon">
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
		<link rel="stylesheet" href="../css/vela.css">
        <nav class="nav1">
            <li><a><img src="../images/sellcialogo.png" alt=""></a></li>
			<li class="accessories"><a>
                     <div class="user">
                         <p style="">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                    </div>
                    <div class="login">
                        <button type="button" class="buttonlogin"><a  href="../logout.php" style="color:white;">Logout</a></button>
                    </div>
            </a></li>
            <li class="accessories1"><a>Cart</a></li>
            <li class="accessories1"><a>Help</a></li>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="../profiles/indexprofile.php">Home</a></li>
                <li><a href="../profiles/electronicsprofile.php">Electronics</a></li>
                <li><a href="../profiles/shoesprofile.php">Shoes</a></li>
                <li><a href="../profiles/phonesandtabletsprofile.php" class="active">Phones and Tablets</a></li>
                <li><a href="../profiles/booksprofile.php">Books</a></li>
                <li><a href="../profiles/uploadformprofile.php">Uploads</a></li>
            </ul>
        </nav>
    </header>
    <div class="searchbarcode">
            <link rel="stylesheet" href="../css/searchbar.css">
            <link rel="stylesheet" href="https://img.icons8.com/pastel-glyph/64/000000/">
                <div class="container">
                    <input class="main"/><span class="searchicon"></span>
                        <div class="microphone">
                             <div class="mic-stand"></div>
                        </div>
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
    <div class="container-grid">
        <link rel="stylesheet" href="../css/specificproduct.css">
        <div id="grid1">
            <div class="slot">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows1['Image'];?>" alt="" style="max-height:150px;"></div>
                    <div class="slotdescription" style="margin-top:140px;">
                        <div class="product" style="color:grey;"><?php echo $rows1['Product'];?></div>
                        <div class="description"><?php echo $rows1['Description'];?></div>
                        <div class="price">KSh <?php echo $rows1['Cost'];?></div> 
                        
						<button style="background-color:white; margin-top:20px; width:600px; border:none; border-radius:4px;">
                     
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="transform:translateX(-150px);"> 
                            <img src="../images/Paypallogo.png" alt="" style="max-height:140px;">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="7H2UC8HLAB2F2">
                            <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"
                                
                            >
                            <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        </button>   
					</div>          
            </div>
            
                        
        </div>
    </div>
	 <!-- Modal -->
	 <div style="margin-top:200px;" class="modal fade " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle"><b>Success</b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Item Has Been Added To Cart
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Continue Shopping</button>
                <button style="background-color:rgb(63, 170, 104); color:white; height:32px; border:none; border-radius:4px;" type="button"> <a style="color:white;" href="">View Cart</a></button>
            </div>
            </div>
        </div>
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
</body>
</html>