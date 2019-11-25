<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploads</title>
    <link rel="shortcut icon" href="images/velatitle.png" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet'>
    <link rel="stylesheet" href="css/vela.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
                <li><a href="electronics.php">Electronics</a></li>
                <li><a href="shoes.php">Shoes</a></li>
                <li><a href="phonesandtablets.php">Phones and Tablets</a></li>
                <li><a href="books.php">Books</a></li>
                <li><a href="uploadform.php" class="active">Uploads</a></li>
            </ul>


        </nav>
    </header>
    <div class="searchbarcode">
            <link rel="stylesheet" href="css/searchbar.css">
                <div class="container">
                    <input class="main"/><span class="searchicon"></span>
                        <div class="nomic">
                             <div class="mic-stand"></div>
                        </div>
                        <div class="icon-holder">
                            <div class="icon" id="parking">
                            <div class="tooltip">Parking</div>
                        </div>
                        <div class="icon" id="gas">
                            <div class="base"></div>
                            <div class="tooltip">Gas</div>
                        </div>
                        <div class="icon" id="eat">
                            <div class="fork"></div>
                            <div class="knife"></div>
                            <div class="tooltip">Food</div>
                        </div>
                        <div class="icon" id="coffee">
                            <div class="cup"></div>
                            <div class="tooltip">Coffee</div>
                        </div>
                        <div class="icon" id="misc">
                            <div class="dots"></div>
                            <div class="tooltip">Misc</div>
                        </div>
                </div>
        </div>
    </div>
    <div style="margin-top:10px; padding-left:560px;">

    <form action="uploadvalidate.php" method="POST" enctype="multipart/form-data">
        <label for="text" style="font-weight:bold;">Product Name</label>
        <input type="text" name="product" placeholder="Product Name" required style="margin-left:0px;"><br><br>
        <label for="product_id" style="font-weight:bold;">Product ID</label>
        <input type="number" name="product_id" class="product_id" placeholder="Product ID" required style="margin-left:28px;"><br><br>
        <label for="cost" style="font-weight:bold;">Cost</label>
        <input type="number" name="cost" placeholder="Cost Of Product" required style="margin-left:75px;"><br><br>
        <label for="category" style="font-weight:bold;">Category</label>
        <input type="text" name="category" placeholder="Category Of Product" required style="margin-left:40px;"><br><br>
        <label for="image" style="font-weight:bold;">Upload Image</label>
        <input type="file" name="image" id="filetoupload"><br><br>
        <label for="description" style="font-weight:bold;">Description</label>
        <input type="text" name=description placeholder="Description" required style="margin-left:22px;"><br><br>
        <input type="submit" name="submit" value="Upload Information" style="margin-left:70px; background-color:rgb(63, 170, 104); border:none; border-radius:4px; color:white;"><br><br>
        

    </form>
    </div>
    
</body>
</html>