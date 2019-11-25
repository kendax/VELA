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
            <li><a><img src="images/velalogo1.png" alt=""></a></li>
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
                            <div class="" id="parking"></div>
                            <div class="tooltip">Shoes</div>
                        </div>
                        <div class="icon" id="">
                            <div class="pho" id="parking"></div>
                            <div class=""></div>
                            <div class="tooltip">Phones and Tablets</div>
                        </div>
                        <div class="icon" id="">
                            <div class="" id="parking"></div>
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
</body>
</html>