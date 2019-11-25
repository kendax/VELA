<?php

require_once('connection.php');

if(isset($_POST['submit'])){

    $product = $_POST['product'];
    $product_id =$_POST['product_id'];
    $cost = $_POST['cost'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    $currentDir = getcwd();
    $uploadDirectory = "/uploads/"; 

    $errors = [];

    $fileExtensions = ['jpeg','jpg','png'];

    $fileName = $_FILES['image']['name'];
    $fileSize = $_FILES['image']['size'];
    $fileTmpName = $_FILES['image']['tmp_name'];
    $fileType = $_FILES['image']['type'];

    $fileExtension = strtolower(end(explode('.',$fileName)));

    $uploadPath = $currentDir . $uploadDirectory . basename($fileName);

        if(!in_array($fileExtension,$fileExtensions)){
            $errors[] = "This file extension is not allowed";
        }
        if($fileSize > 64000){
            $errors[] = "This file is larger than 64Kib.Sorry,it has to be less than or equal to 64Kib.";
        }
        if(empty($errors)){
            $didUpload = move_uploaded_file($fileTmpName,$uploadPath);

            if($didUpload){
                  $stmt = "INSERT INTO shopping (Product, ProductID, Cost, Category, Image, Description) VALUES('$product','$product_id','$cost','$category','$fileName','$description')"; 
                mysqli_query($conn,$stmt);
                header('Location:electronics.php?product='.$product);
                exit();
            }else{

            }
        }else{

        }


}
