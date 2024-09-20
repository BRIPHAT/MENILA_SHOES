<?php
include "db_connection.php";
include "validate_data.php";
if($_SERVER['REQUEST_METHOD']== "POST"){
    if(isset($_POST['login'])){
        $username = verify_data($_POST['username']);
        $password = verify_data($_POST['password']);

        $sql = "SELECT * FROM customer
                  WHERE password = '$password'";
        $result = $conn->query($sql);
      header("location: index.php");
    }
    else{
        header("location:login.php");
    }
}
    

