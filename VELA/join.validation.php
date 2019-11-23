<?php

include_once('connection.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_repeat = $_POST['re_password'];

    //check if all required fields are filled in
   if(empty($name) || empty($email) || empty($password)
   || empty($password_repeat))
    {
        header("Location:joinform.php?fields=empty");
        exit();
    }
     //check if e-mail is valid
    elseif(!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*.(\.[a-z])*$/",$email)){
        header("Location:joinform.php?fields=email");
        exit();
      }
    //confirm password is not less than 10
    elseif(strlen($_POST["password"]) < '8'){
        header("Location:joinform.php?fields=passwordshortlength");
        exit();
      }
    //confirm password is not more than 15
    elseif(strlen($_POST["password"]) > '12'){
        header("Location:joinform.php?fields=passwordlonglength");
        exit();
      }
    //confirm password contains a number, an uppercase letter and a lowercase letter
    elseif(!preg_match("/^(?=.*\d)(?=.*[A-Z])(?=.*[a-z])[0-9A-Za-z]{1,}$/", $password)==1){
        header("Location:joinform.php?fields=passwordcontains");
        exit();
      }
     //confirm passwords match
     elseif($password != $password_repeat){
        header("Location:joinform.php?fields=passwordsmatcherror");
        exit();
      }
      else{
        $stmt = "INSERT INTO users (UserName, Password, Email) VALUES('$name','$password','$email')";
      mysqli_query($conn, $stmt);

        header("Location:joinform.php?fields=success");
        exit();
        }
     
  }
    