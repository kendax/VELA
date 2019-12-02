<?php
    include_once('connection.php');

    $stmt1 = "SELECT * FROM shopping  where id ='11' ORDER BY id ASC;";
    $stmt2 = "SELECT * FROM shopping  where id ='12' ORDER BY id ASC;";
    $stmt3 = "SELECT * FROM shopping  where id ='13' ORDER BY id ASC;";
    $stmt4 = "SELECT * FROM shopping  where id ='14' ORDER BY id ASC;";
    $stmt5 = "SELECT * FROM shopping  where id ='15' ORDER BY id ASC;";
    $stmt6 = "SELECT * FROM shopping  where id ='16' ORDER BY id ASC;";
    $stmt7 = "SELECT * FROM shopping  where id ='17' ORDER BY id ASC;";
    $stmt8 = "SELECT * FROM shopping  where id ='19' ORDER BY id ASC;";
    

    $result1 = mysqli_query($conn, $stmt1);
    $result2 = mysqli_query($conn, $stmt2);
    $result3 = mysqli_query($conn, $stmt3);
    $result4 = mysqli_query($conn, $stmt4);
    $result5 = mysqli_query($conn, $stmt5);
    $result6 = mysqli_query($conn, $stmt6);
    $result7 = mysqli_query($conn, $stmt7);
    $result8 = mysqli_query($conn, $stmt8);
    

    $rows1 = mysqli_fetch_assoc ($result1);
    $rows2 = mysqli_fetch_assoc ($result2);
    $rows3 = mysqli_fetch_assoc ($result3);
    $rows4 = mysqli_fetch_assoc ($result4);
    $rows5 = mysqli_fetch_assoc ($result5);
    $rows6 = mysqli_fetch_assoc ($result6);
    $rows7 = mysqli_fetch_assoc ($result7);
    $rows8 = mysqli_fetch_assoc ($result8);
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Electronics</title>
    <link rel="shortcut icon" href="images/velatitle.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="css/vela.css">
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
        <nav class="nav1">
            <li><a><img src="images/sellcialogo.png" alt=""></a></li>
                <li class="accessories"><a>
                    <div class="login">Login
                        <div class="loginlinks">
                                <button type="button" class="buttonlogin"><a  href="loginform.php" >Login</a></button>
                                <button type="button"><a href="joinform.php">Join</a></button>
                        </div>
                    </div>
                </a></li>
            <li class="accessories1"><a>Cart</a></li>
            <li class="accessories1"><a>Help</a></li>
        </nav>
        <nav class="nav2">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="electronics.php" class="active">Electronics</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="phonesandtablets.php">Phones and Tablets</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="uploadform.php">Uploads</a></li>
            </ul>
        </nav>
    </header>
    <div class="searchbarcode">
            <link rel="stylesheet" href="css/searchbar.css">
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
    <section class="slider">
            <link rel="stylesheet" href="css/slider.css">
            <script src="js/slider.js"></script>
            <div class="container">
                <div class="carousel slide carousel-swipe" id="carousel" data-ride="carousel" data-interval="3000">
                    <ol class="carousel-indicators">
                    <li class="active" data-target="#carousel" data-slide-to="0"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                    <li data-target="#carousel" data-slide-to="3"></li>
                    <li data-target="#carousel" data-slide-to="4"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                    <div class="item active"><img src="images/christian.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/radek.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/dmitry.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    <div class="item"><img src="images/aaron.jpg"/>
                        <div class="carousel-caption">VELA</div>
                    </div>
                    </div><a class="left carousel-control" href="#carousel" role="button" data-slide="prev"><span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span><span class="sr-only">Prev</span></a><a class="right carousel-control" href="#carousel" role="button" data-slide="next"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span><span class="sr-only">next</span></a>
                </div>
            </div>
    </section>
    <div class="container-grid">
        <div id="grid">
            <div class="slot1">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows1['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows1['Product'];?></div>
                    <div class="description"><?php echo $rows1['Description'];?></div>
                    <div class="price">KSh <?php echo $rows1['Cost'];?></div>  
            </div>
            <div class="slot2">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows2['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows2['Product'];?></div>
                    <div class="description"><?php echo $rows2['Description'];?></div>
                    <div class="price">KSh <?php echo $rows2['Cost'];?></div>  
            </div>
            <div class="slot3">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows3['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows3['Product'];?></div>
                    <div class="description"><?php echo $rows3['Description'];?></div>
                    <div class="price">KSh <?php echo $rows3['Cost'];?></div>  
            </div>
            <div class="slot4">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows4['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows4['Product'];?></div>
                    <div class="description"><?php echo $rows4['Description'];?></div>
                    <div class="price">KSh <?php echo $rows4['Cost'];?></div>  
            </div>
            <div class="slot5">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows5['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows5['Product'];?></div>
                    <div class="description"><?php echo $rows5['Description'];?></div>
                    <div class="price">KSh <?php echo $rows5['Cost'];?></div>  
            </div>
            <div class="slot6">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows6['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows6['Product'];?></div>
                    <div class="description"><?php echo $rows6['Description'];?></div>
                    <div class="price">KSh <?php echo $rows6['Cost'];?></div>  
            </div>
            <div class="slot7">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows7['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows7['Product'];?></div>
                    <div class="description"><?php echo $rows7['Description'];?></div>
                    <div class="price">KSh <?php echo $rows7['Cost'];?></div>  
            </div>
            <div class="slot7">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows8['Image'];?>" alt=""></div>
                    <div class="product"><?php echo $rows8['Product'];?></div>
                    <div class="description"><?php echo $rows8['Description'];?></div>
                    <div class="price">KSh <?php echo $rows8['Cost'];?></div>  
            </div>
                        
        </div>
    </div>
    <section class="footer">
        <footer>
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"> 
        <link href="css/footer.css" rel="stylesheet"> 
<!-- Footer -->
		<footer class="pt-5 pb-4" id="contact">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 mt-2 mb-4">
						<h5 class="mb-4 font-weight-bold">ABOUT US</h5>
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
						<h5 class="mb-4 font-weight-bold">LATEST UPDATES</h5>
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
							&copy; 2018 Your Company. All Rights Reserved.
						</div>
					</div>
				</div>
			</div>
		</section>
        </footer>
    </section>
</body>
</html>