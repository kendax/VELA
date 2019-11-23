<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>VELA Join</title>
    <link rel="shortcut icon" href="velatitle.png" type="image/x-icon">
    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="height:600px;">
    <div class="logo">
    <img src="images/velalogo1.png" style="max-width:100px; margin-top:-120px; margin-left:-10px;" alt="">
    </div>
    <?php
      if(empty($_GET)) {}
            elseif($_GET['fields'] == "empty") {
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> You should fill in all fields below.
            </div>";
            }
            elseif($_GET['fields'] =="email"){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> Type a valid e-mail address.
              </div>";            
              }
              elseif($_GET['fields'] =="passwordshortlength"){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> Password must not be less than 10 characters!
              </div>";
              }
              elseif($_GET['fields'] =="passwordlonglength"){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> Password must not be more than 15 characters!
              </div>";
              }
              elseif($_GET['fields'] =="passwordcontains"){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:500px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> Password must contain a number,an uppercase letter and a lowercase letter!
              </div>";
              }
              elseif($_GET['fields'] =="passwordsmatcherror"){
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:red; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>ERROR:</strong> Passwords don`t match!
              </div>";
              }
              elseif($_GET['fields'] =="success"){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert' style='text-align:center; float:right; position:absolute; color:green; margin-left:560px; z-index:3; margin-top:50px;'>
                <strong>SUCCESS:</strong> All fields are filled.
              </div>";
              }
              else  {}
    ?>
    <div class="main" style="margin-top:-50px;">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">
                <div class="signup-content">
                    <form action="join.validation.php" method="POST" id="signup-form" class="signup-form">
                        <h2 class="form-title">Create account</h2>
                        <div class="form-group">
                            <input type="text" class="form-input" name="name" id="name" placeholder="Username"/>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-input" name="email" id="email" placeholder="Your Email"/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="password" id="password" placeholder="Password"/>
                            <span toggle="#password" class="zmdi zmdi-eye field-icon toggle-password"></span>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-input" name="re_password" id="re_password" placeholder="Repeat your password"/>
                        </div>
                        <div class="form-group">
                            <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                            <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                        </div>
                        <div class="form-group">
                            <input type="submit" disabled name="submit" id="submit" class="form-submit" value="Sign up"/>
                        </div>
                    </form>
                    <p class="loginhere">
                        Have already an account ? <a href="loginform.php" class="loginhere-link">Login here</a>
                    </p>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" 
        integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
			  crossorigin="anonymous">
    <script>
    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      $('#agree-term').click(function(){
          $('.form-submit').removeAttr('disabled');
      })
    </script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>