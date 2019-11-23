<?php
    include_once('connection.php');
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
            <input type="text" placeholder="Search products,brands and categories" results="0">
            <button type="button">Search</button>  
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
            </ul>


        </nav>
    </header>
    <div class="container-grid">
        <div id="grid">
            <div class="slot1">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot2">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot3">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot4">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot5">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot6">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot7">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>
            <div class="slot8">
                <div class="img"></div>
                <div class="product"></div>
                <div class="description"></div>
                <div class="price"></div>
            </div>'
            
            <?php
                $stmt = "SELECT * FROM shopping ORDER BY id ASC;";
                $result = mysqli_query($conn, $stmt);
                $resultCheck = mysqli_num_rows($result);
                if($resultCheck > 0){
                    while($rows = mysqli_fetch_assoc ($result))
                   
                    echo '<div class="slot1">
                    <div class="img">'.$rows['Category'].'</div>
                    <div class="product"></div>
                    <div class="description"></div>
                    <div class="price"></div>
                </div>';
               
            }






            ?>
        </div>
    </div>
</body>
</html>