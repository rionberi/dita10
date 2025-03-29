<?php

    include_once 'config.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $surname = $_POST['surname']; 
        $username= $_POST['username'];
        $email = $_POST['email'];
        $tempPassword = $_POST['password'];
        $password = password_hash($tempPassword, PASSWORD_DEFAULT);

        if (empty($name) ||empty($surname) ||empty($username) ||empty($email) ||empty($password)){
            echo "You need to fill all the fields";

            header("refresh:3; url=signup.php");
        } else{
            $sql = "SELECT username from users WHERE username=:username";

            $tempSql = $conn->prepare($sql);
            $tempSql->bindParam(":username",$username);
            $tempSql->execute();

            if($tempSql->rowcount() > 0){
                echo "Username exists!";
                header("refresh:3; url=signup.php");
            }else{
                $sql = "INSERT INTO users (name,surname,username,email,password) VALUES (:name,:surname,:username,:email,:password)";
                $tempSql = conn->prepare($sql);
                $tempSql->bindParam(":name,$name");
                $tempSql->bindParam(":surname,$surname");
                $tempSql->bindParam(":username,$username");
                $tempSql->bindParam(":email,$email");
                $tempSql->bindParam(":password,$password");
                $tempSql->execute();
            }


    

        }
    

    }