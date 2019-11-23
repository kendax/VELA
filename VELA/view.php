<?php

include_once('connection.php');

$stmt = "SELECT * FROM shopping ORDER BY id ASC;";
                $result = mysqli_query($conn, $stmt);
                $resultCheck = mysqli_num_rows($result);
                $rows = mysqli_fetch_assoc ($result);
                header('Content-Type:image/jpg');
                echo $row['Image'];