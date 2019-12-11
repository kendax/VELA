<?php
     session_start();
 
     // Check if the user is logged in, if not then redirect him to login page
     if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
         header("location: ../loginform.php");
         exit;
     }
     include_once('../connection.php');

    $stmt1 = "SELECT * FROM shopping  where ProductID ='20' ORDER BY ProductID ASC;";
    $stmt2 = "SELECT * FROM shopping  where ProductID ='21' ORDER BY ProductID ASC;";
    $stmt3 = "SELECT * FROM shopping  where ProductID ='22' ORDER BY ProductID ASC;";
    $stmt4 = "SELECT * FROM shopping  where ProductID ='23' ORDER BY ProductID ASC;";
    $stmt5 = "SELECT * FROM shopping  where ProductID ='24' ORDER BY ProductID ASC;";
    $stmt6 = "SELECT * FROM shopping  where ProductID ='25' ORDER BY ProductID ASC;";
    $stmt7 = "SELECT * FROM shopping  where ProductID ='26' ORDER BY ProductID ASC;";
    $stmt8 = "SELECT * FROM shopping  where ProductID ='27' ORDER BY ProductID ASC;";
    $stmt9 = "SELECT * FROM shopping  where ProductID ='28' ORDER BY ProductID ASC;";
    $stmt10 = "SELECT * FROM shopping  where ProductID ='29' ORDER BY ProductID ASC;";
    $stmt11 = "SELECT * FROM shopping  where ProductID ='30' ORDER BY ProductID ASC;";
    $stmt12 = "SELECT * FROM shopping  where ProductID ='31' ORDER BY ProductID ASC;";
    $stmt13 = "SELECT * FROM shopping  where ProductID ='32' ORDER BY ProductID ASC;";
    $stmt14 = "SELECT * FROM shopping  where ProductID ='33' ORDER BY ProductID ASC;";
    $stmt15 = "SELECT * FROM shopping  where ProductID ='34' ORDER BY ProductID ASC;";
    $stmt16 = "SELECT * FROM shopping  where ProductID ='35' ORDER BY ProductID ASC;";
    

    $result1 = mysqli_query($conn, $stmt1);
    $result2 = mysqli_query($conn, $stmt2);
    $result3 = mysqli_query($conn, $stmt3);
    $result4 = mysqli_query($conn, $stmt4);
    $result5 = mysqli_query($conn, $stmt5);
    $result6 = mysqli_query($conn, $stmt6);
    $result7 = mysqli_query($conn, $stmt7);
    $result8 = mysqli_query($conn, $stmt8);
    $result9 = mysqli_query($conn, $stmt9);
    $result10 = mysqli_query($conn, $stmt10);
    $result11 = mysqli_query($conn, $stmt11);
    $result12 = mysqli_query($conn, $stmt12);
    $result13 = mysqli_query($conn, $stmt13);
    $result14 = mysqli_query($conn, $stmt14);
    $result15 = mysqli_query($conn, $stmt15);
    $result16 = mysqli_query($conn, $stmt16);
    

    $rows1 = mysqli_fetch_assoc ($result1);
    $rows2 = mysqli_fetch_assoc ($result2);
    $rows3 = mysqli_fetch_assoc ($result3);
    $rows4 = mysqli_fetch_assoc ($result4);
    $rows5 = mysqli_fetch_assoc ($result5);
    $rows6 = mysqli_fetch_assoc ($result6);
    $rows7 = mysqli_fetch_assoc ($result7);
    $rows8 = mysqli_fetch_assoc ($result8);
    $rows9 = mysqli_fetch_assoc ($result9);
    $rows10 = mysqli_fetch_assoc ($result10);
    $rows11 = mysqli_fetch_assoc ($result11);
    $rows12 = mysqli_fetch_assoc ($result12);
    $rows13 = mysqli_fetch_assoc ($result13);
    $rows14 = mysqli_fetch_assoc ($result14);
    $rows15 = mysqli_fetch_assoc ($result15);
    $rows16 = mysqli_fetch_assoc ($result16);
    
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phones and Tablets</title>
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
     <link rel="stylesheet" href="../css/vela.css">
        <nav class="nav1">
        <li><a><img src="../images/sellcialogo.png" alt=""></a></li>
            <li class="accessories"><a>
                     <div class="user" >
                         <p style="transform:translateY(-50px); font-weight:bold; font-size:15px;">Hi <?php echo htmlspecialchars($_SESSION["username"]); ?></p>
                    </div>
                    <div class="login">
                        <button type="button" class="buttonlogin" style="transform:translateX(80px);"><a  href="../logout.php" style="color:white;">Logout</a></button>
                    </div>
            </a></li>
            <li class="accessories1" style="transform:translateX(50px); margin-left:0px;"><a><form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post" >
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="encrypted" value="-----BEGIN PKCS7-----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-----END PKCS7-----">
<input type="submit" value="Cart" style="color:white; width:45px; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>

