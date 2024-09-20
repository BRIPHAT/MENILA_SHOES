<?php

include "db_connection.php";
include "validate_data.php";
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST['register'])){
        $username = verify_data($_POST['username']);
        $email = verify_data($_POST['email']);
        $password = verify_data($_POST['password']);
        $confirmpassword = verify_data($_POST['confirm password']);
if($username !=="" && $email !== "" && $password !==""){

        $query = "INSERT INTO customer(username, email , password)
                    VALUES('$username', '$email', '$password')";
        $result = $conn->query($query);
        if($result){
            isset($_SESSION['username']);
        header("location: login.php?");
    }
    else{
        header("location: registration.php?");
    }
}
    }
}