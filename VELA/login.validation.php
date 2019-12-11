<?php

require_once('connection.php');


if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['pass'];

    if(empty($username) || empty($password)){
        header('Location:loginform.php?fields=empty');
        exit();
    }
    else{
    $stmt = "SELECT Password FROM users WHERE UserName ='$username';";
    $result = mysqli_query($conn, $stmt);
    $row = mysqli_fetch_assoc ($result);
    $user_admin = "Guandaru";
    
    
        
        if($username == $user_admin){

            $stmt1 = "SELECT Password FROM users WHERE UserName ='$user_admin';";
            $result1 = mysqli_query($conn, $stmt1);
            $row1 = mysqli_fetch_assoc ($result1);

            if(password_verify($password, $row1['Password'])){
            session_start();

            $_SESSION["loggedin"] = true;
            $_SESSION["id"] = $id;
            $_SESSION["username"] = "Guandaru"; 

            header('Location:admin/indexprofile.php');
            exit();
        }
            else{
               
                    
                header('Location:loginform.php?fields=wrongusernameorpassword');
            
        }
            
    
                
            }else {
                if(password_verify($password, $row['Password'])){
                    session_start();
    
                    $_SESSION["loggedin"] = true;
                    $_SESSION["id"] = $id;
                    $_SESSION["username"] = $username; 
        
                    header('Location:profiles/indexprofile.php');
                    exit();
                }
                else{
                    header('Location:loginform.php?fields=wrongusernameorpassword');
               
                }
            }
        }

        

    }

        