<?php

    session_start();
    require "connection.php";
    $email = $_POST["email"];
    $pass = $_POST["pwd"];
    
    if($email == "" || $pass == "" ){
        header("Location: login.php?status=error");
    }else{
        $query = mysqli_query($conn, "SELECT * FROM user WHERE pass='$pass'");
        $result = mysqli_num_rows($query);
        
        if($result == 1){
                $data = mysqli_fetch_array($query);
                //  Atur SESSION + Level Login
                $_SESSION["login"] = "yes";
                $_SESSION["level"] = $data["level"] == 1 ? "admin" : "user";
                header("Location: ../index.php");


        }else{
            header("Location: login.php?status=error");
        }
    }

    
?>