</a></li>
            <li class="accessories1" style="font-weight:bold; font-size:15px;"><a>Help</a></li>
        </nav>
        <nav class="nav2" style="font-weight:bold; font-size:15px;">
            <ul>
                <li><a href="indexprofile.php">Home</a></li>
                <li><a href="electronicsprofile.php">Electronics</a></li>
                <li><a href="shoesprofile.php">Shoes</a></li>
                <li><a href="phonesandtabletsprofile.php" class="active">Phones and Tablets</a></li>
                <li><a href="booksprofile.php">Books</a></li>
                <li><a href="../uploadform.php">Uploads</a></li>
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
        <link rel="stylesheet" href="../css/vela.css">
        <div id="grid">
            <div class="slot1">
                <a href="../productsadmin/slot1.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows1['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows1['Product'];?></div>
                    <div class="description"><?php echo $rows1['Description'];?></div>
                    <div class="price">KSh <?php echo $rows1['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TG4EYZQFTWQZN">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>
            </div>
            <div class="slot2">
                <a href="../productsadmin/slot2.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows2['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows2['Product'];?></div>
                    <div class="description"><?php echo $rows2['Description'];?></div>
                    <div class="price">KSh <?php echo $rows2['Cost'];?></div>
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="MW34628LC68J4">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot3">
                <a href="../productsadmin/slot3.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows3['Image'];?>" alt="" style="max-height:230px;"></div>
                    <div class="product"><?php echo $rows3['Product'];?></div>
                    <div class="description"><?php echo $rows3['Description'];?></div>
                    <div class="price">KSh <?php echo $rows3['Cost'];?></div>
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="XDQ782P4R325S">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot4">
                <a href="../productsadmin/slot4.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows4['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows4['Product'];?></div>
                    <div class="description"><?php echo $rows4['Description'];?></div>
                    <div class="price">KSh <?php echo $rows4['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="D3XURBFEXJ7EQ">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>   
            </div>
            <div class="slot5">
                <a href="../productsadmin/slot5.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows5['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows5['Product'];?></div>
                    <div class="description"><?php echo $rows5['Description'];?></div>
                    <div class="price">KSh <?php echo $rows5['Cost'];?></div>
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="3JXSJMFMQT5WC">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>     
            </div>
            <div class="slot6">
                <a href="../productsadmin/slot6.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows6['Image'];?>" alt="" style="max-height:230px;"></div>
                    <div class="product"><?php echo $rows6['Product'];?></div>
                    <div class="description"><?php echo $rows6['Description'];?></div>
                    <div class="price">KSh <?php echo $rows6['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="TBFLRYJLJNWZW">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot7">
                <a href="../productsadmin/slot7.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows7['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows7['Product'];?></div>
                    <div class="description"><?php echo $rows7['Description'];?></div>
                    <div class="price">KSh <?php echo $rows7['Cost'];?></div>  
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="2QL6NREJBFRNL">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot8">
                <a href="../productsadmin/slot8.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows8['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows8['Product'];?></div>
                    <div class="description"><?php echo $rows8['Description'];?></div>
                    <div class="price">KSh <?php echo $rows8['Cost'];?></div>  
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="6FPKY2QR2J7MU">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>   
            </div>
            <div class="slot9">
                <a href="../productsadmin/slot9.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows9['Image'];?>" alt="" style="max-height:230px;"></div>
                    <div class="product"><?php echo $rows9['Product'];?></div>
                    <div class="description"><?php echo $rows9['Description'];?></div>
                    <div class="price">KSh <?php echo $rows9['Cost'];?></div>
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="JVBNRKNXYR3RS">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot10">
                <a href="../productsadmin/slot10.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows10['Image'];?>" alt="" style="max-height:230px;"></div>
                    <div class="product"><?php echo $rows10['Product'];?></div>
                    <div class="description"><?php echo $rows10['Description'];?></div>
                    <div class="price">KSh <?php echo $rows10['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="5EMSYVLFJSPV6">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a> 
            </div>
            <div class="slot11">
                <a href="../productsadmin/slot11.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows11['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows11['Product'];?></div>
                    <div class="description"><?php echo $rows11['Description'];?></div>
                    <div class="price">KSh <?php echo $rows11['Cost'];?></div>  
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="ZRBUQ5Q84VGUU">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a> 
            </div>
            <div class="slot12">
                <a href="../productsadmin/slot12.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows12['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows12['Product'];?></div>
                    <div class="description"><?php echo $rows12['Description'];?></div>
                    <div class="price">KSh <?php echo $rows12['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="U2S6L7277XF4C">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot13">
                <a href="../productsadmin/slot13.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows13['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows13['Product'];?></div>
                    <div class="description"><?php echo $rows13['Description'];?></div>
                    <div class="price">KSh <?php echo $rows13['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="799K2QVU9REXL">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot14">
                <a href="../productsadmin/slot14.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows14['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows14['Product'];?></div>
                    <div class="description"><?php echo $rows14['Description'];?></div>
                    <div class="price">KSh <?php echo $rows14['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="SJWHSCA4ZJHQE">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>  
            </div>
            <div class="slot15">
                <a href="../productsadmin/slot15.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows15['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows15['Product'];?></div>
                    <div class="description"><?php echo $rows15['Description'];?></div>
                    <div class="price">KSh <?php echo $rows15['Cost'];?></div>
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="RCLB42J6SJCPY">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>   
            </div>
            <div class="slot16">
                <a href="../productsadmin/slot16.php" style="color:black;">
                    <div class="img"><img src="http://localhost:8080/code/VELA/uploads/<?php echo $rows16['Image'];?>" alt="" style="max-height:250px;"></div>
                    <div class="product"><?php echo $rows16['Product'];?></div>
                    <div class="description"><?php echo $rows16['Description'];?></div>
                    <div class="price">KSh <?php echo $rows16['Cost'];?></div> 
                    <button style="background-color:rgb(63, 170, 104); border:none; border-radius:4px; margin-left:100px; margin-top:15px;"><form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="8H2E98FWN97BY">
<input type="submit" value="BUY NOW" style="color:white; background-color:rgb(63, 170, 104); border:none; transform:translateX(-7px);" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</button> 
                </a>   
            </div>
                        
        </div>
    </div>
    <br><br>
<div class="kay">
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
</body>
</html>